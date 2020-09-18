@extends('layouts.wizard')

@section('title')
@lang('messages.ConsentTitle')
@endsection

@section('content')
<div class="card w-75 mx-auto">
    <div class="card-body p-3" style="font-size: 12pt; overflow-y: auto; max-height: 275px">
        @include('includes.'.$locale.".consent_text")
    </div>
</div>
<br />
<form action="{{ route('consent_forms.store') }}" method="post">
    @csrf
    <div class="container w-75 px-2">
        <div class="row">
            <div class="col">
                <h4>@lang('messages.ConsentParticipation')</h4>
                <p>@include('includes.'.$locale.".consent_participation_text")</p>

                <div class="input-group mb-3 w-75 mx-auto">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@lang('messages.ConsentName')</label>
                        </span>
                    </div>
                    <input type="text" id="name" name="user_name" class="form-control" required>
                </div>
                <div class="input-group mb-3 w-75 mx-auto">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@lang('messages.ConsentEmail')</span>
                    </div>
                    <input type="email" id="email" name="user_email" class="form-control" required>
                </div>
                <div class="form-check w-75 mx-auto">
                    <input class="form-check-input" id="check_1" type="checkbox" name="consent_box"
                        onchange="document.getElementById('c_button').disabled = !this.checked" required>
                    <label class="form-check-label" for="check_1">@lang('messages.ConsentParticipationConsent')</label>
                </div>
            </div>
            <div class="col">
                <h4>@lang('messages.ConsentPublication')</h4>
                <p>@include('includes.'.$locale.".consent_publication_text")</p>
                <div class="form-check w-75 mx-auto">
                    <input class="form-check-input" id="check_2" type="checkbox" name="share_box">
                    <label class="form-check-label" for="check_2">@lang('messages.ConsentPublicationConsent')</label>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" id="c_button" class="btn btn-primary" disabled>
            @lang('messages.Submit')</button>
    </div>
</form>

@endsection
