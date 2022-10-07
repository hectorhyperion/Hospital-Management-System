<x-adminLayout>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <form action="/addDoctor" method="POST" enctype="multipart/form-data">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                       
                    </div>
                @endif
                  <div class="col-sm-12 col-xl-6">
               
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">ADD DOCTORS</h6>
            <div class="form-floating mb-3">
                <input type="text" name='name' class="form-control" id="floatingInput"
                    placeholder="Doctor's Name">
                <label for="floatingInput">Doctor Name</label>
                @error('name')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingPassword"
                    placeholder="Password" name="phone">
                <label>Phone</label>
                @error('phone')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword"
                    placeholder="" name="room_no">
                <label>Room No</label>
                @error('room_no')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example" name="speciality">
                    <option selected>---Select</option>
                    <option value="Opitian">Opitian</option>
                    <option value="Surgeon">Surgeon</option>
                    <option value="Physotherapist">Physotherapist</option>
                </select>
                <label for="floatingSelect">speciality</label>
                @error('speciality')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="floatingPassword"placeholder="" name="image">
                <label>Doctor Image</label>
                @error('image')
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