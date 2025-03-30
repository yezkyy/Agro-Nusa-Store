@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative w-full min-h-screen flex flex-col-reverse md:flex-row items-center px-6 md:px-24 text-center md:text-left overflow-hidden">
    <!-- Background Lingkaran -->
    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-[120vw] h-[70vh] md:w-[50vw] md:h-[170vh] bg-green-600 rounded-l-full opacity-30"
        data-aos="fade-left"
        data-aos-delay="1200"
        data-aos-duration="1000">
    </div>

    <!-- Image Floating Animation -->
    <div class="w-full md:w-1/2 flex justify-center relative mt-8 md:mt-0">
        <img src="/images/Product.png" alt="Produk Pupuk" class="w-[80%] md:w-[300px] lg:w-[400px] drop-shadow-lg animate-floating"
            data-aos="zoom-in"
            data-aos-delay="2000"
            data-aos-duration="1500">
    </div>

    <!-- Text Content -->
    <div class="w-full md:w-1/2 z-10 space-y-4"
        data-aos="fade-right"
        data-aos-delay="1500"
        data-aos-duration="1200">
        <h1 class="text-3xl md:text-5xl font-bold text-green-800 leading-tight">
            Selamat Datang di <span class="text-yellow-500">AgroNusaStore</span>
        </h1>
        <p class="text-base md:text-lg text-gray-700">
            Temukan pupuk terbaik untuk pertumbuhan tanaman yang optimal.
        </p>
        <button id="exploreBtn"
        class="mt-6 bg-yellow-400 hover:bg-yellow-500 text-green-800 font-semibold px-6 py-3 rounded-lg shadow-md 
        transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Jelajahi Produk
        </button>    
    </div>
</section>

<!-- Produk Terlaris -->
<section id="products" class="py-20">
    <div class="container mx-auto px-6">
        <!-- Judul Produk -->
        <h2 class="text-4xl font-extrabold text-center text-green-700" 
            data-aos="fade-up" 
            data-aos-duration="1000">
            🌱 Produk Kami
        </h2>
        <p class="text-gray-600 text-center mt-3 text-lg italic" 
            data-aos="fade-up" 
            data-aos-delay="200">
            Temukan pupuk terbaik untuk hasil pertanian maksimal 🌿
        </p>

        <!-- Grid Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mt-12">
            @foreach ($products as $product)
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden transition-all transform hover:-translate-y-2 hover:shadow-2xl duration-300 flex flex-col"
                data-aos="zoom-in" 
                data-aos-delay="{{ 200 * ($loop->index % 4) }}" 
                data-aos-duration="800">
                
                <!-- Gambar Produk -->
                <div class="relative group">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex justify-center items-center">
                        <a href="/products/{{ $product->id }}"
                            class="hidden group-hover:block px-5 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md transition-all duration-500 ease-in-out transform hover:scale-110 hover:bg-green-800 hover:-translate-y-1">
                            <i class="fas fa-eye"></i> Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Detail Produk -->
                <div class="p-6 flex flex-col text-center">
                    <h3 class="text-2xl font-bold text-green-700 mb-2"
                        data-aos="fade-up" 
                        data-aos-delay="{{ 200 * ($loop->index % 4) + 200 }}">
                        {{ $product->name }}
                    </h3>
                    <p class="text-lg font-semibold text-gray-800 mb-3"
                        data-aos="fade-up" 
                        data-aos-delay="{{ 200 * ($loop->index % 4) + 400 }}">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ABOUT & KEUNGGULAN SECTION -->
