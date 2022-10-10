<x-layouts>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">OUR LIST OF PROFESSIONAL DOCTORS</h1>
            </div>
            <div class="row g-5">
                @foreach ($doctors as $doctor)
                    
               
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        
                           <img src="{{$doctor->image ? asset('storage/'.$doctor->image): asset('images/no-image.png')}}" alt="" style="object-fit: cover; height:200px; width:150px" height="100px">
                         
                        <h4 class="mb-3">{{$doctor->name}}</h4>
                        <p class="m-0">{{$doctor->speciality}}</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                 @endforeach 
    </div>
    <!-- Services End -->
        </div>
    </div>  
</x-layouts>