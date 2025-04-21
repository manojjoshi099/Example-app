@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
