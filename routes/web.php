<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Landing Page for Portal
 */
// Home
Route::get('/', 'LandingController@index')->name('landing.index');
// Tentang UNSIA
Route::get('/tentang-unsia/salam-rektor', 'LandingController@salam_rektor')->name('landing.salam_rektor');
Route::get('/tentang-unsia/kenapa-unsia', 'LandingController@kenapa_unsia')->name('landing.kenapa_unsia');
Route::get('/tentang-unsia/keunggulan-dan-manfaat-unsia', 'LandingController@keunggulan_unsia')->name('landing.keunggulan_unsia');
Route::get('/tentang-unsia/faq', 'LandingController@faq')->name('landing.faq');
Route::get('/tentang-unsia/list-of-partner', 'LandingController@list_of_partner')->name('landing.list_of_partner');
Route::get('/tentang-unsia/visi-misi', 'LandingController@visi_misi')->name('landing.visi_misi');
Route::get('/tentang-unsia/struktur-organisasi', 'LandingController@struktur_organisasi')->name('landing.struktur_organisasi');
Route::get('/tentang-unsia/sejarah-unsia', 'LandingController@sejarah')->name('landing.sejarah');
// Fasilitas
Route::get('/fasilitas/learning-community', 'LandingController@learning_community')->name('landing.learning_community');
Route::get('/fasilitas/laboratorium-virtual', 'LandingController@laboratorium_virtual')->name('landing.laboratorium_virtual');
Route::get('/fasilitas/studio-multimedia', 'LandingController@studio_multimedia')->name('landing.studio_multimedia');
// Penerimaan
Route::get('/penerimaan/standar-biaya-perkuliahan', 'LandingController@standar_biaya_perkuliahan')->name('landing.standar_biaya_perkuliahan');
Route::get('/penerimaan/beasiswa', 'LandingController@beasiswa')->name('landing.beasiswa');
Route::get('/penerimaan/pembiayaan-soft-loan', 'LandingController@pembiayaan_soft_loan')->name('landing.pembiayaan_soft_loan');
// Akademik
Route::get('/akademik/program-kampus-merdeka', 'LandingController@program_kampus_merdeka')->name('landing.program_kampus_merdeka');

Route::get('/teaser-video-pelatihan', 'LandingController@teaser_video_pelatihan')->name('landing.teaser_video_pelatihan');
Route::get('/teaser-video-pembelajaran', 'LandingController@teaser_video_pembelajaran')->name('landing.teaser_video_pembelajaran');

Route::get('/teaching-professor', 'LandingController@teaching_professor')->name('landing.teaching_professor');
Route::get('/about-unsia', 'LandingController@about')->name('landing.about');

Route::get('/penerimaan/jenjang-s1/persyaratan-pendaftaran', 'LandingController@admission_info')->name('landing.admission_info');
Route::get('/kalender-akademik', 'LandingController@kalender_akademik')->name('landing.kalender_akademik');
Route::get('/academic-program', 'LandingController@academic_program')->name('landing.academic_program');
Route::get('/panduan-akademik', 'LandingController@academic_guide')->name('landing.academic_guide');
Route::get('/study-guide', 'LandingController@study_guide')->name('landing.study_guide');
Route::get('/keunggulan-lulusan', 'LandingController@keunggulan_lulusan')->name('landing.keunggulan_lulusan');


Route::get('/kontak', 'LandingController@kontak')->name('landing.kontak');
Route::get('/arsip/berita', 'LandingController@berita')->name('landing.berita');
Route::get('/arsip/siaran-pers', 'LandingController@siaran_pers')->name('landing.siaran_pers');
Route::get('/peraturan-akademik', 'LandingController@peraturan_akademik')->name('landing.peraturan_akademik');
Route::get('/penerimaan/jenjang-s1/info-pendaftaran', 'LandingController@jenjang_s1')->name('landing.jenjang_s1');
Route::get('/penerimaan/akademik/panduan-pembelajaran-online', 'LandingController@panduan_pembelajaran_online')->name('landing.panduan_pembelajaran_online');


/**
 * Academic
 */
