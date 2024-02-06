<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $role = Role::where('nom', 'utilisateur')->first();

        $user->roles()->attach($role->id);

        $otp = new Otp();
        $otpCode = $otp->generate($user->id, 'numeric', 4, 15);
        $CodeOtp = $otpCode->token;

        try {
            Mail::to($user->email)
                ->send(new SendOtp($CodeOtp));
                event(new Registered($user));

                return redirect()->route('verify-otp', ['id' => $user->id]);

        } catch (\Exception $e) {

            throw ValidationException::withMessages(['email' => 'Erreur lors de l\'envoi du code OTP']);
        }

    }
}
