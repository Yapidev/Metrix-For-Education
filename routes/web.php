<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function (){
    Route::get('/', 'home')->name('home');
    Route::get('about-us', 'aboutUs')->name('about-us');
    Route::get('layanan', 'layanan')->name('layanan');
    Route::get('galeri', 'galeri')->name('galeri');
    Route::get('benefit', 'benefit')->name('benefit');
    Route::get('tim-kami', 'timKami')->name('tim-kami');
    Route::get('testimoni', 'testimoni')->name('testimoni');
    Route::get('kontak', 'kontak')->name('kontak');
});
