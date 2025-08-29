@extends('backend.layouts.master')

@section('title', 'Ajouter une image au Carrousel')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">➕ Ajouter une image au Carrousel</h4>
            </div>
            <div class="card-body">

                {{-- Affichage des erreurs --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('ticafrique.admin-carousel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Image</label>
                        <input type="file" name="image" class="form-control" required>
                        <small class="text-muted">Formats acceptés : jpeg, png, jpg, webp (max 2 Mo)</small>
                    </div>



                    <div class="d-flex justify-content-between">
                        <a href="{{ route('ticafrique.admin-carousel.index') }}" class="btn bg-info">
                            ⬅ Retour
                        </a>
                        <button type="submit" class="btn btn-success">
                            ✅ Enregistrer
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
