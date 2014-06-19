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
			@yield('content')
		</div>

		<footer id="footer">
			@include('includes.footer')
		</footer>
	</body>
</html>