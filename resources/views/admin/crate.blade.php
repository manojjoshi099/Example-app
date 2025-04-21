@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Add New Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input name="name" class="form-control" required />
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
