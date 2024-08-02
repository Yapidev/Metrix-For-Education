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
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                    aria-expanded="false" style="color: white;">Program</a>
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
            <a href="{{ route('event') }}" class="nav-item nav-link" style="color: white;">Event</a>
            <a href="{{ route('karir') }}" class="nav-item nav-link" style="color: white;">Karir</a>
            <a href="https://forms.gle/1KX4y7j2syiTNAA79" class="nav-item nav-link" style="color: white;">Daftar
                Sekarang</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
