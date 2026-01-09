<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portail TIC@FRIQUE</title>
    <meta name="description" content="TICAFRIQUE - Expert en solutions numériques, télécoms et communication web en Côte d'Ivoire.">
    <meta name="author" content="http://ticafrique.ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #003d7a;
            --accent-cyan: #0dcaf0;
        }

        /* --- Boutons Flottants --- */
        .floating-action-group {
            position: fixed;
            right: 20px;
            bottom: 25px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 1050;
        }

        .btn-float {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            color: white !important;
            text-decoration: none;
        }

        .btn-float:hover {
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        /* Bouton Projet (Cyan) */
        .submit-btn {
            background: linear-gradient(135deg, var(--accent-cyan), #204069ff);
        }

        /* Bouton WhatsApp (Vert ou Cyan selon votre préférence, ici Cyan pour l'uniformité) */
        .whatsapp-float {
            background: #25D366;
            /* Vert officiel pour WhatsApp */
        }

        /* Bouton Back to Top (Bleu Profond) */
        .back-to-top {
            background: var(--primary-blue);
            display: none;
            /* Apparaît au scroll via JS */
        }

        /* Animation Pulse */
        .pulse-effect {
            animation: pulse-ring 2s infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(34, 102, 249, 0.6);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 12px rgba(13, 202, 240, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(13, 202, 240, 0);
            }
        }

        @media (max-width: 576px) {
            .btn-float {
                width: 45px;
                height: 45px;
            }

            .floating-action-group {
                right: 15px;
                bottom: 15px;
            }
        }
    </style>
</head>

<body>
    @include('front.layouts.header')

    <main>
        @yield('content')
    </main>

    @include('front.layouts.footer')

    <div class="floating-action-group">
        <a href="{{ route('project.create') }}" class="btn-float submit-btn pulse-effect" title="Soumettre un projet">
            <i class="bi bi-file-earmark-plus-fill fs-4"></i>
        </a>

        <a href="https://wa.me/+2250778599242" target="_blank" class="btn-float whatsapp-float" title="Nous contacter sur WhatsApp">
            <i class="fab fa-whatsapp fa-2x"></i>
        </a>

        <a href="#" id="scrollTopBtn" class="btn-float back-to-top" title="Retour en haut">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
        // Initialisation de WOW.js
        new WOW().init();

        // Gestion du bouton de retour en haut
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                scrollTopBtn.style.display = 'flex';
            } else {
                scrollTopBtn.style.display = 'none';
            }
        });

        scrollTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>