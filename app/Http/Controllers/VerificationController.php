<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Illuminate\Validation\ValidationException;

class VerificationController extends Controller
{
    //

    public function showVerificationForm(Request $request, $id)
    {
        return view('otpVerification.otpVerification', compact('id'));
    }


    public function sendOtpCode(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $otp = new Otp();
        $identifier = $user->id;
        $otpCode = $otp->generate($identifier, 'numeric', 4, 15);
        $CodeOtp = $otpCode->token;

        try {
            Mail::to($user->email)
                ->send(new SendOtp($CodeOtp));
                return redirect()->back();

        } catch (\Exception $e) {

            throw ValidationException::withMessages(['email' => 'Erreur lors de l\'envoi du code OTP']);
        }
    }

    public function valideOtpCode(Request $request)
    {
        $code = null;
        $otp = $request->input('otp');
        //  dd($otp);
        foreach ($otp as $number) {
            $code .= $number;
        }
        try {
            $identifier = ModelsOtp::where('token', $code)->first();
            if (!$identifier) {
                return back()->with('status', 'Code incorrect');
            } else {
                $otp = new Otp();
                $identifier = $identifier->identifier;
                $otpVerify =  $otp->validate($identifier, $code);

                if ($otpVerify->status === true) {
                    $user = User::findOrFail($identifier);
                    $user->email_verified_at = now();
                    $user->status = true;
                    $user->save();
                }

                else{
                    return back()->with('status', '' .$otpVerify->message);
                }
            }

            return redirect(RouteServiceProvider::HOME);
        } catch (Exception $e) {
            //   return $this->respondWithMessage('' . $e->getMessage());
            return back()->with('status', '' . $e->getMessage());
        }
    }
}
