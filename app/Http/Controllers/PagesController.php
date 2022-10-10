<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Usertypes;
use log;

class PagesController extends Controller
{
    //
    //signup view
    public function register()
    {
        
        $users = Usertypes::Where(['id'=>2])->get();
        return view('users.register',compact('users'));
    }
    //login view
    public function login(){
        return view('users.login');
}
//admin index view
public function adminIndex()
{
    if(Auth::id())
    {
        //stop users from accessing admin page
        
        if (Auth::user()->usertype !== '1') 
        {
            return back()->with('error', 'UNAUTHORIZE ACCESS');
        }
        else{
            return view('admin.home');
        }
         
    }
  
}
//user view
public function Dashboard()
{
    if (Auth::user()->usertype == '1') 
    {
        return back()->with('error', 'UNAUTHORIZE ACCESS');
    }
    $doctor = Doctor::all();
    return view('users.dashboard',compact('doctor'));
    
}
//admin add doctor view
public function addDoctor()
{
    $data= Speciality::all();
    return view('admin.addDoctor',compact('data'));
}
//edit doctor view
public function editDoctor(Doctor $id)
{
    return view('admin.editDoctor',$id);
}
//speciality
public function speciality(){
    return view('admin.speciality');
}
//appointmentReschedule
public function reschedule(Appointment $id)
{
        return view('users.reschedule',$id);
}
public function about(){
    return view('about');
}
public function doctor(){
        $doctors=Doctor::all();
    return view('users.doctor',compact('doctors'));
}
//Showspeciality
public function Showspeciality()
{
    $data = Speciality::all();
    return view('admin.Showspeciality',compact('data'))->with('no',1);
}
//Show Editspeciality
public function editspeciality(Speciality $id)
{
    return view('admin.editspeciality',$id);
}
}
