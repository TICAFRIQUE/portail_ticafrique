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
                    <h5 class="text-primary">À propos de nous</h5>
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





    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
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



    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team">
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



    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <!-- Titre Section -->
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Contactez-nous</h5>
                <h1 class="mb-3">Pour toute demande ou information</h1>

            </div>

            <!-- Détails Contact -->
            <div class="contact-detail position-relative p-5" id="contact">
                <div class="row g-5 mb-5 justify-content-center">
                    <!-- Adresse -->
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Adresse</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">
                                    23 rue, Cocody, Abidjan, Côte d'Ivoire
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Appelez-nous</h4>
                                <a class="h5" href="tel:+0123456789"> +225 25 220 020 77</a>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email</h4>
                                <a class="h5" href="mailto:info@ticafrique.com">info@ticafrique.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte et Formulaire -->
                <div class="row g-5">
                    <!-- Carte -->
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1351635388105!2d-3.9931363852347803!3d5.396367296086005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc194a6d23e34df%3A0xb57679beb78c7b98!2sTICAFRIQUE!5e0!3m2!1sfr!2sci!4v1645524267379!5m2!1sfr!2sci"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- Formulaire -->
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Votre nom">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" placeholder="Votre email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Sujet du projet">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" placeholder="Votre message"></textarea>
                            </div>
                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5" type="button">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
