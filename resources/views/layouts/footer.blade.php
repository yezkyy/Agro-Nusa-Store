<footer class="bg-green-700 text-white py-12 mt-12">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Kolom 1: Logo & Deskripsi -->
        <div>
            <h2 class="text-2xl font-bold">AgroNusaStore</h2>
            <p class="mt-2 text-gray-200">
                Toko online pupuk berkualitas tinggi untuk hasil pertanian yang maksimal. Kami menghadirkan produk terbaik dengan layanan terbaik.
            </p>
        </div>

        <!-- Kolom 2: Navigasi -->
        <div>
            <h3 class="text-xl font-semibold">Navigasi</h3>
            <ul class="mt-3 space-y-2">
                <li><a href="/" class="hover:underline">Beranda</a></li>
                <li><a href="/products" class="hover:underline">Produk</a></li>
                <li><a href="/about" class="hover:underline">Tentang Kami</a></li>
                <li><a href="/contact" class="hover:underline">Kontak</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Sosial Media -->
        <div>
            <h3 class="text-xl font-semibold">Hubungi Kami</h3>
            <div class="mt-3 flex space-x-4">
                <a href="https://wa.me/6281234567890" target="_blank" class="text-white hover:text-yellow-400">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </a>
                <a href="mailto:info@agronusastore.com" class="text-white hover:text-yellow-400">
                    <i class="fas fa-envelope text-2xl"></i>
                </a>
                <a href="https://www.instagram.com/agronusastore" target="_blank" class="text-white hover:text-yellow-400">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://www.facebook.com/agronusastore" target="_blank" class="text-white hover:text-yellow-400">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-gray-300 mt-8 border-t border-gray-500 pt-4">
        &copy; {{ date('Y') }} AgroNusaStore. All Rights Reserved.
    </div>
</footer>
