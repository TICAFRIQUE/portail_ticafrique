<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>TicAfi - IT Solutions Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('front.layouts.header')

    <main>
        @yield('content')
    </main>

    @include('front.layouts.footer')
    <!-- Floating Buttons WhatsApp + Back to Top -->
    <div class="floating-buttons">

        <!-- Floating Buttons -->
        <div class="floating-buttons">

            <!-- WhatsApp -->
            <a href="" target="_blank" class="btn whatsapp-btn pulse">
                <i class="fab fa-whatsapp fa-lg text-white"></i>
            </a>

            <!-- Back to Top -->
            <a href="#" class="btn back-to-top-btn">
                <i class="fa fa-arrow-up fa-lg text-white"></i>
            </a>

        </div>

        <style>
            /* Container for floating buttons */
            .floating-buttons {
                position: fixed;
                right: 20px;
                bottom: 20px;
                display: flex;
                flex-direction: column;
                gap: 12px;
                z-index: 9999;
            }

            /* Style commun boutons */
            .floating-buttons .btn {
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
                transition: all 0.3s ease;
            }

            /* WhatsApp bouton avec dégradé bleu + animation pulse */
            .whatsapp-btn {
                background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
                border: none;
            }

            .whatsapp-btn:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            /* Animation pulse */
            .pulse {
                animation: pulse-animation 2s infinite;
            }

            @keyframes pulse-animation {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.1);
                }

                100% {
                    transform: scale(1);
                }
            }

            /* Back to Top bouton avec dégradé gris → bleu */
            .back-to-top-btn {
                background: linear-gradient(135deg, #6c757d 0%, #17a2ff 100%);
                border: none;
            }

            .back-to-top-btn:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            /* Mobile responsiveness */
            @media (max-width: 576px) {
                .floating-buttons {
                    right: 15px;
                    bottom: 15px;
                }

                .floating-buttons .btn {
                    width: 45px;
                    height: 45px;
                }
            }
        </style>

        <script>
            document.querySelector('.back-to-top-btn').addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        </script>




        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>
