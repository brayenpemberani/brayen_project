<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LingkunganController extends Controller
{
    public function home()
    {
        return view('lingkungan.home');
    }

    public function daurUlang()
    {
        return view('lingkungan.daur_ulang');
    }

    public function perubahanIklim()
    {
        return view('lingkungan.perubahan_iklim');
    }

    public function konservasi()
    {
        return view('lingkungan.konservasi');
    }
}
