@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br/>
                    {{ Auth::user()->authorized ? 'You are authorized to access data.' : 'You are not authorized to access data - another administrator must authorize you!' }}
                </div>
            </div>
            <br/>
            <div class="card">
                <div class="card-header">User Authorization</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    The following users require authorization, or deletion if they should not have access:
                    <table width="100%">
                        </tr><th>ID</th><th>Name</th><th>Email</th></tr>
                        @foreach ($users as $user)
                            <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
