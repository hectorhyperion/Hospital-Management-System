<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    //signup view
    public function register()
    {
        return view('users.register');
    }
    //login view
    public function login(){
        return view('users.login');
}
//admin index view
public function adminIndex()
{
    return view('admin.home');
}

public function Dashboard()
{
  return view('users.dashboard');
}
public function addDoctor()
{
    return view('admin.addDoctor');
}

}
