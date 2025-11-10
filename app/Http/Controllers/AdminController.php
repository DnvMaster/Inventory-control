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
        return redirect()->back()->withErrors(['email' => 'Предоставленны неверные учетные данные']);
    }

    public function showVerification()
    {
        return view('auth.verify');
    }

    public function verificationVerify(Request $request)
    {
        $request->validate(['code'=>'required|numeric']);
        if($request->code == session('verification_code')) {
            Auth::loginUsingId(session('user_id'));
            session()->forget(['verification_code','user_id']);
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors(['code'=>'Неверный код']);
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        return view('admin.admin_profile', compact('profile'));
    }

    public function profileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;

        $oldPhotoPath = $data->photo;
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images/'),$filename);
            $data->photo = $filename;
            if($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
        $data->save();

        $notification = array(
            'message' => 'Профиль успешно обновлён.',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function adminPasswordUpdate(Request $request)
    {
        //
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/user_images/'.$oldPhotoPath);
        if(file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}
