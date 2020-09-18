<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.modal-wizard.min.js') }}"></script>
    @yield('extra-headers')

<meta charset="UTF-8">

<title>
	@lang('messages.IndexTitle') &nbsp;>&nbsp; @yield('title')
</title>
</head>
<body>
    @yield('body-begin')
	<nav class="navbar navbar-dark bg-primary" style="z-index: 1;">
        <span class="navbar-brand m1 h1">
			@lang('messages.IndexTitle') &nbsp;>&nbsp; @yield('title')
		</span>
	</nav>
	<br/>
	@yield('content')
</body>
@yield('after-body')
</html>
