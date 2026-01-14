@extends('front.layouts.base')


@section('content')
@include('front.sections.carousel')
@include('front.sections.services')
<!-- À propos Start -->
<section class="py-5" id="about" style="background-color: #ffffff !important;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay=".3s">
                <div class="position-relative ps-5 pb-5">
                    <img src="{{ asset('site/img/pexels-edmond-dantes-8555769.jpg') }}" class="img-fluid rounded shadow-lg w-100" alt="TicAfrique Solutions">
                    <div class="position-absolute" style="width: 60%; bottom: -20px; left: -20px; z-index: 2;">
                        <img src="{{ asset('site/img/startae-team-7tXA8xwe4W4-unsplash.jpg') }}" class="img-fluid rounded shadow-lg border border-5 border-white" alt="Expertise">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 wow fadeIn" data-wow-delay=".5s">
                <h5 class="fw-bold text-uppercase" style="color: #003d7a !important; letter-spacing: 2px !important;">PRESENTATION</h5>
                <h1 class="mb-4 display-6 fw-bold" style="color: #0b1c2d !important;">Découvrez TicAfrique et ses solutions numériques</h1>
                <p class="lead" style="color: #003d7a !important; font-weight: 600 !important;">
                    TICAFRIQUE, département de SIP, est spécialisée dans le développement de solutions TIC innovantes.
                </p>
                <p class="text-muted mb-4">
                    Notre mission est de <strong>réduire vos coûts, renforcer votre visibilité et optimiser vos performances</strong> à travers des services sur mesure en télécoms, développement web et communication digitale.
                </p>

                <div class="row g-4 mb-5">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fa-2x me-3" style="color: #003d7a !important;"></i>
                            <span class="fw-bold text-dark">Approche Orientée Client</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fa-2x me-3" style="color: #003d7a !important;"></i>
                            <span class="fw-bold text-dark">Expertise Certifiée</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('ticafrique.about') }}" class="btn-custom-blue">
                    En savoir plus <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #ffffff !important; border-top: 1px solid #f0f0f0 !important;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <h3>100+</h3>
                    <h5>Clients satisfaits</h5>
                    <p>Des entreprises qui nous font confiance au quotidien.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>99%</h3>
                    <h5>Croissance</h5>
                    <p>Accélération de la transformation digitale.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>10+</h3>
                    <h5>Années d'Expertise</h5>
                    <p>Un savoir-faire reconnu dans le secteur des TIC.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>24/7</h3>
                    <h5>Engagement</h5>
                    <p>Un support fiable et un accompagnement personnalisé.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #ffffff !important;">
    <div class="container">
        <div class="text-center mb-5 wow fadeIn">
            <h5 class="fw-bold text-uppercase" style="color: #003d7a !important;">Nos Références</h5>
            <h2 class="fw-bold" style="color: #0b1c2d !important;">Ils nous font confiance</h2>
        </div>
        <div class="reference-slider">
            <div class="reference-track">
                @foreach ($references as $reference)
                <div class="ref-logo">
                    <img src="{{ asset('storage/' . $reference->icon) }}" alt="{{ $reference->title }}">
                </div>
                @endforeach
                {{-- Doublon pour effet infini --}}
                @foreach ($references as $reference)
                <div class="ref-logo">
                    <img src="{{ asset('storage/' . $reference->icon) }}" alt="{{ $reference->title }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    /* Bouton Personnalisé */
    .btn-custom-blue {
        background-color: #003d7a !important;
        color: #ffffff !important;
        padding: 15px 40px !important;
        border-radius: 50px !important;
        display: inline-flex !important;
        align-items: center !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: all 0.3s !important;
        border: none !important;
    }

    .btn-custom-blue:hover {
        background-color: #0b1c2d !important;
        transform: scale(1.05) !important;
        color: #ffffff !important;
    }

    /* Stat Cards */
    .stat-card {
        background: #ffffff !important;
        padding: 30px !important;
        border-radius: 15px !important;
        text-align: center !important;
        transition: 0.3s !important;
        border: 1px solid #f0f0f0 !important;
        height: 100% !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02) !important;
    }

    .stat-card:hover {
        box-shadow: 0 10px 30px rgba(0, 61, 122, 0.1) !important;
        border-color: #003d7a !important;
    }

    .stat-icon {
        width: 60px !important;
        height: 60px !important;
        background: rgba(0, 61, 122, 0.05) !important;
        color: #003d7a !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        margin: 0 auto 20px !important;
        font-size: 24px !important;
    }

    .stat-card h3 {
        color: #003d7a !important;
        font-weight: 800 !important;
        margin-bottom: 5px !important;
    }

    /* Slider Références */
    .reference-slider {
        overflow: hidden !important;
        padding: 20px 0 !important;
        position: relative !important;
    }

    .reference-track {
        display: flex !important;
        width: calc(250px * 10) !important;
        /* Ajuster selon nombre d'images */
        animation: scroll 30s linear infinite !important;
       
    }

    .ref-logo {
        width: 180px !important;
        margin: 0 30px !important;
        /* filter: grayscale(100%) !important; */
        opacity: 1 !important;
        transition: 0.3s !important;
    }

    .ref-logo:hover {
        /* filter: grayscale(0%) !important; */
        opacity: 1 !important;
    }

    .ref-logo img {
        max-width: 100% !important;
        height: auto !important;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 5));
        }
    }

    /* Carousel scrolling */
    .references-track {
        display: flex;
        animation: scroll 20s linear infinite;
        gap: 1.5rem;
        align-items: center;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Uniformisation des logos et des cartes */
    .reference-card {
        width: 150px;
        /* même largeur pour toutes les cartes */
        height: 150px;
        /* même hauteur */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: #ffffff;
    }

    .reference-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .reference-icon {
        max-height: 80px;
        object-fit: contain;
        transition: transform 0.3s;
    }

    .reference-card:hover .reference-icon {
        transform: scale(1.1);
    }

    /* Titre centré avec largeur max */
    .references-title {
        max-width: 700px;
        margin: 0 auto;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .references-track {
            animation-duration: 25s;
        }

        .reference-card {
            width: 120px;
            height: 120px;
        }

        .reference-icon {
            max-height: 60px;
        }
    }

    @media (max-width: 480px) {
        .reference-card {
            width: 100px;
            height: 100px;
        }

        .reference-icon {
            max-height: 50px;
        }
    }
</style>
@endsection