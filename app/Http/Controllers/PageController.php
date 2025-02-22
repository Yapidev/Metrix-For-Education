<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Return view home
     *
     * @return void
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Return view event
     *
     * @return void
     */
    public function event()
    {
        return view('event');
    }

    /**
     * Return view karir
     *
     * @return void
     */
    public function karir()
    {
        return view('karir');
    }

    /**
     * Return view karir
     *
     * @return void
     */
    public function katalog()
    {
        return view('katalog');
    }
    

    /**
     * Return view about
     *
     * @return void
     */
    public function aboutUs()
    {
        return view('about-us');
    }

    /**
     * Return view layanan
     *
     * @return void
     */
    public function layanan()
    {
        return view('layanan');
    }

    /**
     * Return view galeri
     *
     * @return void
     */
    public function galeri()
    {
        return view('galeri');
    }

    /**
     * Return view benefit
     *
     * @return void
     */
    public function benefit()
    {
        return view('benefit');
    }

    /**
     * Return view tim-kami
     *
     * @return void
     */
    public function timKami()
    {
        return view('tim-kami');
    }

    /**
     * Return view testimoni
     *
     * @return void
     */
    public function testimoni()
    {
        return view('testimoni');
    }

    /**
     * Return view kontak
     *
     * @return void
     */
    public function kontak()
    {
        return view('kontak');
    }

    /**
     * Return alur kerjasama
     *
     * @return void
     */
    public function alurKerjaSama()
    {
        return view('alur-kerja-sama');
    }


    /**
     * Return daftar program
     *
     * @return void
     */
    public function daftarProgram()
    {
        return view('daftar-program');
    }
}
