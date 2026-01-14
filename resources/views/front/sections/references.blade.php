@extends('front.layouts.base')

@section('title', 'Nos Références - TIC@FRIQUE')

@section('content')
<section class="py-5 bg-white">
    <div class="container py-5">
        @if (count($references) > 0)
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase" style="color: #003d7a; letter-spacing: 2px;">Nos Références</h5>
            <h1 class="display-5 fw-bold" style="color: #0b1c2d;">Ils nous font confiance</h1>
            <div class="mx-auto mt-3" style="width: 70px; height: 2px; background-color: #003d7a;"></div>
            <p class="text-muted mt-4">Nous accompagnons des entreprises de toutes tailles dans leur transformation numérique à travers l'Afrique.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach ($references as $reference)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 wow fadeInUp" data-wow-delay=".1s">
                <div class="reference-card">
                    <div class="logo-wrapper">
                        <img src="{{ asset('storage/' . $reference->icon) }}"
                            class="img-fluid client-logo"
                            alt="{{ $reference->title }}"
                            title="{{ $reference->title }}">
                    </div>
                    <div class="client-name">{{ $reference->title }}</div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-5">
            <i class="fas fa-handshake fa-3x mb-3 text-muted"></i>
            <p class="text-muted">Nos références seront bientôt disponibles.</p>
        </div>
        @endif
    </div>
</section>

<style>
    

    /* Conteneur de la carte */
    .reference-card {
        background: #ffffff !important;
        padding: 25px 15px !important;
        border-radius: 15px !important;
        text-align: center !important;
        transition: all 0.4s ease !important;
        border: 1px solid #f1f1f1 !important;
        height: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
    }

    /* Effet au survol de la carte */
    .reference-card:hover {
        background: #ffffff !important;
        border-color: #003d7a !important;
        box-shadow: 0 10px 30px rgba(0, 61, 122, 0.1) !important;
        transform: translateY(-5px) !important;
    }

    /* Conteneur du logo */
    .logo-wrapper {
        height: 80px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin-bottom: 15px !important;
    }

    /* Style du logo (Gris par défaut) */
    .client-logo {
        max-height: 100% !important;
        width: auto !important;
        /* filter: grayscale(0%) !important; */
        opacity: 1 !important;
        transition: all 0.4s ease !important;
    }

    /* Logo en couleur au survol */
    .reference-card:hover .client-logo {
        /* filter: grayscale(0%) !important; */
        opacity: 1 !important;
        transform: scale(1.05) !important;
    }

    /* Texte du nom du client */
    .client-name {
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        color: #888 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
        transition: color 0.3s ease !important;
    }

    .reference-card:hover .client-name {
        color: #003d7a !important;
    }

    /* Responsive ajustement */
    @media (max-width: 576px) {
        .logo-wrapper {
            height: 60px !important;
        }

        .client-name {
            font-size: 0.75rem !important;
        }
    }

</style>
@endsection