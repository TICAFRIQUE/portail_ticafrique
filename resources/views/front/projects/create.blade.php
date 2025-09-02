@extends('front.layouts.base')

@section('title', 'Soumettre un projet')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <!-- Titre -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-dark"><i class="fa fa-lightbulb text-warning me-2"></i>Soumettre un projet</h2>
                    <p class="text-muted">Partagez votre idée avec nous et notre équipe vous contactera rapidement 🚀</p>
                </div>

                <!-- Carte formulaire -->
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                    <!-- Header -->
                    <div class="card-header text-white text-center py-4"
                        style="background: linear-gradient(135deg, #007bff, #00c6ff);">
                        <h4 class="mb-0 fw-bold"><i class="fa fa-upload me-2"></i>Soumettre votre projet</h4>
                        <p class="mb-0 small">Remplissez le formulaire ci-dessous</p>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-5">

                        <!-- Erreurs -->
                        @if ($errors->any())
                            <div class="alert alert-danger rounded-3 mb-4">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Message succès -->
                        @if (session('success'))
                            <div class="alert alert-success text-center rounded-3 mb-4">
                                <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
                            </div>
                        @endif

                        <!-- Formulaire -->
                        <form action="{{ route('project.store') }}" method="POST" novalidate>
                            @csrf

                            <!-- Nom -->
                            <div class="mb-4 position-relative">
                                <i
                                    class="fa fa-user position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>
                                <input type="text" class="form-control form-control-lg rounded-3 ps-5 shadow-sm"
                                    id="name" name="name" placeholder="Nom complet" required>
                            </div>

                            <!-- Profession -->
                            <div class="mb-4 position-relative">
                                <i
                                    class="fa fa-briefcase position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>
                                <input type="text" class="form-control form-control-lg rounded-3 ps-5 shadow-sm"
                                    id="profession" name="profession" placeholder="Profession" required>
                            </div>

                            <!-- Téléphone -->
                            <div class="mb-4 position-relative">
                                <i
                                    class="fa fa-phone position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>
                                <input type="tel" class="form-control form-control-lg rounded-3 ps-5 shadow-sm"
                                    id="phone" name="phone" placeholder="+225 07 00 00 00 00" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-4 position-relative">
                                <i
                                    class="fa fa-file-alt position-absolute top-0 start-0 translate-middle-y ms-3 mt-3 text-secondary"></i>
                                <textarea class="form-control form-control-lg rounded-3 ps-5 pt-4 shadow-sm" id="description" name="description"
                                    rows="5" placeholder="Description du projet..." required></textarea>
                            </div>

                            <!-- Bouton -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm hover-scale">
                                    <i class="fa fa-paper-plane me-2"></i> Envoyer
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        /* Bouton hover */
        .hover-scale {
            transition: all 0.3s ease-in-out;
        }

        .hover-scale:hover {
            transform: scale(1.05);
            background-color: #32b4ff !important;
        }

        /* Form-control avec icônes */
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }
    </style>
@endsection
