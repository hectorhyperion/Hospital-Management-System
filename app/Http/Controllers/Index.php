<?php

namespace App\Http\Controllers;

use log;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class Index extends Controller
{
    //
    public function index()
    {
        if(Auth::id(2))
        {
            return redirect('admin/index');
        }
       
        //getting doctors from databasbe
        $doctor = Doctor::all();
      
         
        return view('index',compact('doctor'));
    }
}
