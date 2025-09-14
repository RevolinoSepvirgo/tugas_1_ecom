{{-- filepath: d:\KULIAH\Semester 5\E-Commerce\tugas-ecom\resources\views\menus\dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold text-blue-700 mb-6">👑 Dashboard Admin</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center">
                <div class="text-blue-600 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                </div>
                <div class="font-semibold text-lg mb-1">Kelola Menu</div>
                <p class="text-gray-500 mb-3 text-center">Tambah, edit, atau hapus menu makanan/minuman.</p>
                <a href="{{ route('menus.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Lihat Menu</a>
            </div>
            <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center">
                <div class="text-green-600 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>
                <div class="font-semibold text-lg mb-1">Kelola Kategori</div>
                <p class="text-gray-500 mb-3 text-center">Atur kategori untuk menu agar lebih terorganisir.</p>
                <a href="#" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Lihat Kategori</a>
            </div>
            <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center">
                <div class="text-purple-600 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2h5" />
                    </svg>
                </div>
                <div class="font-semibold text-lg mb-1">Data Pengguna</div>
                <p class="text-gray-500 mb-3 text-center">Pantau dan kelola data pengguna aplikasi.</p>
                <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 transition">Lihat Pengguna</a>
            </div>
        </div>

        <div class="flex justify-end">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">Logout</button>
            </form>
        </div>
    </div>
@endsection
