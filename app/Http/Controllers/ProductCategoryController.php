<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function show (ProductCategory $category) {

         $products = $category->products()->get();

         $allCategories = ProductCategory::where('id', '!=', $category->id)->get();

        return view('pages.products.category-show', compact('category', 'products', 'allCategories'));

    }
}
