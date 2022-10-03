<?php

namespace App\Http\Controllers;

use log;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //insert doctor form data into database table
    public function store(Request $request)
    {
        $formFields = $request->validate([
                'name'=>'required|min:3',
                'phone'=>'required',
                'room_no'=>'required',
                'speciality'=>'required'
                ]);
                if ($request->hasFile('image'))
                 {
                    $formFields['image']=$request->file('image')->store('images', 'public');
                }
               DB::table('doctors')->insert($formFields);

               return redirect()->back()->with('message', 'Doctor Details Saved Successfully');
    }
}
