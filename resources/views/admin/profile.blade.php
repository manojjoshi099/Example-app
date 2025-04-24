@extends('layouts.sidebar')
@section('content')

<div class="container mt-5"></div>
    <div class="sidebar-header">
        <h4>Profile</h4>
        <p>Manage your profile settings</p>

    </div>
    <div class="sidebar-nav bg-dark text-white">
        <a href="{{ route('admin.profile') }}">
            <i class="fas fa-user"></i> Details
            {{-- @auth('web') {{ Auth::user()->name }} @else Profile    @endauth --}}
            <div class="card " style="width: 20rem;  ">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item bg-dark text-white">Full Name: {{Auth::user()->name}}</li>
                    <li class="list-group-item bg-dark text-white">Email Address: {{Auth::user()->email}}</li>
                    <li class="list-group-item bg-dark text-white">Phone Number: {{Auth::user()->phone}}</li>
                    <li class="list-group-item bg-dark text-white">Role: {{Auth::user()->role}}</li>
                </ul>
            </div>
        </a>

        <a href="{{ route('admin.logout') }}">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</div>

@endsection