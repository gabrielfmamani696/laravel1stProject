<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light"> {{-- bg-gray-100 en Tailwind es similar a bg-light en Bootstrap --}}

<header class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mt-4 rounded container"> {{-- bg-white shadow-md en Tailwind es shadow-sm y bg-white en Bootstrap --}}
    <div class="container-fluid"> {{-- container mx-auto en Tailwind se maneja con container de Bootstrap --}}
        <a class="navbar-brand fs-4 fw-bold text-dark" href="{{ route('home') }}">My Blog</a> {{-- text-2xl font-bold text-gray-800 en Tailwind --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> {{-- flex justify-between items-center en el header original, y los ul flex space-x-4 se manejan con ml-auto o justify-content-end en el nav --}}
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link text-secondary hover:text-dark" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary hover:text-dark" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcSanjao+5vYqO5pHGYTRxPk1E2o1" crossorigin="anonymous"></script>
</body>
</html>