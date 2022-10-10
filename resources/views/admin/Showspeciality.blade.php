<x-adminLayout>
    <div class="container-fluid  pt-4 px-4 ">
    <div class="col-12">
        <div class=" rounded h-100 p-4">
            @if (session()->has('error'))
            <div class="alert alert-info">
                
                {{session()->get('error')}}
               
            </div>
        @endif
            <table class="table table-primary table-striped table-hover">
                <tr class="table-light">
                    <th>S/N</th>
                    
                    
                    <th>Speciality</th>
                   <th>Eidt</th>
                   <th>Delete</th>
                
                </tr>
                @foreach ($data as $doc)
                    
              
                <tr class="table-warning">
                      <td>{{$no++}}</td>
                  
                    <td>{{$doc->speciality}}</td>
                   
                    <td ><a href="/editspeciality/{{$doc->id}}" class="btn btn-info"><i class="fa fa-pen"></i>Edit</a></td>
                    <td onclick="return confirm('are you sure, you want to delete this?')"><form action="/removepeciality/{{$doc->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </form></td>
                  
                </tr>
              
                  @endforeach 
            </table>
            
        </div>
    </div>
    </div>
</x-adminLayout>