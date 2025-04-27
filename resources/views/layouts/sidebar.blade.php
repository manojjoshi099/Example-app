<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            display: flex;
            flex-direction: column; /* Stack sidebar items vertically */
        }

        .sidebar-header {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #495057;
        }

        .sidebar-header h4 {
            margin-bottom: 0;
        }

        .sidebar-nav {
            flex-grow: 1; /* Allow navigation to take up remaining vertical space */
        }

        .sidebar-nav a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            border-bottom: 1px solid #495057;
        }

        .sidebar-nav a:hover {
            background-color: #495057;
        }

        .sidebar-footer {
            padding: 15px;
            border-top: 1px solid #495057;
            text-align: center;
        }

        .sidebar-footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .sidebar-footer a:hover {
            color: #adb5bd;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <h4 class="text-center">Side Bar</h4>
        </div>
        <div class="sidebar-nav">
            <a href="{{ route('admin.categories.index') }}"><i class="fas fa-tags"></i> Categories</a>
            <a href="{{ route('admin.menu_items.index') }}"><i class="fas fa-utensils"></i> Menu Items</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>
            <a href="/admin/users"><i class="fas fa-users"></i> Users</a>
            <a href="#"><i class="fas fa-cog"></i> Settings</a>
        </div>
        <div class="sidebar-footer">
            <a href="{{ route('admin.profile') }}">
                @auth('web') {{ Auth::user()->name }} @else Profile    @endauth
                <i class="fas fa-user"></i><br>
            </a>
            <a href="{{ route('admin.logout') }}">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>