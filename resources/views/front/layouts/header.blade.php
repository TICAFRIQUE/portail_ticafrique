<!-- CSS à ajouter dans ton fichier style ou dans <head> -->
<style>
    body {
        padding-top: 120px;
        /* ajuster si nécessaire selon la hauteur topbar + navbar */
    }
</style>

<!-- Topbar + Navbar fixés en haut -->
<div class="fixed-top">
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex flex-wrap gap-3 align-items-center">
                <small class="text-white">
                    <i class="fas fa-map-marker-alt text-white me-2"></i> Cocody-Angré, Cité Belles Fleurs 3
                </small>
                <small class="text-white">
                    <i class="fas fa-envelope text-white me-2"></i> info@ticafrique.com
                </small>
            </div>
            <small class="text-white d-none d-xl-block">Note : Nous vous aidons à développer votre entreprise</small>
            <div class="d-flex gap-2">
                <a href="#" class="btn btn-sm btn-light rounded-circle"><i
                        class="fab fa-facebook-f text-primary"></i></a>
                <a href="#" class="btn btn-sm btn-light rounded-circle"><i
                        class="fab fa-twitter text-primary"></i></a>
                <a href="#" class="btn btn-sm btn-light rounded-circle"><i
                        class="fab fa-instagram text-primary"></i></a>
                <a href="#" class="btn btn-sm btn-light rounded-circle"><i
                        class="fab fa-linkedin-in text-primary"></i></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid shadow-sm bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2">
                <!-- Logo -->
                <a href="{{ route('ticafrique.index') }}" class="navbar-brand">
                    <h1 class="text-dark fw-bold m-0">Tic<span class="text-info">Afrique</span></h1>
                </a>

                <!-- Toggle mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Nav Links -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mx-xl-auto gap-2">
                        <li class="nav-item">
                            <a href="{{ route('ticafrique.index') }}"
                                class="nav-link {{ request()->routeIs('index') ? 'text-info' : 'text-dark' }}">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-dark dropdown-toggle"
                                data-bs-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu rounded-0">
                                <li><a href="#" class="dropdown-item">Développement Web</a></li>
                                <li><a href="#" class="dropdown-item">Domaine & Hébergement</a></li>
                                <li><a href="#" class="dropdown-item">Télécom</a></li>
                                <li><a href="#" class="dropdown-item">SMS Marketing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#about"
                                class="nav-link {{ request()->routeIs('about') ? 'text-info' : 'text-dark' }}">À
                                propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ticafrique.projects') }}"
                                class="nav-link {{ request()->routeIs('projects') ? 'text-info' : 'text-dark' }}">Nos
                                Projets</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-dark dropdown-toggle"
                                data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu rounded-0">
                                <li><a href="#" class="dropdown-item">Blog</a></li>
                                <li><a href="#" class="dropdown-item">Équipe</a></li>
                                <li><a href="#" class="dropdown-item">Témoignages</a></li>
                                <li><a href="#" class="dropdown-item">Page 404</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#contact"
                                class="nav-link {{ request()->routeIs('contacts') ? 'text-info' : 'text-dark' }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Right Icons -->
                <div class="d-none d-xl-flex align-items-center ms-4 gap-3">
                    <a href="#" class="position-relative animate__animated animate__tada animate__infinite">
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
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</div>
