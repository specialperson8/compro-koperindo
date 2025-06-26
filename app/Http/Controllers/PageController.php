<?php

namespace App\Http\Controllers;

// Semua 'use' statement yang dibutuhkan
use App\Models\Page;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\Milestone;
use App\Models\Product;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{

    public function home()
    {
        // 1. Ambil data untuk Hero Slider
        $sliders = Slider::orderBy('order', 'asc')->get();

        // 2. Ambil data untuk Site Settings (dari cache)
        $settings = Cache::rememberForever('site_settings', function () {
            return Setting::pluck('value', 'key');
        });

        // 3. Ambil data untuk Berita Terbaru (DI LUAR BLOK CACHE)
        $latestPosts = collect(); // Inisialisasi sebagai Collection kosong

        $beritaUmumCategory = PostCategory::where('slug', 'berita-umum')->first();

        if ($beritaUmumCategory) {
            $latestPosts = Post::where('post_category_id', $beritaUmumCategory->id)
                                ->latest()
                                ->take(3)
                                ->get();
        }

         $productCategories = ProductCategory::orderBy('name', 'asc')->get();

        // Ambil produk dari kategori pertama sebagai tampilan default
        // $initialProducts = collect();
        if ($productCategories->isNotEmpty()) {
            Product::where('product_category_id', $productCategories->first()->id)
                                    ->latest()
                                    ->take(8)
                                    ->get();
        }

        $partners = Partner::orderBy('order', 'asc')->get();



        // 4. Kirim semua data yang sudah terkumpul ke view
        return view('pages.home', [
            'sliders' => $sliders,
            'settings' => $settings,
            'latestPosts' => $latestPosts,
            'productCategories' => $productCategories, // <-- Kirim data kategori
            // 'initialProducts' => $initialProducts,   // <-- Kirim data produk awal
            'partners' => $partners, // <-- Kirim data mitra
        ]);
    }

    /**
     * Menampilkan halaman statis berdasarkan slug.
     */
    public function show(string $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $data = ['page' => $page]; // Data default
        $viewName = 'pages.show'; // View default


        if ($page->template === 'about') {
            $viewName = 'pages.about.index';
            $data['partners'] = Partner::orderBy('order', 'asc')->get();
            $data['milestones'] = Milestone::orderBy('order', 'asc')->get();
        }

        elseif ($page->template === 'history') {
            $viewName = 'pages.history.index';
            $data['milestones'] = Milestone::orderBy('year', 'asc')->get();
        }

        elseif ($page->template === 'visi-misi') {
        $viewName = 'pages._visi-misi-template';

        }
        elseif ($page->template === 'bisnis') {
            $viewName = 'pages._bisnis-template';
        }

        // Render view yang sudah ditentukan dengan data yang sesuai
        return view($viewName, $data);
    }
}
