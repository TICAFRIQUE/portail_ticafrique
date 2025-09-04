@extends('front.layouts.base')
@section('title', 'Index Digital')

@section('content')
    <!-- Hero Section Start -->
    <section class="hero bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4">Digitalisation & Communication Digitale</h1>
            <p class="lead mt-3">Accompagner votre entreprise vers l’ère numérique avec des solutions innovantes.</p>
            <a href="#services" class="btn btn-primary mt-3">Découvrez nos services</a>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Start -->
    <section id="services" class="services py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-primary">Nos Services</h5>
                <h2>Ce que nous proposons</h2>
            </div>
            <div class="row g-4">
                <!-- Digitalisation -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-cpu display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Digitalisation</h5>
                            <p class="card-text">Mise en place de solutions numériques pour optimiser vos processus métiers
                                :</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-gear-fill text-success me-2"></i> ERP</li>
                                <li><i class="bi bi-window-stack text-success me-2"></i> Logiciels métiers</li>
                                <li><i class="bi bi-broadcast text-success me-2"></i> Communication digitale</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Communication Digitale -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-globe2 display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Communication Digitale</h5>
                            <p class="card-text">Développez votre visibilité et atteignez vos clients grâce à :</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-window text-info me-2"></i> Sites web modernes</li>
                                <li><i class="bi bi-facebook text-info me-2"></i> Réseaux sociaux</li>
                                <li><i class="bi bi-phone-fill text-info me-2"></i> Applications mobiles</li>
                                <li><i class="bi bi-envelope-fill text-info me-2"></i> Campagnes emails</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Marketing Digital -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-bar-chart-line display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Marketing Digital</h5>
                            <p class="card-text">Stratégies sur mesure pour accroître votre notoriété et générer plus de
                                prospects :</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-search text-warning me-2"></i> SEO & Référencement</li>
                                <li><i class="bi bi-bullseye text-warning me-2"></i> Campagnes publicitaires</li>
                                <li><i class="bi bi-graph-up text-warning me-2"></i> Analyse de performance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
@endsection
