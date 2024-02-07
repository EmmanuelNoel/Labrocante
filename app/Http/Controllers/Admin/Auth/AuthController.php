<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showVerificationForm()
    {
        return view('admin.auth.login');
    }

    public function showforgotPasswordForm(){
        return view('admin.auth.forgotPassword');
    }

    public function storeData(Request $request){

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($credentials) && ( Auth::user()->roles->contains('nom', 'superAdmin')
        || Auth::user()->roles->contains('nom', 'administrateur')) ){

            return redirect()->intended(route('admin.dashboard'));
        } else {

            return redirect()->back()->with('error', 'Identifiants incorrects.');
        }

    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