// Manajemen Kontemporer
Route::get('/manajemen', 'AcademicController@manajemen')->name('manajemen');
Route::get('/manajemen/profil', 'AcademicController@manajemen_profil')->name('manajemen.profil');
Route::get('/manajemen/kurikulum', 'AcademicController@manajemen_kurikulum')->name('manajemen.kurikulum');
Route::get('/manajemen/keunggulan', 'AcademicController@manajemen_keunggulan')->name('manajemen.keunggulan');
Route::get('/manajemen/prospek-karir', 'AcademicController@manajemen_prospek')->name('manajemen.prospek_karir');
Route::get('/manajemen/dosen', 'AcademicController@manajemen_dosen')->name('manajemen.dosen');
Route::get('/manajemen/capaian-pembelajaran-lulusan', 'AcademicController@manajemen_capaian_pembelajaran_lulusan')->name('manajemen.capaian_pembelajaran_lulusan');
Route::get('/manajemen/profil-lulusan', 'AcademicController@manajemen_profil_lulusan')->name('manajemen.profil_lulusan');

// Sistem Informasi
Route::get('/sistem-informasi', 'AcademicController@sistemInformasi')->name('sistem-informasi');
Route::get('/sistem-informasi/profil', 'AcademicController@sistemInformasi_profil')->name('sistem-informasi.profil');
Route::get('/sistem-informasi/kurikulum', 'AcademicController@sistemInformasi_kurikulum')->name('sistem-informasi.kurikulum');
Route::get('/sistem-informasi/keunggulan', 'AcademicController@sistemInformasi_keunggulan')->name('sistem-informasi.keunggulan');
Route::get('/sistem-informasi/prospek-karir', 'AcademicController@sistemInformasi_prospek')->name('sistem-informasi.prospek_karir');
Route::get('/sistem-informasi/dosen', 'AcademicController@sistemInformasi_dosen')->name('sistem-informasi.dosen');
Route::get('/sistem-informasi/capaian-pembelajaran-lulusan', 'AcademicController@sistemInformasi_capaian_pembelajaran_lulusan')->name('sistem-informasi.capaian_pembelajaran_lulusan');
Route::get('/sistem-informasi/profil-lulusan', 'AcademicController@sistemInformasi_profil_lulusan')->name('sistem-informasi.profil_lulusan');

// Penyiaran dan Komunikasi Digital
Route::get('/komunikasi', 'AcademicController@komunikasi')->name('komunikasi');
Route::get('/komunikasi/kurikulum', 'AcademicController@komunikasi_kurikulum')->name('komunikasi.kurikulum');
Route::get('/komunikasi/keunggulan', 'AcademicController@komunikasi_keunggulan')->name('komunikasi.keunggulan');
Route::get('/komunikasi/prospek-karir', 'AcademicController@komunikasi_prospek')->name('komunikasi.prospek_karir');
Route::get('/komunikasi/dosen', 'AcademicController@komunikasi_dosen')->name('komunikasi.dosen');

// Teknologi Informasi
Route::get('/informatika', 'AcademicController@informatika')->name('informatika');
Route::get('/informatika/kurikulum', 'AcademicController@informatika_kurikulum')->name('informatika.kurikulum');
Route::get('/informatika/keunggulan', 'AcademicController@informatika_keunggulan')->name('informatika.keunggulan');
Route::get('/informatika/prospek-karir', 'AcademicController@informatika_prospek')->name('informatika.prospek_karir');
Route::get('/informatika/dosen', 'AcademicController@informatika_dosen')->name('informatika.dosen');

// Akuntansi
Route::get('/akuntansi', 'AcademicController@akuntansi')->name('akuntansi');
Route::get('/akuntansi/kurikulum', 'AcademicController@akuntansi_kurikulum')->name('akuntansi.kurikulum');
Route::get('/akuntansi/keunggulan', 'AcademicController@akuntansi_keunggulan')->name('akuntansi.keunggulan');
Route::get('/akuntansi/prospek-karir', 'AcademicController@akuntansi_prospek')->name('akuntansi.prospek_karir');
Route::get('/akuntansi/dosen', 'AcademicController@akuntansi_dosen')->name('akuntansi.dosen');
