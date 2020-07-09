@extends('layouts.main-page')

@section('active-about', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
	<div class="container">
		<div class="page-banner-entry">
			<h1 class="text-white text-uppercase">Struktur Organisasi</h1>
		</div>
	</div>
</div>
<div class="breadcrumb-row">
	<div class="container">
		<ul class="list-inline">
			<li><a href="#">Beranda</a></li>
			<li>Tentang UNSIA</li>
			<li>Struktur Organisasi</li>
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
							<img src="{{ asset('homepages/images/struktur-organisasi.jpg') }}" class="img-fluid"
								alt="Responsive image">
						</div>

						<hr>

						<table class="table table-borderless mt-4">
							<tr>
								<td>1.</td>
								<td width="300px">Ketua YMIK</td>
								<td>:</td>
								<td>Dr. Ramlan Siregar, MSi</td>
								<td>asiacyberuniv@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>2.</td>
								<td>Rektor</td>
								<td>:</td>
								<td>Jang Youn Cho, Ph.D., CPA</td>
								<td>cho.jy@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Wakil Rektor Akademik, Kemahasiswaan dan PPMK</td>
								<td>:</td>
								<td>Dr. Ucuk Darusalam, S.T., M.T.</td>
								<td>ucuk.darusalam@lms-usa.site</td>
								<td><a href="{{ asset('homepages/documents/cv/CV Dr. Ucuk Darusalam, ST, MT.pdf') }}"
										class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>4.</td>
								<td>Wakil Rektor Administrasi Keuangan, SDM dan Kerjasama</td>
								<td>:</td>
								<td>Drs. Abdul Wahab Bangkona, M.Sc.</td>
								<td>aw.bangkona@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>5.</td>
								<td>Badan Penjaminan Mutu</td>
								<td>:</td>
								<td>Dr. Ir. Edi Sugiono, S.E., M.M.</td>
								<td>edi.sugiono@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>6.</td>
								<td>Biro Administrasi Akademik dan Kemahasiswaan</td>
								<td>:</td>
								<td>Dr. (c) Ria, S.E., M.Ak.</td>
								<td>ria@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>7.</td>
								<td>Unit Pengembangan Teknologi Informasi</td>
								<td>:</td>
								<td>Novi Dian Nathasia, S.Kom., M.M.S.I.</td>
								<td>novidian@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>8.</td>
								<td>Biro Kerjasama Nasional dan Internasional</td>
								<td>:</td>
								<td>Dra. Inez Saptenno, M.A.</td>
								<td>inez.saptenno@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>9.</td>
								<td>Biro Administrasi Umum, SDM dan Keuangan</td>
								<td>:</td>
								<td>Dian Metha Ariyanti, S.Sos., M.Si.</td>
								<td>karyatun@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>10.</td>
								<td>Ketua Program Studi Sistem Informasi</td>
								<td>:</td>
								<td>Andrianingsih, S.Kom, M.M.S.I</td>
								<td>andrianingsih@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>11.</td>
								<td>Ketua Program Studi Manajemen</td>
								<td>:</td>
								<td>Drs. Suadi, M.M.</td>
								<td>suadi@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>12.</td>
								<td>Ketua Program Studi Teknik Informatika</td>
								<td>:</td>
								<td>Eri Mardiana, S.Kom, M.Kom</td>
								<td>eri.mardiana@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>13.</td>
								<td>Ketua Program Studi Akuntansi</td>
								<td>:</td>
								<td>Dr Bambang Sudibyo</td>
								<td>bambang.sudibyo@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
							<tr>
								<td>14.</td>
								<td>Ketua Program Studi Komunikasi</td>
								<td>:</td>
								<td>Rosanah, S.S., M.IKom</td>
								<td>rosanah@lms-usa.site</td>
								<td><a href="#" class="btn btn-primary">Download CV</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Us END ==== -->
</div>
<!-- Page Content Box END ==== -->
@endsection