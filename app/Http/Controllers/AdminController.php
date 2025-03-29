<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua produk
        return view('admin.dashboard', compact('products'), ['showNavbar' => false]);
    }
}
