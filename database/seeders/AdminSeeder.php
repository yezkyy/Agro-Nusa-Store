<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin AgroNusaStore',
            'email' => 'admin@agronusastore.com',
            'password' => Hash::make('admin123'), // Ganti password sesuai keinginan
            'role' => 'admin', // Pastikan ada kolom 'role' di tabel users
        ]);
    }
}
