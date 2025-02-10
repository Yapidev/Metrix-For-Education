@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Alur Kerja Sama</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Alur Kerja Sama</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Left Column - Description -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Alur Kerja Sama Metrix Academy</h3>
                    <div class="flow-steps">
                        <div class="mb-4">
                            <h5>1. Pendaftaran</h5>
                            <p>Calon peserta (siswa atau pihak sekolah) mendaftar untuk mengikuti program kerja sama.</p>
                        </div>
                        <div class="mb-4">
                            <h5>2. Sosialisasi Program & Wawancara</h5>
                            <p>- Metrix Academy memberikan penjelasan mengenai program kepada pihak sekolah dan calon peserta.</p>
                            <p>- Wawancara dilakukan untuk seleksi peserta yang akan mengikuti program.</p>
                        </div>
                        <div class="mb-4">
                            <h5>3. Bimbingan Teknis (BIMTEK)</h5>
                            <p>Pelatihan teknis awal bagi peserta, mencakup dasar-dasar teknologi flasher dan perbaikan perangkat elektronik.</p>
                        </div>
                        <div class="mb-4">
                            <h5>4. Penandatanganan Memorandum of Understanding (MoU)</h5>
                            <p>Kesepakatan resmi antara Metrix Academy dan SMK dalam bentuk MoU untuk menjalankan program kerja sama.</p>
                        </div>
                        <div class="mb-4">
                            <h5>5. Persiapan Sarana dan Prasarana (SARPRAS) & Training</h5>
                            <p>- Sekolah mempersiapkan sarana dan prasarana pendukung untuk pelatihan.</p>
                            <p>- Peserta mendapatkan training lebih lanjut mengenai teknik flasher dan perbaikan perangkat.</p>
                        </div>
                        <div class="mb-4">
                            <h5>6. Persiapan Bisnis Center & Evaluasi</h5>
                            <p>- Sekolah dan Metrix Academy menyiapkan pusat bisnis yang memungkinkan siswa mempraktikkan keterampilan mereka secara nyata.</p>
                            <p>- Evaluasi dilakukan untuk menilai efektivitas program dan kesiapan siswa.</p>
                        </div>
                        <div class="mb-4">
                            <h5>7. Metrix Academy</h5>
                            <p>Sebagai pusat utama program kerja sama, Metrix Academy memberikan dukungan teknis, pelatihan, dan sertifikasi bagi peserta.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image and Links -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Image Section -->
                    <div class="img-border mb-4">
                        <img class="img-fluid" src="{{ asset('img/Alur Kerjasama.jpg') }}" alt="Alur Kerja Sama">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection