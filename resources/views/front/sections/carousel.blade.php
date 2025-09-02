@if ($carrousels->count() < 1)
    <!-- ✅ Carousel par défaut -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Premier slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Deuxième slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('site/img/carousel-1.jpg') }}" class="img-fluid" alt="Premier slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-info h4 animated fadeInUp">Solutions IT Innovantes</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Boostez votre business avec le
                                digital</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Nous créons des solutions numériques sur
                                mesure...</p>
                            <a href="#about"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En
                                    savoir plus</button></a>
                            <a href="#contact"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez-nous</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('site/img/carousel-2.jpg') }}" class="img-fluid" alt="Deuxième slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-info h4 animated fadeInUp">Services Digitaux de Qualité</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Des solutions sur mesure pour
                                votre entreprise</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Du développement web à l’hébergement et
                                au marketing digital...</p>
                            <a href="{{ route('ticafrique.about') }}"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En
                                    savoir plus</button></a>
                            <a href="{{ route('ticafrique.contacts') }}"><button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez-nous</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
@else
    <!-- ✅ Carousel dynamique avec les images uploadées -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carrousels as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $item->image) }}" class="d-block w-100" alt="Image du carrousel"
                            style="max-height:600px; object-fit:cover;">

                        <!-- ✅ La caption doit être DANS le carousel-item -->
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-info h4 animated fadeInUp">{{ $item->titre }}</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">{{ $item->sous_titre }}</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">{{ $item->description }}</p>
                                <a href="{{ route('ticafrique.about') }}"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En
                                        savoir plus</button></a>
                                <a href="{{ route('ticafrique.contacts') }}"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez-nous</button></a>
                                <a href="{{ route('project.create') }}"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Soumettre un projet</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
@endif
{{-- end carousel --}}
