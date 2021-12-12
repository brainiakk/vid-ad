<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/superAdmin/assets/css/style.css')}}" />
		<link rel="shortcut icon" href="{{asset('assets/superAdmin/assets/images/favicon.JPG')}}" />
		<!-- Font -->
		<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
		<title>@yield('title')</title>
	</head>
	<body>
		<div class="content">
			<div class="container mt-5 login-page">
				<div class="row bg-white p-4 border rounded">
					@yield('content')
				</div>
			</div>
		</div>
		<script src="{{asset('assets/superAdmin/assets/js/jquery-3.3.1.min.js')}}"></script>
		@yield('scripts')
	</body>
</html>