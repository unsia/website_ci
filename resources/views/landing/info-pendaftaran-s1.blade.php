@extends('layouts.main-page')

@section('active-penerimaan', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white text-uppercase">Info Pendaftaran</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Penerimaan</li>
					<li>Jenjang S1</li>
					<li>Info Pendaftaran</li>
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
									<ol type="1" class="ml-4">
										<li class="mb-3">
											<b>Periode Pendaftaran</b>
											<ol type="a" class="ml-3">
												<li>
													Periode Penerimaan Tahap I
													<p>Pendaftaran dibuka pada September – Maret</p>
												</li>
												<li>
													Periode Penerimaan Tahap II
													<p>Pendaftaran dibuka pada Maret - September</p>
												</li>
											</ol>
										</li>
										<li class="mb-3">
											<b>Persyaratan  Pendaftaran</b>
											<ol type="a" class="ml-3">
												<li>
													Persyaratan Umum
													<ol type="1" class="ml-3">
														<li>Ijazah SMA/SMK atau se-derajat</li>
														<li>Nilai UN/ STTB</li>
														<li>FC KTP</li>
														<li>FC Kartu Keluarga (KK)</li>
														<li>NISN</li>
														<li>Foto / pas foto</li>
													</ol>
												</li>
											</ol>
											<table class="table table-bordered mt-3">
												<tr>
													<th>Klasifikasi</th>
													<th>Persyaratan</th>
												</tr>
												<tr>
													<td>Lulusan SMA/SMK dan Se-derajat</td>
													<td>
														<ol type="1" class="ml-3">
															<li>Menyelesaikan jenjang Pendidikan menengah atas/ se-derajat,</li>
															<li>Dapat menunjukkan ijazah dan persyaratan lain yang dibutuhkan</li>
														</ol>
													</td>
												</tr>
												<tr>
													<td>Pindahan</td>
													<td>
														<ol type="1" class="ml-3">
															<li>Ijazah Pendidikan tingkat diploma yang sudah diselesaikan;</li>
															<li>Transkrip Nilai</li>
															<li>Surat Pindah dari PT Asal yang akreditasi program studinya minimal sama dengan prodi yang dituju;</li>
															<li>Laporan Forlap PDPT DIKTI</li>
															<li>Lembar konversi nilai</li>
														</ol>
													</td>
												</tr>
												<tr>
													<td>Lanjutan</td>
													<td>
														<ol type="1" class="ml-3">
															<li>Menyelesaikan jenjang Pendidikan diploma III;</li>
															<li>Mengirimkan Ijazah Pendidikan tingkat diploma yang sudah diselesaikan;</li>
															<li>Surat Pindah dari PT Asal yang akreditasi program studinya minimal sama dengan prodi yang dituju;</li>
															<li>Laporan Forlap PDPT DIKTI</li>
															<li>Surat pindah</li>
															<li>Lembar Konversi Nilai</li>
															<li>Berasal dari prodi dengan akreditasi minimal sama dengan prodi yang dituju</li>
														</ol>
													</td>
												</tr>
											</table>
											<ul class="ml-4">
												<li>
													Cara pendaftaran: Pendaftaran dapat dilakukan secara online melalui aplikasi pendaftaran di website. Dokumen dapat dikirimkan lewat pos atau datang secara langsung.
												</li>
											</ul>
										</li>
										<li>
											<b>Dokumen Pendaftaran</b>
											<ol type="1" class="ml-4">
												<li>
													<b>Lulusan SMA/SMK dan Se-derajat</b>
													<ol type="a" class="ml-3">
														<li>Form Pendaftaran,</li>
														<li>Transkrip Nilai;</li>
														<li>Ijazah</li>
														<li>Keterangan lulus tes seleksi masuk;</li>
														<li>Form persetujuan Verifikasi Dokumen Akademik</li>
														<li>dokumen lain sesuai dengan pesyaratan di atas</li>
													</ol>
												</li>
												<li>
													<b>Pindahan</b>
													<ol type="a" class="ml-3">
														<li>Form Pendaftaran,</li>
														<li>Transkrip Nilai;</li>
														<li>Laporan PDPT DIKTI</li>
														<li>Keterangan lulus tes seleksi masuk;</li>
														<li>Form persetujuan Verifikasi Dokumen Akademik</li>
														<li>dokumen lain sesuai dengan pesyaratan di atas</li>
													</ol>
												</li>
												<li>
													<b>Lanjutan</b>
													<ol type="a" class="ml-3">
														<li>Form Pendaftaran,</li>
														<li>Transkrip Nilai;</li>
														<li>Ijazah</li>
														<li>Laporan PDPT DIKTI</li>
														<li>Keterangan lulus tes seleksi masuk;</li>
														<li>Form persetujuan Verifikasi Dokumen Akademik</li>
														<li>dokumen lain sesuai dengan pesyaratan di atas</li>
													</ol>
												</li>
											</ol>
										</li>
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