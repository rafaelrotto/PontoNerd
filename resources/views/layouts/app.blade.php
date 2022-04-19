<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ponto Nerd</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div id="app">
        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="align-items-center d-none d-md-flex">
                    <!--<i class="bi bi-clock"></i> Loja Ponto Nerd &copy;-->
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <a href="/home" class="logo me-auto"><img src="{{ asset('img/logocontorno.png') }}" alt="Logo"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li class="dropdown"><a href="#"><span>Cliente</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="#">Alterar Informações</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- .navbar -->
            </div>
        </header><!-- End Header -->
        <main>
            <!-- local da mensagem -->
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                    @endif
                    @if(session('alertmsg'))
                    <p class="alertmsg">{{ session('alertmsg')}}</p>
                    @endif
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </main><!-- End #main -->


        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    <strong><span>Ponto Nerd &copy;</span></strong>
                </div>
            </div>
        </footer><!-- End Footer -->

        <!-- Pre Loader 
        <div id="preloader"></div>
        <a href="#" class="back-to-top"><i class="icofont-simple-up"><img src="/img/logo.png" width="35" height="35 " alt="logo"></i></a>
        -->

    </div>

</body>

</html>