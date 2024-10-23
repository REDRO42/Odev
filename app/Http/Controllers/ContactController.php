<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $konular = [
            'Öğrenci İşleri',
            'Sosyal Olanaklar',
            'Yönetmelik',
            'Barınma Olanakları',
            'Yemekhane',
            'Labaratuvarlar',
            'Diğer'
        ];

        return view('contact', compact('konular'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10',
        ]);

        Contact::create($validatedData);

        return view('contact-success');
    }
}
