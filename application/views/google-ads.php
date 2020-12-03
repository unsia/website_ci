<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Universitas Siber Asia</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/adsense/img/favicon.png" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url(); ?>assets/adsense/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img
					src="<?= base_url(); ?>assets/adsense/img/unsia.png" class="img-fluid" width="100" alt=""></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Kenapa UNSIA?</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Liputan Media</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container d-flex h-100 align-items-center">
			<div class="mx-auto text-center">
				<h1 class="mx-auto my-0 text-uppercase">Universitas Siber Asia</h1>
				<h2 class="text-white-50 mx-auto mt-2 mb-5">Perguruan Tinggi Berbasis Siber Pertama di Indonesia</h2>
				<?= $this->session->flashdata('message'); ?>
				<div class="d-flex justify-content-center">
					<form class="form-email" method="post" action="<?= base_url('adsense'); ?>">
						<small class="text-white">Silahkan lengkapi form berikut untuk informasi lebih lanjut mengenai
							program kuliah online.</small>
						<hr>
						<div class="form-group">
							<input type="name" class="form-control" id="name" name="name"
								value="<?= set_value('name'); ?>" required placeholder="Nama Lengkap"
								aria-describedby="emailHelp">
							<?= form_error('name', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email"
								value="<?= set_value('email'); ?>" required placeholder="Email">
							<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="phone" name="phone"
								value="<?= set_value('phone'); ?>" required placeholder="No HP">
							<?= form_error('phone', '<small class="text-danger">', '<br>', '</small>'); ?>
							<small class="text-white">Format : 08982136561</small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="city" name="city"
								value="<?= set_value('city'); ?>" required placeholder="Kota">
							<?= form_error('city', '<small class="text-danger">', '<br>', '</small>'); ?>
							<small class="text-white">Format : Bandung</small>
						</div>
						<div class="form-group">
							<select class="form-control" id="prodi" name="prodi" required>
								<option value="">Pilih Program Studi</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Manajemen">Manajemen</option>
								<option value="Komunikasi">Komunikasi</option>
								<option value="Informatika">Informatika</option>
								<option value="Akuntansi">Akuntansi</option>
							</select>
							<?= form_error('prodi', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<select class="form-control" name="time" id="time" required>
								<option value="">Waktu untuk dihubungi</option>
								<option value="08.00 s.d 09.00">08.00 s.d 09.00</option>
								<option value="09.01 s.d 10.00">09.01 s.d 10.00</option>
								<option value="10.01 s.d 11.00">10.01 s.d 11.00</option>
								<option value="11.01 s.d 12.00">11.01 s.d 12.00</option>
								<option value="12.01 s.d 13.00">12.01 s.d 13.00</option>
								<option value="13.01 s.d 14.00">13.01 s.d 14.00</option>
								<option value="14.01 s.d 15.00">14.01 s.d 15.00</option>
								<option value="15.01 s.d 16.00">15.01 s.d 16.00</option>
								<option value="16.01 s.d 17.00">16.01 s.d 17.00</option>
							</select>
							<?= form_error('time', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="sources" name="sources" value="Google Ads"
								hidden placeholder="Kota">
						</div>
						<button type="submit" class="btn btn-primary">Kirim</button>
					</form>
				</div>
			</div>
		</div>
	</header>
	<!-- About-->
	<section class="about-section text-center" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-white mb-4">#semuabisakuliah</h2>
					<p class="text-white-50">
						Mau kuliah tapi lagi pandemi begini? Mau keluar rumah tapi takut Virus Corona? Mau mulai kuliah
						tatap muka, mikir lagi biaya takut mahal? Mau kuliah tapi sibuk kerja? Pulang kerumah pengenya
						langsung tidur? Banyak tugas dari kantor? Rasanya Lelah untuk berpikir setelah seharian ngantor?
					</p>
				</div>
			</div>
			<img class="img-fluid" src="<?= base_url(); ?>assets/adsense/img/ipad.png" alt="" />
		</div>
	</section>
	<!-- Projects-->
	<section class="projects-section" id="projects">
		<div class="container">
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
						src="<?= base_url(); ?>assets/adsense/img/satu.jpg" alt="" /></div>
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-lg-left">
						<h4>Jadi sarjana dari rumah!</h4>
						<ul>
							<li class="text-black-50 mb-0">Kuliah di UNSIA akan Full Online</li>
							<li class="text-black-50 mb-0">Biaya Kuliah Terjangkau</li>
							<li class="text-black-50 mb-0">Kualitas Pendidikan Tinggi kelas Dunia</li>
							<li class="text-black-50 mb-0">Dapat kuliah sambil bekerja</li>
							<li class="text-black-50 mb-0">Materi kuliah dapat diulang-ulang (repeatable)</li>
							<li class="text-black-50 mb-0">Ditunjang pelatihan bersertifikasi secara online</li>
							<li class="text-black-50 mb-0">Membantu menyediakan tempat magang dan menjembatani lulusan
								dengan dunia
								industri</li>
							<li class="text-black-50 mb-0">Bisa sarjana dalam 3,5 tahun</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-lg-left">
						<h4>Biaya Kuliah Terjangkau</h4>
						<ul>
							<li class="text-black-50 mb-0">Biaya pendaftaran Rp. 100,000</li>
							<li class="text-black-50 mb-0">Biaya perkuliahan Rp. 3,000,000/ semester ( Bisa
								dicicil 3x )</li>
							<li class="text-black-50 mb-0">Cashback Rp. 200,000 untuk pembayaran penuh</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
						src="<?= base_url(); ?>assets/adsense/img/dua.jpg" alt="" /></div>
			</div>
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
						src="<?= base_url(); ?>assets/adsense/img/tiga.jpg" alt="" /></div>
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-lg-left">
						<h4>Apa Yang Kamu Dapat ?</h4>
						<ul>
							<li class="text-black-50 mb-0">Menggunakan LMS yang didesain untuk membantu kamu
								belajar
								secara maksimal</li>
							<li class="text-black-50 mb-0">Perkuliahan dilengkapi dengan materi sekaligus video
								pembelajaran</li>
							<li class="text-black-50 mb-0">Ditunjang Learning material lengkap yang diakses
								secara online di Digital Library</li>
							<li class="text-black-50 mb-0">Memiliki Fitur Live Streaming</li>
							<li class="text-black-50 mb-0">Video direkam dengan kualitas terbaik</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-lg-left">
						<h4>Pilihan Program Studi</h4>
						<ul>
							<li class="text-black-50 mb-0">Sistem Informasi</li>
							<li class="text-black-50 mb-0">Manajemen</li>
							<li class="text-black-50 mb-0">Informatika</li>
							<li class="text-black-50 mb-0">Komunikasi</li>
							<li class="text-black-50 mb-0">Akuntansi</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
						src="<?= base_url(); ?>assets/adsense/img/empat.jpg" alt="" /></div>
			</div>
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
						src="<?= base_url(); ?>assets/adsense/img/lima.jpg" alt="" /></div>
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-lg-left">
						<h4>Kerjasama</h4>
						<p>Di Universitas Siber Asia, kami menyadari bahwa kerjasama yang baik adalah tulang punggung
							operasional kami. Nilai kerjasama ini juga mendorong kami untuk bekerjasama dengan
							perusahaan dan asosiasi yang ada di Negara asing, khususnya di Korea.</p>
					</div>
				</div>
			</div>
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mt-4 mb-lg-5" id="signup">
				<div class="col-xl-12 col-lg-12"><img class="img-fluid mb-3 mb-lg-0"
						src="<?= base_url(); ?>assets/adsense/img/liputan.jpg" alt="" /></div>
			</div>
		</div>
	</section>
	<!-- Signup-->
	<section class="signup-section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-8 mx-auto text-center">
					<i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
					<h2 class="text-white mb-5">Dapatkan informasi lebih lanjut tentang UNSIA!</h2>
					<a href="#page-top" class="btn btn-primary mx-auto js-scroll-trigger">Hubungi Kami!</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact-->
	<section class="contact-section bg-black">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-map-marked-alt text-primary mb-2"></i>
							<h4 class="text-uppercase m-0">Alamat</h4>
							<hr class="my-4" />
							<div class="small text-black-50">Jl. Harsono RM, Ragunan, Jakarta Selatan</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-envelope text-primary mb-2"></i>
							<h4 class="text-uppercase m-0">Email</h4>
							<hr class="my-4" />
							<div class="small text-black-50">unsia.bantuanpmb@gmail.com</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-mobile-alt text-primary mb-2"></i>
							<h4 class="text-uppercase m-0">Telepon</h4>
							<hr class="my-4" />
							<div class="small text-black-50">(021) 2780-6189</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="footer bg-black small text-center text-white-50">
		<div class="container">Copyright © Universitas Siber Asia 2020</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url(); ?>assets/adsense/js/scripts.js"></script>
</body>

</html>