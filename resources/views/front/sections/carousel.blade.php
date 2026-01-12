@php
// On définit les services par défaut si la base de données est vide
$items = $carrousels->count() < 1 ? [
    (object)[ 'image'=> 'site/img/carousel-1.jpg',
    'titre' => 'Digitalisation & Communication',
    'sous_titre' => 'Transformez votre présence en ligne',
    'description'=> 'Expertise en développement et solutions digitales pour moderniser votre entreprise avec TICAFRIQUE.',
    'is_default' => true
    ],
    (object)[
    'image' => 'site/img/carousel-2.jpg',
    'titre' => 'Domaine & Hébergement ',
    'sous_titre' => 'Sécurité & Performance',
    'description'=> 'Des infrastructures robustes et un hébergement haute disponibilité pour vos données critiques.',
    'is_default' => true
    ],
    (object)[
    'image' => 'site/img/carousel-1.jpg',
    'titre' => 'Solutions Télécom',
    'sous_titre' => 'Connectivité sans limite',
    'description'=> 'Infrastructures réseaux et télécommunications avancées pour une connectivité optimale.',
    'is_default' => true
    ],
    (object)[
    'image' => 'site/img/carousel-2.jpg',
    'titre' => 'SMS Marketing',
    'sous_titre' => 'Communiquez avec impact',
    'description'=> 'Atteignez vos clients instantanément grâce à nos solutions de campagnes SMS ciblées.',
    'is_default' => true
    ]
    ] : $carrousels;
    @endphp


    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($items as $key => $item)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="carousel-image-wrapper">
                        <img src="{{ isset($item->is_default) ? asset($item->image) : asset('storage/' . $item->image) }}"
                            class="d-block w-100" alt="Slider TicAfrique">
                    </div>

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <h6 class="text-uppercase fw-bold mb-3 animated slideInDown" style="color: #ffffff; letter-spacing: 3px;">
                                        <span class="px-3 py-1" style="background-color: #003d7a;">{{ $item->titre }}</span>
                                    </h6>
                                    <h1 class="display-2 text-white mb-4 animated slideInRight fw-semibold">
                                        {{ $item->sous_titre }}
                                    </h1>
                                    <p class="mb-5 text-white fs-5 animated slideInDown d-none d-md-block" style="opacity: 0.9;">
                                        {{ $item->description }}
                                    </p>

                                    <div class="d-flex flex-wrap gap-3 animated fadeInUp">
                                        <a href="{{ route('ticafrique.about') }}" class="btn-carousel-primary">
                                            En savoir plus
                                        </a>
                                        <a href="{{ route('ticafrique.contacts') }}" class="btn-carousel-outline">
                                            Contactez-nous
                                        </a>
                                        @if(!isset($item->is_default))
                                        <a href="{{ route('project.create') }}" class="btn-carousel-accent">
                                            Soumettre un projet <i class="fas fa-paper-plane ms-2"></i>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon shadow-sm" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon shadow-sm" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>

    <style>
        /* --- Carousel Tech Style --- */

        /* Wrapper d'image avec dégradé sombre pour la lisibilité */
        .carousel-image-wrapper {
            position: relative;
            height: 85vh;
            /* Hauteur ajustée pour un look moderne */
            min-height: 500px;
        }

        .carousel-image-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(11, 28, 45, 0.8) 0%, rgba(11, 28, 45, 0.2) 100%);
            z-index: 1;
        }

        .carousel-image-wrapper img {
            height: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            z-index: 2;
            top: 50%;
            transform: translateY(-50%);
            bottom: initial;
            text-align: left;
        }

        /* Boutons du Carousel */
        .btn-carousel-primary {
            background-color: #003d7a !important;
            color: #fff !important;
            padding: 14px 30px !important;
            border-radius: 50px !important;
            text-decoration: none !important;
            font-weight: 600 !important;
            transition: 0.3s !important;
            border: 2px solid #003d7a !important;
        }

        .btn-carousel-outline {
            background-color: transparent !important;
            color: #fff !important;
            padding: 14px 30px !important;
            border-radius: 50px !important;
            text-decoration: none !important;
            font-weight: 600 !important;
            border: 2px solid #fff !important;
            transition: 0.3s !important;
        }

        .btn-carousel-accent {
            background-color: #ffffff !important;
            color: #003d7a !important;
            padding: 14px 30px !important;
            border-radius: 50px !important;
            text-decoration: none !important;
            font-weight: 700 !important;
            transition: 0.3s !important;
            border: 2px solid #ffffff !important;
        }

        .btn-carousel-primary:hover,
        .btn-carousel-outline:hover {
            background-color: #fff !important;
            color: #003d7a !important;
            border-color: #fff !important;
        }

        /* Custom Arrows */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #003d7a !important;
            padding: 25px !important;
            border-radius: 50% !important;
        }

        @media (max-width: 768px) {
            .carousel-image-wrapper {
                height: 60vh;
            }

            .display-2 {
                font-size: 2.5rem !important;
            }

            .carousel-caption {
                text-align: center;
            }

            .justify-content-start {
                justify-content: center !important;
            }
        }
    </style>