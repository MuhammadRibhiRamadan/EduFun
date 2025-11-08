<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }
        .navbar {
            background-color: #fff !important;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .nav-link {
            color: #000 !important;
            font-weight: 500;
            margin-right: 10px;
        }
        .nav-link.active, .nav-link:hover {
            color: #2f55d4 !important;
        }
        .hero {
            width: 100%;
            height: 350px;
            background-image: url('https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg');
            background-size: cover;
            background-position: center;
        }
        .article-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 25px;
            transition: 0.3s;
        }
        .article-card:hover {
            transform: translateY(-3px);
        }
        .article-img {
            width: 250px;
            height: 160px;
            object-fit: cover;
        }
        .footer {
            background-color: #0c0c0c;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }
        .btn-read {
            background-color: #1c1c1c;
            color: #fff;
            border-radius: 30px;
            font-size: 13px;
            padding: 5px 15px;
            border: none;
        }
        .btn-read:hover {
            background-color: #2f55d4;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">EduFun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->routeIs('category') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Category</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('category', 1) }}">Data Science</a></li>
            <li><a class="dropdown-item" href="{{ route('category', 2) }}">Network Security</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('writers') ? 'active' : '' }}" href="{{ route('writers') }}">Writers</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('popular') ? 'active' : '' }}" href="{{ route('popular') }}">Popular</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Banner -->
<div class="hero mb-4"></div>

<div class="container mb-5">
  @yield('content')
</div>

<!-- Footer -->
<footer class="footer">
  <p>© EduFun 2024 | Web Programming | Muhammad Ribhi Ramadan | 2702341303</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
