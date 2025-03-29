<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan ada kategori di database
        $categories = Category::pluck('id')->toArray();

        if (empty($categories)) {
            // Jika tidak ada kategori, hentikan proses seeding
            return;
        }

        // Tambahkan produk dengan kategori yang valid
        Product::create([
            'category_id' => $categories[array_rand($categories)], // Pilih kategori secara acak
            'name' => 'Pupuk Organik Super',
            'description' => 'Pupuk organik berkualitas tinggi untuk hasil panen yang maksimal.',
            'price' => 50000,
            'stock' => 100,
            'image' => 'images/products/pupuk-organik.jpg',
        ]);

        Product::create([
            'category_id' => $categories[array_rand($categories)],
            'name' => 'Pupuk Cair Multi Fungsi',
            'description' => 'Pupuk cair yang bisa digunakan untuk sayur, buah, dan tanaman hias.',
            'price' => 75000,
            'stock' => 75,
            'image' => 'images/products/pupuk-cair.jpg',
        ]);
    }
}