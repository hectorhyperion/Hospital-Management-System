<!-- Appointment Start -->
<div class="container-fluid bg-primary my-5 py-5">
<div class="container py-5">
<div class="row gx-5">
<div class="col-lg-6 mb-5 mb-lg-0">
<div class="mb-4">
<h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
<h1 class="display-4">Make An Appointment For Your Family</h1>
</div>
<p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
<a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
<a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a>
</div>
<div class="col-lg-6">
<div class="bg-white text-center rounded p-5">
<h1 class="mb-4">Book An Appointment</h1>
@if (session()->has('appointment'))
<div class="alert alert-success">
    
    {{session()->get('appointment')}}
   
</div>
@endif
<form action="/appointment" method="POST" for="appointment">
    @csrf
    <div class="row g-3">
        <div class="col-12 col-sm-6">
            <input type="number" name="phone" class="form-control bg-light border-0" value="{{old('phone')}}" placeholder="Your Phone" style="height: 55px;">
            @error('phone')
            <p class="text-danger">
                        {{$message}}
                    </p>
        @enderror
        </div>
        <div class="col-12 col-sm-6">
            <select class="form-select bg-light border-0" name="doctor" style="height: 55px;">
                <option selected>Select Doctor</option>
                @foreach($doctor as $doctor)
                
                <option  value="{{$doctor->name}}">{{$doctor->name}}---{!! $doctor->speciality!!}</option>
                @endforeach
            </select>
            @error('doctor')
            <p class="text-danger">
                        {{$message}}
                    </p>
        @enderror
        </div>
        <div class="col-12 col-sm-6">
            <input type="text" name="name" class="form-control bg-light border-0" value="{{old('name')}}" placeholder="Your Name" style="height: 55px;">
            @error('name')
                <p class="text-danger">
                        {{$message}}
                    </p>
            @enderror
        </div>
        <div class="col-12 col-sm-6">
            <input type="email" name="email" class="form-control bg-light border-0" value="{{old('email')}}" placeholder="Your Email" style="height: 55px;">
            @error('email')
            <p class="text-danger">
                        {{$message}}
                    </p>
        @enderror
        </div>
        <div class="col-12 col-sm-6">
            <div class="date" id="date" data-target-input="nearest">
                <input type="date"
                    class="form-control bg-light border-0 datetimepicker-input"
                    placeholder="Date" data-target="#date" data-toggle="datetimepicker" name="date" style="height: 55px;">
                    @error('date')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="time" id="time" data-target-input="nearest">
                <input type="time"
                    class="form-control bg-light border-0 datetimepicker-input"
                    placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="time" style="height: 55px;">
                    @error('time')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                    
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Appointment End -->
