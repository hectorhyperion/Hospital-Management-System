<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use log;

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
//user view
public function Dashboard()
{
    $doctor = Doctor::all();
  return view('users.dashboard',compact('doctor'));
}
//admin add doctor view
public function addDoctor()
{
    return view('admin.addDoctor');
}


}
