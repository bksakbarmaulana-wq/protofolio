<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|min:10',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Pesan kamu berhasil dikirim! Terima kasih, Akbar akan segera menghubungimu. 🚀');
    }
}
