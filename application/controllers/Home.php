<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('home');
	}

	// TENTANG UNSIA
	public function contact()
	{
		$data['title'] = 'Kontak';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('contact');
		$this->load->view('partial/home_footer');
	}

	public function salamRektor()
	{
		$data['title'] = 'Salam Rektor';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/salam-rektor');
		$this->load->view('partial/home_footer');
	}

	public function whyUnsia()
	{
		$data['title'] = 'Kenapa UNSIA ?';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/why-unsia');
		$this->load->view('partial/home_footer');
	}

	public function benefit()
	{
		$data['title'] = 'Keunggulan dan Manfaat';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/benefit');
		$this->load->view('partial/home_footer');
	}

	public function listofPartner()
	{
		$data['title'] = 'List of Partner';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/list-of-partner');
		$this->load->view('partial/home_footer');
	}

	public function sejarah()
	{
		$data['title'] = 'Sejarah';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/sejarah');
		$this->load->view('partial/home_footer');
	}

	public function visiMisi()
	{
		$data['title'] = 'Visi Misi';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/visi-misi');
		$this->load->view('partial/home_footer');
	}

	public function strukturOrganisasi()
	{
		$data['title'] = 'Struktur Organisasi';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/struktur-organisasi');
		$this->load->view('partial/home_footer');
	}

	public function faq()
	{
		$data['title'] = 'FAQ';
		$data['menu'] = 'Tentang UNSIA';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('tentang-unsia/faq');
		$this->load->view('partial/home_footer');
	}

	// FASILITAS
	public function learningCommunity()
	{
		$data['title'] = 'Learning Community';
		$data['menu'] = 'Fasilitas';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('fasilitas/learning-community');
		$this->load->view('partial/home_footer');
	}

	public function labVirtual()
	{
		$data['title'] = 'Laboratorium Virtual';
		$data['menu'] = 'Fasilitas';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('fasilitas/lab-virtual');
		$this->load->view('partial/home_footer');
	}

	public function studioMultimedia()
	{
		$data['title'] = 'Studio Multimedia';
		$data['menu'] = 'Fasilitas';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('fasilitas/studio-multimedia');
		$this->load->view('partial/home_footer');
	}

	// BLOG
	public function listBlog()
	{
		$data['title'] = 'Blog List';
		$data['menu'] = 'Blog';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('blog/blog-list');
		$this->load->view('partial/home_footer');
	}

	// PENDAFTARAN
	public function infoPendaftaran()
	{
		$data['title'] = 'Info Pendaftaran';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('pendaftaran/info-pendaftaran');
		$this->load->view('partial/home_footer');
	}

	public function biayaPerkuliahan()
	{
		$data['title'] = 'Biaya Perkuliahan';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('pendaftaran/biaya-perkuliahan');
		$this->load->view('partial/home_footer');
	}

	public function beasiswa()
	{
		$data['title'] = 'Beasiswa';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('pendaftaran/beasiswa');
		$this->load->view('partial/home_footer');
	}
	public function pembiayaanSoftLoan()
	{
		$data['title'] = 'Pembiayaan Soft Loan';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('pendaftaran/pembiayaan-soft-loan');
		$this->load->view('partial/home_footer');
	}

	//AKADEMIK
	public function programKampusMerdeka()
	{
		$data['title'] = 'Program Kampus Merdeka';
		$data['menu'] = 'Akademik';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/program-kampus-merdeka');
		$this->load->view('partial/home_footer');
	}

	public function panduanPembelajaranOnline()
	{
		$data['title'] = 'Panduan Pembelajaran Online';
		$data['menu'] = 'Akademik';
		$data['submenu'] = '';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/panduan-pembelajaran-online');
		$this->load->view('partial/home_footer');
	}

	//PROSES AKADEMIK
	public function keunggulanLulusanUnsia()
	{
		$data['title'] = 'Keunggulan Lulusan UNSIA';
		$data['menu'] = 'Akademik';
		$data['submenu'] = 'Proses Akademik';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/proses-akademik/keunggulan-lulusan');
		$this->load->view('partial/home_footer');
	}

	public function teachingProfesor()
	{
		$data['title'] = 'Teaching Profesor';
		$data['menu'] = 'Akademik';
		$data['submenu'] = 'Proses Akademik';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/proses-akademik/teaching-professor');
		$this->load->view('partial/home_footer');
	}
	public function peraturanAkademik()
	{
		$data['title'] = 'Peraturan Akademik';
		$data['menu'] = 'Akademik';
		$data['submenu'] = 'Proses Akademik';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/proses-akademik/peraturan-akademik');
		$this->load->view('partial/home_footer');
	}

	public function panduanAkademik()
	{
		$data['title'] = 'Panduan Akademik';
		$data['menu'] = 'Akademik';
		$data['submenu'] = 'Proses Akademik';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/proses-akademik/panduan-akademik');
		$this->load->view('partial/home_footer');
	}
	public function kalenderAkademik()
	{
		$data['title'] = 'Kalender Akademik';
		$data['menu'] = 'Akademik';
		$data['submenu'] = 'Proses Akademik';
		$this->load->view('partial/home_header', $data);
		$this->load->view('partial/home_navbar', $data);
		$this->load->view('akademik/proses-akademik/kalender-akademik');
		$this->load->view('partial/home_footer');
	}

	//AKADEMIK - PROGRAM STUDI
	// MANAJEMEN
	public function manajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Dashboard';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/index');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function profilManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Profil';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/profil');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function dosenManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Dosen';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/dosen');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function keunggulanManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Keunggulan';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/keunggulan');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function capaianPembelajaranManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Capaian Pembelajaran';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/capaian-pembelajaran');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function kurikulumManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Kurikulum';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/kurikulum');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function profilLulusanManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Profil Lulusan';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/profil-lulusan');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	public function prospekKarirManajemen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Prospek Karir';
		$this->load->view('partial/prodi_manajemen_header', $data);
		$this->load->view('partial/prodi_manajemen_sidebar', $data);
		$this->load->view('akademik/program-studi/manajemen/prospek-karir');
		$this->load->view('partial/prodi_manajemen_footer');
	}

	// SISTEM INFORMASI
	public function sistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Dashboard';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/index');
		$this->load->view('partial/prodi_si_footer');
	}

	public function profilSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Profil';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/profil');
		$this->load->view('partial/prodi_si_footer');
	}

	public function dosenSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Dosen';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/dosen');
		$this->load->view('partial/prodi_si_footer');
	}

	public function keunggulanSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Keunggulan';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/keunggulan');
		$this->load->view('partial/prodi_si_footer');
	}

	public function capaianPembelajaranSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Capaian Pembelajaran';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/capaian-pembelajaran');
		$this->load->view('partial/prodi_si_footer');
	}

	public function kurikulumSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Kurikulum';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/kurikulum');
		$this->load->view('partial/prodi_si_footer');
	}

	public function profilLulusanSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Profil Lulusan';

		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/profil-lulusan');
		$this->load->view('partial/prodi_si_footer');
	}

	public function prospekKarirSistemInformasi()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Prospek Karir';
		$this->load->view('partial/prodi_si_header', $data);
		$this->load->view('partial/prodi_si_sidebar', $data);
		$this->load->view('akademik/program-studi/sistem-informasi/prospek-karir');
		$this->load->view('partial/prodi_si_footer');
	}

	// AKUNTANSI
	public function akuntansi()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Dashboard';
		$this->load->view('partial/prodi_akuntansi_header', $data);
		$this->load->view('partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('akademik/program-studi/akuntansi/index');
		$this->load->view('partial/prodi_akuntansi_footer');
	}

	public function dosenakuntansi()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Dosen';
		$this->load->view('partial/prodi_akuntansi_header', $data);
		$this->load->view('partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('akademik/program-studi/akuntansi/dosen');
		$this->load->view('partial/prodi_akuntansi_footer');
	}

	public function keunggulanakuntansi()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Keunggulan';
		$this->load->view('partial/prodi_akuntansi_header', $data);
		$this->load->view('partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('akademik/program-studi/akuntansi/keunggulan');
		$this->load->view('partial/prodi_akuntansi_footer');
	}

	public function kurikulumakuntansi()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Kurikulum';
		$this->load->view('partial/prodi_akuntansi_header', $data);
		$this->load->view('partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('akademik/program-studi/akuntansi/kurikulum');
		$this->load->view('partial/prodi_akuntansi_footer');
	}

	public function prospekKarirakuntansi()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Prospek Karir';
		$this->load->view('partial/prodi_akuntansi_header', $data);
		$this->load->view('partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('akademik/program-studi/akuntansi/prospek-karir');
		$this->load->view('partial/prodi_akuntansi_footer');
	}

	// INFORMATIKA
	public function informatika()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Dashboard';
		$this->load->view('partial/prodi_informatika_header', $data);
		$this->load->view('partial/prodi_informatika_sidebar', $data);
		$this->load->view('akademik/program-studi/informatika/index');
		$this->load->view('partial/prodi_informatika_footer');
	}

	public function dosenInformatika()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Dosen';
		$this->load->view('partial/prodi_informatika_header', $data);
		$this->load->view('partial/prodi_informatika_sidebar', $data);
		$this->load->view('akademik/program-studi/informatika/dosen');
		$this->load->view('partial/prodi_informatika_footer');
	}

	public function keunggulanInformatika()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Keunggulan';
		$this->load->view('partial/prodi_informatika_header', $data);
		$this->load->view('partial/prodi_informatika_sidebar', $data);
		$this->load->view('akademik/program-studi/informatika/keunggulan');
		$this->load->view('partial/prodi_informatika_footer');
	}

	public function kurikulumInformatika()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Kurikulum';
		$this->load->view('partial/prodi_informatika_header', $data);
		$this->load->view('partial/prodi_informatika_sidebar', $data);
		$this->load->view('akademik/program-studi/informatika/kurikulum');
		$this->load->view('partial/prodi_informatika_footer');
	}

	public function prospekKarirInformatika()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Prospek Karir';
		$this->load->view('partial/prodi_informatika_header', $data);
		$this->load->view('partial/prodi_informatika_sidebar', $data);
		$this->load->view('akademik/program-studi/informatika/prospek-karir');
		$this->load->view('partial/prodi_informatika_footer');
	}

	// KOMUNIKASI
	public function komunikasi()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Dashboard';
		$this->load->view('partial/prodi_komunikasi_header', $data);
		$this->load->view('partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('akademik/program-studi/komunikasi/index');
		$this->load->view('partial/prodi_komunikasi_footer');
	}

	public function dosenKomunikasi()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Dosen';
		$this->load->view('partial/prodi_komunikasi_header', $data);
		$this->load->view('partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('akademik/program-studi/komunikasi/dosen');
		$this->load->view('partial/prodi_komunikasi_footer');
	}

	public function keunggulanKomunikasi()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Keunggulan';
		$this->load->view('partial/prodi_komunikasi_header', $data);
		$this->load->view('partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('akademik/program-studi/komunikasi/keunggulan');
		$this->load->view('partial/prodi_komunikasi_footer');
	}

	public function kurikulumKomunikasi()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Kurikulum';
		$this->load->view('partial/prodi_komunikasi_header', $data);
		$this->load->view('partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('akademik/program-studi/komunikasi/kurikulum');
		$this->load->view('partial/prodi_komunikasi_footer');
	}

	public function prospekKarirKomunikasi()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Prospek Karir';
		$this->load->view('partial/prodi_komunikasi_header', $data);
		$this->load->view('partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('akademik/program-studi/komunikasi/prospek-karir');
		$this->load->view('partial/prodi_komunikasi_footer');
	}

	public function error404()
	{
		$this->load->view('error404');
	}
}
