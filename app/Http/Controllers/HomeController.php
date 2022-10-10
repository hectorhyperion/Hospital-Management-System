<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class HomeController extends Controller
{
    //book an appintment
    public function appointment(Request $request)
    {
       $formFields = new Appointment;

        $status='In progress';
        
                //running validation
       $formFields = $request->validate(
        [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'doctor'=>'required',
            'date'=>'required',
            'phone'=>'required|min:7|max:11',
            'time'=>'required',
        ]);
         //    dd($formFields);
     //   $formFields = $status;

          $formFields['user_id'] = auth()->id();
         $formFields['status'] = $status;
       DB::table('appointments')->insert($formFields);
        return redirect()->back()->with('appointment', 'Appointment Booked successfully');

    }
    //show appointment view
public function viewAppointment()
{
    $userid= Auth::user()->id;
    $appointment = Appointment::where('user_id',$userid)->get();
    return view('users.appointment',compact('appointment'))->with('no',1);

}
public function cancelAppointment($id)
{
    $data = Appointment::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Appointment Cancel Successfully');
}
///appointmentReschedule
public function appointmentReschedule( Appointment $id, Request $request)
{
    $formFields = $request->validate([
        'time'=>'required',
            'date'=>'required',
            
   ]);
   $id->update($formFields);
       
        return redirect('/viewAppointment')->with('error', 'Appointment Reschedule successfully');
}
}

