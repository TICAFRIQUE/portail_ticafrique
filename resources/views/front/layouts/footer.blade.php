<div class="container-fluid footer wow fadeIn" data-wow-delay=".3s" style="background-color: rgba(4, 46, 83, 1); color: white;">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <a href="{{ route('ticafrique.index') }}" class="text-decoration-none">
                    <h4 class="text-white fw-bold d-block">TIC<span class="text-info-custom">AFRIQUE</span></h4>
                </a>
                <p class="mt-4 text-white-80 small">
                    Expert en solutions technologiques, TICAFRIQUE accompagne la transformation digitale des entreprises avec des infrastructures Cloud, Télécom et Marketing innovantes.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start mt-3 gap-2">
                    <a href="https://facebook.com/ticafrique" class="social-btn-footer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com/company/ticafrique" class="social-btn-footer"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com/ticafrique" class="social-btn-footer"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info-custom mb-4">Liens rapides</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('ticafrique.about') }}" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Présentation</a>
                    <a href="{{ route('ticafrique.references') }}" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Références</a>
                    <a href="{{ route('ticafrique.contacts') }}" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Nous contacter</a>
                    <a href="#" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>FAQ</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info-custom mb-4">Nos Expertises</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="https://communication-web.ci/home" class="footer-link"><i class="fas fa-check-circle text-info-custom me-2 small"></i>Digitalisation & Communication</a>
                                        <a href="https://sms-marketing.ci/" class="footer-link"><i class="fas fa-check-circle text-info-custom me-2 small"></i>SMS Marketing</a>
                    <a href="https://sigma-web.ci/" class="footer-link"><i class="fas fa-check-circle text-info-custom me-2 small"></i>Domaine & Hébergement</a>
                    <a href="https://sigma-telecom.ci/" class="footer-link"><i class="fas fa-check-circle text-info-custom me-2 small"></i>Solutions Télécom</a>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-info-custom mb-4">Contactez-nous</h5>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start text-white-80">
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

        <hr class="mt-5 mb-4 border-white opacity-25">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <span class="text-white-80 small">
                    &copy; 2026 <a href="#" class="text-info-custom fw-bold text-decoration-none">TICAFRIQUE</a>. Tous droits réservés.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-white-80 small">Partenaire de votre transformation digitale.</span>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-pure-blue: #003d7a;
        --accent-cyan: #fff;
    }

    .text-info-custom {
        color: var(--accent-cyan) !important;
    }

    .text-white-80 {
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .footer-link {
        color: rgba(255, 255, 255, 0.8) !important;
        text-decoration: none;
        transition: 0.3s all ease;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
    }

    .footer-link:hover {
        color: #0dcaf0 !important;
        /* Cyan pour le hover */
        transform: translateX(8px);
    }

    .social-btn-footer {
        width: 38px;
        height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        transition: 0.3s;
        text-decoration: none;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-btn-footer:hover {
        background: white;
        color: var(--primary-pure-blue);
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .contact-icon-circle {
        width: 32px;
        height: 32px;
        min-width: 32px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0dcaf0;
        font-size: 0.85rem;
    }
</style>