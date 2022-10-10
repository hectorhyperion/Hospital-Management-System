<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use log;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Notification;

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

    //getting all doctors from data base
    public function allDoctors(){
        $data = Doctor::all();
        return view('admin.doctors', compact('data'));
    }
    //updating doctors data
    public function updateDoctors(Doctor $id, Request $request)
    {
       $formFields = $request->validate([
            'name'=>'required|min:3',
                'phone'=>'required',
                'room_no'=>'required',
                'speciality'=>'required'
       ]);
       $id->update($formFields);
       return back()->with('message','Doctor Data Updated Successfully');
    }
    //deleting dctors data
    public function deleteDoctor(Doctor $id)
    {
        $id->delete();
        return back()->with('error', 'Doctor Deleted Sucessfully');
    }
    //getting all appointments from database
    public function adminAppointmentView()
    {
        $data = Appointment::all();
       return view('admin.showAppointment',compact('data'));

    }

    //storing speciality
    public function storespeciality(Request $request){
            $data = $request->validate([
                'speciality'=> 'required|min:3'
            ]);
            DB::table('specialities')->insert($data);
            return redirect()->back()->with('message',' Update Successful');

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
    //send appointment mail
    public function mailView($id)
    {
        $data = Appointment::find($id);
        return view('admin.email_view',compact('data'));
    }
    //sending email
    public function sendmail(Request $request,$id)
    {
        $data= Appointment::find($id);
        $details= $request->validate([
            'greeting'=>'required',
            'body'=>'required',
            'actiontext'=>'required',
            'actionurl'=>'required',
            'endpart' =>'required'
            ]);
            Notification::Send($data, new SendEmailNotification($details));

            return redirect()->back()->with('message','Email Sent Sucessfully');
    }
}
