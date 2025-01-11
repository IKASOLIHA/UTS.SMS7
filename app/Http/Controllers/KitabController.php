<?php

namespace App\Http\Controllers;

use App\Models\Kitab;

class KitabController extends Controller
{
    public function index()
    {
        // Ambil semua data kitab dari database
        $kitabs = Kitab::all();

        // Kirimkan data $kitabs ke view
        return view('kitab.index', compact('kitabs'));
    }
}
