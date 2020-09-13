@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::user()->authorized && Gate::allows('manage-data'))
                <div class="card">
                    <div class="card-header">Consent Form Details</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                         @endif

                        <table width="100%">
                            <tr><th>ID</th><td>{{ $consent_form->id }}</td></tr>
                            <tr><th>Name</th><td>{{ $consent_form->name }}</td></tr>
                            <tr><th>Email</th><td>{{ $consent_form->email }}</td></tr>
                            <tr><th>Language</th><td>{{ $consent_form->language }}</td></tr>
                            <tr><th>Publication Permission</th><td>{{ $consent_form->public ? "granted" : "withheld" }}</td></tr>
                            <tr><th>Date</th><td>{{ $consent_form->created_at }}</td></tr>
                        </table>
                    </div>
                </div>
                <br/>
                @foreach ($demographic_questionnaires as $demographic_questionnaire)
                    <div class="card">
                    <div class="card-header">Questionnaire {{ $demographic_questionnaire->id }} Details
                    <div class="float-right"><a href="{{ route ('demographic_questionnaires.destroy-get', $demographic_questionnaire->id) }}" class="btn btn-info" title="Delete this questionnaire" onclick="return confirm('Are you sure you wish to delete this questionnaire? This cannot be undone!')"><i class="fas fa-trash-alt"></i></a></div>
                    </div>
                        <div class="card-body">
                            <table width="100%">
                                @foreach ($demographic_questionnaire->toArray() as $key => $demo)
                                    @if ($key != "id" && $key != "consent_form_id" && $key != "updated_at" && $key != "created_at")
                                    <tr><th>{{ $key }}</th><td>{{ $demo }}</td></tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <br/>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
