<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    // Manajemen
    public function manajemen()
    {
        return view('academic.manajemen.home');
    }

    public function manajemen_profil()
    {
        return view('academic.manajemen.profil');
    }

    public function manajemen_kurikulum()
    {
        return view('academic.manajemen.kurikulum');
    }

    public function manajemen_prospek()
    {
        return view('academic.manajemen.prospek-karir');
    }

    public function manajemen_dosen()
    {
        return view('academic.manajemen.dosen');
    }

    public function manajemen_keunggulan()
    {
        return view('academic.manajemen.keunggulan');
    }

    public function manajemen_capaian_pembelajaran_lulusan()
    {
        return view('academic.manajemen.capaian-pembelajaran-lulusan');
    }

    public function manajemen_profil_lulusan()
    {
        return view('academic.manajemen.profil-lulusan');
    }


    // Sistem Informasi
    public function sistemInformasi()
    {
        return view('academic.sistem-informasi.home');
    }

    public function sistemInformasi_profil()
    {
        return view('academic.sistem-informasi.profil');
    }

    public function sistemInformasi_kurikulum()
    {
        return view('academic.sistem-informasi.kurikulum');
    }

    public function sistemInformasi_prospek()
    {
        return view('academic.sistem-informasi.prospek-karir');
    }

    public function sistemInformasi_dosen()
    {
        return view('academic.sistem-informasi.dosen');
    }

    public function sistemInformasi_keunggulan()
    {
        return view('academic.sistem-informasi.keunggulan');
    }

    public function sistemInformasi_capaian_pembelajaran_lulusan()
    {
        return view('academic.sistem-informasi.capaian-pembelajaran-lulusan');
    }

    public function sistemInformasi_profil_lulusan()
    {
        return view('academic.sistem-informasi.profil-lulusan');
    }

    // Komunikasi

    public function komunikasi()
    {
        return view('academic.komunikasi.home');
    }

    public function komunikasi_kurikulum()
    {
        return view('academic.komunikasi.kurikulum');
    }

    public function komunikasi_prospek()
    {
        return view('academic.komunikasi.prospek-karir');
    }

    public function komunikasi_dosen()
    {
        return view('academic.komunikasi.dosen');
    }

    public function komunikasi_keunggulan()
    {
        return view('academic.komunikasi.keunggulan');
    }

    // Teknologi Informasi

    public function informatika()
    {
        return view('academic.informatika.home');
    }

    public function informatika_kurikulum()
    {
        return view('academic.informatika.kurikulum');
    }

    public function informatika_prospek()
    {
        return view('academic.informatika.prospek-karir');
    }

    public function informatika_dosen()
    {
        return view('academic.informatika.dosen');
    }

    public function informatika_keunggulan()
    {
        return view('academic.informatika.keunggulan');
    }

    // Akuntansi dan Perpajakan

    public function akuntansi()
    {
        return view('academic.akuntansi.home');
    }

    public function akuntansi_kurikulum()
    {
        return view('academic.akuntansi.kurikulum');
    }

    public function akuntansi_prospek()
    {
        return view('academic.akuntansi.prospek-karir');
    }

    public function akuntansi_dosen()
    {
        return view('academic.akuntansi.dosen');
    }

    public function akuntansi_keunggulan()
    {
        return view('academic.akuntansi.keunggulan');
    }
}
