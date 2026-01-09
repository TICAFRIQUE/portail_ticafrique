@extends('front.layouts.base')
@section('title', 'Expertise Digitale - TICAFRIQUE')

@section('content')
<section class="hero-digital py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 text-start wow fadeInLeft">
                <h6 class="text-uppercase fw-bold mb-3" style="color: #003d7a; letter-spacing: 3px;">Innovation Numérique</h6>
                <h1 class="display-4 fw-bold mb-4" style="color: #0b1c2d;">Propulsez votre entreprise dans l'ère du Digital</h1>
                <p class="lead mb-5 text-muted">Nous transformons vos défis complexes en solutions numériques simples, performantes et scalables pour conquérir de nouveaux marchés.</p>
                <div class="d-flex gap-3">
                    <a href="#services" class="btn btn-digital-primary">Consulter nos solutions</a>
                    <a href="{{ route('ticafrique.contacts') }}" class="btn btn-digital-outline">Discuter d'un projet</a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block wow fadeInRight">
                <img src="https://img.freepik.com/free-vector/digital-lifestyle-concept-illustration_114360-7307.jpg" class="img-fluid" alt="Digital Transformation">
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 700px;">
            <h5 class="fw-bold text-uppercase" style="color: #003d7a; letter-spacing: 2px;">Notre Expertise</h5>
            <h2 class="display-6 fw-bold">Des solutions conçues pour votre croissance</h2>
            <div class="mx-auto mt-3" style="width: 60px; height: 3px; background-color: #003d7a;"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                <div class="service-tech-card">
                    <div class="icon-circle bg-soft-blue">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Digitalisation</h3>
                    <p>Optimisez vos processus internes et gagnez en productivité grâce à des outils sur mesure.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check-circle"></i> ERP & CRM Personnalisés</li>
                        <li><i class="fas fa-check-circle"></i> Automatisation de workflows</li>
                        <li><i class="fas fa-check-circle"></i> Gestion dématérialisée</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-tech-card active">
                    <div class="icon-circle bg-white shadow-sm">
                        <i class="fas fa-bullhorn" style="color: #003d7a;"></i>
                    </div>
                    <h3 class="text-white">Communication</h3>
                    <p class="text-white-50">Développez une image de marque forte et engagez votre communauté sur tous les canaux.</p>
                    <ul class="service-list list-white">
                        <li><i class="fas fa-check-circle"></i> Stratégie Social Media</li>
                        <li><i class="fas fa-check-circle"></i> Création de contenus</li>
                        <li><i class="fas fa-check-circle"></i> Gestion de l'E-réputation</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-tech-card">
                    <div class="icon-circle bg-soft-blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Marketing Digital</h3>
                    <p>Ciblez les bons prospects au bon moment et maximisez votre retour sur investissement.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check-circle"></i> SEO & Google Ads</li>
                        <li><i class="fas fa-check-circle"></i> Growth Hacking</li>
                        <li><i class="fas fa-check-circle"></i> Analyse de données (BI)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* --- Hero Section Custom --- */
    .hero-digital {
        background: linear-gradient(135deg, #f8faff 0%, #ffffff 100%);
        border-bottom: 1px solid #eee;
    }

    .btn-digital-primary {
        background-color: #003d7a !important;
        color: white !important;
        padding: 12px 30px !important;
        border-radius: 8px !important;
        font-weight: 600 !important;
        transition: 0.3s !important;
    }

    .btn-digital-outline {
        border: 2px solid #003d7a !important;
        color: #003d7a !important;
        padding: 12px 30px !important;
        border-radius: 8px !important;
        font-weight: 600 !important;
        transition: 0.3s !important;
    }

    /* --- Service Cards --- */
    .service-tech-card {
        background: #fff !important;
        padding: 40px 30px !important;
        border-radius: 20px !important;
        border: 1px solid #f0f0f0 !important;
        transition: all 0.4s ease !important;
        height: 100% !important;
    }

    .service-tech-card.active {
        background: #003d7a !important;
        border-color: #003d7a !important;
        transform: translateY(-10px) !important;
        box-shadow: 0 20px 40px rgba(0, 61, 122, 0.2) !important;
    }

    .service-tech-card h3 {
        font-size: 1.5rem !important;
        font-weight: 700 !important;
        margin-bottom: 20px !important;
    }

    .icon-circle {
        width: 70px !important;
        height: 70px !important;
        border-radius: 15px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 1.8rem !important;
        margin-bottom: 25px !important;
    }

    .bg-soft-blue {
        background: rgba(0, 61, 122, 0.05) !important;
        color: #003d7a !important;
    }

    /* --- Lists --- */
    .service-list {
        list-style: none !important;
        padding: 0 !important;
        margin-top: 25px !important;
    }

    .service-list li {
        margin-bottom: 12px !important;
        font-size: 0.95rem !important;
        color: #555 !important;
        display: flex !important;
        align-items: center !important;
    }

    .service-list li i {
        color: #003d7a !important;
        margin-right: 10px !important;
        font-size: 0.8rem !important;
    }

    .service-list.list-white li {
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .service-list.list-white li i {
        color: #fff !important;
    }

    .service-tech-card:not(.active):hover {
        border-color: #003d7a !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
        transform: translateY(-5px) !important;
    }
</style>
@endsection