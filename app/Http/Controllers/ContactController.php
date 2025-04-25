<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|digits_between:10,15',
            'message' => 'required|string|max:1000',
        ]);

        // Proses data, contoh: simpan ke log
        \Log::info('Pesan Kontak:', $request->all());

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}