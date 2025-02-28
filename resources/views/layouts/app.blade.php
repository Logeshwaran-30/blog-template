<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('style.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 50px;
            background: linear-gradient(-45deg, #222831, #393E46, #00ADB5,#FF69B4, #C71585, #800080, #4B0082);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .featured-blog {
            font-family: 'Roboto', sans-serif;
            font-size: 32px;
            font-weight: bold;
            color: white !important;
        }

        .title {
            font-family: 'Arial', sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: white !important;
        }
        .tag-link {
            text-decoration: underline;
            text-decoration-thickness: 2px; /* Reduce thickness */
            text-underline-offset: 3px; /* Push line slightly down */
            display: inline-block;
            width: fit-content;
            }


        .font,.paragraph,.tags {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            
            color: black !important;
        }
        .heading{
            font-family: 'Arial', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: black !important;
        }

        .show-title {
            font-family: 'Arial', sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: black !important;
        }

        .sub-title {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            font-weight: bold;
            color: white !important;
        }

        .link {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: blue !important;
        }

        header, footer {
            background: none !important;
        }

        header {
            margin-top: -25px;
        }
    </style>
    @stack('styles') 
</head>
<body>
<header class="text-white p-2">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <h1 class="mb-0 title"><a href="/" style="text-decoration: none; color: white;">My Blog</a></h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <form method="get" action="{{ route('blogs.index') }}">
                    <div class="input-group" style="margin-left: 30px; width: 90%; border-radius:20px;  padding: 6px;">
                        <input type="text" name="search" class="form-control paragraph" placeholder="Search..." aria-label="Search" value="{{ request()->input('search') }}" style="border-radius: 25px; border: 1px solid #ccc;">
                    </div>
                </form>
            </div>

            <div class="collapse navbar-collapse sub-title" id="navbarNav">
                <ul class="navbar-nav ms-4"> 
                    <li class="nav-item ms-4"> 
                        <a class="nav-link" href="{{route('blogs.index')}}">Featured Blogs</a>
                    </li>

                    <li class="nav-item ms-4"> 
                        <a class="nav-link" href="{{ route('posts.all') }}">All Blogs</a>
                    </li>

                    <li class="nav-item dropdown ms-4"> 
                        <a class="nav-link dropdown-toggle" href="#" id="navbarCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarCategory">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item font" href="{{ route('blogs.display', ['category' => $category->name]) }}">
                                        {{($category->name) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container my-4 mt-4">
    @yield('content')
</div>

<footer class="text-white text-center p-3 sub-title">
    <p>&copy; 2025 My-Blog. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts') 
</body>
</html>