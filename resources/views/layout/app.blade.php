<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project APP</title>
    </head>
    <body>
        @vite(['resources/js/app.js'])
       
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">New Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>

                @auth
                <li class="nav-item">
                <a class="nav-link" href="">{{auth()->user()->name}}</a>
                </li>
                @endauth

                @guest
                <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
                </li>
                @endguest
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
    </div>
        <!-- dynamic content -->

        @yield('content')
    </body>
</html>