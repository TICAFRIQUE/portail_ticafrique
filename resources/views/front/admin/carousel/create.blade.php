@extends('backend.layouts.master')

@section('title', 'Ajouter une image au Carrousel')

@section('content')
    <div class="container py-5">
        <div class="card shadow-lg border-0 rounded-4">

            <!-- En-tête -->
            <div
                class="card-header bg-gradient bg-info text-white rounded-top-4 d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="bi bi-image-fill me-2"></i> Ajouter une image au Carrousel
                </h4>
                <a href="{{ route('ticafrique.admin-carousel.index') }}" class="btn btn-light btn-sm rounded-pill px-3">
                    ⬅ Retour
                </a>
            </div>

            <div class="card-body p-4">

                {{-- ✅ Messages d'erreurs --}}
                @if ($errors->any())
                    <div class="alert alert-danger rounded-3">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>⚠ {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- ✅ Formulaire --}}
                <form action="{{ route('ticafrique.admin-carousel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Image -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-upload me-2"></i> Image du carrousel
                        </label>
                        <input type="file" name="image" class="form-control shadow-sm" required>
                        <small class="text-muted">Formats acceptés : jpeg, png, jpg, webp (max 2 Mo)</small>
                    </div>

                    <!-- Titre -->
                    <div class="mb-4">
                        <label for="titre" class="form-label fw-bold">
                            <i class="bi bi-type-bold me-2"></i> Titre
                        </label>
                        <input type="text" class="form-control shadow-sm" id="titre" name="titre"
                            placeholder="Titre de l'image">
                    </div>

                    <!-- Sous-titre -->
                    <div class="mb-4">
                        <label for="sous_titre" class="form-label fw-bold">
                            <i class="bi bi-card-text me-2"></i> Sous-titre
                        </label>
                        <input type="text" class="form-control shadow-sm" id="sous_titre" name="sous_titre"
                            placeholder="Sous-titre de l'image">
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">
                            <i class="bi bi-chat-left-text me-2"></i> Description
                        </label>
                        <textarea class="form-control shadow-sm" id="description" name="description" rows="3"
                            placeholder="Description de l'image"></textarea>
                    </div>

                    <!-- Boutons -->
                    <div class="d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-outline-secondary rounded-pill px-4">
                            🔄 Réinitialiser
                        </button>
                        <button type="submit" class="btn btn-success rounded-pill px-4">
                            ✅ Enregistrer
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
