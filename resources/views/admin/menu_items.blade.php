@extends('layouts.sidebar')

@section('content')
    <div class="container mt-5">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Add Button --}}
        @if (!isset($editItem))
            <div class="mb-3 text-end">
                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>
        @endif
        {{-- Add / Edit Menu Item Form --}}

        <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
            <div class="card-header">
                {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
            </div>
            <div class="card-body">
                <form
                    action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($editItem))
                        @method('PUT')
                    @endif

                    <div class="form-group mb-2">
                        <label>Item Name</label>
                        <input type="text" name="name" class="form-control" required
                            value="{{ $editItem->name ?? old('name') }}">
                    </div>

                    <div class="form-group mb-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-2">
                        <label>Image:</label>
                        <input type="file" id="image" class="form-control" name="image"
                            value="{{ $editItem->image ?? old('image') }}">
                        @if (isset($editItem) && $editItem->image)
                            <p class="mt-2">Current Image:</p>
                            <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                        @endif
                    </div>

                    <div class="form-group mb-2">
                        <label>Price (in $)</label>
                        <input type="number" name="price" step="0.01" class="form-control" required
                            value="{{ $editItem->price ?? old('price') }}">
                    </div>

                    <button type="submit" class="btn btn-success mt-2">
                        {{ isset($editItem) ? 'Update' : 'Add' }}
                    </button>

                    @if (isset($editItem))
                        <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                    @endif
                </form>
            </div>
        </div>
        {{-- Menu Items Table --}}
        <div class="card">
            <div class="card-header text-center bold text-bg-primary">Fast Food Menu</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price (in $)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menuItems as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                    @else
                                        <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                            height="50">
                                    @endif
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No menu items found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>


        {{-- 🍽️ Explore Our Delicious MenuAuthentic taste crafted with passion.
Starters --}}

