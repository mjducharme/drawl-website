@extends('layouts.wizard')

@section('title')
@lang('messages.SelectLanguageTitle')
@endsection

@section('content')
	<div class="text-center">
	@foreach ($languages as $language)
		<a class="btn btn-outline-secondary btn-lg m-3" role="button" style="width: 250px;" href='{{ route('welcome.show', $language["id"]) }}'>{{ $language["name"] }}</a><br/>
	@endforeach
	</div>
@endsection
