@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Category</h2>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Name:</label>
            <input name="name" class="form-control" value="{{ $category->name }}" required />
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control">{{ $category->description }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
