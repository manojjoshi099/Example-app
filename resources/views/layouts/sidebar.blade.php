<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Side Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            flex-shrink: 0;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            border-bottom: 1px solid #495057;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center py-3 border-bottom">Side Bar</h4>
        <a href="{{url('admin/index') }}"><i class="fas fa-tags"></i> Categories</a>
        <a href="{{ route('menu-items.index') }}"><i class="fas fa-utensils"></i> Menu Items</a>
        <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="#"><i class="fas fa-users"></i> Users</a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
    </div>

    <div class="content">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
