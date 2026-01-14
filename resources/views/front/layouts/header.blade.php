<div class="fixed-top header-wrapper " role="banner">
    <div class="topbar container-fluid bg-dark py-1 d-none d-md-flex transition-all border-bottom border-secondary border-opacity-25">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
                <small class="text-white" style="font-size: 1rem;">
                    <i class="fas fa-map-marker-alt text-info me-1" aria-hidden="true" style="color: #fff !important;"></i> Cocody-Angré
                </small>
                <small class="text-white" style="font-size: 1rem; ">
                    <i class="fas fa-envelope text-info me-1" aria-hidden="true" style="color: #fff !important ;"></i> info@ticafrique.com
                </small>
            </div>
            <div class="d-flex gap-3" role="list">
                <a href="https://www.facebook.com/ticafrique?_rdc=1&_rdr" class="social-link-top" aria-label="Facebook">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="https://x.com/ticafrique" class="social-link-top" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid shadow-sm bg-white navbar-main transition-all">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2" aria-label="Navigation principale">
                <a href="{{ request()->routeIs('digital.*') ? route('digital.index') : route('ticafrique.index') }}"
                    class="navbar-brand"
                    aria-label="Accueil Ticafrique">
                    <img src="{{ asset('site/img/logo.jpg') }}"
                        alt="Logo Ticafrique"
                        class="logo-img"
                        width="150"
                        height="42"
                        loading="lazy">
                </a>

                <button class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                    aria-label="Menu mobile"
                    aria-expanded="false"
                    aria-controls="mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto gap-1" role="list">
                        <li class="nav-item" role="listitem">
                            @if (request()->routeIs('digital.*'))
                            <a href="{{ route('digital.index') }}"
                                class="nav-link active-link"
                                aria-current="page">Accueil Digital</a>
                            @else
                            <a href="{{ route('ticafrique.index') }}"
                                class="nav-link {{ request()->routeIs('ticafrique.index') ? 'active-link' : '' }}"
                                {{ request()->routeIs('ticafrique.index') ? 'aria-current="page"' : '' }}>Accueil</a>
                            @endif
                        </li>

                        <li class="nav-item dropdown" role="listitem">
                            <a href="#"
                                class="nav-link dropdown-toggle"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                id="servicesDropdown">Services</a>
                            <ul class="dropdown-menu border-0 shadow-lg rounded-3"
                                aria-labelledby="servicesDropdown"
                                role="menu">
                                <li role="none">
                                    <a href="https://communication-web.ci/home"
                                        class="dropdown-item py-2 small fw-bold"
                                        role="menuitem">Digitalisation & Communication</a>
                                </li>
                                <li role="none">
                                    <a href="https://sms-marketing.ci/"
                                        class="dropdown-item py-2 small fw-bold"
                                        role="menuitem">SMS Marketing</a>
                                </li>
                                <li role="none">
                                    <a href="https://sigma-web.ci/"
                                        class="dropdown-item py-2 small fw-bold"
                                        role="menuitem">Domaine & Hébergement</a>
                                </li>
                                <li role="none">
                                    <a href="https://sigma-telecom.ci/"
                                        class="dropdown-item py-2 small fw-bold"
                                        role="menuitem">Solutions Télécom</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item" role="listitem">
                            <a href="{{ route('ticafrique.about') }}"
                                class="nav-link {{ request()->routeIs('ticafrique.about') ? 'active-link' : '' }}"
                                {{ request()->routeIs('ticafrique.about') ? 'aria-current="page"' : '' }}>Présentation</a>
                        </li>
                        <li class="nav-item" role="listitem">
                            <a href="{{ route('ticafrique.references') }}"
                                class="nav-link {{ request()->routeIs('ticafrique.references') ? 'active-link' : '' }}"
                                {{ request()->routeIs('ticafrique.references') ? 'aria-current="page"' : '' }}>Références</a>
                        </li>
                        <li class="nav-item" role="listitem">
                            <a href="{{ route('ticafrique.contacts') }}"
                                class="nav-link {{ request()->routeIs('ticafrique.contacts') ? 'active-link' : '' }}"
                                {{ request()->routeIs('ticafrique.contacts') ? 'aria-current="page"' : '' }}>Contact</a>
                        </li>
                    </ul>

                    <div class="ms-lg-4 ps-lg-4 border-start d-none d-lg-block">
                        <a href="tel:+2252522002077"
                            class="phone-box shadow-sm pulse-blue"
                            title="Appelez-nous"
                            aria-label="Appeler le +225 25 22 00 20 77">
                            <i class="fa fa-phone-alt" aria-hidden="true"></i>
                            <span class="online-status" aria-label="En ligne"></span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-blue: #003d7a;
        --hover-blue: #0056b3;
        --text-dark: #222;
        --bg-light: rgba(0, 61, 122, 0.05);
        --transition-speed: 0.3s;
    }

    /* Ajustement global de la hauteur */
    body {
        padding-top: 95px;
        transition: padding-top var(--transition-speed);
    }

    body.scrolled {
        padding-top: 65px;
    }

    .transition-all {
        transition: all var(--transition-speed) ease-in-out;
        will-change: transform, height, opacity;
        transform: translateZ(0);
    }

    /* Logo scaling */
    .logo-img {
        height: 42px;
        width: auto;
        transition: height var(--transition-speed);
        object-fit: contain;
    }

    body.scrolled .logo-img {
        height: 32px;
    }

    /* Topbar */
    .topbar {
        height: 32px;
        will-change: transform, height, opacity;
    }

    body.scrolled .topbar {
        height: 0;
        opacity: 0;
        overflow: hidden;
        transform: translateY(-100%);
    }

    /* Liens Nav */
    .nav-link {
        font-size: 0.78rem !important;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--text-dark) !important;
        padding: 10px 12px !important;
        border-radius: 4px;
        transition: all var(--transition-speed);
    }

    .nav-link:hover,
    .nav-link:focus {
        color: var(--primary-blue) !important;
        background-color: var(--bg-light);
        outline: 2px solid var(--primary-blue);
        outline-offset: 2px;
    }

    .active-link {
        color: var(--primary-blue) !important;
        background-color: var(--bg-light);
        position: relative;
    }

    .active-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 12px;
        right: 12px;
        height: 2px;
        background-color: var(--primary-blue);
        border-radius: 2px;
    }

    /* Bouton Téléphone Carré Compact */
    .phone-box {
        width: 38px;
        height: 38px;
        background: var(--primary-blue);
        color: white !important;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        position: relative;
        text-decoration: none;
        transition: all var(--transition-speed);
        outline: none;
    }

    .phone-box:hover,
    .phone-box:focus {
        transform: translateY(-2px);
        background: var(--hover-blue);
        outline: 2px solid var(--hover-blue);
        outline-offset: 2px;
    }

    .online-status {
        position: absolute;
        top: -2px;
        right: -2px;
        width: 9px;
        height: 9px;
        background: #28a745;
        border: 2px solid white;
        border-radius: 50%;
        box-shadow: 0 0 0 2px var(--primary-blue);
    }

    /* Réseaux sociaux mini */
    .social-link-top {
        color: rgb(255, 255, 255);
        font-size: 1rem;
        transition: color var(--transition-speed);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
    }

    .social-link-top:hover,
    .social-link-top:focus {
        color: #0dcaf0;
        background-color: rgba(255, 255, 255, 0.1);
        outline: none;
    }

    /* Menu déroulant amélioré */
    .dropdown-menu {
        min-width: 220px;
        border-top: 3px solid var(--primary-blue) !important;
        margin-top: 8px !important;
    }

    .dropdown-item {
        transition: all 0.2s;
        position: relative;
        padding: 0.5rem 1rem !important;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        padding-left: 35px !important;
        background-color: var(--bg-light);
        outline: none;
    }

    .dropdown-item:hover::before,
    .dropdown-item:focus::before {
        content: "→";
        position: absolute;
        left: 15px;
        color: var(--primary-blue);
        font-weight: bold;
    }

    /* Animation Pulse */
    @keyframes pulse-blue {
        0% {
            box-shadow: 0 0 0 0 rgba(0, 61, 122, 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(0, 61, 122, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(0, 61, 122, 0);
        }
    }

    .pulse-blue {
        animation: pulse-blue 2s infinite;
    }

    /* Mode sombre */
    @media (prefers-color-scheme: dark) {
        .navbar-main {
            background: #1a1a1a;
            border-bottom: 1px solid #333;
        }

        .nav-link {
            color: #eee !important;
        }

        .nav-link:hover,
        .nav-link:focus {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .dropdown-menu {
            background: #2d2d2d;
            border: 1px solid #444 !important;
            border-top: 3px solid var(--primary-blue) !important;
        }

        .dropdown-item {
            color: #eee;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
    }

    /* Mobile optimisations */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: white;
            padding: 1rem;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .nav-link {
            padding: 12px 15px !important;
            border-bottom: 1px solid #f0f0f0;
        }

        .nav-link:last-child {
            border-bottom: none;
        }

        .active-link::after {
            left: 15px;
            right: 15px;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            margin: 5px 0 !important;
            border: 1px solid #dee2e6 !important;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .transition-all,
        .nav-link,
        .phone-box,
        .social-link-top,
        .logo-img,
        body {
            transition: none !important;
            animation: none !important;
        }

        .pulse-blue {
            animation: none;
        }
    }
</style>

<script>
    // Débounce pour optimiser les performances du scroll
    let scrollTimeout;

    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(function() {
            const body = document.body;
            if (window.scrollY > 40) {
                body.classList.add('scrolled');
            } else {
                body.classList.remove('scrolled');
            }
        }, 10);
    });

    // Gérer l'état actif des liens
    document.addEventListener('DOMContentLoaded', function() {
        // Navigation par clavier améliorée
        const navLinks = document.querySelectorAll('.nav-link, .dropdown-item');
        navLinks.forEach(link => {
            link.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // Mettre à jour aria-expanded sur les dropdowns
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
            });
        });

        // Fermer les dropdowns en cliquant à l'extérieur
        document.addEventListener('click', function(e) {
            if (!e.target.matches('.dropdown-toggle')) {
                dropdownToggles.forEach(toggle => {
                    toggle.setAttribute('aria-expanded', 'false');
                });
            }
        });
    });
</script>