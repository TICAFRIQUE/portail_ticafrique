<section class="py-5 bg-light overflow-hidden">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase" style="color: #003d7a; letter-spacing: 2px;">Avis Clients</h5>
            <h1 class="display-5 fw-bold" style="color: #0b1c2d;">Ce que disent nos partenaires</h1>
            <div class="mx-auto mt-3 mb-4" style="width: 70px; height: 3px; background-color: #003d7a;"></div>
        </div>

        @if (session('success') || $errors->any())
        <div class="container mb-4">
            @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-3">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm rounded-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        @endif

        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach ($avis as $item)
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0">
                        @if ($item->photo)
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->nom }}" class="avatar shadow-sm">
                        @else
                        <div class="avatar-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                        @endif
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-1 fw-bold text-dark">{{ $item->nom }}</h5>
                        <small class="text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">{{ $item->profession }}</small>
                        <div class="mt-1">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= $item->note ? 'text-warning' : 'text-light' }}" style="font-size: 0.8rem;"></i>
                                @endfor
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">"{{ $item->message }}"</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5 wow fadeIn" data-wow-delay=".6s">
            <button class="btn btn-feedback" data-bs-toggle="modal" data-bs-target="#avisModal">
                <i class="fas fa-pen-nib me-2"></i> Partagez votre expérience
            </button>
        </div>
    </div>
</section>

<div class="modal fade" id="avisModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 pb-0 px-4 pt-4">
                <h4 class="fw-bold" style="color: #0b1c2d;">Votre avis nous est précieux</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('ticafrique.avis') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Nom complet</label>
                            <input type="text" class="form-control custom-input" name="nom" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Profession / Entreprise</label>
                            <input type="text" class="form-control custom-input" name="profession" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Note</label>
                            <select class="form-select custom-input" name="note" required>
                                <option value="5">★★★★★ (Excellent)</option>
                                <option value="4">★★★★☆ (Très bien)</option>
                                <option value="3">★★★☆☆ (Bien)</option>
                                <option value="2">★★☆☆☆ (Moyen)</option>
                                <option value="1">★☆☆☆☆ (Décevant)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Votre message</label>
                            <textarea class="form-control custom-input" name="message" rows="4" required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Photo (Optionnel)</label>
                            <input type="file" class="form-control custom-input" name="photo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-4 py-3 fw-bold rounded-3" style="background-color: #003d7a;">
                        Publier mon avis
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>

    /* --- Styles Témoignages --- */

    .testimonial-card {
        background: #ffffff !important;
        padding: 40px 30px !important;
        border-radius: 20px !important;
        border: 1px solid #f1f1f1 !important;
        position: relative !important;
        margin: 15px !important;
        transition: 0.4s !important;
        min-height: 280px !important;
    }

    .testimonial-card:hover {
        box-shadow: 0 15px 35px rgba(0, 61, 122, 0.08) !important;
        transform: translateY(-5px) !important;
    }

    .quote-icon {
        position: absolute !important;
        top: 20px !important;
        right: 30px !important;
        font-size: 2.5rem !important;
        color: rgba(0, 61, 122, 0.05) !important;
    }

    .avatar {
        width: 65px !important;
        height: 65px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
        border: 3px solid #fff !important;
    }

    .avatar-placeholder {
        width: 65px !important;
        height: 65px !important;
        border-radius: 50% !important;
        background: #003d7a !important;
        color: white !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 1.2rem !important;
    }

    .testimonial-text {
        font-style: italic !important;
        color: #555 !important;
        line-height: 1.7 !important;
        font-size: 1rem !important;
    }

    /* Bouton Feedback */
    .btn-feedback {
        background: transparent !important;
        color: #003d7a !important;
        border: 2px solid #003d7a !important;
        border-radius: 50px !important;
        padding: 12px 35px !important;
        font-weight: 700 !important;
        transition: 0.3s !important;
    }

    .btn-feedback:hover {
        background: #003d7a !important;
        color: white !important;
    }

    /* Inputs de la Modal */
    .custom-input {
        border: 1px solid #eee !important;
        padding: 12px !important;
        border-radius: 8px !important;
        font-size: 0.9rem !important;
    }

    .custom-input:focus {
        border-color: #003d7a !important;
        box-shadow: 0 0 0 0.25rem rgba(0, 61, 122, 0.05) !important;
    }
</style>
