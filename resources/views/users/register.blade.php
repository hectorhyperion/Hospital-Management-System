<!DOCTYPE HTML>
<html>
<head>
<title> {{config('app.name','Hospital-Management-System')}} </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{url('assets/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{url('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{url('assets/css/lines.css')}}" rel='stylesheet' type='text/css' />
<link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{url('assets/css/custom.css')}}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{url('assets/js/metisMenu.min.js')}}"></script>
<script src="{{url('assets/js/custom.js')}}"></script>
<!-- Graph JavaScript -->
<script src="{{url('assets/js/d3.v3.js')}}"></script>
<script src="{{url('assets/js/rickshaw.js')}}"></script>
</head>

<body id="login">
  <div class="login-logo">
    <a href="/"><img src="{{url('assets/images/logo.png')}}" alt=""/></a>
  </div>
  <h2 class="form-heading">Register</h2>
  <form class="form-signin app-cam" action="/users" method="POST">
    @csrf
   
      <p>Enter your personal details below</p>
      <div>
        <input type="text" class="form-control1" name="name" placeholder="Full Name" value="{{old('name')}}" autofocus="">
   
      @error('name')
      <p class="alert alert-danger">              {{$message}} </p>
 @enderror
      </div>
      <div>
          <input type="text" class="form-control1" name="address" placeholder="Address"  value="{{old('address')}}" autofocus="">
      @error('address')
      <p class="alert alert-danger">
                     {{$message}}
                  </p>
  @enderror
      </div>
      
      <div>
         <input type="text" class="form-control1" name="email" placeholder="Email"  value="{{old('email')}}" autofocus="">
      @error('email')
      <p class="alert alert-danger">
                     {{$message}}
                  </p>
  @enderror
        </div>    
     <div>
        <input type="text" class="form-control1" name="phone" placeholder="Phone"  value="{{old('phone')}}" autofocus="">
      @error('phone')
      <p class="alert alert-danger">
                     {{$message}}
                  </p>
  @enderror
     </div>
    <div>
        <input type="password" class="form-control1" name="password" placeholder="Password">
      @error('password')
      <p class="alert alert-danger">
                     {{$message}} </p>
  @enderror
    </div>
     
    <div>
       <input type="password" class="form-control1" name="password_confirmation" placeholder="Re-type Password">
      @error('password_confirmation')
      <p class="text-red-500 text-xs mt-1">
                     {{$message}}
                  </p>
  @enderror
    </div>
     
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="/login">
              Login
          </a>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy;  All Rights Reserved |<a href="" target="_blank"></a> </p>
   </div>
</body>
</html>
