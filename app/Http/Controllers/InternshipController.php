<?php

namespace App\Http\Controllers;

use App\Models\Internship;

class InternshipController extends Controller
{
    public function showCard()
    {
        // Ambil semua data Internship
        $internships = Internship::all();

        // Kirim data ke view tes-filament1.blade.php
        return view('tes-filament1', compact('internships'));
    }
}
