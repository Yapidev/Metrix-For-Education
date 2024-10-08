<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link href="{{ asset('img/metrixforedu.png') }}" rel="icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>Metrix For Education - Smart People Behind Smartphone</title>

    <!-- Meta Keywords and Description -->
    <meta name="keywords"
        content="Metrix For Education, metrixflasher, metrixforeducation, Metrix Education, pendidikan online, e-learning, sumber daya pendidikan, pembelajaran cerdas, pembelajaran melalui smartphone, pendidikan berkualitas, kursus online, alat pendidikan, pelatihan teknisi smartphone, kursus teknisi, teknisi smartphone, kursus perbaikan smartphone, pelatihan perbaikan ponsel">
    <meta name="description"
        content="Metrix For Education adalah lembaga pelatihan teknisi smartphone berpengalaman sejak tahun 2000. Kami telah meluluskan lebih dari 3000 teknisi, dengan 90% di antaranya berhasil membuka usaha sendiri. Metode pengajaran kami mencakup teori dasar hingga teknik perbaikan tingkat mahir, yang dirancang untuk mengembangkan keterampilan kritis dan kreatif. Bergabunglah dengan kami untuk mendapatkan pelatihan berkualitas dan sukses dalam karier teknisi smartphone.">
    <!-- Meta Keywords and Description -->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- STACK STYLE --}}
    @stack('style')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    {{-- Navbar --}}
    <x-Navbar />
    {{-- Navbar --}}

    @yield('content')

    {{-- Footer --}}
    <x-Footer />
    {{-- Footer --}}

    {{-- STACK SCRIPT --}}
    @stack('script')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
