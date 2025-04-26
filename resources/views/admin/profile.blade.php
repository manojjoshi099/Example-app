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

    {{-- <div class="container mt-4">
        <h2>Edit User</h2>
        <form action="{{ route('users.update', Auth::user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Role" class="form-label">User Role:</label>
                <select name="role" class="form-select" required>
                    <option value="" disabled>Select user role</option>
                    <option value="admin" {{ Auth::user()->role == 'admin' ? 'selected' : '' }}>admin</option>
                    <option value="user" {{ Auth::user()->role == 'user' ? 'selected' : '' }}>user</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div> --}}
</div>

@endsection