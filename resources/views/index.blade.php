@extends('front.layouts.base')


@section('content')
    @include('front.sections.carousel')



    <!-- Fact Start -->
    <div class="container-fluid style-bg py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-dark mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-dark mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-dark mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-dark mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->



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
                    <h5 class="text-primary">PRESENTATION</h5>
                    <h1 class="mb-4">Découvrez TicAfrique et ses solutions numériques</h1>

                    <p>
                        <strong>TICAFRIQUE</strong>, département de SIP, est spécialisée dans le développement de solutions
                        TIC innovantes pour accompagner les entreprises et organisations africaines dans leur transformation
                        digitale.
                    </p>
                    <p>
                        Notre mission est claire : <strong>réduire vos coûts, renforcer votre visibilité et optimiser vos
                            performances</strong>
                        à travers des services sur mesure en télécoms, développement web, communication digitale,
                        hébergement et gestion de domaines.
                    </p>
                    <p class="mb-4">
                        Avec une équipe passionnée et expérimentée, nous bâtissons des projets numériques efficaces et
                        durables,
                        en privilégiant une approche orientée client qui crée un véritable avantage concurrentiel.
                    </p>

                    <a href="{{ route('ticafrique.about') }}"
                        class="btn rounded-pill px-5 py-3 text-decoration-none style-btn">
                        En savoir plus
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- À propos End -->



    @include('front.sections.services')




    {{-- j'ai desactivé la patie blog puisque ticafique n'a pas de blog pour le moment --}}
    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5 d-none">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{ asset('site/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">Web Design</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn style-btn px-3 rounded-pill my-auto">
                                <a href="#" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn style-btn px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="#" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="#" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="#" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{ asset('site/img/admin.jpg') }}"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">24 March 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324
                                    Share</small></a>
                            <a href="#" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5
                                    Comments</small></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{ asset('site/img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">Development</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn style-btn px-3 rounded-pill my-auto">
                                <a href="#" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn style-btn px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="#" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="#" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="#" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{ asset('site/img/admin.jpg') }}"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">23 April 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white"><small><i
                                        class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="#" class="text-white"><small><i
                                        class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{ asset('site/img/blog-3.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">Mobile App</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn style-btn px-3 rounded-pill my-auto">
                                <a href="#" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn style-btn px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="#" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="#" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="#" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{ asset('site/img/admin.jpg') }}"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">30 jan 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div
                            class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white"><small><i
                                        class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="#" class="text-white"><small><i
                                        class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->


    {{-- j'ai desactivé cette partie parce les techniciens de ticafrique.... sont pas sur le site --}}

    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team d-none">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Team</h5>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">

                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{ asset('site/img/team-1.jpg') }}" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square style-btn text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{ asset('site/img/team-2.jpg') }}" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square style-btn text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{ asset('site/img/team-3.jpg') }}" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square style-btn text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{ asset('site/img/team-4.jpg') }}" class="img-fluid w-100 rounded-circle"
                                    alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square style-btn text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square style-btn  text-white rounded-circle m-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


    @include('front.sections.temoignages')

    <!-- Références Début -->
    <div class="container-fluid references py-5 bg-light" id="references">
        <div class="container">
            <div class="text-center mb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Nos Références</h5>
                <h1 class="fw-bold">Ils nous font confiance</h1>
            </div>

            <!-- Carousel auto-scroll -->
            <div class="d-flex overflow-hidden">
                <div class="d-flex references-track">
                    @foreach ($references as $reference)
                        <div class="reference-item text-center px-3">
                            <img src="{{ asset('storage/' . $reference->icon) }}"
                                alt="{{ $reference->title ?? 'Référence' }}" class="img-fluid"
                                style="max-height: 80px;">
                            <p class="small mt-2">{{ $reference->title }}</p>
                        </div>
                    @endforeach

                    {{-- On répète les références pour la boucle infinie --}}
                    @foreach ($references as $reference)
                        <div class="reference-item text-center px-3">
                            <img src="{{ asset('storage/' . $reference->icon) }}"
                                alt="{{ $reference->title ?? 'Référence' }}" class="img-fluid"
                                style="max-height: 80px;">
                            <p class="small mt-2">{{ $reference->title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Références Fin -->

    <style>
        .references-track {
            display: flex;
            animation: scroll 20s linear infinite;
            gap: 1rem;
            align-items: center;
        }

        .reference-item img {
            transition: transform 0.3s ease-in-out;
        }

        .reference-item img:hover {
            transform: scale(1.05);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .references-track {
                animation: scroll 25s linear infinite;
            }

            .reference-item {
                flex: 0 0 auto;
            }
        }

        @media (max-width: 480px) {
            .reference-item {
                flex: 0 0 auto;
            }
        }
    </style>
@endsection
