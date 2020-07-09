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
Route::get('/manajemen-kontemporer', 'AcademicController@manajemenKontemporer');
Route::get('/manajemen-kontemporer/profil', 'AcademicController@manajemenKontemporer_profil');
Route::get('/manajemen-kontemporer/kurikulum', 'AcademicController@manajemenKontemporer_kurikulum');
Route::get('/manajemen-kontemporer/keunggulan', 'AcademicController@manajemenKontemporer_keunggulan');
Route::get('/manajemen-kontemporer/prospek-karir', 'AcademicController@manajemenKontemporer_prospek');
Route::get('/manajemen-kontemporer/dosen', 'AcademicController@manajemenKontemporer_dosen');
Route::get('/manajemen-kontemporer/capaian-pembelajaran-lulusan', 'AcademicController@manajemenKontemporer_capaian_pembelajaran_lulusan')->name('manajemen-kontemporer.capaian_pembelajaran_lulusan');
Route::get('/manajemen-kontemporer/profil-lulusan', 'AcademicController@manajemenKontemporer_profil_lulusan')->name('manajemen-kontemporer.profil_lulusan');

// Sistem Informasi
Route::get('/sistem-informasi', 'AcademicController@sistemInformasi');
Route::get('/sistem-informasi/profil', 'AcademicController@sistemInformasi_profil');
Route::get('/sistem-informasi/kurikulum', 'AcademicController@sistemInformasi_kurikulum');
Route::get('/sistem-informasi/keunggulan', 'AcademicController@sistemInformasi_keunggulan');
Route::get('/sistem-informasi/prospek-karir', 'AcademicController@sistemInformasi_prospek');
Route::get('/sistem-informasi/dosen', 'AcademicController@sistemInformasi_dosen');
Route::get('/sistem-informasi/capaian-pembelajaran-lulusan', 'AcademicController@sistemInformasi_capaian_pembelajaran_lulusan')->name('sistem-informasi.capaian_pembelajaran_lulusan');
Route::get('/sistem-informasi/profil-lulusan', 'AcademicController@sistemInformasi_profil_lulusan')->name('sistem-informasi.profil_lulusan');

// Penyiaran dan Komunikasi Digital
Route::get('/penyiaran-dan-komunikasi-digital', 'AcademicController@penyiarandankomunikasidigital');
Route::get('/penyiaran-dan-komunikasi-digital/kurikulum', 'AcademicController@penyiarandankomunikasidigital_kurikulum');
Route::get('/penyiaran-dan-komunikasi-digital/keunggulan', 'AcademicController@penyiarandankomunikasidigital_keunggulan');
Route::get('/penyiaran-dan-komunikasi-digital/prospek-karir', 'AcademicController@penyiarandankomunikasidigital_prospek');
Route::get('/penyiaran-dan-komunikasi-digital/dosen', 'AcademicController@penyiarandankomunikasidigital_dosen');

// Teknologi Informasi
Route::get('/teknologi-informasi', 'AcademicController@teknologiInformasi');
Route::get('/teknologi-informasi/kurikulum', 'AcademicController@teknologiInformasi_kurikulum');
Route::get('/teknologi-informasi/keunggulan', 'AcademicController@teknologiInformasi_keunggulan');
Route::get('/teknologi-informasi/prospek-karir', 'AcademicController@teknologiInformasi_prospek');
Route::get('/teknologi-informasi/dosen', 'AcademicController@teknologiInformasi_dosen');

// Akuntansi dan Perpajakan
Route::get('/akuntansi-dan-perpajakan', 'AcademicController@akuntansidanperpajakan');
Route::get('/akuntansi-dan-perpajakan/kurikulum', 'AcademicController@akuntansidanperpajakan_kurikulum');
Route::get('/akuntansi-dan-perpajakan/keunggulan', 'AcademicController@akuntansidanperpajakan_keunggulan');
Route::get('/akuntansi-dan-perpajakan/prospek-karir', 'AcademicController@akuntansidanperpajakan_prospek');
Route::get('/akuntansi-dan-perpajakan/dosen', 'AcademicController@akuntansidanperpajakan_dosen');


/**
 * Student Registrant
 */
Route::get('/create-account', 'Admin\RegistrationController@form_create_account')->name('student.form_create_account');
Route::post('/create-account', 'Admin\RegistrationController@do_create_account')->name('student.do_create_account');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/replace', 'HomeController@index')->name('index');
    Route::get('home', 'HomeController@index')->name('home');

    /** route manajemen menu */
    Route::get('menu', 'Admin\MenuController@index')->middleware(['permission:menu-read'])->name('menu');
    Route::get('menu/{id}', 'Admin\MenuController@menuDetail')->middleware(['permission:menu-read'])->name('menu.detail');
    Route::post('menu-create', 'Admin\MenuController@create')->middleware(['permission:menu-create'])->name('menu.create');
    Route::put('menu-update', 'Admin\MenuController@update')->middleware(['permission:menu-update'])->name('menu.update');
    Route::get('menu-delete/{id}', 'Admin\MenuController@delete')->middleware(['permission:menu-delete'])->name('menu.delete');

    /** route manajemen role */
    Route::get('roles', 'Admin\RoleController@index')->middleware(['permission:role-read'])->name('roles');
    Route::get('roles/{id}/show', 'Admin\RoleController@show')->middleware(['permission:role-read'])->name('roles.show');
    Route::get('roles/create', 'Admin\RoleController@create')->middleware(['permission:role-create'])->name('roles.create');
    Route::get('roles/{id}/edit', 'Admin\RoleController@edit')->middleware(['permission:role-update'])->name('roles.edit');
    Route::post('roles/store', 'Admin\RoleController@store')->middleware(['permission:role-create'])->name('roles.store');
    Route::post('roles/{id}/update', 'Admin\RoleController@update')->middleware(['permission:role-update'])->name('roles.update');
    Route::post('roles/delete', 'Admin\RoleController@delete')->middleware(['permission:role-delete'])->name('roles.delete');

    /** route manajemen user */
    Route::get('users', 'Admin\UserController@index')->middleware(['permission:user-read'])->name('users');
    Route::get('users/{id}/show', 'Admin\UserController@show')->middleware(['permission:user-read'])->name('users.show');
    Route::get('users/create', 'Admin\UserController@create')->middleware(['permission:user-create'])->name('users.create');
    Route::get('users/{id}/edit', 'Admin\UserController@edit')->middleware(['permission:user-update'])->name('users.edit');
    Route::post('users/store', 'Admin\UserController@store')->middleware(['permission:user-create'])->name('users.store');
    Route::post('users/{id}/update', 'Admin\UserController@update')->middleware(['permission:user-update'])->name('users.update');
    Route::post('users/delete', 'Admin\UserController@delete')->middleware(['permission:user-delete'])->name('users.delete');

    /** route manajemen registration */
    Route::get('registration', 'Admin\RegistrationController@form_register')->name('student.form_register');
    Route::post('registration', 'Admin\RegistrationController@do_register')->name('student.do_register');
});
