@extends('backend.layouts.master')

@section('title', 'Images du Carrousel')

@section('content')
    <div class="container-fluid mt-4">

        <h1 class="mb-4">Gestion des images du carrousel</h1>

        <!-- Bouton ajouter -->
        <div class="mb-3">
            <a href="{{ route('ticafrique.admin-carousel.create') }}" class="btn btn-success">
                + Ajouter une image
            </a>
        </div>

        <!-- Grille des images -->
        <div class="row">
            @forelse ($carrousels as $item)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100 text-center">
                        <div class="card-body">
                            <!-- Image du carrousel -->
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Image du carrousel" class="img-fluid mb-3"
                                style="max-height:150px; object-fit:cover; width:100%;">

                        </div>

                        <div class="card-footer d-flex justify-content-center gap-2">
                            <!-- Supprimer -->
                            <form action="{{ route('ticafrique.admin-carousel.delete', $item->id) }}" method="POST"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer cette image ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    🗑️ Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">Aucune image enregistrée.</div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $carrousels->links() }}
        </div>

    </div>
@endsection
