<!-- CSS à ajouter dans ton fichier style ou dans <head> -->
<style>
    body {
        padding-top: 120px;
        /* ajuster selon la hauteur topbar + navbar */
    }

    /* Animation pulse pour attirer l'attention sur les réseaux sociaux */
    @keyframes pulse-animation {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.15);
        }

        100% {
            transform: scale(1);
        }
    }

    .pulse {
        animation: pulse-animation 2s infinite;
    }

    /* Effet hover pour boutons sociaux */
    .social-btn {
        transition: all 0.3s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
    }

    .social-btn:hover {
        transform: translateY(-3px) scale(1.2);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }
</style>

<!-- Topbar + Navbar fixés en haut -->
<div class="fixed-top">
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex flex-wrap gap-3 align-items-center">
                <small class="text-white">
                    <i class="fas fa-map-marker-alt me-2"></i> Cocody-Angré, Cité Belles Fleurs 3
                </small>
                <small class="text-white">
                    <i class="fas fa-envelope me-2"></i> info@ticafrique.com
                </small>
            </div>
            <small class="text-white d-none d-xl-block">Note : Nous vous aidons à développer votre entreprise</small>
            <div class="d-flex gap-2">
                <a href="https://www.facebook.com/ticafrique" target="_blank"
                    class="btn btn-sm btn-light rounded-circle social-btn pulse">
                    <i class="fab fa-facebook-f text-primary"></i>
                </a>
                <a href="https://x.com/ticafrique" target="_blank"
                    class="btn btn-sm btn-light rounded-circle social-btn pulse">
                    <i class="bi bi-twitter-x"></i>
                </a>
                <a href="https://www.instagram.com/ticafrique" target="_blank"
                    class="btn btn-sm btn-light rounded-circle social-btn pulse">
                    <i class="fab fa-instagram text-danger"></i>
                </a>
                <a href="https://www.linkedin.com/company/ticafrique" target="_blank"
                    class="btn btn-sm btn-light rounded-circle social-btn pulse">
                    <i class="fab fa-linkedin-in text-primary"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    {{-- Navbar selon contrôleur / route --}}
    @if (request()->routeIs('digital.*'))
        <!-- Navbar Digital -->
        <div class="container-fluid shadow-sm bg-white">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-2">
                    <a href="{{ route('digital.index') }}" class="navbar-brand"> <img
                            src="{{ asset('site/img/logo.jpg') }}" alt="Logo TicAfrique"
                            style="height:55px; object-fit: cover;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapseDigital">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapseDigital">
                        <ul class="navbar-nav ms-auto gap-2">
                            <li class="nav-item">
                                <a href="{{ route('digital.index') }}"
                                    class="nav-link {{ request()->routeIs('digital.index') ? 'text-info' : 'text-dark' }}">Accueil</a>
                            </li>
                            <!-- Ajoute d'autres liens Digital ici si nécessaire -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    @else
        <!-- Navbar TicAfrique -->
        <div class="container-fluid shadow-sm bg-white">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-2">
                    <!-- Logo -->
                    <a href="{{ route('ticafrique.index') }}" class="navbar-brand">
                        <img src="{{ asset('site/img/logo.jpg') }}" alt="Logo TicAfrique"
                            style="height:55px; object-fit: cover;">
                    </a>

                    <!-- Toggle mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapseTicAfrique">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Nav Links -->
                    <div class="collapse navbar-collapse" id="navbarCollapseTicAfrique">
                        <ul class="navbar-nav ms-auto mx-xl-auto gap-2">
                            <li class="nav-item">
                                <a href="{{ route('ticafrique.index') }}"
                                    class="nav-link {{ request()->routeIs('index') ? 'text-info' : 'text-dark' }}">Accueil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-dark dropdown-toggle"
                                    data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu rounded-0">
                                    <li><a href="https://communication-web.ci/home" class="dropdown-item">Digitalisation & Communication digitale</a></li>
                                    <li><a href="https://sigma-web.ci/" class="dropdown-item">Domaine & Hébergement</a>
                                    </li>
                                    <li><a href="https://sigma-telecom.ci/" class="dropdown-item">Télécom</a></li>
                                    <li><a href="https://sms-marketing.ci/" class="dropdown-item">SMS Marketing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ticafrique.about') }}"
                                    class="nav-link {{ request()->routeIs('about') ? 'text-info' : 'text-dark' }}">Présentation</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ticafrique.references') }}"
                                    class="nav-link {{ request()->routeIs('references') ? 'text-info' : 'text-dark' }}">Référence</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ticafrique.contacts') }}"
                                    class="nav-link {{ request()->routeIs('contacts') ? 'text-info' : 'text-dark' }}">Contact</a>
                            </li>
                        </ul>

                        <!-- Right Icons -->
                        <div class="d-none d-xl-flex align-items-center ms-4 gap-3">
                            <a href="#"
                                class="position-relative animate__animated animate__tada animate__infinite">
                                <i class="fa fa-phone-alt text-primary fa-2x"></i>
                                <span class="position-absolute top-0 start-50 translate-middle">
                                    <i class="fa fa-comment-dots text-secondary"></i>
                                </span>
                            </a>
                            <div class="d-flex flex-column pe-4 border-end">
                                <span class="text-secondary">Vous avez des questions ?</span>
                                <span class="fw-bold">Appelez : +225 25 22 00 20 77</span>
                            </div>
                            <a href="#" class="ms-3"><i class="bi bi-search fa-2x text-dark"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    @endif
</div>
