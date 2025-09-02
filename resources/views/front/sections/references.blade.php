@extends('front.layouts.base')

@section('title', 'Références')

@section('content')
    <!-- References Start -->
    <div class="container-fluid py-5 bg-light" id="references">
        <div class="container pt-5">
            @if (count($references) > 0)
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary fw-bold">Nos Références</h5>
                    <h1 class="fw-bold">Ils nous font confiance !</h1>
                </div>
            @endif

            <!-- Logos des références -->
            <div class="row justify-content-center g-4">
                @foreach ($references as $reference)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                        <div class="p-3 border rounded reference-card shadow-sm bg-white">
                            <img src="{{ asset('storage/' . $reference->icon) }}" class="img-fluid reference-icon mb-2"
                                alt="{{ $reference->title }}">
                            <p class="mb-0 fw-semibold">{{ $reference->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- References End -->

    <!-- Styles modernes -->
    <style>
        /* Uniformisation des icônes */
        .reference-icon {
            max-height: 80px;
            object-fit: contain;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect sur les logos */
        .reference-card:hover .reference-icon {
            transform: scale(1.15) rotate(-2deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Card padding + centrage + hover */
        .reference-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .reference-card:hover {
            transform: translateY(-8px);
        }

        /* Texte des titres */
        .reference-card p {
            font-size: 0.9rem;
            color: #555;
            transition: color 0.3s ease;
        }

        .reference-card:hover p {
            color: #007bff;
        }
    </style>
@endsection
