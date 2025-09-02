@extends('backend.layouts.master')

@section('title', 'Images du Carrousel')

@section('content')
    <div class="container-fluid mt-4">

        <!-- Titre principal -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold text-dark">🖼️ Gestion des images du carrousel</h1>
            <a href="{{ route('ticafrique.admin-carousel.create') }}" class="btn btn-primary shadow-sm">
                ➕ Ajouter une image
            </a>
        </div>

        <!-- Grille des images -->
        <div class="row g-4">
            @forelse ($carrousels as $item)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card shadow-sm border-0 rounded-3 h-100">

                        <!-- Image -->
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Image du carrousel"
                                class="card-img-top rounded-top" style="height:180px; object-fit:cover;">

                            <!-- Bouton supprimer flottant -->
                            <form action="{{ route('ticafrique.admin-carousel.delete', $item->id) }}" method="POST"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer cette image ?');"
                                class="position-absolute top-0 end-0 m-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger rounded-circle shadow">
                                    🗑️
                                </button>
                            </form>
                        </div>

                        <!-- Texte -->
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-dark">
                                {{ $item->titre ?? 'Titre non défini' }}
                            </h5>
                            <p class="text-muted mb-1">
                                {{ $item->sous_titre ?? 'Sous-titre non défini' }}
                            </p>
                            <p class="small text-secondary">
                                {{ $item->description ?? 'Description non définie' }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info shadow-sm border-0">
                        🚫 Aucune image enregistrée.
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $carrousels->links() }}
        </div>

    </div>
@endsection
