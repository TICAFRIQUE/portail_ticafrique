@extends('front.layouts.base')
@section('title', 'Contact - TIC@FRIQUE')

@section('content')
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase" style="color: #003d7a; letter-spacing: 2px;">Contactez-nous</h5>
            <h1 class="display-5 fw-bold" style="color: #0b1c2d;">Une question ? Un projet ? Parlons-en ensemble.</h1>
            <div class="mx-auto mt-3" style="width: 70px; height: 3px; background-color: #003d7a;"></div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                <div class="contact-card">
                    <div class="icon-box">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4>Notre Siège</h4>
                        <p>23 rue, Cocody, Abidjan, Côte d'Ivoire</p>
                        <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank">Voir sur Google Maps</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                <div class="contact-card">
                    <div class="icon-box">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div>
                        <h4>Appelez-nous</h4>
                        <p>Disponible du Lun - Ven</p>
                        <a href="tel:+2252522002077">+225 25 22 00 20 77</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                <div class="contact-card">
                    <div class="icon-box">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div>
                        <h4>Email direct</h4>
                        <p>Réponse sous 24h</p>
                        <a href="mailto:info@ticafrique.com">info@ticafrique.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 align-items-stretch">
            <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 rounded-4 overflow-hidden shadow-sm border" style="min-height: 400px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3361474582!2d-3.9856!3d5.3484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1934983057e93%3A0x6a0a000000000000!2sCocody%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1620000000000!5m2!1sfr!2sci"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                <div class="p-4 p-md-5 rounded-4 shadow-sm border bg-white">
                    <h3 class="fw-bold mb-4" style="color: #0b1c2d;">Envoyez-nous un message</h3>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Votre Nom">
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Votre Email">
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Sujet">
                                    <label for="subject">Sujet du projet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Message" id="message" style="height: 150px"></textarea>
                                    <label for="message">Comment pouvons-nous vous aider ?</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn w-100 py-3 fw-bold shadow-sm" type="submit"
                                    style="background-color: #003d7a; color: white; border-radius: 10px;">
                                    Envoyer le message <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    

    /* Cartes de contact */
    .contact-card {
        background: #ffffff !important;
        padding: 30px !important;
        border-radius: 20px !important;
        display: flex !important;
        align-items: center !important;
        border: 1px solid #f0f0f0 !important;
        transition: 0.3s !important;
        height: 100% !important;
    }

    .contact-card:hover {
        box-shadow: 0 15px 30px rgba(0, 61, 122, 0.08) !important;
        transform: translateY(-5px) !important;
        border-color: #003d7a !important;
    }

    .contact-card .icon-box {
        width: 65px !important;
        height: 65px !important;
        background: rgba(0, 61, 122, 0.05) !important;
        color: #003d7a !important;
        border-radius: 15px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 1.5rem !important;
        margin-right: 20px !important;
        flex-shrink: 0 !important;
    }

    .contact-card h4 {
        font-size: 1.1rem !important;
        font-weight: 700 !important;
        margin-bottom: 5px !important;
        color: #0b1c2d !important;
    }

    .contact-card p {
        margin-bottom: 0 !important;
        color: #666 !important;
        font-size: 0.9rem !important;
    }

    .contact-card a {
        color: #003d7a !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        font-size: 0.95rem !important;
    }

    /* Formulaire moderne */
    .form-control {
        border: 1px solid #e0e0e0 !important;
        border-radius: 10px !important;
        padding: 1rem 0.75rem !important;
    }

    .form-control:focus {
        border-color: #003d7a !important;
        box-shadow: 0 0 0 0.25rem rgba(0, 61, 122, 0.1) !important;
    }

    .form-floating>label {
        color: #999 !important;
    }

</style>
@endsection