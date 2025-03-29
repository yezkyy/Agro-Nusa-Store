<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['name' => 'Pupuk Organik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pupuk Anorganik', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
