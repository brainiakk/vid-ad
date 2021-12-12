<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Ads Manager</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/superAdmin/assets/images/favicon.jpg') }}" />
<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<!-- css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/superAdmin/assets/css/style.css') }}" />
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{ asset('assets/superAdmin/assets/images/pre-loader/loader-01.svg') }}" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header start-->

<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('assets/superAdmin/assets/images/logo.png') }}" alt="Ads Manager" ></a>
    <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('assets/superAdmin/assets/images/logo.png') }}" alt="AM"></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="javascript:void(0);"></a>
        <div class="search-box not-click">
          <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
        </div>
      </div>
    </li>
  </ul>
  <!-- top bar right -->
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="{{ auth()->user()->image ?? asset('assets/superAdmin/assets/images/profile-avatar.png') }}" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0">{{ auth()->user()->name }}</h5>
              <span>{{ auth()->user()->email }}</span>
            </div>
          </div>
        </div>
        <a class="dropdown-item logout-btn" href="#"><i class="text-danger ti-unlock"></i>Logout</a>
        <form action="{{ url('logout') }}" method="POST">
            @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

<!--=================================
 Main content -->

 
<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="@can('moderator') {{ route('moderator.index') }} @else {{ route('super-admin') }} @endcan">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboards</span></div><div class="clearfix"></div>
          </a>
        </li>
        <!-- menu title -->
{{--        @if(auth()->user()->role == 'super_admin')--}}
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#campaigns">
            <div class="pull-left"><i class="ti-layout-media-overlay"></i><span class="right-nav-text">Campaigns</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="campaigns" class="collapse" data-parent="#sidebarnav">
            @can('moderator')
            <li> <a href="{{ route('moderator.campaigns.pending') }}"> Pending </a> </li>
            <li> <a href="{{ route('moderator.campaigns.index') }}"> List </a> </li>
            <li> <a href="{{ route('moderator.campaigns.create') }}">Create</a> </li>
            @else
            <li> <a href="{{ route('campaigns.index') }}"> List </a> </li>
            <li> <a href="{{ route('campaigns.create') }}">Create</a> </li>
            @endcan
          </ul>
        </li>
{{--        @endif--}}
        <li>
          <a href="{{ route('video-platform') }}">
            <div class="pull-left"><i class="ti-layout-media-overlay-alt"></i><span class="right-nav-text">Videos Platform</span></div><div class="clearfix"></div>
          </a>
        </li>
        </ul>
      </div>
    </div>

<!-- Left Sidebar End-->

 <!--=================================
wrapper -->

    <div class="content-wrapper">

        @yield('content')

    </div>
  </div>
 </div>
</div>
@stack('reject-ad')

<!-- jquery -->
<script src="{{ asset('assets/superAdmin/assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- plugins-jquery -->
<script src="{{ asset('assets/superAdmin/assets/js/plugins-jquery.js') }}"></script>

<!-- plugin_path -->
<script>var plugin_path = "{{ asset('assets/superAdmin/assets/js') }}";</script>

<!-- chart -->
<script src="{{ asset('assets/superAdmin/assets/js/chart-init.js') }}"></script>

<!-- calendar -->
<script src="{{ asset('assets/superAdmin/assets/js/calendar.init.js') }}"></script>

<!-- charts sparkline -->
<script src="{{ asset('assets/superAdmin/assets/js/sparkline.init.js') }}"></script>

<!-- charts morris -->
<script src="{{ asset('assets/superAdmin/assets/js/morris.init.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('assets/superAdmin/assets/js/datepicker.js') }}"></script>

<!-- sweetalert2 -->
<script src="{{ asset('assets/superAdmin/assets/js/sweetalert2.js') }}"></script>

<!-- toastr -->
<script src="{{ asset('assets/superAdmin/assets/js/toastr.js') }}"></script>

<!-- validation -->
<script src="{{ asset('assets/superAdmin/assets/js/validation.js') }}"></script>

<!-- lobilist -->
<script src="{{ asset('assets/superAdmin/assets/js/lobilist.js') }}"></script>

<!-- custom -->
<script src="{{ asset('assets/superAdmin/assets/js/custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.logout-btn').on('click', function (e) {
            e.preventDefault();

            $(this).siblings('form').submit();
        });
    });
</script>

@yield('scripts')

</body>
</html>