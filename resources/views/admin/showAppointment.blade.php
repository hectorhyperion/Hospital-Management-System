<x-adminLayout>
    <div class="container-fluid pt-4 px-4 ">
    <div class="col-12">
        <div class=" rounded h-100 p-4">

            <table class="table table-primary table-striped table-hover">
                <tr class="table-light">
                    <th>S/N</th>
                    <th>Paitent Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time</th>
                   <th>Status</th>
                  <th>Approved</th>
                  <th>canceled</th>
                
                </tr>
                @foreach ($data as $appointment)
                    
              
                <tr class="table-warning">
                      <td></td>
                   <td>{{$appointment->name}}</td>
                     <td>{{$appointment->email}}</td>
                    <td>{{$appointment->phone}}</td>
                    <td>{{$appointment->doctor}}</td>
                    <td>{{$appointment->date}}</td>
                    <td>{{$appointment->time}}</td>
                    <td>{{$appointment->status}}</td>
                    <td><a href="/approved/{{$appointment->id}}" class="btn btn-success">Approved</a></td>
                    <td><a href="/cancelled/{{$appointment->id}}" class="btn btn-danger">Cancelled</a></td>
                  
                </tr>
              
                  @endforeach 
            </table>
            
        </div>
    </div>
    </div>
</x-adminLayout>