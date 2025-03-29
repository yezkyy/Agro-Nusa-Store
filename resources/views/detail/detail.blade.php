@extends('layouts.app')

@section('content')
<section class="mt-6 py-16">
    <div class="container mx-auto px-6">
        
        <!-- Breadcrumb -->
        <nav class="text-gray-600 text-sm mb-6" data-aos="fade-down">
            <a href="/" class="hover:text-green-700">Home</a> 
            <span class="mx-2">/</span> 
            <a href="/products" class="hover:text-green-700">Produk</a> 
            <span class="mx-2">/</span> 
            <span class="text-green-700 font-semibold">{{ $product->name }}</span>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Gambar Produk -->
            <div class="flex justify-center">
                <div class="relative group">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" 
                        class="w-full max-w-md md:max-w-lg rounded-lg shadow-lg transition-transform duration-300 hover:scale-105"
                        data-aos="zoom-in" data-aos-duration="1000">
                </div>
            </div>

            <!-- Detail Produk -->
            <div class="space-y-6">
                <h1 class="text-4xl font-bold text-green-700 leading-tight" data-aos="fade-up">
                    {{ $product->name }}
                </h1>
                
                <!-- Rating Dummy -->
                <div class="flex items-center space-x-1 text-yellow-500 text-xl" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span class="text-gray-600 text-sm ml-2">(4.0 dari 5)</span>
                </div>

                <p class="text-lg text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                    {{ $product->description }}
                </p>

                <h2 class="text-3xl font-semibold text-green-800" data-aos="fade-up" data-aos-delay="400">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </h2>

                <!-- Stok Produk -->
                <div class="flex items-center space-x-4" data-aos="fade-up" data-aos-delay="500">
                    <span class="text-gray-600 text-lg">Stok:</span>
                    <span class="text-lg font-semibold px-3 py-1 rounded-md 
                        {{ $product->stock > 0 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-600' }}">
                        {{ $product->stock > 0 ? $product->stock . ' tersedia' : 'Habis' }}
                    </span>
                </div>

                <!-- Fitur Produk -->
                <div class="grid grid-cols-2 gap-4 text-sm text-gray-600" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        <span>100% Organik</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        <span>Pengiriman Cepat</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        <span>Kualitas Premium</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        <span>Harga Terjangkau</span>
                    </div>
                </div>

                <!-- Tombol Beli -->
                <div class="mt-6 flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="700">
                    <a href="https://wa.me/6281234567890?text=Saya%20tertarik%20dengan%20produk%20{{ urlencode($product->name) }}"
                        class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow-md transition transform hover:scale-105">
                        <i class="fab fa-whatsapp text-xl"></i> Beli via WhatsApp
                    </a>
                    <a href="/cart/add/{{ $product->id }}"
                        class="flex items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-green-800 font-semibold px-6 py-3 rounded-lg shadow-md transition transform hover:scale-105">
                        <i class="fas fa-shopping-cart text-xl"></i> Tambah ke Keranjang
                    </a>
                </div>

                <!-- Tombol Share -->
                <div class="mt-4 flex gap-4" data-aos="fade-up" data-aos-delay="800">
                    <a href="https://wa.me/?text={{ urlencode('Lihat produk ini: ' . url()->current()) }}"
                        class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow-md transition transform hover:scale-105">
                        <i class="fab fa-whatsapp"></i> Share ke WhatsApp
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md transition transform hover:scale-105">
                        <i class="fab fa-facebook-f"></i> Share ke Facebook
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection