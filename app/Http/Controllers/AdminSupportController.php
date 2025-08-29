<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Carousel;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class AdminSupportController extends Controller
{
    // afficher la liste des references dans l'admin

    // Afficher toutes les références (icônes) avec pagination
    public function index()
    {
        // Ici on affiche 12 références par page (tu peux changer le nombre)
        $references = Reference::orderBy('created_at', 'desc')->paginate(12);

        return view('front.admin.references.index', compact('references'));
    }

    // afficher le formulaire de creation d'une nouvelle reference
    public function create()
    {
        return view('front.admin.references.create');
    }

    // stocker une nouvelle reference public function store(Request $request)

    public function storeReferences(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $data = $request->only('title');

        if ($request->hasFile('icon')) {
            $path = $request->file('icon')->store('references', 'public');
            $data['icon'] = $path;
        }

        Reference::create($data);

        return redirect()->route('ticafrique.admin-references.index')->with('success', 'Référence ajoutée avec succès !');
    }


    public function edit($id)
    {
        $reference = Reference::findOrFail($id);
        return view('front.admin.references.edit', compact('reference'));
    }


    public function update(Request $request, $id)
    {
        $reference = Reference::findOrFail($id);

        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $data = ['title' => $request->title];

        // Si une nouvelle icône est uploadée
        if ($request->hasFile('icon')) {
            // Supprime l'ancienne icône si elle existe
            if ($reference->icon && Storage::disk('public')->exists($reference->icon)) {
                Storage::disk('public')->delete($reference->icon);
            }

            // Stocke la nouvelle icône
            $data['icon'] = $request->file('icon')->store('references', 'public');
        }

        $reference->update($data);

        return redirect()->route('ticafrique.admin-references.index')
            ->with('success', 'Référence mise à jour avec succès.');
    }

    // supprimer une reference
    public function delete($id)
    {

        $reference = Reference::findOrFail($id);

        // Supprimer l'icône associée si elle existe
        if ($reference->icon && Storage::disk('public')->exists($reference->icon)) {
            Storage::disk('public')->delete($reference->icon);
        }

        $reference->delete();

        return redirect()->route('ticafrique.admin-references.index')
            ->with('success', 'Référence supprimée avec succès.');
    }


    // afficher les avis
    public function avis()
    {
        $avis = \App\Models\Avis::orderBy('created_at', 'desc')->paginate(10);
        return view('front.admin.commentaires.index', compact('avis'));
    }

    // supprimer un avis
    public function deleteAvis($id)
    {
        $avis = \App\Models\Avis::findOrFail($id);

        // Supprimer la photo associée si elle existe
        if ($avis->photo && Storage::disk('public')->exists($avis->photo)) {
            Storage::disk('public')->delete($avis->photo);
        }

        $avis->delete();

        return redirect()->route('ticafrique.admin-avis.index')
            ->with('success', 'Commentaire supprimé avec succès.');
    }

    // carousel start
    public function carrousel()
    {
        $carrousels = Carousel::orderBy('created_at', 'Desc')->paginate(8);
        return view('front.admin.carousel.index', compact('carrousels'));
    }

    // create carousel
    public function createCarrousel()
    {
        return view('front.admin.carousel.create');
    }

    // store carousel
    public function storeCarrousel(Request $request)
    {
        // ✅ Validation
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', // max 2 Mo
        ]);

        // ✅ Upload image
        $path = $request->file('image')->store('carrousel', 'public');

        // ✅ Création en base
        Carousel::create([

            'image' => $path,
        ]);

        return redirect()->route('ticafrique.admin-carousel.index')->with('success', 'Image de carrousel ajoutée avec succès !');
    }

    // delete carousel
    public function deleteCarrousel($id)
    {
        $carousel = Carousel::findOrFail($id);
        $carousel->delete();

        return redirect()->route('ticafrique.admin-carousel.index')->with('success', 'Image de carrousel supprimée avec succès !');
    }
}
