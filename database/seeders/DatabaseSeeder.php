<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil AdminSeeder
        $this->call(class: AdminSeeder::class);

        // Panggil CategorySeeder
        $this->call(CategorySeeder::class);

        // Panggil ProductSeeder
        $this->call(ProductSeeder::class);
    }
}
