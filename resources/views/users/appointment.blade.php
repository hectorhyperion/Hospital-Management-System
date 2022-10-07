<x-layouts>
    @if (session()->has('message'))
    <div class="alert alert-danger">
        
        {{session()->get('message')}}
       
    </div>
    @endif
<h1>' MY APPOINTMENTS</h1>
    <table class="table table-primary table-striped table-hover">
        <tr class="table-warning">
            <th>S/N</th>
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Cancle Appointment</th>
        </tr>
        @foreach ($appointment as $appointment)
            
      
        <tr class="table-info">
                         <td></td>
          
            
            <td>{{$appointment->doctor}}</td>
            <td>{{$appointment->date}}</td>
            <td>{{$appointment->time}}</td>
            <td>{{$appointment->email}}</td>
            <td>{{$appointment->phone}}</td>
            <td>{{$appointment->status}}</td>
            
            <td><a href="/cancelAppointment/{{$appointment->id}}" onclick="return confirm('are you sure you want to cancel your Appointment?')" class="btn btn-danger">Cancel</a></td>
        </tr>
      
          @endforeach 
    </table>
</x-layouts>