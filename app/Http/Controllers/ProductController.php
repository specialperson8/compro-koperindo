<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProductsByCategory($id) {
        $products = Product::where('product_category_id', $id)->latest()->take(8)->get();
        // Render partial view dan kirim sebagai response HTML
        return view('pages.partials.home.product-list', compact('products'))->render();
    }

     public function index()
    {
        $products = Product::latest()->paginate(12); // Tampilkan 12 produk per halaman
        return view('pages.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('pages.products.show', compact('product'));
    }
}
