@extends('layouts.main-page')

@section('active-akademik', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white text-uppercase">Panduan Pembelajaran Online</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Akademik</li>
					<li>Panduan Pembelajaran Online</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
		<div class="content-block">
            <!-- About Us ==== -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 m-b30">
							<div class="feature-container">
								<p>Aktifitas pembelajaran di LMS (Learning Management System) dapat digambarkan sebagai berikut:</p>
								<div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/panduan-pembelajaran-online/satu.png') }}" alt="">
								</div>
								<p>Aktifitas antara dosen dengan mahasiswa dalam 1 minggu perkuliahan online di LMS dapat digambarkan sebagai berikut:</p>
								<div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/panduan-pembelajaran-online/dua.png') }}" alt="">
								</div>
								<p>Untuk itu setiap mahasiswa wajib untuk senantiasa mematuhi jadwal akademik setiap mata kuliah dan pada saat Video Conferencing adalah waktu interaksi yang berkarakteritik sinkron, yakni waktu dosen dan mahasiswa harus bersamaan.</p>
								<div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/panduan-pembelajaran-online/tiga.png') }}" alt="">
								</div>
								<p>Aktifitas 1 minggu perkuliahan online untuk setiap mata kuliah di LMS dapat digambarkan sebagai berikut:</p>
								<div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/panduan-pembelajaran-online/empat.png') }}" alt="">
								</div>
								<p>Aktifitas 1 semester dalam 16 minggu dapat digambarkan sebagai berikut:</p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/panduan-pembelajaran-online/lima.png') }}" alt="">
									</div>
									<p>Aktifitas dalam 1 minggu online lebih didominasi aktifitas dalam mode ASINKRON, namun pada saat video conference antara dosen dengan mahasiswa, aktifitas harus berada pada mode SINKRON, sebagaimana deskripsi berikut ini:</p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/panduan-pembelajaran-online/enam.png') }}" alt="">
									</div>
									<p>Kewajiban mahasiswa dalam menjalankan kuliah online via LMS:</p>
									<ol type="1" class="ml-4">
										<li>Wajib senantiasa per hari untuk mengakses LMS</li>
										<li>Wajib mematuhi arahan dan penjelasan dosen di LMS</li>
										<li>Wajib mengerjakan soal Quiz mingguan yang diberikan dosen</li>
										<li>Wajib mengerjakan tugas-tugas yang diberikan oleh dosen</li>
										<li>Tidak boleh menunda pengerjaan quiz mingguan atau tugas semester</li>
										<li>Wajib dalam waktu yang sama pada saat Video Conferencing dengan dosen.</li>
									</ol>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- About Us END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
@endsection