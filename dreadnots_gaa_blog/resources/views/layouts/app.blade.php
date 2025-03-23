<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dreadnots Blog</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('players.index') }}">Players</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
