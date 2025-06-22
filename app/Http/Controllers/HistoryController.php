<?php

namespace App\Http\Controllers;
use App\Models\Milestone;

use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index()
    {
        // Ambil semua milestone, urutkan dari tahun terlama ke terbaru
        $milestones = Milestone::orderBy('year', 'asc')->get();
        return view('pages.history.index', compact('milestones'));
    }
}

