<?php

namespace App\Http\Controllers;

use log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\PagesController;

class UserController extends Controller
{
    
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
       if (auth()->id('usertype') ==1 )
        {
          return redirect('/admin/index')->with('message','User Created and Logged in');
       }
       return redirect('/dashboard')->with('message','User Created and Logged in');
    }
/**
* Handle account registration request
* 
* @param RegisterRequest $request
* 
* @return \Illuminate\Http\Response
*/
public function register(RegisterRequest $request) 
{
   $user = User::create($request->validated());

   event(new Registered($user));

   auth()->login($user);

   return redirect('/')->with('success', "Account successfully registered.");
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
            if (Auth::id())
            {
                 if(Auth::user()->usertype=='0')
                 {
                    return redirect('Dashboard');
                 }
                 else{
                    return redirect('admin/index');
                 }
           }
          //  return redirect('/')->with('message','You Are Now Logged In');
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
