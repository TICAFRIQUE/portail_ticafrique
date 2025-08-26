<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Avis;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    // Page d'accueil
    public function index()
    {
        $avis = Avis::latest()->get(); // tous les avis récents
        return view('index', compact('avis'));
    }

    // Page "À propos"
    public function about()
    {
        return view('front.sections.about');
    }

    // Page "Projets"
    public function projects()
    {
        return view('front.sections.recently_projects');
    }

    // Page "Contacts"
    public function contacts()
    {
        return view('front.sections.contacts');
    }


    public function storeAvis(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'note' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nom', 'profession', 'note', 'message']);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('avis', 'public');
            $data['photo'] = $path;
        }

        Avis::create($data);

        return back()->with('success', 'Merci pour votre témoignage !');
    }
}
