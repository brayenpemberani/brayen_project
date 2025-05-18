<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan halaman form
    public function create()
    {
        return view('admin.admin');
    }

    // Menangani data yang dikirim dari form
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|numeric',
            'address' => 'required|string',
            'role'    => 'required|in:Super Admin,Kasir',
        ]);

        
        return redirect('/admin')->with('success', 'Data admin berhasil disimpan!');
    }
}
