<nav class="fixed top-4 left-1/2 transform -translate-x-1/2 w-11/12 md:w-3/4 bg-gradient-to-r from-green-600 to-green-700/90 backdrop-blur-md shadow-xl rounded-full flex items-center justify-center px-6 py-3 border border-green-500/50 z-50">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-yellow-300 tracking-wide drop-shadow-lg">
            AgroNusaStore
        </a>

        <!-- Menu Items (Desktop) -->
        <ul class="hidden md:flex space-x-8 text-lg text-white">
            <li><a href="#products" class="scroll-link transition duration-300 hover:text-yellow-300 after:block after:content-[''] after:w-full after:h-0.5 after:bg-yellow-300 after:scale-x-0 after:transition-transform after:duration-300 after:origin-left hover:after:scale-x-100">Produk</a></li>
            <li><a href="#about" class="scroll-link transition duration-300 hover:text-yellow-300 after:block after:content-[''] after:w-full after:h-0.5 after:bg-yellow-300 after:scale-x-0 after:transition-transform after:duration-300 after:origin-left hover:after:scale-x-100">Tentang</a></li>
            <li><a href="#features-testimonials" class="scroll-link transition duration-300 hover:text-yellow-300 after:block after:content-[''] after:w-full after:h-0.5 after:bg-yellow-300 after:scale-x-0 after:transition-transform after:duration-300 after:origin-left hover:after:scale-x-100">Keunggulan</a></li>
        </ul>

        <!-- Login/Register Buttons -->
        <div class="hidden md:flex space-x-4">
            <a href="/login" class="px-4 py-2 text-sm font-semibold text-white bg-green-800 hover:bg-green-900 rounded-lg transition duration-300 shadow-md">
                Login
            </a>
            <a href="/register" class="px-4 py-2 text-sm font-semibold text-green-800 bg-yellow-300 hover:bg-yellow-400 rounded-lg transition duration-300 shadow-md">
                Daftar
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden focus:outline-none text-white transition-all duration-300 transform">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="menu" class="hidden md:hidden bg-green-800 text-white px-6 py-4 space-y-3 transition-all duration-300 rounded-lg absolute top-16 left-1/2 transform -translate-x-1/2 w-3/4 shadow-lg">
    <a href="/" class="block hover:bg-green-900 px-4 py-2 rounded">Home</a>
    <a href="/products" class="block hover:bg-green-900 px-4 py-2 rounded">Produk</a>
    <a href="/about" class="block hover:bg-green-900 px-4 py-2 rounded">Tentang</a>
    <a href="/contact" class="block hover:bg-green-900 px-4 py-2 rounded">Kontak</a>
    <div class="border-t border-green-600 mt-3 pt-3">
        <a href="/login" class="block text-center hover:bg-green-900 px-4 py-2 rounded">Login</a>
        <a href="/register" class="block text-center bg-yellow-300 text-green-800 hover:bg-yellow-400 px-4 py-2 rounded mt-2">Daftar</a>
    </div>
</div>

<script>
    // Fungsi Smooth Scroll
    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Menyesuaikan dengan tinggi navbar
                    behavior: 'smooth'
                });
            }
        });
    });

    // Toggle Mobile Menu
    document.getElementById('menu-btn').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>