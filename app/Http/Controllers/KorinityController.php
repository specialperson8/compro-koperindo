<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiktokPost;

class KorinityController extends Controller
{
    public function index()
    {
        // Ambil semua data TikTok yang sudah disimpan
        $tiktokPosts = TiktokPost::orderBy('posted_at')->paginate(10);

        // Tampilkan view dengan data TikTok
        return view('pages.korinity.index', compact('tiktokPosts'));
    }
}
