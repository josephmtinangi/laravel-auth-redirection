@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1>{{ $user->name }}</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <strong>Name:</strong> {{ $user->name }} <br>
            <strong>Email</strong> {{ $user->email }} <br>
            <strong>Username</strong> {{ $user->username }} <br>
            <strong>Joined</strong> {{ $user->created_at->diffForHumans() }} <br>
        </div>
    </div>
</div>
@endsection
