<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Edukasi Lingkungan')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 text-green-900 min-h-screen flex flex-col">

<header class="bg-green-700 text-white p-6 shadow-md">
    <h1 class="text-3xl font-bold text-center">Edukasi Lingkungan</h1>
    <nav class="mt-4">
        <ul class="flex justify-center space-x-8 text-lg">
            <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
            <li><a href="{{ route('daur_ulang') }}" class="hover:underline">Daur Ulang</a></li>
            <li><a href="{{ route('perubahan_iklim') }}" class="hover:underline">Perubahan Iklim</a></li>
            <li><a href="{{ route('konservasi') }}" class="hover:underline">Konservasi</a></li>
        </ul>
    </nav>
</header>

<main class="flex-grow container mx-auto p-6 max-w-4xl">
    @yield('content')
</main>

<footer class="bg-green-700 text-white p-4 text-center">
    &copy; 2025 Edukasi Lingkungan Indonesia
</footer>

</body>
</html>
