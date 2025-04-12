<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        
        // Logika untuk menyimpan pesan kontak
        // Bisa disimpan ke database atau dikirim via email
        
        return redirect()->back()->with('success', 'Pesan Anda telah dikirim. Terima kasih!');
    }
}