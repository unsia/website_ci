<body id="bg">
	<div class="page-wraper">
		<!-- <div id="loading-icon-bx"></div> -->

		<!-- Header Top ==== -->
		<header class="header rs-nav">
			<div class="top-bar">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="topbar-left">
							<ul>
								<li>
									<a href="<?= base_url('home/tentang_unsia/faq') ?>"><i class="fa fa-question-circle"></i>Ask a Question</a>
								</li>
								<!-- <li>
									<a href="mailto:admission@acu.ac.id"><i class="fa fa-envelope-o"></i>admission@acu.ac.id</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-header navbar-expand-lg">
				<div class="menu-bar clearfix">
					<div class="container clearfix">
						<!-- Header Logo ==== -->
						<div class="menu-logo">
							<a href="<?= base_url(); ?>"><img src="#" class="lazy" data-src="<?= base_url(); ?>assets/images/logo.png" alt="" /></a>
						</div>
						<!-- Mobile Nav Button ==== -->
						<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- Navigation Menu ==== -->
						<div class="menu-links navbar-collapse collapse justify-content-end" id="menuDropdown">
							<div class="menu-logo">
								<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo.png"
										alt="" /></a>
							</div>
							<ul class="nav navbar-nav">
								<li class="active"><a href="/">Beranda</a></li>
								<li>
									<a href="javascript:;">Tentang UNSIA <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li>
											<a href="<?= base_url('home/tentang_unsia/salam_rektor') ?>">Salam Rektor</a>
										</li>
										<li>
											<a href="<?= base_url('home/tentang_unsia/kenapa_unsia') ?>">Kenapa UNSIA?</a>
										</li>
										<li>
											<a href="<?= base_url('home/tentang_unsia/keunggulan_dan_manfaat') ?>">Keunggulan
												dan Manfaat</a>
										</li>
										<li>
											<a href="<?= base_url('home/tentang_unsia/list_of_partner') ?>">List of
												Partner</a>
										</li>
										<li><a href="<?= base_url('home/tentang_unsia/sejarah') ?>">Sejarah</a></li>
										<li><a href="<?= base_url('home/tentang_unsia/visi_misi') ?>">Visi Misi</a></li>
										<li>
											<a href="<?= base_url('home/tentang_unsia/struktur_organisasi') ?>">Struktur
												Organisasi</a>
										</li>
										<li><a href="<?= base_url('home/tentang_unsia/faq') ?>">FAQ</a></li>
									</ul>
								</li>
								<li class="add-mega-menu">
									<a href="javascript:;">Pendaftaran <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu add-menu">
										<li class="add-menu-left">
											<h5 class="menu-adv-title">Pendaftaran</h5>
											<ul>
												<li>
													<a href="<?= base_url('home/pendaftaran/info_pendaftaran') ?>">Info
														Pendaftaran</a>
												</li>
												<li>
													<a href="<?= base_url('home/pendaftaran/biaya_perkuliahan') ?>">Biaya
														Perkuliahan</a>
												</li>
												<!-- <li>
													<a href="<?= base_url('home/pendaftaran/beasiswa') ?>">Beasiswa</a>
												</li> -->
												<li>
													<a href="<?= base_url('home/pendaftaran/pembiayaan_soft_loan') ?>">Pembiayaan
														Soft Loan</a>
												</li>
											</ul>
										</li>
										<li class="add-menu-right">
											<a target="_blank" href="http://pmb.unsia.ac.id">
												<img src="<?= base_url(); ?>assets/images/adv/adv.jpg" alt="" />
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">Akademik <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li>
											<a href="javascript:;">Program Studi<i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
												<li><a target="_blank"
														href="<?= base_url('program-studi/manajemen'); ?>">Manajemen</a>
												</li>
												<li>
													<a target="_blank"
														href="<?= base_url('program-studi/sistem_informasi'); ?>">Sistem
														Informasi</a>
												</li>
												<li><a target="_blank"
														href="<?= base_url('program-studi/informatika'); ?>">Informatika</a>
												</li>
												<li><a target="_blank"
														href="<?= base_url('program-studi/akuntansi'); ?>">Akuntansi</a>
												</li>
												<li><a target="_blank"
														href="<?= base_url('program-studi/komunikasi'); ?>">Komunikasi</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:;">Proses Akademik<i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
												<li><a
														href="<?= base_url('home/akademik/panduan_akademik') ?>">Panduan
														Akademik</a>
												</li>
												<li>
													<a
														href="<?= base_url('home/akademik/teaching_profesor') ?>">Teaching
														Profesor</a>
												</li>
												<li>
													<a
														href="<?= base_url('home/akademik/keunggulan_lulusan_unsia') ?>">Keunggulan
														Lulusan UNSIA</a>
												</li>
												<!-- <li><a
														href="<?= base_url('home/akademik/peraturan_akademik') ?>">Peraturan
														Akademik</a></li> -->
												<li><a
														href="<?= base_url('home/akademik/kalender_akademik') ?>">Kalender
														Akademik</a></li>
											</ul>
										</li>
										<li>
											<a href="<?= base_url('home/akademik/program_kampus_merdeka') ?>">Program Kampus
												Merdeka</a>
										</li>
										<li>
											<a href="<?= base_url('home/akademik/panduan_pembelajaran_online') ?>">Panduan
												Pembelajaran Online</a>
										</li>
										<li>
											<a href="http://kuliah.unsia.ac.id/">Sistem Pembelajaran Online</a>
										</li>
										<li>
											<a href="http://akademik.unsia.ac.id/">Sistem Informasi Akademik</a>
										</li>
										<li>
											<a href="http://cyberlibrary.unsia.ac.id/">Digital Library</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">Fasilitas <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li>
											<a href="<?= base_url('home/fasilitas/learning_community') ?>">Learning
												Community</a>
										</li>
										<li>
											<a href="<?= base_url('home/fasilitas/laboratorium_virtual') ?>">Laboratorium
												Virtual</a>
										</li>
										<li>
											<a href="<?= base_url('home/fasilitas/studio_multimedia') ?>">Studio
												Multimedia</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">Arsip<i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="<?= base_url('home/arsip/berita') ?>">Berita</a></li>
										<li>
											<a href="<?= base_url('home/arsip/blog') ?>">Blog</a>
										</li>
									</ul>
								</li>
								<li><a href="<?= base_url('home/kontak') ?>">Kontak</a></li>
							</ul>
							<div class="nav-social-link">
								<a href="javascript:;"><i class="fa fa-facebook"></i></a>
								<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
								<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<!-- Navigation Menu END ==== -->
					</div>
				</div>
			</div>
		</header>
		<!-- header END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div class="page-banner ovbl-dark" style="background-image: url(<?= base_url(); ?>assets/images/banner/banner2.jpg)">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="text-white"><?= $title; ?></h1>
					</div>
				</div>
			</div>