<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!--[cite: 34] -->
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
        @include('partials.nav') <!-- Mengimpor partial view navigasi[cite: 34] -->
    </header>

    <main>
        @yield('content') <!-- Tempat penampung konten dinamis -->
    </main>

    <footer>
        <p>&copy; 2026 My Laravel App</p> <!--[cite: 34] -->
    </footer>
</body>
</html>