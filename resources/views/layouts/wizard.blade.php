<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.modal-wizard.min.js') }}"></script>
	<script src="https://kit.fontawesome.com/535513208d.js" crossorigin="anonymous"></script>
    @yield('extra-headers')
<title>
	@lang('messages.IndexTitle') &nbsp;»&nbsp; @yield('title')
</title>
</head>
<body>
    @yield('body-begin')
	<nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand m1 h1">
			@lang('messages.IndexTitle') &nbsp;»&nbsp; @yield('title')
		</span>
	</nav>
	<br/>
	@yield('content')
</body>
@yield('after-body')
</html>
