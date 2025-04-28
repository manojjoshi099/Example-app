@extends('layouts.sidebar')

@section('content')
    <div class="container mt-5">
        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Add/Edit Form --}}
        <div class="mb-4">
            @if (!isset($editItem))
                <div class="mb-3 text-end">
                    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#menuItemForm">
                        <i class="fas fa-plus"></i> Add Item
                    </button>
                </div>
            @endif

            <div class="card collapse {{ isset($editItem) ? 'show' : '' }}" id="menuItemForm">
                <div class="card-header">
                    {{ isset($editItem) ? 'Edit Menu Item' : 'Add Menu Item' }}
                </div>
                <div class="card-body">
                    <form
                        action="{{ isset($editItem) ? route('admin.menu_items.update', $editItem->id) : route('admin.menu_items.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($editItem)
                            @method('PUT')
                        @endisset

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Item Name</label>
                                <input type="text" name="name" class="form-control" required
                                    value="{{ old('name', $editItem->name ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <select name="type" class="form-control" required>
                                    @foreach (['Pizza', 'Burger', 'Drink', 'Starter', 'Main Course', 'Dessert'] as $type)
                                        <option value="{{ $type }}"
                                            {{ old('type', $editItem->type ?? '') == $type ? 'selected' : '' }}>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="2">{{ old('description', $editItem->description ?? '') }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label>Price ($)</label>
                                <input type="number" name="price" step="0.01" class="form-control" required
                                    value="{{ old('price', $editItem->price ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                @isset($editItem->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $editItem->image) }}" width="100"
                                            class="img-thumbnail">
                                    </div>
                                @endisset
                            </div>

                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-success">
                                    {{ isset($editItem) ? 'Update' : 'Add' }}
                                </button>
                                @isset($editItem)
                                    <a href="{{ route('admin.menu_items.index') }}" class="btn btn-secondary">Cancel</a>
                                @endisset
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Main Menu Items Table --}}
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                All Menu Items
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menuItems as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{$item->description}}</td>
                                <td>${{ number_format($item->price, 2) }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" width="60"
                                            class="img-thumbnail">
                                    @else
                                        <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.menu_items.edit', $item->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.menu_items.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this item?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No items found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Category Sections --}}
        @isset($pizzas)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Pizzas
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pizzas as $pizza)
                                <tr>
                                    <td>{{ $pizza->name }}</td>
                                    <td>{{$pizza->description}}</td>
                                    <td>${{ number_format($pizza->price, 2) }}</td>
                                    <td>
                                        @if ($pizza->image)
                                            <img src="{{ asset('storage/' . $pizza->image) }}" width="60"
                                                class="img-thumbnail">
                                                @else
                                                <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                            height="50">
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No pizzas found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endisset

        @isset($burgers)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Burgers
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($burgers as $burger)
                                <tr>
                                    <td>{{ $burger->name }}</td>
                                    <td>{{$burger->description}}</td>
                                    <td>${{ number_format($burger->price, 2) }}</td>
                                    <td>
                                        @if ($burger->image)
                                            <img src="{{ asset('storage/' . $burger->image) }}" width="60"
                                                class="img-thumbnail">
                                        @else
                                        <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                            height="50">
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No Burgers found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endisset

        @isset($starters)
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Starters
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($starters as $starter)
                            <tr>
                                <td>{{ $starter->name }}</td>
                                <td>{{$starter->description}}</td>
                                <td>${{ number_format($starter->price, 2) }}</td>
                                <td>
                                    @if ($starter->image)
                                        <img src="{{ asset('storage/' . $starter->image) }}" width="60"
                                            class="img-thumbnail">
                                    @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No Starter found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endisset

        @isset($mainCourses)
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Main Courses
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mainCourses as $mainCourse)
                            <tr>
                                <td>{{ $mainCourse->name }}</td>
                                <td>{{$mainCourse->description}}</td>
                                <td>${{ number_format($mainCourse->price, 2) }}</td>
                                <td>
                                    @if ($mainCourse->image)
                                        <img src="{{ asset('storage/' . $mainCourse->image) }}" width="60"
                                            class="img-thumbnail">
                                    @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No Main Courses found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endisset
        
        @isset($Drinks)
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Drinks
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Drinks as $Drink)
                            <tr>
                                <td>{{ $Drink->name }}</td>
                                <td>{{$Drink->description}}</td>
                                <td>${{ number_format($Drink->price, 2) }}</td>
                                <td>
                                    @if ($Drink->image)
                                        <img src="{{ asset('storage/' . $Drink->image) }}" width="60"
                                            class="img-thumbnail">
                                    @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No Drinks found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endisset

        @isset($Desserts)
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Desserts
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Desserts as $Dessert)
                            <tr>
                                <td>{{ $Dessert->name }}</td>
                                <td>{{$Desser->description}}</td>
                                <td>${{ number_format($Dessert->price, 2) }}</td>
                                <td>
                                    @if ($Drink->image)
                                        <img src="{{ asset('storage/' . $Dessert->image) }}" width="60"
                                            class="img-thumbnail">
                                    @else
                                    <img src="{{ asset('images/Default.png') }}" alt="Default" width="50"
                                        height="50">
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No Desserts found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endisset

    </div>
@endsection
