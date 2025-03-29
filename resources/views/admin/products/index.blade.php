@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Produk</h1>
        <a href="{{ route('admin.products.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white p-4 shadow-md rounded-lg">
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-green-700 text-white">
                <tr>
                    <th class="p-3 border">Gambar</th>
                    <th class="p-3 border">Nama</th>
                    <th class="p-3 border">Harga</th>
                    <th class="p-3 border">Stok</th>
                    <th class="p-3 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="border hover:bg-gray-100 transition">
                    <td class="p-3 border">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="p-3 border">{{ $product->name }}</td>
                    <td class="p-3 border">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="p-3 border">{{ $product->stock }}</td>
                    <td class="p-3 border flex gap-2">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600 hover:underline">Edit</a> 
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
@endsection