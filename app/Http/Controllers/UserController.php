<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use log;
class UserController extends Controller
{
    //
    public function register()
    {
        return view('users.register');
    }
    public function store(Request $request)
    {
     $formFields= $request->validate([
            'name' => 'required|min:3',
            'address'=>'required',
            'email' =>['required', 'email', Rule::unique('users','email')],
            'phone' => 'required|min:7|max:11',
            'password' => 'required|confirmed|min:6|max:16'
       ]);
      
       //hash Password
       $formFields['password'] =bcrypt($formFields['password']);
       $user = User::create($formFields);

       //login
       auth()->login($user);
       return redirect('/')->with('message','User Created and Logged in');
    }

    public function login(){
            return view('users.login');
    }
    //user auth
    public function authenticate(Request $request)
    {
       
        $formFields= $request->validate([
              'email' =>['required', 'email'],
            'password' =>'required',
        ]);


        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message','You Are Now Logged In');
            }
            return back()->withErrors(['error'=>'Invalid Credentials']);

    }
    public function logout(Request $request)
    {
       auth()->logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('/')->with('message','Your have Been Logged out');
    }
}
