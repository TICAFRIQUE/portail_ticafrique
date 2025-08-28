@extends('backend.layouts.master')

@section('title', 'Éditer Référence')

@section('content')
    <div class="container-fluid mt-4">

        <h1 class="mb-4">Éditer la référence : {{ $reference->title }}</h1>

        <form action="{{ route('ticafrique.admin-references.update', $reference->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Nom du client / Référence</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $reference->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="icon" class="form-label">Icône / Logo</label>
                <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
                <small class="text-muted">Formats acceptés : jpg, jpeg, png, svg. Laissez vide pour garder l'icône
                    actuelle.</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Icône actuelle :</label>
                <div>
                    <img src="{{ asset('storage/' . $reference->icon) }}" alt="{{ $reference->title }}" style="height:80px;">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('ticafrique.admin-references.index') }}" class="btn btn-secondary">Annuler</a>
        </form>

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
