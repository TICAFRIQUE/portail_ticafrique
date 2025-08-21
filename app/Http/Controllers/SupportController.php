<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    // Page d'accueil
    public function index()
    {
        return view('index');
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
}
