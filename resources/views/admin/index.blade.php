{{-- @extends('layouts.sidebar')
@section('title', 'Admin Dashboard')
@section('sidebar')

@section('content')
<div class="container mt-4">
    <h2>All Categories</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-2">Add Category</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Description</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
