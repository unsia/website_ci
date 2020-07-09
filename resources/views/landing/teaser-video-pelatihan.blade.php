@extends('layouts.main-page')

@section('active', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Pelatihan Bersertifikasi</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang USA</li>
					<li>Pelatihan Bersertifikasi</li>
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
                                    <p style="text-align: justify">Universitas Siber Asia secara regular atau setiap akhir semester menyelenggarakan Pelatihan Profesional Bersertifikasi dengan tujuan untuk mempersiapkan lulusan yang siap berkiprah di dunia kerja dalam Era Smart Digital Economy. Pelatihan secara rutin diumumkan dalam kalender akademik mahasiswa wajib mengikuti pelatihan tersebut secara online.</p>
									<p>Contoh Pelatihan Berikut ini:</p>
									<p class="text-center">Sharing Pengalaman Kerja</p>
									<div class="embed-responsive embed-responsive-16by9">
										<video controls src="{{ asset('homepages/images/video/teaservideo1.mp4') }}"></video>
									  </div>
									<p>Jenis-jenis pelatihan yang disiapkan Universitas Siber Asia:</p>
									<ol class="ml-5">
										<li>Leadership Training</li>
										<li>IT Training</li>
										<li>Online Learning Libraries</li>
										<li>Content Development</li>
										<li>Sales and Marketing Training</li>
										<li>NTI conducts the following IT courses</li>
										<li>MS Office Applications</li>
										<li>Microsoft Technical Courses</li>
										<li>CompTIA</li>
										<li>Unix / Linux</li>
										<li>CISCO</li>
										<li>Oracle</li>
									</ol>
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