{{-- Starter --}}

        @if (!isset($editItem))
            <div class="mb-3 text-end">
                <button class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>
        @endif
        {{-- Add / Edit Menu Item Form --}}
        <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
            <div class="card-header">
                {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
            </div>
            <div class="card-body">
                <form
                    action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($editItem))
                        @method('PUT')
                    @endif

                    <div class="form-group mb-2">
                        <label>Item Name</label>
                        <input type="text" name="name" class="form-control" required
                            value="{{ $editItem->name ?? old('name') }}">
                    </div>

                    <div class="form-group mb-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-2">
                        <label>Image:</label>
                        <input type="file" id="image" class="form-control" name="image"
                            value="{{ $editItem->image ?? old('image') }}">
                        @if (isset($editItem) && $editItem->image)
                            <p class="mt-2">Current Image:</p>
                            <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                        @endif
                    </div>

                    <div class="form-group mb-2">
                        <label>Price (in $)</label>
                        <input type="number" name="price" step="0.01" class="form-control" required
                            value="{{ $editItem->price ?? old('price') }}">
                    </div>

                    <button type="submit" class="btn btn-success mt-2">
                        {{ isset($editItem) ? 'Update' : 'Add' }}
                    </button>

                    @if (isset($editItem))
                        <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                    @endif
                </form>
            </div>
        </div>
        {{-- Menu Items Table --}}
        <div class="card">
            <div class="card-header text-center bold text-bg-primary ">Starters</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price (in $)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menuItems as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                    @else
                                        <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                            height="50">
                                    @endif
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No menu items found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Main Course --}}
    @if (!isset($editItem))
        <div class="mb-3 text-end">
            <button class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
                <i class="fas fa-plus"></i> Add
            </button>
        </div>
    @endif
    {{-- Add / Edit Menu Item Form --}}
    <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
        <div class="card-header">
            {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
        </div>
        <div class="card-body">
            <form
                action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($editItem))
                    @method('PUT')
                @endif

                <div class="form-group mb-2">
                    <label>Item Name</label>
                    <input type="text" name="name" class="form-control" required
                        value="{{ $editItem->name ?? old('name') }}">
                </div>

                <div class="form-group mb-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Image:</label>
                    <input type="file" id="image" class="form-control" name="image"
                        value="{{ $editItem->image ?? old('image') }}">
                    @if (isset($editItem) && $editItem->image)
                        <p class="mt-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label>Price (in $)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required
                        value="{{ $editItem->price ?? old('price') }}">
                </div>

                <button type="submit" class="btn btn-success mt-2">
                    {{ isset($editItem) ? 'Update' : 'Add' }}
                </button>

                @if (isset($editItem))
                    <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                @endif
            </form>
        </div>
    </div>
    {{-- Menu Items Table --}}
    <div class="card">
        <div class="card-header text-center bold text-bg-primary ">Main Course</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price (in $)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuItems as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                @endif
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No menu items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Pizzas --}}
    @if (!isset($editItem))
    <div class="mb-3 text-end">
        <button class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
            <i class="fas fa-plus"></i> Add
        </button>
    </div>
    @endif
    {{-- Add / Edit Menu Item Form --}}
    <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
        <div class="card-header">
            {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
        </div>
        <div class="card-body">
            <form
                action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($editItem))
                    @method('PUT')
                @endif

                <div class="form-group mb-2">
                    <label>Item Name</label>
                    <input type="text" name="name" class="form-control" required
                        value="{{ $editItem->name ?? old('name') }}">
                </div>

                <div class="form-group mb-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Image:</label>
                    <input type="file" id="image" class="form-control" name="image"
                        value="{{ $editItem->image ?? old('image') }}">
                    @if (isset($editItem) && $editItem->image)
                        <p class="mt-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label>Price (in $)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required
                        value="{{ $editItem->price ?? old('price') }}">
                </div>

                <button type="submit" class="btn btn-success mt-2">
                    {{ isset($editItem) ? 'Update' : 'Add' }}
                </button>

                @if (isset($editItem))
                    <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                @endif
            </form>
        </div>
    </div>
    {{-- Menu Items Table --}}
    <div class="card">
        <div class="card-header text-center bold text-bg-primary ">Pizzas</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price (in $)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuItems as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                @endif
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No menu items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Burgers --}}
    @if (!isset($editItem))
    <div class="mb-3 text-end">
        <button class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
            <i class="fas fa-plus"></i> Add
        </button>
    </div>
    @endif
    <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
        <div class="card-header">
            {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
        </div>
        <div class="card-body">
            <form
                action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($editItem))
                    @method('PUT')
                @endif

                <div class="form-group mb-2">
                    <label>Item Name</label>
                    <input type="text" name="name" class="form-control" required
                        value="{{ $editItem->name ?? old('name') }}">
                </div>

                <div class="form-group mb-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Image:</label>
                    <input type="file" id="image" class="form-control" name="image"
                        value="{{ $editItem->image ?? old('image') }}">
                    @if (isset($editItem) && $editItem->image)
                        <p class="mt-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label>Price (in $)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required
                        value="{{ $editItem->price ?? old('price') }}">
                </div>

                <button type="submit" class="btn btn-success mt-2">
                    {{ isset($editItem) ? 'Update' : 'Add' }}
                </button>

                @if (isset($editItem))
                    <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                @endif
            </form>
        </div>
    </div> 
    <div class="card">
        <div class="card-header text-center bold text-bg-primary ">Burgers</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price (in $)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuItems as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                @endif
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No menu items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Drinks --}}
    @if (!isset($editItem))
    <div class="mb-3 text-end">
        <button class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
            <i class="fas fa-plus"></i> Add
        </button>
    </div>
    @endif
    <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
        <div class="card-header">
            {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
        </div>
        <div class="card-body">
            <form
                action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($editItem))
                    @method('PUT')
                @endif

                <div class="form-group mb-2">
                    <label>Item Name</label>
                    <input type="text" name="name" class="form-control" required
                        value="{{ $editItem->name ?? old('name') }}">
                </div>

                <div class="form-group mb-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Image:</label>
                    <input type="file" id="image" class="form-control" name="image"
                        value="{{ $editItem->image ?? old('image') }}">
                    @if (isset($editItem) && $editItem->image)
                        <p class="mt-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label>Price (in $)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required
                        value="{{ $editItem->price ?? old('price') }}">
                </div>

                <button type="submit" class="btn btn-success mt-2">
                    {{ isset($editItem) ? 'Update' : 'Add' }}
                </button>

                @if (isset($editItem))
                    <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                @endif
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center bold text-bg-primary font-semibold">Drinks</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price (in $)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuItems as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                @endif
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No menu items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Desserts --}}
    @if (!isset($editItem))
    <div class="mb-3 text-end">
        <button class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
            <i class="fas fa-plus"></i> Add
        </button>
    </div>
    @endif
    {{-- Add / Edit Menu Item Form --}}
    <div class="card mb-4 collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
        <div class="card-header">
            {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
        </div>
        <div class="card-body">
            <form
                action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($editItem))
                    @method('PUT')
                @endif

                <div class="form-group mb-2">
                    <label>Item Name</label>
                    <input type="text" name="name" class="form-control" required
                        value="{{ $editItem->name ?? old('name') }}">
                </div>

                <div class="form-group mb-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $editItem->description ?? old('description') }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Image:</label>
                    <input type="file" id="image" class="form-control" name="image"
                        value="{{ $editItem->image ?? old('image') }}">
                    @if (isset($editItem) && $editItem->image)
                        <p class="mt-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $editItem->image) }}" alt="Current Image" width="80">
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label>Price (in $)</label>
                    <input type="number" name="price" step="0.01" class="form-control" required
                        value="{{ $editItem->price ?? old('price') }}">
                </div>

                <button type="submit" class="btn btn-success mt-2">
                    {{ isset($editItem) ? 'Update' : 'Add' }}
                </button>

                @if (isset($editItem))
                    <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
                @endif
            </form>
        </div>
    </div>
    {{-- Menu Items Table --}}
    <div class="card">
        <div class="card-header text-center bold text-bg-primary ">Desserts</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price (in $)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuItems as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="80">
                                @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                @endif
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No menu items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection
