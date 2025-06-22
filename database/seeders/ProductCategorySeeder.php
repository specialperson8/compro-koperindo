<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    public function run(): void {
        $categories = ['Koper Kabin', 'Koper Bagasi', 'Tas Ransel', 'Aksesoris'];
        foreach ($categories as $category) {
            ProductCategory::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
