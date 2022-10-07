<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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
               DB::table('doctors')->save($formFields);

               return redirect()->back()->with('message', 'Doctor Details Saved Successfully');
    }
    //gwetting all appointments from database
    public function adminAppointmentView()
    {
        $data = Appointment::all();
       return view('admin.showAppointment',compact('data'));
    }
    //approve appointments
    public function approved($id)
    {
        $data= Appointment::findorfail($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }
    //cancel appointments
    public function cancelled($id)
    {
        $data= Appointment::findorfail($id);
        $data->status = 'cancelled';
        $data->save();
        return redirect()->back();
    }
}
