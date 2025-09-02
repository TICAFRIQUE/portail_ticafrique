<!-- Footer Start -->
<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 pb-4">

        <div class="row g-5">
            <!-- À propos -->
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <a href="index.html">
                    <h4 class="text-white fw-bold d-block">Tic<span class="text-info">Afrique</span></h4>
                </a>
                <p class="mt-4 text-light">
                    TicAfrique est une agence spécialisée dans les solutions informatiques innovantes, offrant des
                    services de qualité pour répondre aux besoins de votre entreprise.
                </p>

                <div class="d-flex justify-content-center justify-content-md-start mt-3 gap-2">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/ticafrique?_rdc=1&_rdr"
                        class="btn btn-light btn-square rounded-circle social-icon">
                        <i class="fab fa-facebook-f text-primary"></i>
                    </a>

                    <!-- X (anciennement Twitter) -->
                    <a href="https://x.com/ticafrique" class="btn btn-light btn-square rounded-circle social-icon">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/ticafrique"
                        class="btn btn-light btn-square rounded-circle social-icon">
                        <i class="bi bi-instagram text-danger"></i>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/company/ticafrique/posts/?feedView=all"
                        class="btn btn-light btn-square rounded-circle social-icon">
                        <i class="fab fa-linkedin-in text-primary"></i>
                    </a>
                </div>

            </div>

            <!-- Liens rapides -->
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info mb-3">Liens utiles</h5>
                <div class="d-flex flex-column">
                    <a href="#about" class="mb-2 text-white footer-link">
                        <i class="fas fa-angle-right me-2"></i>À propos
                    </a>
                    <a href="{{ route('ticafrique.contacts') }}" class="mb-2 text-white footer-link">
                        <i class="fas fa-angle-right me-2"></i>Contact
                    </a>
                    <a href="#services" class="mb-2 text-white footer-link">
                        <i class="fas fa-angle-right me-2"></i>Nos Services
                    </a>
                </div>
            </div>

            <!-- Liens d'aide -->
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info mb-3">Aide</h5>
                <div class="d-flex flex-column">
                    <a href="#" class="mb-2 text-white footer-link"><i
                            class="fas fa-angle-right me-2 d-none"></i>Conditions d'utilisation</a>
                    <a href="#" class="mb-2 text-white footer-link"><i
                            class="fas fa-angle-right me-2"></i>Politique de confidentialité</a>
                    <a href="#" class="mb-2 text-white footer-link"><i
                            class="fas fa-angle-right me-2"></i>Aide</a>
                    <a href="#" class="mb-2 text-white footer-link"><i class="fas fa-angle-right me-2"></i>FAQ</a>
                    <a href="{{ route('ticafrique.contacts') }}" class="mb-2 text-white footer-link"><i
                            class="fas fa-angle-right me-2"></i>Contact</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info mb-3">Contactez-nous</h5>
                <div class="text-white d-flex flex-column">
                    <a href="{{ route('ticafrique.contacts') }}"
                        class="pb-3 text-light border-bottom border-primary footer-link">
                        <i class="fas fa-map-marker-alt me-2"></i>Cocody-Angré, Cité Belles Fleurs 3
                    </a>
                    <a href="tel:+2252522002077" class="py-3 text-light border-bottom border-primary footer-link">
                        <i class="fas fa-phone-alt me-2"></i>+225 25 220 020 77
                    </a>
                    <a href="mailto:info@ticafrique.com"
                        class="py-3 text-light border-bottom border-primary footer-link">
                        <i class="fas fa-envelope me-2"></i>info@ticafrique.com
                    </a>
                </div>
            </div>
        </div>

        <hr class="text-light mt-5 mb-4">

        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <span class="text-white">
                    <i class="fas fa-copyright me-2"></i>
                    <a href="#" class="text-info">TicAfrique</a>, Tous droits réservés.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-light">Conçu par <a href="#" class="text-info">TicAfrique</a></span>
            </div>
        </div>

    </div>

    <!-- Floating WhatsApp & Back to Top -->
    <div class="floating-buttons">
        <a href="" target="_blank" class="btn whatsapp-btn pulse">
            <i class="fab fa-whatsapp fa-lg text-white"></i>
        </a>
        <a href="#" class="btn back-to-top-btn rotate">
            <i class="fa fa-arrow-up fa-lg text-white"></i>
        </a>
    </div>
</div>
<!-- Footer End -->

<style>
    /* Footer links hover */
    .footer a.footer-link {
        transition: color 0.3s, transform 0.3s;
    }

    .footer a.footer-link:hover {
        color: #17a2ff;
        transform: translateX(3px);
        text-decoration: none;
    }

    /* Social icons hover */
    .footer .social-icon i {
        color: #1842b6;
        transition: color 0.3s, transform 0.3s;
    }

    .footer .social-icon:hover i {
        color: #17a2ff;
        transform: scale(1.2);
    }

    .footer .social-icon {
        transition: transform 0.3s;
    }

    .footer .social-icon:hover {
        transform: translateY(-3px);
    }

    /* Floating buttons */
    .floating-buttons {
        position: fixed;
        right: 20px;
        bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        z-index: 9999;
    }

    .floating-buttons .btn {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease;
    }

    /* WhatsApp button */
    .whatsapp-btn {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        border: none;
    }

    .whatsapp-btn:hover {
        transform: translateY(-4px) scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    /* Pulse animation */
    .pulse {
        animation: pulse-animation 2s infinite;
    }

    @keyframes pulse-animation {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Back to Top button */
    .back-to-top-btn {
        background: linear-gradient(135deg, #6c757d 0%, #17a2ff 100%);
        border: none;
    }

    .back-to-top-btn:hover {
        transform: translateY(-4px) rotate(-10deg) scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    /* Add rotate class for subtle rotation */
    .rotate {
        transition: transform 0.3s ease;
    }

    /* Mobile responsiveness */
    @media (max-width: 576px) {
        .floating-buttons {
            right: 15px;
            bottom: 15px;
        }

        .floating-buttons .btn {
            width: 45px;
            height: 45px;
        }
    }
</style>

<script>
    document.querySelector('.back-to-top-btn').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
