<aside class="w-64 bg-green-700 text-white p-5 hidden md:block">
    <h2 class="text-2xl font-bold mb-5 flex items-center gap-2">
        <i class="fas fa-tachometer-alt"></i> Admin Panel
    </h2>
    <nav class="space-y-2">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2 py-2 px-4 hover:bg-green-600 rounded">
            <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="{{ route('admin.products.index') }}" class="flex items-center gap-2 py-2 px-4 hover:bg-green-600 rounded">
            <i class="fas fa-box"></i> Produk
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-4 hover:bg-green-600 rounded">
            <i class="fas fa-shopping-cart"></i> Transaksi
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-4 hover:bg-green-600 rounded">
            <i class="fas fa-users"></i> Pengguna
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-4 hover:bg-green-600 rounded">
            <i class="fas fa-cog"></i> Pengaturan
        </a>
    </nav>
</aside>