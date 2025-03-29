@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Produk</h1>

    <div class="bg-white p-6 shadow-md rounded-lg">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Nama Produk</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded mt-1" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Harga</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div>
                    <label class="block text-gray-700">Stok</label>
                    <input type="number" name="stock" value="{{ $product->stock }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Gambar Produk</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded mt-1">
                <img src="{{ asset('storage/' . $product->image) }}" class="w-32 h-32 object-cover mt-2 rounded-md">
            </div>

            <div class="flex justify-between">
                <a href="{{ route('admin.products.index') }}" class="text-gray-600 hover:underline">Batal</a>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                    Update Produk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection