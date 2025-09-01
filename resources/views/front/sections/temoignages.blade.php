<!-- Témoignages Début -->

@if (session('success'))
    <div class="alert alert-success mt-3 text-center">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger mt-3 text-center">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid testimonial py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nos Témoignages</h5>
            <h1>Ce que disent nos clients !</h1>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach ($avis as $item)
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ $item->photo ? asset('storage/' . $item->photo) : asset('site/img/testimonial-1.jpg') }}"
                                alt="Photo de {{ $item->nom }}" class="rounded-circle"
                                style="width: 80px; height: 80px; object-fit: cover;">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">{{ $item->nom }}</h4>
                            <p class="m-0 pb-3">{{ $item->profession }}</p>
                            <div class="d-flex pe-5">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $item->note)
                                        <i class="fas fa-star me-1 text-warning"></i>
                                    @else
                                        <i class="far fa-star me-1 text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">{{ $item->message }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Bouton Donnez votre avis -->
<div class="text-center mb-5 wow fadeIn" data-wow-delay=".6s">
    <button class="btn btn-primary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#avisModal">
        <i class="fas fa-comment-dots me-2"></i> Donnez votre avis
    </button>
</div>

<!-- Modal Bootstrap pour Donnez votre avis -->
<div class="modal fade" id="avisModal" tabindex="-1" aria-labelledby="avisModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="avisModalLabel">Donnez votre avis</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ticafrique.avis') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom"
                            value="{{ old('nom') }}" placeholder="Votre nom" required>
                        @error('nom')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession"
                            value="{{ old('profession') }}" placeholder="Votre profession" required>
                        @error('profession')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="note" class="form-label">Votre note</label>
                        <select class="form-select" id="note" name="note" required>
                            <option value="">Sélectionnez une note</option>
                            <option value="5" {{ old('note') == 5 ? 'selected' : '' }}>★★★★★ - Excellent</option>
                            <option value="4" {{ old('note') == 4 ? 'selected' : '' }}>★★★★☆ - Très bien</option>
                            <option value="3" {{ old('note') == 3 ? 'selected' : '' }}>★★★☆☆ - Bien</option>
                            <option value="2" {{ old('note') == 2 ? 'selected' : '' }}>★★☆☆☆ - Moyen</option>
                            <option value="1" {{ old('note') == 1 ? 'selected' : '' }}>★☆☆☆☆ - Mauvais</option>
                        </select>
                        @error('note')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Votre témoignage</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Exprimez votre avis..."
                            required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo (optionnelle)</label>
                        <input type="file" class="form-control" name="photo">
                        @error('photo')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script pour fermer la modal automatiquement après succès -->
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalEl = document.getElementById('avisModal');
            var modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
            modal.hide();
        });
    </script>
@endif

<!-- Témoignages Fin -->
