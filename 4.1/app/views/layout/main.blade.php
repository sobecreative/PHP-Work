<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" href="../js/d3/d3/d3.js"></script>
</head>
<body>
	@include('layout.navigation')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>
