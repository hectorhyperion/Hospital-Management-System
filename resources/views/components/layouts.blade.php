 <!DOCTYPE HTML>
<html>
<head>
<title>Hospital-Management-System</title>
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
<body>
    <div id="wrapper">
    @include('inc.nav')

        {{$slot}}

    </div>
  
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>

 
</body>
</html>