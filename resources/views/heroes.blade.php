@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($users->chunk(2) as $userSet)
    <div class="row">
        @foreach($userSet as $user)
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ route('profile', $user->username) }}">{{ $user->name }}</a></div>

                <div class="panel-body">
                    {{ $user->username }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection
