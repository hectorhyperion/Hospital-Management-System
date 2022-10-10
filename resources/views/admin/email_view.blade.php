<x-adminLayout>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <form action="/sendmail/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf

               
                  <div class="col-sm-12 col-xl-6">
               
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Send Email</h6>
             @if (session()->has('message'))
                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                       
                    </div>
                @endif
            <div class="form-floating mb-3">
                <input type="text" name='greeting' value="Hello {{$data->name}}" class="form-control" id="floatingInput"
                    placeholder="Doctor's Name">
                <label for="floatingInput">Greetings</label>
                @error('greeting')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="body" placeholder="Leave a message here"
                    id="floatingTextarea" style="height: 150px;"></textarea>
                <label for="floatingTextarea">Body</label>
           
                @error('body')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword"
                    placeholder="" name="actiontext">
                <label>Action Text</label>
                @error('actiontext')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword"
                    placeholder="" name="actionurl">
                <label>Action url</label>
                @error('actionurl')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword"
                    placeholder="" name="endpart">
                <label>End Part</label>
                @error('endpart')
                <div class="text-danger sm-500">
                     {{$message}}
                </div>
                   
                @enderror
            </div>

        
            <div class="form-floating mb-3">
                   
                    <button type="submit"  class="btn btn-outline-primary m-2">Send Mail</button>

            </div>
          </div>
    </form>
    </div>
    </div>
    </div>
</x-adminLayout>