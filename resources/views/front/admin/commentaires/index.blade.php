@extends('backend.layouts.master')
@section('title', 'Commentaires')
@section('content')
    <div class="container-fluid mt-4">

        <h1 class="mb-4">Commentaires</h1>

        <!-- Grille des commentaires -->
        <div class="row">
            @forelse ($avis as $item)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">

                            <!-- Photo -->
                            @if ($item->photo)
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->nom }}"
                                    class="img-fluid rounded-circle mb-3"
                                    style="width:100px; height:100px; object-fit:cover;">
                            @else
                                <div class="bg-secondary rounded-circle mb-3" style="width:100px; height:100px;"></div>
                            @endif

                            <!-- Nom -->
                            <h5 class="fw-bold">{{ $item->nom }}</h5>

                            <!-- Profession -->
                            <p class="text-muted mb-1">{{ $item->profession }}</p>

                            <!-- Note -->
                            <p class="mb-2">Note : {{ $item->note }}/5</p>

                            <!-- Message -->
                            <p class="card-text">{{ $item->message }}</p>
                        </div>

                        <div class="card-footer d-flex justify-content-center gap-2">
                            <!-- Bouton Supprimer -->
                            <form action="{{ route('ticafrique.admin-avis.delete', $item->id) }}" method="POST"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer ce commentaire ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">🗑️ Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">Aucun commentaire enregistré.</div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $avis->links() }}
        </div>

    </div>
@endsection
