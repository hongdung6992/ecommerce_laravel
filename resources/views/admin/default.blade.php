<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
	<meta name="author" content="Pike Web Development - https://www.pikephp.com">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="stylesheet" href="{{ mix('css/all.css') }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/all.js') }}" defer></script>
	<script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="adminbody">
	<div id="main">

		<!-- top bar navigation -->
		@include('admin.partials.topbar')

		<!-- Left Sidebar -->
		@include('admin.partials.sidebar')

		<div class="content-page">
			@yield('content')
		</div>

		@include('admin.partials.footer')

	</div>
</body>
</html>