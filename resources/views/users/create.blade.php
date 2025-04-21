@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter full name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="text" name="phone" class="form-control" required placeholder="Enter phone number">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Profile Image</label>
            <input type="file" name="profile_image" class="form-control" entype="multipart/form-data" required placeholder="Upload profile image">
        </div>       
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
