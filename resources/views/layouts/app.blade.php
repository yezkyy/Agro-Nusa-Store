<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="AgroNusaStore - Toko Pupuk Terpercaya">
        <meta name="keywords" content="AgroNusaStore, pupuk, pertanian, toko online">
        <meta name="author" content="AgroNusaStore Team">

        <title>{{ config('app.name', 'AgroNusaStore') }}</title>

        <!-- Favicon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:e400,500,600&display=swap" rel="stylesheet" />

        <!-- AOS (Animate On Scroll) CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white flex">
            @if (request()->is('admin/*') || request()->is('dashboard'))
                @include('layouts.sidebar') {{-- Sidebar hanya muncul di admin dan dashboard --}}
            @endif

            <div class="flex-1">
                @if (!request()->is('admin/*') && !request()->is('dashboard'))
                    @include('layouts.navbar') {{-- Navbar tidak muncul di admin dan dashboard --}}
                @endif

                <main>
                    @yield('content')
                </main>

                @if (!request()->is('admin/*') && !request()->is('dashboard'))
                @include('layouts.footer') {{-- Footer tidak muncul di admin dan dashboard --}}
                @endif
            </div>
        </div>

        <!-- AOS (Animate On Scroll) Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000, // Durasi animasi (1 detik)
                easing: 'ease-in-out', // Efek animasi smooth
                once: false, // Animasi berjalan berulang kali saat scroll
                mirror: true, // Animasi tetap terjadi ketika scroll ke atas
                offset: 100, // Jarak sebelum animasi dimulai
            });
        </script>
    </body>
</html>