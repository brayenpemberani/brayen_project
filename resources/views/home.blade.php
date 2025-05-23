@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-8">
    <div class="text-center">
        <h1 class="text-4xl font-extrabold text-green-700 mb-4">Selamat Datang di <span class="text-green-900">Edukasi Lingkungan</span></h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Pelajari bagaimana menjaga kelestarian bumi melalui daur ulang, konservasi alam, dan pemahaman tentang perubahan iklim.
        </p>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ route('daur_ulang') }}" class="bg-green-100 hover:bg-green-200 transition rounded-xl p-6 text-center shadow">
            <h2 class="text-xl font-semibold text-green-800">♻️ Daur Ulang</h2>
            <p class="text-sm text-gray-600 mt-2">Kurangi sampah dengan mendaur ulang bahan-bahan yang dapat digunakan kembali.</p>
        </a>

        <a href="{{ route('perubahan_iklim') }}" class="bg-yellow-100 hover:bg-yellow-200 transition rounded-xl p-6 text-center shadow">
            <h2 class="text-xl font-semibold text-yellow-800">🌍 Perubahan Iklim</h2>
            <p class="text-sm text-gray-600 mt-2">Pahami dampak dari aktivitas manusia terhadap iklim dan solusi yang bisa dilakukan.</p>
        </a>

        <a href="{{ route('konservasi') }}" class="bg-blue-100 hover:bg-blue-200 transition rounded-xl p-6 text-center shadow">
            <h2 class="text-xl font-semibold text-blue-800">🌱 Konservasi Alam</h2>
            <p class="text-sm text-gray-600 mt-2">Lindungi flora dan fauna demi keberlangsungan ekosistem di masa depan.</p>
        </a>
    </div>

    <div class="mt-10 text-center">
        <img src="https://source.unsplash.com/featured/?nature,environment" alt="Lingkungan" class="rounded-xl shadow-md mx-auto w-full max-w-2xl">
    </div>
</div>
@endsection
