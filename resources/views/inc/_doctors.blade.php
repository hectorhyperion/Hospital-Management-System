<!-- Team Start -->
<div class="container-fluid py-5">
<div class="container">
<div class="text-center mx-auto mb-5" style="max-width: 500px;">
<h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
<h1 class="display-4">Qualified Healthcare Professionals</h1>
</div>
@foreach ($doctor as $doctor)
<div class="owl-carousel team-carousel position-relative" style="padding-top: 10px">

<div class="team-item">
<div class="row g-0 bg-light rounded overflow-hidden">
<div class="col-12 col-sm-5 h-100">
<img class="img-fluid h-100" width="250px"  src="{{$doctor->image ? asset('storage/'.$doctor->image): asset('images/no-image.png')}}" style="object-fit: cover;">
</div>
<div class="col-12 col-sm-7 h-100 d-flex flex-column">
<div class="mt-auto p-4">
<h3>{{$doctor->name}}</h3>
<h6 class="fw-normal fst-italic text-primary mb-4">{{$doctor->speciality}}</h6>
<p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
</div>
<div class="d-flex mt-auto border-top p-4">
<a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
<a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
<a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
</div>
</div>
</div>
</div>

</div>
@endforeach
</div>
</div>

<!-- Team End -->
