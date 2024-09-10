
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Employee Management System
		</title>
	    <!-- Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>




<div class="wrapper">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="{{asset('admin/img/logo.png')}}" class="img-fluid"/><span>Employee App</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li class="{{request()->routeIs('dashboard') ? 'active':''}} ">
                    <a href="{{route('dashboard')}}" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

		      <div class="small-screen navbar-display">
                <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">notifications</i><span> 4 notification</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                    <li>
                                    <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                    </ul>
                </li>

				<li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                </li>

				 <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">person</i><span>user</span></a>
                </li>

				<li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                </li>
				</div>
                @hasrole('admin')

                <li class="{{request()->is('department*') ? 'active':''}} ">
                    <a href="{{route('department.index')}}">
					<i class="material-icons">apps</i><span>Department</span></a>

                </li>
                <li class="{{request()->is('designation*') ? 'active':''}}">
                    <a href="{{route('designation.index')}}">
					<i class="material-icons">apps</i><span>Designation</span></a>
                </li>
                <li class="{{request()->is('employee*') ? 'active':''}} ">
                    <a href="{{route('employee.index')}}">
                        <i class="material-icons">apps</i><span>Employees</span>
                    </a>

                </li>

				 <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">equalizer</i>


					<span>Leaves</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li class="{{request()->is('leave-request*') ? 'active':''}}">
                            <a href="{{route('leave.admin.index')}}">Leave Requests</a>
                        </li>
                    </ul>
                </li>
				  <li class="{{request()->is('attendance*') ? 'active':''}}">
                    <a href="{{route('attendance.index')}}">
					    <i class="material-icons">extension</i><span>Attendance</span>
                    </a>

                  </li>
				  <li class="{{request()->is('payroll*') ? 'active':''}}">
                    <a href="{{route('payroll.index')}}">
					    <i class="material-icons">extension</i><span>Payroll</span>
                    </a>

                  </li>

				<li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">border_color</i><span>Roles & Permissions</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li class="{{request()->is('role*') ? 'active':''}}">
                            <a href="{{route('users.index')}}">Users</a>
                        </li>
                        <li class="{{request()->is('role*') ? 'active':''}}">
                            <a href="{{route('role.index')}}">role</a>
                        </li>
                        {{-- <li class="{{request()->is('permission*') ? 'active':''}}">
                            <a href="{{route('permission.index')}}">Permissions</a>
                        </li> --}}

                    </ul>
                </li>
                @else
                <li>
                    <a href="#">
					    <i class="material-icons">extension</i><span>Profile</span>
                    </a>
                </li>
                @endhasrole
                @hasrole('user')
                <li class="{{request()->is('leave-request*') ? 'active':''}}">
                    <a href="{{route('leave.store')}}">
					    <i class="material-icons">extension</i><span>Request Leave</span>
                    </a>

                </li>
                @endhasrole
				<li class="dropdown">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
					<i class="material-icons">border_color</i><span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        {{-- <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button> --}}

                        <a class="navbar-brand" href="#"> @yield('title') </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none " id="navbarSupportedContent">
                            <span class="ml-auto">{{ Auth::user()->name }}</span>
                            {{-- <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="material-icons">apps</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="material-icons">person</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="material-icons">settings</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </nav>
            </div>

@yield('content')

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('admin/js/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
@yield('scripts')
<script type="text/javascript">
$(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
           $('#sidebar').toggleClass('active');
           $('#content').toggleClass('active');
       });

        $('.more-button,.body-overlay').on('click', function () {
           $('#sidebar,.body-overlay').toggleClass('show-nav');
       });

   });

</script>
<script type="text/javascript">
    function confirmDelete(){
      return confirm("Are you sure you want to delete this ???")
    }
</script>

</body>

</html>
