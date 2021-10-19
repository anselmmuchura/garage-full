<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserVerify;
use App\Models\User;
use Mail;
use Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ResetPasswordController extends Controller
{
    public function resetlink(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            Alert::warning('failed', 'Failed! email is not registered.');
            return redirect()->back();
        }

        $token = Str::random(60);

        UserVerify::create(['user_id' => $user->id, 'token' => $token ]);

        $mailSent = Mail::send('email.emailPasswordReset', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Password Reset');
        });

        if(Mail::failures() != 0) {
            Alert::success('Password reset link sent to your email', '');
            return redirect()->route('login')->with('success', 'Success! password reset link has been sent to your email');
        }
        return back()->with('failed', 'Failed! there is some issue with email provider');
    }

    public function confirmReset($token){
        $verifyUser = UserVerify::where('token', $token)->first();
        $verifyUser->user->is_email_verified = 1;
        $verifyUser->user->save();

        $userId = $verifyUser->user->id;
        
        if($verifyUser->exists() === true){
            return redirect()->route('password.reset', $userId);
        }
        
    }
    public function resetPage(Int $id)
    {
        $user = User::where('id', $id)->first();

        return view('auth.passwords.resetForm', ['email' => $user->email]);
    }

    public function resetPost(Request $request){
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $data = $request->all();

        $user = User::where('email', $request->email)->first();

        $user->password = Hash::make($data['password']);

        $user->save();

        Alert::success('Success', 'Password Reset successful');
        return redirect()->route('login');
    }
}
