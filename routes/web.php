<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductCategoryController;
// use App\Http\Controllers\HistoryController;
use App\Http\Controllers\TikTokController;
use App\Http\Controllers\KorinityController;
use App\Models\Setting;
use App\Models\Page;
use Illuminate\Support\Facades\Cache;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about.index');

// Route::get('/sejarah', [HistoryController::class, 'index'])->name('history.index');

// Route::get('/get-products-by-category/{id}', [ProductController::class, 'getProductsByCategory'])->name('products.by_category');

// Rute untuk halaman KATEGORI produk (URL diubah)
Route::get('/kategori-produk/{category:slug}', [ProductCategoryController::class, 'show'])->name('product.category.show');

// Rute untuk halaman DETAIL produk
Route::get('/produk/{product}', [ProductController::class, 'show'])->name('products.show');

// ...
Route::get('/berita', [PostController::class, 'index'])->name('posts.index');
Route::get('/berita/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/kategori/{category:slug}', [PostController::class, 'byCategory'])
    ->name('posts.by_category');

Route::get('/karir', [CareerController::class, 'index'])->name('careers.index');



// Rute untuk memulai proses otentikasi
Route::get('/tiktok/connect', [TikTokController::class, 'connect'])->name('tiktok.connect');


Route::get('/korinity', [KorinityController::class, 'index'])->name('korinity.index');

// Rute callback yang akan dituju oleh TikTok setelah user login
Route::get('/tiktok/callback', [TikTokController::class, 'callback'])->name('tiktok.callback');

Route::get('/produk', [ProductController::class, 'index'])->name('products.index');

Route::get('/{slug}', [PageController::class, 'show'])
    ->where('slug', '^(?!admin|api).*$') // Regex untuk mengabaikan URL yang diawali 'admin' atau 'api'
    ->name('page.show');
