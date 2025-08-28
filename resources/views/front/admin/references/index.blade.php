@extends('backend.layouts.master')

@section('title', 'Liste des Références')

@section('content')
    <div class="container-fluid mt-4">

        <h1 class="mb-4">Références / Logos</h1>

        <!-- Bouton ajouter -->
        <div class="mb-3">
            <a href="{{ route('ticafrique.admin-references.create') }}" class="btn btn-success">
                + Ajouter une Référence
            </a>
        </div>

        <!-- Grille des références -->
        <div class="row">
            @forelse ($references as $reference)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100 text-center">
                        <div class="card-body">
                            <!-- Icône -->
                            <img src="{{ asset('storage/' . $reference->icon) }}" alt="{{ $reference->title }}"
                                class="img-fluid mb-3" style="max-height:100px; object-fit:contain;">

                            <!-- Nom -->
                            <h6 class="fw-bold">{{ $reference->title }}</h6>
                        </div>
                        <div class="card-footer d-flex justify-content-center gap-2">
                            <a href="{{ route('ticafrique.admin-references.edit', $reference->id) }}"
                                class="btn btn-warning btn-sm">
                                ✏️ Éditer
                            </a>

                            <form action="{{ route('ticafrique.admin-references.delete', $reference->id) }}" method="GET"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer cette référence ?');">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    🗑️ Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">Aucune référence enregistrée.</div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $references->links() }}
        </div>

    </div>
@endsection
