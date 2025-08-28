@extends('backend.layouts.master')

@section('title', 'Références')

@section('content')
    <div class="container-fluid mt-4">

        <h1 class="mb-4">Ajouter une icône pour une référence</h1>

        <!-- Formulaire upload -->
        <form action="{{ route('ticafrique.admin-references.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Nom du client / Référence</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nom du client" required>
            </div>

            <div class="mb-3">
                <label for="icon" class="form-label">Icône / Logo</label>
                <input type="file" class="form-control" id="icon" name="icon" accept="image/*" required>
                <small class="text-muted">Formats acceptés : jpg, jpeg, png, svg</small>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
