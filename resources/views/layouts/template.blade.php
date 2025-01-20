<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <!-- @vite('resources/css/app.css') -->
    @stack('styles')
</head>
<body>
    <!-- <nav>
        <ul>
            <div class="navbar-brand" href="#">
                <div class="title">Jukebox</div>
            </div>
            <li><a href="/">Home</a></li>
            <div class="dropdown">Songs
                <div class="dropdown-content">
                    <a href="{{route('song.create')}}">Create</a>
                    <a href="{{route('song.index')}}">All</a>
                </div>
            </div>
        </ul>
    </nav> -->

    <div class="menu">
        <a href="/">Home</a>
        <div class="dropdown">Songs
            <div class="dropdown-content">
                <a href="{{route('song.create')}}">Create</a>
                <a href="{{route('song.index')}}">All</a>
            </div>
        </div>
    </div>

    @yield('content')

<footer>
    &copy; Sean van Gooswilligen - 2024
</footer>

@stack('scripts')
</body>
</html>