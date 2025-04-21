@extends('layouts.app')

@section('content')
    <div class="card" style="width: 20rem;">
        <div class="card-header text-bold ">
            User: {{ $user->id }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Full Name: {{$user->name}}</li>
            <li class="list-group-item">Email Address: {{$user->email}}</li>
            <li class="list-group-item">Phone Number: {{$user->phone}}</li>
        </ul>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-secondary text-center align-content-center">Cancel</a>
@endsection
