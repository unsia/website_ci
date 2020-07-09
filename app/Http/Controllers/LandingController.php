<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    // Fasilitas
    public function learning_community()
    {
        return view('landing.learning-community');
    }

    public function laboratorium_virtual()
    {
        return view('landing.laboratorium-virtual');
    }

    public function studio_multimedia()
    {
        return view('landing.studio-multimedia');
    }

    // Penerimaan
    public function standar_biaya_perkuliahan()
    {
        return view('landing.standar-biaya-perkuliahan');
    }

    public function pembiayaan_soft_loan()
    {
        return view('landing.pembiayaan-soft-loan');
    }

    public function teaser_video_pembelajaran()
    {
        return view('landing.teaser-video-pembelajaran');
    }

    public function panduan_pembelajaran_online()
    {
        return view('landing.panduan-pembelajaran-online');
    }

    public function list_of_partner()
    {
        return view('landing.list-of-partner');
    }

    public function teaser_video_pelatihan()
    {
        return view('landing.teaser-video-pelatihan');
    }

    public function peraturan_akademik()
    {
        return view('landing.peraturan-akademik');
    }

    public function jenjang_s1()
    {
        return view('landing.info-pendaftaran-s1');
    }

    public function program_kampus_merdeka()
    {
        return view('landing.program-kampus-merdeka');
    }

    public function berita()
    {
        return view('landing.berita');
    }

    public function siaran_pers()
    {
        return view('landing.siaran-pers');
    }

    public function beasiswa()
    {
        return view('landing.beasiswa');
    }

    public function kenapa_unsia()
    {
        return view('landing.kenapa-unsia');
    }

    public function keunggulan_unsia()
    {
        return view('landing.keunggulan-unsia');
    }

    public function faq()
    {
        return view('landing.faq');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function sejarah()
    {
        return view('landing.sejarah');
    }

    public function admission_info()
    {
        return view('landing.admission-info');
    }

    public function kontak()
    {
        return view('landing.kontak');
    }

    public function kalender_akademik()
    {
        return view('landing.kalender-akademik');
    }

    public function academic_program()
    {
        return view('landing.academic-program');
    }

    public function academic_guide()
    {
        return view('landing.academic-guide');
    }

    public function study_guide()
    {
        return view('landing.study-guide');
    }

    public function keunggulan_lulusan()
    {
        return view('landing.keunggulan-lulusan');
    }

    public function teaching_professor()
    {
        return view('landing.teaching-professor');
    }

    public function struktur_organisasi()
    {
        return view('landing.struktur-organisasi');
    }

    public function visi_misi()
    {
        return view('landing.visi-misi');
    }

    public function salam_rektor()
    {
        return view('landing.salam-rektor');
    }
}
