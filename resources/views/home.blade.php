@extends('layouts.app')

@push('style')
@endpush

@section('content')

    <body>
        <!-- Carousel Start -->
        <div class="container-fluid px-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-8 text-start">
                                        <p class="fs-4 text-white">Persiapkan Dirimu Menjadi Teknisi Smartphone Profesional
                                        </p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">MetrixFlasher Indonesia
                                        </h1>
                                        <a href=""
                                            class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Pelajari
                                            Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8 text-end">
                                        <p class="fs-4 text-white">Persiapkan Dirimu Menjadi Teknisi Smartphone Profesional
                                        </p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">MetrixFlasher Indonesia
                                        </h1>
                                        <a href=""
                                            class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Pelajari
                                            Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-8 text-start">
                                        <p class="fs-4 text-white">Persiapkan Dirimu Menjadi Teknisi Smartphone Profesional
                                        </p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">MetrixFlasher Indonesia
                                        </h1>
                                        <a href=""
                                            class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Pelajari
                                            Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8 text-end">
                                        <p class="fs-4 text-white">Persiapkan Dirimu Menjadi Teknisi Smartphone Profesional
                                        </p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">MetrixFlasher Indonesia
                                        </h1>
                                        <a href=""
                                            class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Pelajari
                                            Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                                <div class="about-experience bg-secondary rounded">
                                    <h1 class="display-1 mb-0">25</h1>
                                    <small class="fs-5 fw-bold">Tahun Pengalaman</small>
                                </div>
                            </div>
                            <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded" src="img/service-1.jpg">
                            </div>
                            <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                                <img class="img-fluid rounded" src="img/service-2.jpg">
                            </div>
                            <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                                <img class="img-fluid rounded" src="img/service-3.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="section-title bg-white text-start text-primary pe-3">Tentang Kami</p>
                        <h1 class="mb-4">Mengapa Kami?</h1>
                        <p class="mb-4" align="justify">Sebagai lembaga pelatihan teknisi smartphone berpengalaman
                            sejak tahun 2000, kami telah berhasil meluluskan lebih dari 3000 teknisi, di mana hampir
                            90% dari mereka telah membuka usaha sendiri. Pendekatan pengajaran kami sangat berbeda,
                            karena kami tidak hanya fokus pada hafalan, tetapi kami memberikan pengajaran yang menyeluruh
                            mulai dari teori dasar hingga teknik perbaikan tingkat mahir. Metode pembelajaran yang kami
                            terapkan sangat menarik dan tidak membosankan, sehingga memicu peserta untuk berpikir secara
                            kritis dan kreatif. Kami bangga menjadi lembaga yang mendorong peserta kami mencapai pemahaman
                            yang mendalam dan membantu mereka dalam mengembangkan keterampilan teknis yang diperlukan.
                            Dengan dedikasi kami dalam memberikan kualitas pelatihan yang terbaik, kami siap membantu
                            peserta kami meraih kesuksesan dan mencapai tujuan mereka dalam bidang teknisi smartphone.
                        </p>
                        <a class="btn btn-secondary rounded-pill py-3 px-5" href="">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Features Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title bg-white text-start text-primary pe-3">Benefit</p>
                        <h1 class="mb-4">Apa yang Akan Didapatkan?</h1>
                        <p><i class="fa fa-check text-primary me-3"></i>Modul Panduan Teknisi Smartphone Hardware dan
                            Software</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Peralatan Praktik Lengkap</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Ruang Training Full AC, Multimedia, dan Internet Up
                            To 100 Mbps</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Free Data Tutorial Reparasi Smartphone Hardware &
                            Software</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Free Data File Service All Brand (>4 TB)</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Free Mengulang dan Pendalaman Materi</p>
                        <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="rounded overflow-hidden">
                            <div class="row g-0">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="text-center bg-primary py-5 px-4">
                                        <h1>20+</h1>
                                        <span class="fs-5 fw-semi-bold text-secondary">Tahun Pengalaman</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center bg-secondary py-5 px-4">
                                        <h1>10+</h1>
                                        <span class="fs-5 fw-semi-bold text-primary">Penghargaan</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center bg-secondary py-5 px-4">
                                        <h1>100+</h1>
                                        <span class="fs-5 fw-semi-bold text-primary">Teknisi</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="text-center bg-primary py-5 px-4">
                                        <h1>3000+</h1>
                                        <span class="fs-5 fw-semi-bold text-secondary">Alumni</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- Banner Start -->
        <div class="container-fluid banner my-5 py-5" data-parallax="scroll"
            data-image-src="{{ asset('img\carousel-5.jpg') }}">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-4">
                                <img class="img-fluid rounded" src="img/gallery-3.jpg" alt="">
                            </div>
                            <div class="col-sm-8">
                                <h2 class="text-white mb-3">Pembelajaran dari Pemula Hingga Mahir</h2>
                                <p class="text-white mb-4">Pembalajaran yang sederhana dengan teori dan praktik yang
                                    praktis</p>
                                <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-4">
                                <img class="img-fluid rounded" src="img/gallery-1.jpg" alt="">
                            </div>
                            <div class="col-sm-8">
                                <h2 class="text-white mb-3">Instruktur Profesional yang Berpengalaman </h2>
                                <p class="text-white mb-4">Instruktur dengan 23 tahun lebih pengalaman yang akan
                                    mengajarkan dari 0 hingga mahir</p>
                                <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Materi Pelatihan</p>
                    <h1 class="mb-4">Dalam Waktu 2 Minggu</h1>
                    <h2 class="mb-5">Mahir Menjadi Teknisi Smartphone</h2>
                </div>
                <div class="row gy-5 gx-4">
                    <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex h-100">
                            <div class="service-img">
                                <img class="img-fluid" src="img/service-1.jpg" alt="">
                            </div>
                            <div class="service-text p-5 pt-0">
                                <div class="service-icon">
                                    <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                                </div>
                                <h5 class="mb-3">Materi Software</h4>
                                    <p class="mb-4">Pelatihan ini akan membantu peserta menguasai sistem operasi mobile
                                        seperti Android dan iOS, termasuk instalasi, konfigurasi, pemeliharaan, dan
                                        pemecahan masalah perangkat lunak. Mereka juga akan belajar mengoptimalkan aplikasi,
                                        melakukan pembaruan sistem, dan pemulihan data.</p>
                                    <a class="btn btn-square rounded-circle" href=""><i
                                            class="bi bi-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex h-100">
                            <div class="service-img">
                                <img class="img-fluid" src="img/service-2.jpg" alt="">
                            </div>
                            <div class="service-text p-5 pt-0">
                                <div class="service-icon">
                                    <img class="img-fluid rounded-circle" src="img/service-2.jpg" alt="">
                                </div>
                                <h5 class="mb-3">Materi Hardware</h5>
                                <p class="mb-4">Peserta akan mempelajari dasar-dasar perangkat smartphone, termasuk
                                    komponen seperti motherboard, layar, baterai, dan kamera. Mereka akan diajarkan cara
                                    membongkar, memperbaiki, dan mengganti komponen perangkat. Pelatihan ini juga mencakup
                                    perbaikan umum seperti penggantian layar pecah dan baterai rusak.</p>
                                <a class="btn btn-square rounded-circle" href=""><i
                                        class="bi bi-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex h-100">
                            <div class="service-img">
                                <img class="img-fluid" src="img/service-3.jpg" alt="">
                            </div>
                            <div class="service-text p-5 pt-0">
                                <div class="service-icon">
                                    <img class="img-fluid rounded-circle" src="img/service-3.jpg" alt="">
                                </div>
                                <h5 class="mb-3">Motivasi & Kewirausahaan</h5>
                                <p class="mb-4">Pelatihan ini akan memberikan peserta keterampilan kepemimpinan, motivasi
                                    diri, manajemen waktu, dan etika kerja. Mereka akan mendapatkan pemahaman dasar dalam
                                    menjalankan bisnis teknisi smartphone serta dorongan untuk memulai usaha mereka sendiri.
                                </p>
                                <a class="btn btn-square rounded-circle" href=""><i
                                        class="bi bi-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Gallery Start -->
        <div class="container-xxl py-5 px-0">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-5.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-5.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-1.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-1.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-2.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-6.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-6.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-7.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-7.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-3.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-3.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-4.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="{{ asset('img/gallery-8.jpg') }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ asset('img/gallery-8.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Trainer</p>
                    <h1 class="mb-5">Instruktur Berpengalaman</h1>
                </div>
                <div class="row g-4">
                    <center>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item rounded p-4">
                                <img class="img-fluid rounded mb-4" src="img/team-1.jpg" alt="">
                                <h5>Denny Den Bagus</h5>
                                <p class="text-primary">Founder & Master Trainer</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                    </center>
                </div>
            </div>
        </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Testimoni</p>
                    <h1 class="mb-5">Apa yang Alumni Katakan Tentang Pelatihan Kami</h1>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-img">
                            <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-1.jpg') }}"
                                alt="">
                            <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-2.jpg') }}"
                                alt="">
                            <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-3.jpg') }}"
                                alt="">
                            <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item">
                                <img class="img-fluid mb-3" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                                <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                    lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                </p>
                                <h5>Client Name</h5>
                                <span class="text-primary">Profession</span>
                            </div>
                            <div class="testimonial-item">
                                <img class="img-fluid mb-3" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                                <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                    lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                </p>
                                <h5>Client Name</h5>
                                <span class="text-primary">Profession</span>
                            </div>
                            <div class="testimonial-item">
                                <img class="img-fluid mb-3" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                                <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                    lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                </p>
                                <h5>Client Name</h5>
                                <span class="text-primary">Profession</span>
                            </div>
                            <div class="testimonial-item">
                                <img class="img-fluid mb-3" src="{{ asset('img/testimonial-4.jpg') }}" alt="">
                                <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                    lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                </p>
                                <h5>Client Name</h5>
                                <span class="text-primary">Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: black;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Kantor Kami</h5>
                        <p class="mb-2"><a
                                href="https://www.google.com/maps/place/MetrixFlasher+Kursus+Service+HP+Bandung/@-6.9457409,107.6576358,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e99d9383b3d5:0x36e2207c2a6d35f5!8m2!3d-6.9457462!4d107.6602107!16s%2Fg%2F11h4w1_hsd?entry=ttu"
                                target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt me-3"></i></a><a
                                href="https://www.google.com/maps/place/MetrixFlasher+Kursus+Service+HP+Bandung/@-6.9457409,107.6576358,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e99d9383b3d5:0x36e2207c2a6d35f5!8m2!3d-6.9457462!4d107.6602107!16s%2Fg%2F11h4w1_hsd?entry=ttu"
                                target="_blank" rel="noopener noreferrer">Jupiter IX no 4 blok G2 RT06 RW 02, Sekejati,
                                Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</a></p>
                        <p class="mb-2"><a href="https://wa.me/+6282121636188" target="_blank"
                                rel="noopener noreferrer"><i class="fa fa-phone-alt me-3"></i><a
                                    href="https://wa.me/+6282121636188" target="_blank" rel="noopener noreferrer"></a><a
                                    href="https://wa.me/+6282121636188" target="_blank" rel="noopener noreferrer">+62 821
                                    2163 6188</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@metrixflasher.com</p>
                        <div class="d-flex pt-3">
                            <a class="btn btn-square btn-secondary rounded-circle me-2"
                                href="https://twitter.com/metrixflasherIndonesia" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle me-2"
                                href="https://www.facebook.com/metrixflasherIndonesia" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle me-2"
                                href="https://www.youtube.com/@dennymetrixflasher8337" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle me-2"
                                href="https://www.linkedin.com/in/denny-denbagus-804793112/?originalSubdomain=id"
                                target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Jam Operasional</h5>
                        <p class="mb-1">Senin - Jumat</p>
                        <h6 class="text-light">09.00 - 17.00 WIB</h6>
                        <p class="mb-1">Sabtu & Minggu</p>
                        <h6 class="text-light">Tutup</h6>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative w-100">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid bg-secondary text-body copyright py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="fw-semi-bold" href="#">MetrixFlasher</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    @endsection

    @push('script')
    @endpush
