<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
           
        $data = $request->all();

        $createUser = $this->create($data);
  
        $token = Str::random(64);
  
        if(UserVerify::create(['user_id' => $createUser->id, 'token' => $token ])){
            $mailSent = Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Email Verification Mail');
            });
            if($mailSent){
                Alert::success('Account created Successfully', 'Check your email and veify account!');
                return redirect("login");
            }else{
                Alert::error('Error', 'Could not send verification details to your email!');
                return redirect("register");
            }
        }else{
            Alert::error('Error', 'Could not generate verification details!');
            return redirect("register");
        }
  
    
        
    }
}