<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    	@yield('seo')

		<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />


	</head>
	<body>
		<div class="container">
			{{--<br />--}}
			<hr/>
			@include('nav')

			@yield('content')

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	</body>
</html>