<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;

class AboutController extends Controller
{
    public function index()
    {
        $milestones = Milestone::orderBy('order', 'asc')->get();

        return view('pages.about.index', compact('milestones'));
    }
}
