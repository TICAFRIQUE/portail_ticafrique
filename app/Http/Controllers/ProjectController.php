<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Controller pour gérer les projets soumis par les utilisateurs

    // Afficher le formulaire de soumission de projet
    public function create()
    {
        return view('front.projects.create');
    }

    public function store(Request $request)
    {
        // Validation des champs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string|max:2000',
        ]);

        // Création du projet
        Project::create([
            'name' => $validated['name'],
            'profession' => $validated['profession'],
            'phone' => $validated['phone'],
            'description' => $validated['description'],
        ]);

        // Redirection avec message de succès
        return redirect()->back()->with('success', $request->name . ' Votre projet a été soumis avec succès !');
    }
}
