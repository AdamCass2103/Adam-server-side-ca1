

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dreadnots Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-red-600 p-4 text-white">
        <h1 class="text-xl">Dreadnots GAA Blog</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        &copy; {{ date('Y') }} Dreadnots GAA
    </footer>
</body>
</html>
