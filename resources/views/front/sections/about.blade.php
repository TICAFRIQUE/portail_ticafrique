@extends('front.layouts.base')

@section('content')
    <!-- À propos Start -->
    <div class="container-fluid py-5 my-5" id="about">
        <div class="container pt-5">
            <div class="row g-5">
                <!-- Images -->
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('site/img/about-1.jpg') }}" class="img-fluid w-75 rounded"
                            alt="TicAfrique - Solutions TIC" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('site/img/about-2.jpg') }}" class="img-fluid w-100 rounded"
                                alt="Expertise numérique">
                        </div>
                    </div>
                </div>

                <!-- Texte -->
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">À propos de nous</h5>
                    <h1 class="mb-4">Découvrez TICAFRIQUE et ses solutions numériques innovantes</h1>

                    <p>
                        <strong>TICAFRIQUE</strong>, le département de SIP dédié aux technologies de l’information et de la
                        communication,
                        se consacre au développement de solutions TIC pour les entreprises et organisations africaines.
                        Nous sommes spécialisés dans l’optimisation des performances, la communication web, et les solutions
                        numériques sur mesure.
                    </p>

                    <p>
                        Notre mission est claire : <strong>réduire vos coûts, améliorer votre visibilité et optimiser vos
                            performances</strong>
                        à travers des services adaptés : télécoms, développement web, communication digitale, hébergement et
                        gestion de noms de domaine.
                    </p>

                    <p>
                        TICAFRIQUE accompagne ses clients pour tirer le meilleur parti des technologies numériques grâce à :
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-chart-line text-primary me-2"></i>Des produits de web marketing performants
                            (SEO, référencement)</li>
                        <li><i class="fas fa-server text-primary me-2"></i>Des infrastructures robustes pour l’hébergement
                            de sites web</li>
                        <li><i class="fas fa-globe text-primary me-2"></i>Des services d’enregistrement et de gestion de
                            noms de domaine</li>
                        <li><i class="fas fa-sms text-primary me-2"></i>Une plateforme de SMS via internet pour la
                            communication directe</li>
                    </ul>

                    <p class="mb-4">
                        Ce qui nous distingue : <br>
                        <i class="fas fa-eye text-primary me-2"></i><strong>Vision :</strong> Vulgariser l’utilisation des
                        TIC en Afrique.<br>
                        <i class="fas fa-bullseye text-primary me-2"></i><strong>Mission :</strong> Fournir des conseils
                        indépendants et des solutions adaptées aux besoins
                        spécifiques des entreprises.<br>
                        <i class="fas fa-briefcase text-primary me-2"></i><strong>Métier :</strong> Mettre les TIC au
                        service des entreprises et organisations pour un
                        avantage concurrentiel durable.
                    </p>

                    <p class="mb-4">
                        Nos valeurs fondamentales : <br>
                        <i class="fas fa-trophy text-primary me-2"></i><strong>Performance :</strong> Créer de la valeur et
                        viser l’excellence.<br>
                        <i class="fas fa-handshake text-primary me-2"></i><strong>Proximité :</strong> Être proche de nos
                        clients et établir une relation de confiance.<br>
                        <i class="fas fa-lightbulb text-primary me-2"></i><strong>Innovation :</strong> Explorer de
                        nouvelles pistes et proposer des solutions novatrices.<br>
                        <i class="fas fa-shield-alt text-primary me-2"></i><strong>Intégrité :</strong> Respecter nos
                        valeurs et l’éthique professionnelle.<br>
                        <i class="fas fa-certificate text-primary me-2"></i><strong>Professionnalisme :</strong> Assurer un
                        service de qualité répondant aux attentes de nos clients.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- À propos End -->
@endsection
