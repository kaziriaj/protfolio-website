<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            min-height: 100vh;
        }
        .sidebar {
            background-color: #667eea;
            color: #fff;
            min-height: 100vh;
            padding-top: 2rem;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
        }
        .sidebar a:hover {
            background-color: #5563c1;
        }
        .card-dashboard {
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .welcome-text {
            font-size: 1.25rem;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 sidebar d-none d-md-block">
            <h4 class="text-center mb-4">Protfolio Website</h4>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('dashboard') }}">Skrills</a>
            <a href="{{ route('blog.index') }}">Blogs</a>
            <a href="{{ route('dashboard') }}">Protfolio</a>
            <a href="{{ route('profile.edit') }}">Profile</a>
            <a href="#">Settings</a>
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>

        <!-- Main Content -->
        <!-- Page Content -->
            <main class="col-md-10 ms-sm-auto px-4 py-4">
                @yield('dashboard-contain')
            </main>
        
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if(session('success'))
    <script>
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            gravity: "top", // top or bottom
            position: "right", // left, center or right
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast();
    </script>
@endif

</body>

</html>
