<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
	<meta name="author" content="Pike Web Development - https://www.pikephp.com">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

</head>

<body class="adminbody">

	<div id="main">

		<!-- top bar navigation -->
		@include('admin.layout.topbar')
		<!-- End Navigation -->


		<!-- Left Sidebar -->
		@include('admin.layout.sidebar')
		<!-- End Sidebar -->


		<div class="content-page">

			<!-- Start content -->
				@yield('content')
			<!-- END content -->

		</div>
		<!-- END content-page -->

		@include('admin.layout.footer')

	</div>

	<script src="{{ asset('js/all.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>