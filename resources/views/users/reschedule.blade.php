<x-layouts>

        <!-- Appointment Start -->
<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
    <div class="row gx-5">
   
    <div class="col-lg-6">
    <div class="bg-white text-center rounded p-5">
    <h1 class="mb-4">Reschedule An Appointment</h1>
    <form action="/appointmentReschedule/{{$id}}" method="POST" for="appointment">
        @csrf
         <div class="row g-3">
           
         
          
            <div class="col-12 col-sm-6">
                <div class="date" id="date" data-target-input="nearest">
                    <input type="date"
                        class="form-control bg-light border-0 datetimepicker-input"
                        placeholder="Date" data-target="#date" data-toggle="datetimepicker" value="{{$date}}" name="date" style="height: 55px;"> </div>
                        @error('date')
                        {{$message}}
                                                    
                        @enderror
            </div>
            <div class="col-12 col-sm-6">
                <div class="time" id="time" data-target-input="nearest">
                    <input type="time"
                        class="form-control bg-light border-0 datetimepicker-input"
                        placeholder="Time" data-target="#time" value="{{$time}}" data-toggle="datetimepicker" name="time" style="height: 55px;">
                                    </div>
                                    @error('time')
                                    {{$message}}
                                                                
                                    @enderror
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Reschedule</button>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</x-layouts>