<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<style>
		h4{
			margin: 0 auto; 
			margin-top: 3%;
			padding: 10px;
			width: 40%;
			border: 1px solid #CCC;
  			border-radius: 1em ;
  			text-align: center;
  		}
  	</style>
<meta charset="UTF-8">
<title>
	{{ config('app.name') }}
</title>
</head>
<body>
	<nav class="navbar navbar-primary bg-primary">
        <span class="navbar-brand mb-0 h1">
			{{ config('app.name') }}
		</span>
	</nav>
	@foreach ($languages as $language)
		<h4><a class=button href='{{ route('welcome.show', $language["id"]) }}'>{{ $language["name"] }}</a></h4>
	@endforeach
</body>
</html>
