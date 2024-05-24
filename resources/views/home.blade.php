@extends('layouts.app')

@push('style')
@endpush

@section('content')

    <body>

        {{-- Carousel --}}
        <x-carousel />
        {{-- Carousel --}}

        {{-- About --}}
        <x-about />
        {{-- About --}}

        {{-- Features --}}
        <x-features />
        {{-- Features --}}

        {{-- Banner --}}
        <x-banner />
        {{-- Banner --}}

        {{-- Service --}}
        <x-service />
        {{-- Service --}}

        {{-- Galeri --}}
        <x-gallery />
        {{-- Galeri --}}

        {{-- Team --}}
        <x-team />
        {{-- Team --}}

        {{-- Testimonial --}}
        <x-testimonial />
        {{-- Testimonial --}}

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    @endsection

    @push('script')
    @endpush
