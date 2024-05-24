<div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5" style="background-color: black;">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img\metrixforedu.png') }}" width="75" height="62">
            <img src="{{ asset('img\logo.jpg') }}" width="75">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            style="background-color: white">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active" style="color: white;">Home</a>
                {{-- Navbar Lama --}}
                <a href="{{ route('about-us') }}" class="nav-item nav-link" style="color: white;">Tentang Kami</a>
                <a href="{{ route('layanan') }}" class="nav-item nav-link" style="color: white;">Layanan</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        style="color: white;">Halaman</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('galeri') }}" class="dropdown-item">Galeri</a>
                        <a href="{{ route('benefit') }}" class="dropdown-item">Benefit</a>
                        <a href="{{ route('tim-kami') }}" class="dropdown-item">Tim Kami</a>
                        <a href="{{ route('testimoni') }}" class="dropdown-item">Testimoni</a>
                    </div>
                </div>
                <a href="{{ route('kontak') }}" class="nav-item nav-link" style="color: white;">Kontak</a>
                <a href="https://forms.gle/1KX4y7j2syiTNAA79" class="nav-item nav-link" style="color: white;">Daftar
                    Sekarang</a>
                {{-- Navbar Lama --}}

                {{-- Navbar Baru Belum Fix --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        style="color: white;">Program</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Program 1</a>
                        <a href="#" class="dropdown-item">Program 2</a>
                        <a href="#" class="dropdown-item">Program 3</a>
                        <a href="#" class="dropdown-item">Program 4</a>
                        <a href="#" class="dropdown-item">Program 5</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        style="color: white;">Bergabung</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Download Portofolio</a>
                        <a href="#" class="dropdown-item">Alur Kerja Sama</a>
                        <a href="#" class="dropdown-item">Daftar Program</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        style="color: white;">Verifikasi</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Verifikasi Dokumen</a>
                        <a href="#" class="dropdown-item">Verifikasi Team ACP</a>
                        <a href="#" class="dropdown-item">Verifikasi Sertifikat Program</a>
                        <a href="#" class="dropdown-item">Verifikasi Sertifikat Event</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        style="color: white;">Login</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Login System ACP</a>
                        <a href="#" class="dropdown-item">Login Portal Sertifikat</a>
                        <a href="#" class="dropdown-item">E-learning</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link" style="color: white;">Event</a>
                <a href="#" class="nav-item nav-link" style="color: white;">Karir</a> --}}
                {{-- Navbar Baru Belum Fix --}}

            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</div>
