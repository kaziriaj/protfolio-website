
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Portfolio Website</title>

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
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 sidebar d-none d-md-block">
            <h4 class="text-center mb-4">Dashboard</h4>
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="#">Profile</a>
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
        <main class="col-md-10 ms-sm-auto px-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Welcome, {{ Auth::user()->name }}</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-dashboard p-3">
                        <h5>Users</h5>
                        <p class="fw-bold display-6">150</p>
                        <small>Total registered users</small>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dashboard p-3">
                        <h5>Posts</h5>
                        <p class="fw-bold display-6">45</p>
                        <small>Published posts</small>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dashboard p-3">
                        <h5>Visitors</h5>
                        <p class="fw-bold display-6">1.2k</p>
                        <small>Active visitors today</small>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="card card-dashboard p-4">
                    <h4>Recent Activity</h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">User John registered</li>
                        <li class="list-group-item">New post "Laravel Tips" published</li>
                        <li class="list-group-item">Visitor from USA visited homepage</li>
                    </ul>
                </div>
            </div>

        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>