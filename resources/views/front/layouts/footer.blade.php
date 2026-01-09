<div class="container-fluid footer wow fadeIn" data-wow-delay=".3s" style="background-color: #001d3d; border-top: 3px solid var(--primary-blue);">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <a href="{{ route('ticafrique.index') }}">
                    <h4 class="text-white fw-bold d-block">Tic<span class="text-info">@frique</span></h4>
                </a>
                <p class="mt-4 text-white-50 small">
                    Expert en solutions technologiques, Tic@frique accompagne la transformation digitale des entreprises avec des infrastructures Cloud, Télécom et Marketing innovantes.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start mt-3 gap-2">
                    <a href="https://facebook.com/ticafrique" class="social-btn-footer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com/company/ticafrique" class="social-btn-footer"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com/ticafrique" class="social-btn-footer"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info mb-4">Liens rapides</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('ticafrique.about') }}" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Présentation</a>
                    <a href="{{ route('ticafrique.references') }}" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Références</a>
                    <a href="{{ route('ticafrique.contacts') }}" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Nous contacter</a>
                    <a href="#" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>FAQ</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info mb-4">Nos Expertises</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="https://communication-web.ci/home" class="footer-link"><i class="fas fa-check-circle text-info me-2 small"></i>Digitalisation</a>
                    <a href="https://sigma-web.ci/" class="footer-link"><i class="fas fa-check-circle text-info me-2 small"></i>Hébergement Cloud</a>
                    <a href="https://sigma-telecom.ci/" class="footer-link"><i class="fas fa-check-circle text-info me-2 small"></i>Solutions Télécom</a>
                    <a href="https://sms-marketing.ci/" class="footer-link"><i class="fas fa-check-circle text-info me-2 small"></i>SMS Marketing</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info mb-4">Contactez-nous</h5>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start text-white-50">
                        <div class="contact-icon-circle me-3"><i class="fas fa-map-marker-alt"></i></div>
                        <small>Cocody-Angré, Cité Belles Fleurs 3</small>
                    </div>
                    <a href="tel:+2252522002077" class="d-flex align-items-center justify-content-center justify-content-md-start footer-link">
                        <div class="contact-icon-circle me-3"><i class="fas fa-phone-alt"></i></div>
                        <small>+225 25 220 020 77</small>
                    </a>
                    <a href="mailto:info@ticafrique.com" class="d-flex align-items-center justify-content-center justify-content-md-start footer-link">
                        <div class="contact-icon-circle me-3"><i class="fas fa-envelope"></i></div>
                        <small>info@ticafrique.com</small>
                    </a>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-4 border-secondary opacity-25">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <span class="text-white-50 small">
                    &copy; 2026 <a href="#" class="text-info fw-bold text-decoration-none">Tic@frique</a>. Tous droits réservés.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-white-50 small">Partenaire de votre transformation digitale.</span>
            </div>
        </div>
    </div>

    <div class="floating-buttons">
        <a href="https://wa.me/+2250778599242" target="_blank" class="btn whatsapp-btn pulse-info">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" id="backToTop" class="btn back-to-top-btn">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
</div>
<style>
    /* Variables pour l'uniformité */
    :root {
        --primary-blue: #003d7a;
        --accent-info: #0dcaf0;
    }

    /* Footer Links */
    .footer-link {
        color: rgba(255, 255, 255, 0.7) !important;
        text-decoration: none;
        transition: 0.3s all ease;
        font-size: 0.9rem;
    }

    .footer-link:hover {
        color: var(--accent-info) !important;
        transform: translateX(5px);
    }

    /* Social Icons Footer */
    .social-btn-footer {
        width: 35px;
        height: 35px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        transition: 0.3s;
        text-decoration: none;
    }

    .social-btn-footer:hover {
        background: var(--accent-info);
        color: var(--primary-blue);
        transform: translateY(-3px);
    }

    /* Contact Circle */
    .contact-icon-circle {
        width: 30px;
        height: 30px;
        min-width: 30px;
        border: 1px solid rgba(13, 202, 240, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-info);
        font-size: 0.8rem;
    }

    /* Floating Buttons */
    .floating-buttons {
        position: fixed;
        right: 25px;
        bottom: 25px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 1000;
    }

    .whatsapp-btn,
    .back-to-top-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        border: none;
        transition: 0.3s;
    }

    .whatsapp-btn {
        background: #25D366;
        font-size: 1.5rem;
    }

    .back-to-top-btn {
        background: var(--primary-blue);
        font-size: 1.2rem;
        display: none;
    }

    /* Caché par défaut */

    .whatsapp-btn:hover,
    .back-to-top-btn:hover {
        transform: scale(1.1) translateY(-5px);
    }

    /* Animation Pulse Info */
    .pulse-info {
        animation: pulse-info-anim 2s infinite;
    }

    @keyframes pulse-info-anim {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
        }

        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }
</style>

<script>
    const backToTop = document.getElementById('backToTop');

    // Affiche le bouton "Back to Top" seulement après 300px de scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.style.display = 'flex';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>