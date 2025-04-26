@extends('layouts.sidebar')

@section('content')
    <div class="container mt-5">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Add Button --}}
        @if (!isset($category))
            <div class="mb-3 text-end">
                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#categoryForm">
                    <i class="fas fa-add"></i> Add Category
                </button>
            </div>
        @endif

        {{-- Category Form --}}
        <div class="card mb-4 collapse {{ isset($category) ? 'show' : '' }}" id="categoryForm">
            <div class="card-header">
                {{ isset($category) ? 'Edit Category' : 'Add Category' }}
            </div>
            <div class="card-body">
                <form
                    action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($category))
                        @method('PUT')
                    @endif

                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required
                            value="{{ $category->name ?? old('name') }}">
                    </div>

                    <div>
                        <label>Image:</label>
                        <input type="file" id="image" class="form-control" name="image"
                            value="{{ $category->image ?? old('image') }}">
                        @if (isset($category) && $category->image)
                            <p class="mt-2">Current Image:</p>
                            <img src="{{ asset('storage/' . $category->image) }}" alt="Current Image" width="80">
                        @endif
                    </div>

                    <div class="form-group mb-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $category->description ?? old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-2">
                        <label>Price (in $)</label>
                        <input type="numeric" name="price" class="form-control" required
                            value="{{ $category->price ?? old('price') }}">
                    </div>

                    <button type="submit" class="btn btn-success mt-2">
                        {{ isset($category) ? 'Update' : 'Add' }}
                    </button>

                    @if (isset($category))
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                    @endif
                </form>
            </div>
        </div>

        {{-- Categories Table --}}
        <div class="card">
            <div class="card-header">All Categories</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Description</th>
                            <th>Price(in $)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $key => $cat)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>
                                    @if ($cat->image)
                                        <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}"
                                            width="50" height="50">
                                    @else
                                        <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                            height="50">
                                    @endif
                                </td>
                                <td>{{ $cat->description }}</td>
                                <td>{{ $cat->price }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.edit', $cat->id) }}" class="btn btn-sm btn-primary"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i
                                                class="fas fa-remove"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
