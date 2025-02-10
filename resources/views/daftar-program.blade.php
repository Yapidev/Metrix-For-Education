@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Daftar Program</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Program</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="bg-light p-4 rounded mx-auto" style="max-width: 600px;">
                    <h4 class="mb-3">Link Pendaftaran:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://shorturl.at/HwpSM" class="btn btn-primary mb-2 w-100" target="_blank">
                                Daftar UKK
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://shorturl.at/Vt6Ab" class="btn btn-primary mb-2 w-100" target="_blank">
                                Daftar Program
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection