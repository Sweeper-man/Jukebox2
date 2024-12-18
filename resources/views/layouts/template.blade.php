<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>@yield('title')</title>
    <!-- @vite('resources/css/app.css') -->
    @stack('styles')
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('song.index')}}">Songs</a></li>
            <li><a href="{{route('genre.index')}}">Genres</a></li>
        </ul>
    </nav>

    <div class="card">
        <img src="https://via.placeholder.com/300" alt="Image 1">
        <p>test</p>
    </div>

@yield('content')

<footer>
    &copy; Sean van Gooswilligen - 2024
</footer>

@stack('scripts')
</body>
</html>