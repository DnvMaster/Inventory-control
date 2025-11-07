<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;


class AdminController extends Controller
{
    public function adminLogin(Request $request)
    {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $verificationCode = random_int('100000,999999');
            session(['verification_code' => $verificationCode, 'user_id' => $user->id]);
            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));
            Auth::logout();
            return redirect()->route('custom.verification.form')->with('status','Проверочный код отправлен на ваш электронный адрес');
        }
        return redirect()->back()->withErrors(['email' => 'Вами были предоставленные неверные учетные данные']);
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
