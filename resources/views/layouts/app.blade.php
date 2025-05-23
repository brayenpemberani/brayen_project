<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edukasi Lingkungan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 text-green-900 min-h-screen flex flex-col">
    <header class="bg-green-700 text-white p-4">
        <h1 class="text-3xl font-bold text-center">Edukasi Lingkungan</h1>
        <nav class="flex justify-center mt-2 gap-4">
            <a href="{{ route('home') }}" class="hover:underline">Beranda</a>
            <a href="{{ route('daur_ulang') }}" class="hover:underline">Daur Ulang</a>
            <a href="{{ route('perubahan_iklim') }}" class="hover:underline">Perubahan Iklim</a>
            <a href="{{ route('konservasi') }}" class="hover:underline">Konservasi</a>
        </nav>
    </header>

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-green-700 text-white text-center p-4">
        &copy; 2025 Edukasi Lingkungan
    </footer>
</body>
</html>
