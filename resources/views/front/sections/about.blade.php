@extends('front.layouts.base')

@section('content')
<!-- <section class="py-5" style="background-color: #ffffff !important;">

    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay=".3s">
                <div class="position-relative ps-4 pb-4">
                    <img src="{{ asset('site/img/pexels-edmond-dantes-8555769.jpg') }}"
                        class="img-fluid rounded shadow-lg w-100"
                        style="border: 1px solid #eee !important;"
                        alt="TicAfrique Solutions">
                    <div class="position-absolute" style="width: 65%; bottom: -30px; left: -30px; z-index: 2;">
                        <img src="{{ asset('site/img/startae-team-7tXA8xwe4W4-unsplash.jpg') }}"
                            class="img-fluid rounded shadow-lg border border-5 border-white"
                            alt="Expertise numérique">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 wow fadeIn" data-wow-delay=".5s">
                <h5 class="fw-bold text-uppercase" style="color: #003d7a !important; letter-spacing: 2px !important;">À propos de nous</h5>
                <h1 class="display-5 fw-bold mb-4" style="color: #0b1c2d !important;">Découvrez <span style="color: #003d7a !important;">TIC@FRIQUE</span> et ses solutions numériques</h1>

                <p class="lead mb-4" style="color: #444 !important; line-height: 1.8 !important;">
                    <strong>TIC@FRIQUE</strong>, département de SIP dédié aux technologies de l’information, se consacre au développement de solutions innovantes pour les organisations africaines.
                </p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background-color: #f8faff !important; border-left: 4px solid #003d7a !important;">
                            <i class="fas fa-chart-line me-3" style="color: #003d7a !important; font-size: 1.5rem;"></i>
                            <span class="fw-bold text-dark">Digitalisation & Communication</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background-color: #f8faff !important; border-left: 4px solid #003d7a !important;">
                            <i class="fas fa-server me-3" style="color: #003d7a !important; font-size: 1.5rem;"></i>
                            <span class="fw-bold text-dark">Solutions Télécom</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background-color: #f8faff !important; border-left: 4px solid #003d7a !important;">
                            <i class="fas fa-globe me-3" style="color: #003d7a !important; font-size: 1.5rem;"></i>
                            <span class="fw-bold text-dark">Domaine & Hébergement</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background-color: #f8faff !important; border-left: 4px solid #003d7a !important;">
                            <i class="fas fa-sms me-3" style="color: #003d7a !important; font-size: 1.5rem;"></i>
                            <span class="fw-bold text-dark">SMS Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="py-5" style="background-color: #ffffff !important;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay=".3s">
                <div class="position-relative ps-4 pb-4">
                    <img src="{{ asset('site/img/pexels-edmond-dantes-8555769.jpg') }}"
                        class="img-fluid rounded shadow-lg w-100"
                        style="border: 1px solid #eee !important;"
                        alt="TicAfrique Solutions">
                    <div class="position-absolute" style="width: 65%; bottom: -30px; left: -30px; z-index: 2;">
                        <img src="{{ asset('site/img/startae-team-7tXA8xwe4W4-unsplash.jpg') }}"
                            class="img-fluid rounded shadow-lg border border-5 border-white"
                            alt="Expertise numérique">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 wow fadeIn" data-wow-delay=".5s">
                <h5 class="fw-bold text-uppercase" style="color: #003d7a !important; letter-spacing: 2px !important;">À propos de nous</h5>
                <h1 class="display-5 fw-bold mb-4" style="color: #0b1c2d !important;">Découvrez <span style="color: #003d7a !important;">TIC@FRIQUE</span> et ses solutions numériques</h1>

                <p class="lead mb-4" style="color: #444 !important; line-height: 1.8 !important;">
                    <strong>TIC@FRIQUE</strong>, département de SIP dédié aux technologies de l’information, se consacre au développement de solutions innovantes pour les organisations africaines.
                </p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3 about-card">
                            <i class="fas fa-laptop-code me-3"></i>
                            <span class="fw-bold text-dark">Digitalisation & Communication</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3 about-card">
                            <i class="fas fa-broadcast-tower me-3"></i>
                            <span class="fw-bold text-dark">Solutions Télécom</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3 about-card">
                            <i class="fas fa-cloud-upload-alt me-3"></i>
                            <span class="fw-bold text-dark">Domaine & Hébergement</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3 about-card">
                            <i class="fas fa-bullhorn me-3"></i>
                            <span class="fw-bold text-dark">SMS Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Style pour les cartes de services dans "À propos" */
    .about-card {
        background-color: #f8faff !important;
        border-left: 4px solid #003d7a !important;
        transition: all 0.3s ease;
    }

    .about-card i {
        color: #003d7a !important;
        font-size: 1.5rem;
        width: 30px;
        text-align: center;
    }

    .about-card:hover {
        background-color: #ffffff !important;
        box-shadow: 0 5px 15px rgba(0, 61, 122, 0.1);
        transform: translateX(5px);
    }
