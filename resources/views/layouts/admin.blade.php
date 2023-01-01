<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="POS -  Admin panel">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
		<meta name="author" content="dreamhost -  Admin panel">
		<meta name="robots" content="noindex, nofollow">
		<title>@yield('title', config('app.name'))</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- animation CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        @stack('styles')

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		@livewireStyles
		
	</head>
	<body>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			@include('layouts.admin.navbar')
			<!-- Header -->
			
			<!-- Sidebar -->
			@include('layouts.admin.sidebar')
			<!-- /Sidebar -->

			<div class="page-wrapper">
				@yield('content')
			</div>
		</div>
		<!-- /Main Wrapper -->

		@livewireScripts
		
		<!-- jQuery -->
		<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

		<!-- Feather Icon JS -->
		<script src="{{ asset('assets/js/feather.min.js') }}"></script>

		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

		<!-- Datatable JS -->
		<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        @stack('scripts')
		
		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js') }}"></script>

		
		
	</body>
</html>