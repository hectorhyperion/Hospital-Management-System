<x-adminLayout>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <form action="/storespeciality" method="POST" enctype="multipart/form-data">
                @csrf

               
                  <div class="col-sm-12 col-xl-6">
               
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">ADD Speciality</h6>
             @if (session()->has('message'))
                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                       
                    </div>
                @endif
            <div class="form-floating mb-3">
                <input type="text" name='speciality' class="form-control" id="floatingInput">
                <label for="floatingInput">Speciality</label>
                @error('speciality')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            
            </div>
           
            
            <div class="form-floating mb-3">
                   
                    <button type="submit"  class="btn btn-outline-primary m-2">ADD</button>

            </div>
          </div>
    </form>
    </div>
    </div>
    </div>
</x-adminLayout>