@extends('layouts.main-page')

@section('active', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Panduan Pembelajaran</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Akademik</li>
					<li>Panduan Pembelajaran</li>
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
								<div class="icon-content mb-2">
									<p style="text-align: justify">
										Aktifitas pembelajaran di LMS (Learning Management System) dapat digambarkan sebagai berikut:
                                    </p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/study/study-image1.png') }}" alt="">
									</div>
									<p style="text-align: justify">
										Aktifitas dalam 1 minggu perkuliahan online di LMS dapat digambarkan sebagai berikut:
                                    </p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/study/study-image2.png') }}" alt="">
									</div>
									<p style="text-align: justify">
										Untuk itu setiap mahasiswa wajib untuk senantiasa mematuhi jadwal akademik setiap mata kuliah dan pada saat Video Conferencing adalah waktu interaksi yang berkarakteritik sinkron, yakni waktu dosen dan mahasiswa harus bersamaan.
                                    </p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/study/study-image3.png') }}" alt="">
									</div>
									<p style="text-align: justify">
										Aktifitas 1 minggu perkuliahan online untuk setiap mata kuliah di LMS dapat digambarkan sebagai berikut:
                                    </p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/study/study-image4.png') }}" alt="">
									</div>
									<p style="text-align: justify">
										Aktifitas 1 semester dalam 16 minggu dapat digambarkan sebagai berikut:
                                    </p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/study/study-image5.png') }}" alt="">
									</div>
									<p style="text-align: justify">
										Aktifitas dalam 1 minggu online lebih didominasi aktifitas dalam mode ASINKRON, namun pada saat video conference antara dosen dengan mahasiswa, aktifitas harus berada pada mode SINKRON, sebagaimana deskripsi berikut ini:≈
                                    </p>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/study/study-image6.png') }}" alt="">
									</div>
									<p style="text-align: justify">
										Kewajiban mahasiswa dalam menjalankan kuliah online via LMS:
                                    </p>
									<div class="ml-4">
										1.	Wajib senantiasa per hari untuk mengakses LMS </br>
										2.	Wajjib mematuhi arahan dan penjelasan dosen di LMS </br>
										3.	Wajib mengerjakan soal Quiz mingguan yang diberikan dosen </br>
										4.	Wajib mengerjakan tugas-tugas yang diberikan oleh dosen </br>
										5.	Tidak boleh menunda pengerjaan quiz mingguan atau tugas semester </br>
										6.	Wajib dalam waktu yang sama pada saat Video Conferencing dengan dosen.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- About Us END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
    @endsection