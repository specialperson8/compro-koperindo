<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import semua model yang kita butuhkan di halaman ini
use App\Models\Page;
use App\Models\Milestone;
use App\Models\Partner;
// use App\Models\Team; // Hapus atau komentari ini karena sudah tidak dipakai

class AboutController extends Controller
{
    /**
     * Menampilkan halaman Tentang Kami yang kompleks.
     */
    public function index()
    {
        // Ambil konten utama halaman dari tabel 'pages'
        $page = Page::where('slug', 'tentang-kami')->firstOrFail();

        // Ambil data untuk slider milestone
        $milestones = Milestone::orderBy('order', 'asc')->get();

        // Ambil data untuk slider partner
        $partners = Partner::orderBy('order', 'asc')->get();

        // Kirim SEMUA data yang dibutuhkan ke view
        return view('pages.about.index', [
            'page' => $page,
            'milestones' => $milestones,
            'partners' => $partners, // <-- Pastikan variabel ini dikirim
        ]);
    }
}
