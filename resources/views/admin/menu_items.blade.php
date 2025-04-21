@extends('layouts.sidebar')
@section('content')
<div class="container mt-5">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Add / Edit Menu Item Form --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editItem) ? route('menu-items.update', $editItem->id) : route('menu-items.store') }}" method="POST">
                @csrf
                @if(isset($editItem))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" name="name" class="form-control" required value="{{ $editItem->name ?? '' }}">
                </div>

                <div class="form-group mt-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $editItem->description ?? '' }}</textarea>
                </div>

                <div class="form-group mt-2">
                    <label>Price(in $)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required value="{{ $editItem->price ?? '' }}">
                </div>

                <button type="submit" class="btn btn-primary mt-3">
                    {{ isset($editItem) ? 'Update' : 'Add' }}
                </button>
            </form>
        </div>
    </div>

    {{-- Menu Items Table --}}
    <div class="card">
        <div class="card-header">All Menu Items</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price(in $)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menuItems as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('menu-items.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('menu-items.destroy', $item->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if(count($menuItems) == 0)
                        <tr>
                            <td colspan="5" class="text-center">No menu items found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
