@extends('layouts.app')

@push('style')
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- About --}}
    <x-about />
    {{-- About --}}

    {{-- Banner --}}
    <x-banner />
    {{-- Banner --}}

    {{-- Team --}}
    <x-team />
    {{-- Team --}}
@endsection

@push('script')
@endpush
