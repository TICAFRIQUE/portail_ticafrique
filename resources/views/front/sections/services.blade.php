<!-- Services Start -->
<div class="container-fluid services py-5 mb-5" id="services">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 700px;">
            <h5 class="text-primary">Nos Services</h5>
            <h1 class="fw-bold">Des solutions modernes pour booster votre entreprise</h1>
        </div>
        <div class="row g-4 services-inner">

            <!-- Service 1 : Digitalisation & Communication digitale -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.2s">
                <div class="services-item bg-white shadow rounded-3 h-100 text-center p-4">
                    <div class="services-content-icon mb-3 d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                        style="width:80px; height:80px;">
                        <i class="fas fa-laptop-code fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Digitalisation & Communication digitale</h4>
                    <p class="text-muted text-truncate-3">
                        ERP, logiciels métiers, sites web, réseaux sociaux, applications mobiles et campagnes emails pour moderniser votre activité.
                    </p>

                    <a href="{{ route('digital.index') }}" class="btn btn-primary rounded-pill mt-3">
                        <i class="fa fa-pen-to-square me-2"></i> En savoir plus
                    </a>

                    {{-- <a href="https://communication-web.ci/home" class="btn btn-primary rounded-pill mt-3">
                        <i class="fa fa-pen-to-square me-2"></i> En savoir plus
                    </a> --}}
                </div>
            </div>

            <!-- Service 2 : Domaine & Hébergement -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
                <div class="services-item bg-white shadow rounded-3 h-100 text-center p-4">
                    <div class="services-content-icon mb-3 d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                        style="width:80px; height:80px;">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Domaine & Hébergement</h4>
                    <p class="text-muted text-truncate-3">
                        Enregistrement de domaines et hébergement web sécurisé pour tous vos projets digitaux.
                    </p>
                    <a href="https://sigma-web.ci/" class="btn btn-primary rounded-pill mt-3">
                        <i class="fa fa-pen-to-square me-2"></i> En savoir plus
                    </a>
                </div>
            </div>

            <!-- Service 3 : Télécom -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
                <div class="services-item bg-white shadow rounded-3 h-100 text-center p-4">
                    <div class="services-content-icon mb-3 d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                        style="width:80px; height:80px;">
                        <i class="fas fa-satellite-dish fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Télécom</h4>
                    <p class="text-muted text-truncate-3">
                        Des solutions télécoms fiables pour une connectivité optimale et sans interruption.
                    </p>
                    <a href="https://sigma-telecom.ci/" class="btn btn-primary rounded-pill mt-3">
                        <i class="fa fa-pen-to-square me-2"></i> En savoir plus
                    </a>
                </div>
            </div>

            <!-- Service 4 : SMS Marketing -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.8s">
                <div class="services-item bg-white shadow rounded-3 h-100 text-center p-4">
                    <div class="services-content-icon mb-3 d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                        style="width:80px; height:80px;">
                        <i class="fas fa-sms fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">SMS Marketing</h4>
                    <p class="text-muted text-truncate-3">
                        Touchez vos clients directement grâce à des campagnes SMS rapides et efficaces.
                    </p>
                    <a href="https://sms-marketing.ci/" class="btn btn-primary rounded-pill mt-3">
                        <i class="fa fa-pen-to-square me-2"></i> En savoir plus
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Styles Hover -->
<style>
    .services-item {
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .services-content-icon {
        background: #f8f9fa;
        transition: all 0.4s ease-in-out;
    }

    .services-item h4,
    .services-item p,
    .services-item i {
        transition: all 0.3s ease-in-out;
    }

    .services-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .services-item:hover .services-content-icon {
        background: #00bbff;
        transform: rotate(10deg) scale(1.1);
    }

    .services-item:hover i {
        color: #fff !important;
    }

    .services-item:hover h4 {
        color: #00bbff;
    }

    .services-item:hover p {
        color: #333;
    }

    .services-item .btn {
        transition: all 0.3s ease-in-out;
    }

    .services-item .btn:hover {
        transform: translateY(-3px) scale(1.05);
        background-color: #00bbff;
        border-color: #00bbff;
    }

    /* Coupe le texte après 3 lignes */
    .text-truncate-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
