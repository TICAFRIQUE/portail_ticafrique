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
    <div class="container text-center">
        @if (count($avis) > 0)
            <div class="mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 700px;">
                <h5 class="text-primary">Nos Témoignages</h5>
                <h1 class="fw-bold">Ce que disent nos clients !</h1>
            </div>
        @endif

        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach ($avis as $item)
                <div class="testimonial-item card border-0 shadow-sm p-4 d-flex flex-column align-items-center text-center hover-shadow"
                    style="transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="{{ $item->photo ? asset('storage/' . $item->photo) : asset('site/img/testimonial-1.jpg') }}"
                        alt="Photo de {{ $item->nom }}" class="rounded-circle mb-3"
                        style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #0d6efd;">

                    <h4 class="text-secondary fw-bold">{{ $item->nom }}</h4>
                    <p class="m-0 mb-2 fst-italic text-muted">{{ $item->profession }}</p>

                    <div class="mb-3">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star me-1 {{ $i <= $item->note ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                    </div>

                    <p class="px-3">{{ $item->message }}</p>
                </div>
            @endforeach
        </div>

        <!-- Bouton Donnez votre avis -->
        <div class="text-center mt-4 wow fadeIn" data-wow-delay=".6s">
            <button class="btn btn-primary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#avisModal">
                <i class="fas fa-comment-dots me-2"></i> Donnez votre avis
            </button>
        </div>
    </div>
</div>

<style>
    /* Effet hover sur chaque carte */
    .testimonial-item.hover-shadow:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Modal Bootstrap inchangé -->
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
                    <!-- Form fields inchangés -->
                </form>
            </div>
        </div>
    </div>
</div>

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
