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
    <div class="menu">
        <a href="/">Home</a>
        <div class="dropdown">Songs
            <div class="dropdown-content">
                <a href="{{route('song.create')}}">Create</a>
                <a href="{{route('song.index')}}">All</a>
            </div>
        </div>
        <div class="dropdown">Genres
            <div class="dropdown-content">
                <a href="{{route('genre.create')}}">Create</a>
                <a href="{{route('genre.index')}}">All</a>
            </div>
        </div>
    </div>

    @yield('content')

@stack('scripts')
</body>
</html>