</style>
<section class="py-5" style="background-color: #fcfcfc !important; border-top: 1px solid #eee !important; border-bottom: 1px solid #eee !important;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="info-box-custom">
                    <i class="fas fa-eye"></i>
                    <h4>Notre Vision</h4>
                    <p>Vulgariser l’utilisation des TIC en Afrique pour transformer durablement l'économie.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box-custom">
                    <i class="fas fa-bullseye"></i>
                    <h4>Notre Mission</h4>
                    <p>Fournir des conseils indépendants et des solutions adaptées aux besoins spécifiques des entreprises.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box-custom">
                    <i class="fas fa-briefcase"></i>
                    <h4>Notre Métier</h4>
                    <p>Mettre les TIC au service des organisations pour un avantage concurrentiel durable.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="py-5" style="background-color: #ffffff !important;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #0b1c2d !important;">Nos Valeurs Fondamentales</h2>
            <div class="mx-auto" style="width: 80px; height: 3px; background-color: #003d7a !important;"></div>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4 col-lg-2 offset-lg-1">
                <div class="value-item">
                    <i class="fas fa-trophy"></i>
                    <h6>Performance</h6>
                    <p> être parmi les meilleurs ; créer de la valeur.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="value-item">
                    <i class="fas fa-handshake"></i>
                    <h6>Proximité</h6>
                    <p>être toujours proche de nos clients; créer une confiance mutuelle.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="value-item">
                    <i class="fas fa-lightbulb"></i>
                    <h6>Innovation</h6>
                    <p>procurer des solutions novatrices ; explorer de nouvelles pistes de satisfaction.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="value-item">
                    <i class="fas fa-shield-alt"></i>
                    <h6>Intégrité</h6>
                    <p>être conforme à nos valeurs ; respect de l’éthique </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="value-item">
                    <i class="fas fa-certificate"></i>
                    <h6>Professionnalisme</h6>
                    <p>assurer un service de qualité répondre aux attentes de nos clients.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark display-6">Nos Valeurs Fondamentales</h2>
            <div class="mx-auto rounded" style="width: 60px; height: 4px; background-color: #003d7a;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-2">
                <div class="value-card h-100 p-3">
                    <div class="value-icon mb-3">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h6 class="fw-bold">Performance</h6>
                    <p class="small text-muted mb-0">Être parmi les meilleurs et créer de la valeur durable.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-2">
                <div class="value-card h-100 p-3">
                    <div class="value-icon mb-3">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h6 class="fw-bold">Proximité</h6>
                    <p class="small text-muted mb-0">Être proche de nos clients pour une confiance mutuelle.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-2">
                <div class="value-card h-100 p-3">
                    <div class="value-icon mb-3">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h6 class="fw-bold">Innovation</h6>
                    <p class="small text-muted mb-0">Explorer de nouvelles pistes pour des solutions novatrices.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-2">
                <div class="value-card h-100 p-3">
                    <div class="value-icon mb-3">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h6 class="fw-bold">Intégrité</h6>
                    <p class="small text-muted mb-0">Respect de l’éthique et conformité à nos engagements.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-2">
                <div class="value-card h-100 p-3">
                    <div class="value-icon mb-3">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h6 class="fw-bold">Professionnalisme</h6>
                    <p class="small text-muted mb-0">Assurer un service de qualité répondant à vos attentes.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .value-card {
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 15px;
        background: #fdfdfd;
    }

    .value-card:hover {
        transform: translateY(-8px);
        background: #ffffff;
        box-shadow: 0 10px 25px rgba(0, 61, 122, 0.1);
        border-color: #003d7a;
    }

    .value-icon {
        width: 60px;
        height: 60px;
        line-height: 60px;
        background: rgba(0, 61, 122, 0.05);
        color: #003d7a;
        font-size: 1.5rem;
        border-radius: 50%;
        margin: 0 auto;
        transition: 0.3s;
    }

    .value-card:hover .value-icon {
        background: #003d7a;
        color: #fff;
    }

    .value-card h6 {
        color: #0b1c2d;
        margin-top: 10px;
    }

    /* --- Styles de la page À Propos --- */

    /* Boîtes Vision/Mission/Métier */
    .info-box-custom {
        background: #ffffff !important;
        padding: 40px 30px !important;
        border-radius: 15px !important;
        text-align: center !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
        transition: 0.3s !important;
        height: 100% !important;
        border-bottom: 4px solid transparent !important;
    }

    .info-box-custom:hover {
        transform: translateY(-10px) !important;
        border-bottom: 4px solid #003d7a !important;
    }

    .info-box-custom i {
        font-size: 2.5rem !important;
        color: #003d7a !important;
        margin-bottom: 20px !important;
    }

    .info-box-custom h4 {
        color: #0b1c2d !important;
        font-weight: 700 !important;
        margin-bottom: 15px !important;
    }

    /* Valeurs */
    .value-item {
        padding: 20px !important;
        transition: 0.3s !important;
    }

    .value-item i {
        font-size: 2rem !important;
        color: #003d7a !important;
        background: rgba(0, 61, 122, 0.05) !important;
        width: 70px !important;
        height: 70px !important;
        line-height: 70px !important;
        border-radius: 50% !important;
        margin-bottom: 15px !important;
        display: inline-block !important;
        transition: 0.3s !important;
    }

    .value-item:hover i {
        background: #003d7a !important;
        color: #ffffff !important;
        transform: rotateY(360deg) !important;
    }

    .value-item h6 {
        font-weight: 700 !important;
        color: #0b1c2d !important;
        text-transform: uppercase !important;
        font-size: 0.85rem !important;
    }

    /* Images */
    .img-fluid {
        max-width: 100% !important;
        height: auto !important;
    }
</style>

@endsection