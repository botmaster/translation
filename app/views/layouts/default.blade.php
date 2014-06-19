<!doctype html>
<html>
	<head>
		@include('includes.head')
	</head>
	<body>

		<header class="navbar navbar-default navbar-fixed-top" role="navigation">
			@include('includes.header')
		</header>

		<div class="container">
			<!-- will be used to show any messages -->
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
			@yield('content')
		</div>

		<footer id="footer">
			@include('includes.footer')
		</footer>
	</body>
</html>