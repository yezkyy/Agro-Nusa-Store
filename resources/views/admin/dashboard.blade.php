@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100 transition-colors duration-300">
    <!-- Content -->
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
        </div>

        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white p-6 shadow-md rounded-lg flex items-center gap-4">
                <i class="fas fa-box text-4xl text-green-500"></i>
                <div>
                    <h3 class="text-xl font-bold text-gray-700">Total Produk</h3>
                    <p class="text-3xl font-semibold text-green-600">{{ $products->count() }}</p>
                </div>
            </div>
            <div class="bg-white p-6 shadow-md rounded-lg flex items-center gap-4">
                <i class="fas fa-users text-4xl text-blue-500"></i>
                <div>
                    <h3 class="text-xl font-bold text-gray-700">Total Pengguna</h3>
                    <p class="text-3xl font-semibold text-green-600">120</p>
                </div>
            </div>
            <div class="bg-white p-6 shadow-md rounded-lg flex items-center gap-4">
                <i class="fas fa-dollar-sign text-4xl text-yellow-500"></i>
                <div>
                    <h3 class="text-xl font-bold text-gray-700">Total Transaksi</h3>
                    <p class="text-3xl font-semibold text-green-600">Rp 25.000.000</p>
                </div>
            </div>
        </div>

        <!-- Grafik Penjualan -->
        <div class="bg-white p-6 shadow-md rounded-lg mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Grafik Penjualan</h3>
            <div class="relative w-full h-[300px]">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <!-- Tombol Tambah Produk -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Daftar Produk</h2>
            <a href="{{ route('admin.products.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                <i class="fas fa-plus"></i> Tambah Produk
            </a>
        </div>

        <!-- Tabel Produk -->
        <div class="bg-white p-4 shadow-md rounded-lg">
            <table class="w-full border-collapse border border-gray-200">
                <thead class="bg-green-700 text-white">
                    <tr>
                        <th class="p-3 border">Nama</th>
                        <th class="p-3 border">Harga</th>
                        <th class="p-3 border">Stok</th>
                        <th class="p-3 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="border hover:bg-gray-100 transition">
                        <td class="p-3 border">{{ $product->name }}</td>
                        <td class="p-3 border">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="p-3 border">{{ $product->stock }}</td>
                        <td class="p-3 border">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600 hover:underline">Edit</a> | 
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chartCanvas = document.getElementById('salesChart');

        if (chartCanvas.chartInstance) {
            chartCanvas.chartInstance.destroy();
        }

        chartCanvas.chartInstance = new Chart(chartCanvas, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Pendapatan (Rp)',
                    data: [5000000, 7000000, 6500000, 8000000, 9000000, 11000000],
                    borderColor: 'rgb(34, 197, 94)',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>
@endsection