<section id="about" class="py-24 bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="flex flex-col-reverse md:flex-row items-center gap-12">
            
            <!-- Deskripsi AgroNusaStore -->
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-extrabold text-green-700"
                    data-aos="fade-right" data-aos-duration="1000">
                    Tentang <span class="text-yellow-500">AgroNusaStore</span>
                </h2>
                <p class="text-gray-700 text-lg mt-4 leading-relaxed"
                    data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    Kami adalah solusi terbaik bagi para petani yang mencari pupuk berkualitas tinggi untuk meningkatkan hasil pertanian. 
                    Dengan produk 100% organik, harga terjangkau, dan layanan terbaik, kami siap membantu pertumbuhan pertanian Anda!
                </p>
                <!-- Kontak -->
                <div class="mt-6 flex flex-wrap justify-center md:justify-start gap-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-3 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp text-xl"></i> WhatsApp
                    </a>
                    <a href="mailto:info@agronusastore.com"
                        class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-3 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                        <i class="fas fa-envelope text-xl"></i> Email
                    </a>
                    <a href="https://www.instagram.com/agronusastore" target="_blank"
                        class="flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold px-5 py-3 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                        <i class="fab fa-instagram text-xl"></i> Instagram
                    </a>
                </div>
            </div>

            <!-- Gambar Ilustrasi -->
            <div class="md:w-1/2 flex justify-center overflow-hidden"
                data-aos="fade-left" data-aos-duration="1000">
                <img src="/images/About.png" alt="Tentang AgroNusaStore"
                    class="w-[95%] md:w-[650px] drop-shadow-xl object-contain rounded-xl scale-100 transition-transform duration-500 hover:scale-105">
            </div>
        </div>
    </div>
</section>

<!-- KEUNGGULAN & TESTIMONI SECTION -->
<section id="features-testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center text-green-700" data-aos="fade-up">
            Kenapa Memilih <span class="text-yellow-500">AgroNusaStore?</span>
        </h2>
        <p class="text-gray-600 text-center mt-3 text-lg italic" data-aos="fade-up" data-aos-delay="200">
            Keunggulan & pengalaman pelanggan kami dalam meningkatkan hasil pertanian 🌿
        </p>

        <!-- Grid Keunggulan & Testimoni -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
            <!-- Keunggulan -->
            <div class="p-6 bg-green-50 shadow-lg rounded-lg" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="text-2xl font-bold text-green-600 flex items-center gap-2">
                    🌿 Keunggulan Kami
                </h3>
                <ul class="mt-4 space-y-3 text-gray-700">
                    <li class="flex items-center"><i class="fas fa-leaf text-green-500 mr-2"></i> 100% Organik & Ramah Lingkungan</li>
                    <li class="flex items-center"><i class="fas fa-tags text-green-500 mr-2"></i> Harga Terjangkau untuk Semua</li>
                    <li class="flex items-center"><i class="fas fa-handshake text-green-500 mr-2"></i> Konsultasi & Dukungan Ahli Gratis</li>
                    <li class="flex items-center"><i class="fas fa-truck text-green-500 mr-2"></i> Pengiriman Cepat & Aman</li>
                </ul>
            </div>

            <!-- Testimoni -->
            <div class="p-6 bg-yellow-50 shadow-lg rounded-lg" data-aos="fade-left" data-aos-duration="1000">
                <h3 class="text-2xl font-bold text-green-600 flex items-center gap-2">
                    💬 Apa Kata Pelanggan?
                </h3>
                <div class="mt-4 space-y-4">
                    <div class="p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
                        <p class="italic text-gray-600">"Pupuknya berkualitas tinggi, tanaman saya lebih sehat dan subur!"</p>
                        <h4 class="text-green-700 font-semibold mt-2">- Budi, Petani Organik</h4>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
                        <p class="italic text-gray-600">"Pelayanan sangat cepat dan ramah, produk terbaik untuk kebun saya!"</p>
                        <h4 class="text-green-700 font-semibold mt-2">- Siti, Hobi Berkebun</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-green-700 text-center text-white">
    <h2 class="text-3xl font-bold">Siap Meningkatkan Pertumbuhan Tanaman Anda?</h2>
    <p class="text-lg mt-4">Jelajahi produk terbaik kami dan dapatkan hasil terbaik untuk pertanian Anda.</p>
    <a href="/products" class="mt-6 inline-block bg-yellow-400 hover:bg-yellow-500 text-green-800 font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">Belanja Sekarang</a>
</section>

<script>
    document.getElementById("exploreBtn").addEventListener("click", function() {
        document.getElementById("products").scrollIntoView({ behavior: 'smooth' });
    });
</script>
@endsection