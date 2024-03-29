<div class="container-fluid position-relative d-flex p-0">
<!-- Spinner Start -->
<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
<span class="sr-only">Loading...</span>
</div>
</div>
<!-- Spinner End -->


<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
<nav class="navbar bg-secondary navbar-dark">
<a href="/admin/index" class="navbar-brand mx-4 mb-3">
<h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BIOMETRICS</h3>
</a>
<div class="d-flex align-items-center ms-4 mb-4">
<div class="position-relative">
<img class="rounded-circle" src="{{url('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
<div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
</div>
<div class="ms-3">
<h6 class="mb-0">{{auth()->user()->name}}</h6>
<span>Admin</span>
</div>
</div>
<div class="navbar-nav w-100">
<a href="/admin/index" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

<a href="/speciality" class="nav-item nav-link" ><i class="fa fa-laptop me-2"></i>ADD Speciality</a>
<a href="/Showspeciality" class="nav-item nav-link" ><i class="fa fa-laptop me-2"></i>Speciality</a>

<a href="/admin/addDoctor" class="nav-link"><i class="fa fa-plus"></i> Add Doctors</a>

<a href="/adminAppointmentView" class="nav-item nav-link"><i class="fa fa-calendar-check me-2"></i>Appointment</a>

<a href="/allDoctors" class="nav-item nav-link"><i class="fa fa-user me-2"></i>All Doctors</a>

<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Verification</a>
<div class="dropdown-menu bg-transparent border-0">
<a href="/register" class="dropdown-item">Sign In</a>
<a href="/login" class="dropdown-item">Sign Up</a>

</div>
</div>
</div>
</nav>
</div>
<!-- Sidebar End -->
<div class="content">
<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
<h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
</a>
<a href="#" class="sidebar-toggler flex-shrink-0">
<i class="fa fa-bars"></i>
</a>
<form class="d-none d-md-flex ms-4">
<input class="form-control bg-dark border-0" type="search" placeholder="Search">
</form>
<div class="navbar-nav align-items-center ms-auto">

<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
<img class="rounded-circle me-lg-2" src="{{url('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
<span class="d-none d-lg-inline-flex">{{auth()->user()->name}}</span>
</a>
<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
<a href="#" class="dropdown-item">My Profile</a>
<a href="#" class="dropdown-item">Settings</a>
<a href="#" class="dropdown-item">
<form class="" method="POST" action="/logout">
@csrf
<button class="btn btn-default" type="submit">
Logout
</button>
</form>
</a>
</div>
</div>
</div>
</nav>
<!-- Navbar End -->