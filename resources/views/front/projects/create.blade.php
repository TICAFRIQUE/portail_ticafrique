@extends('front.layouts.base')

@section('title', 'Soumettre un projet - TIC@FRIQUE')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="text-center mb-5 wow fadeIn">
                    <h5 class="fw-bold text-uppercase" style="color: #003d7a; letter-spacing: 2px;">Briefing de projet</h5>
                    <h1 class="display-5 fw-bold" style="color: #0b1c2d;">Prêt à lancer votre projet ?</h1>
                    <div class="mx-auto mt-3" style="width: 60px; height: 3px; background-color: #003d7a;"></div>
                    <p class="text-muted mt-4">Décrivez-nous votre vision et recevez une analyse personnalisée de nos experts sous 48h.</p>
                </div>

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden wow fadeInUp">
                    <div class="card-body p-4 p-md-5">

                        @if ($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm mb-4 rounded-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li><small>{{ $error }}</small></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success border-0 shadow-sm text-center mb-4 rounded-3">
                            <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('project.store') }}" method="POST" class="project-form">
                            @csrf

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Votre Nom complet</label>
                                    <div class="input-group-custom">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ex: Jean Koffi" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Votre Profession</label>
                                    <div class="input-group-custom">
                                        <i class="fa fa-briefcase"></i>
                                        <input type="text" class="form-control" name="profession" value="{{ old('profession') }}" placeholder="Ex: Entrepreneur" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Numéro de téléphone (WhatsApp de préférence)</label>
                                    <div class="input-group-custom">
                                        <i class="fa fa-phone"></i>
                                        <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="+225 07 ..." required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Détails de votre projet</label>
                                    <div class="input-group-custom align-items-start">
                                        <i class="fa fa-pen-nib mt-3"></i>
                                        <textarea class="form-control" name="description" rows="6"
                                            placeholder="Expliquez-nous votre besoin (Objectifs, budget estimé, délais souhaités...)" required>{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12 mt-5 text-center">
                                    <button type="submit" class="btn btn-submit-project">
                                        <span>Soumettre le projet</span>
                                        <i class="fa fa-arrow-right ms-2"></i>
                                    </button>
                                    <p class="text-muted mt-3 small">
                                        <i class="fa fa-lock me-1"></i> Vos données sont sécurisées et confidentielles.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    /* --- Structure du Formulaire --- */
    .project-form label {
        color: #0b1c2d;
        margin-bottom: 8px;
        display: block;
    }

    /* --- Input Custom Group --- */
    .input-group-custom {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-group-custom i {
        position: absolute;
        left: 20px;
        color: #003d7a;
        font-size: 1rem;
        transition: 0.3s;
        z-index: 10;
    }

    .input-group-custom .form-control {
        padding: 15px 15px 15px 55px !important;
        border: 2px solid #f0f0f0 !important;
        border-radius: 12px !important;
        font-size: 1rem !important;
        background-color: #fafafa !important;
        transition: all 0.3s ease !important;
    }

    .input-group-custom .form-control:focus {
        background-color: #fff !important;
        border-color: #003d7a !important;
        box-shadow: 0 10px 20px rgba(0, 61, 122, 0.05) !important;
        outline: none;
    }

    .input-group-custom .form-control:focus+i {
        color: #003d7a;
    }

    /* --- Bouton Soumettre --- */
    .btn-submit-project {
        background-color: #003d7a !important;
        color: white !important;
        padding: 18px 45px !important;
        border-radius: 50px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        border: none !important;
        transition: all 0.3s !important;
        box-shadow: 0 10px 25px rgba(0, 61, 122, 0.2) !important;
    }

    .btn-submit-project:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 15px 30px rgba(0, 61, 122, 0.3) !important;
        background-color: #0b1c2d !important;
    }

    /* --- Responsive --- */
    @media (max-width: 768px) {
        .card-body {
            padding: 30px 20px !important;
        }
    }
</style>
@endsection