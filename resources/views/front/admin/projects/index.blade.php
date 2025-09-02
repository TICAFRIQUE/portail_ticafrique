@extends('backend.layouts.master')
@section('title', 'Projets soumis')

@section('content')
    <div class="container-fluid mt-4">

        <!-- Titre principal -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold text-dark">📁 Gestion des projets soumis</h1>
        </div>

        <!-- Grille des projets -->
        <div class="row g-4">
            @forelse ($projects as $item)
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3">

                        <!-- Détails du projet -->
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">
                                <i class="fa fa-user me-2 text-primary"></i>{{ $item->name }}
                            </h5>
                            <p class="mb-1"><i class="fa fa-briefcase me-2 text-secondary"></i>Profession:
                                {{ $item->profession }}</p>
                            <p class="mb-1"><i class="fa fa-phone me-2 text-success"></i>Téléphone: {{ $item->phone }}
                            </p>
                            <p class="mb-2"><i class="fa fa-file-alt me-2 text-warning"></i>Description:</p>
                            <p class="text-muted">{{ Str::limit($item->description, 120, '...') }}</p>
                        </div>

                        <!-- Actions -->
                        <div class="card-footer bg-transparent border-top-0 d-flex justify-content-end gap-2">
                            <a href="" class="btn btn-sm btn-info shadow-sm">
                                <i class="fa fa-eye me-1"></i> Voir
                            </a>
                            <form action="" method="POST"
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger shadow-sm">
                                    <i class="fa fa-trash me-1"></i> Supprimer
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        Aucun projet soumis pour le moment.
                    </div>
                </div>
            @endforelse
        </div>

    </div>
@endsection
