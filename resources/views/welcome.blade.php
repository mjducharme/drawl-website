@extends('layouts.wizard')

@section('title')
@lang('messages.WelcomeTitle')
@endsection

@section('content')
	<div class="card w-75 mx-auto">
		<div class="card-body" style="font-size: 14pt;">
			@include('includes.'.$locale.".welcome_message")
		</div>
	</div>
	<div class="text-center">
		<a class="btn btn-outline-secondary btn-lg m-3 w-75" role="button" href="{{ route('consent_forms.create') }}") ;?>@lang('messages.IndexLink')</a>
	</div>
@endsection
