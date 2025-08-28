@extends('front.layouts.base')

@section('title', 'Références')

@section('content')
<!-- References Start -->
<div class="container-fluid py-5 bg-light" id="references">
    <div class="container pt-5">
        <div class="text-center mb-5">
            <h5 class="text-primary">Nos Références</h5>
            <h1 class="fw-bold">Ils nous font confiance</h1>
        </div>

        <!-- Logos des références -->
        <div class="row justify-content-center g-4">
            @foreach ($references as $reference)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="p-3 border rounded reference-card">
                        <img src="{{ asset('storage/' . $reference->icon) }}"
                             class="img-fluid reference-icon"
                             alt="{{ $reference->title }}">
                        <p class="mt-2">{{ $reference->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
<!-- References End -->

<style>
    /* Uniformisation des icônes */
    .reference-icon {
        max-height: 80px;
        object-fit: contain;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    /* Hover effect sur les logos */
    .reference-card:hover .reference-icon {
        transform: scale(1.1);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* Card padding + centrage */
    .reference-card {
        background-color: #ffffff;
        transition: transform 0.3s;
    }

    .reference-card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection
