@extends('layouts.main-page')

@section('active-akademik', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Keunggulan Lulusan UNSIA</h1>
			</div>
    </div>
</div>
<div class="breadcrumb-row">
	<div class="container">
		<ul class="list-inline">
			<li><a href="#">Beranda</a></li>
			<li>Akademik</li>
			<li>Proses Akademik</li>
			<li>Keunggulan Lulusan UNSIA</li>
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
                            <p style="text-align: justify">Lulusan Universitas Siber Asia dengan metode pembelajaran online via Learning Management System (LMS) menghasilkan lulusan yang mampu menguasai teknologi informasi sebagai basis pengembangan Applied Science di berbagai Program Studi yang ditawarkan. Kemandirian dan Kreatifitas/Inovasi adalah kata kunci yang menjadi target utama capaian pembelajaran lulusan. Karakteristik lulusan tersebut dicapai dengan proses pembelajaran yang intensif di LMS dan didukung oleh pelatihan-pelatihan professional bersertifikat yang diwajibkan untuk diikuti oleh setiap mahasiswa.</p>
                            <img src="{{ asset('homepages/images/keunggulan-lulusan1.png') }}" class="img-fluid mb-4" alt="Responsive image">
                            <p style="text-align: justify">Branding utama Universitas Siber Asia adalah Kampus Smart Digital Techology. Mahasiswa di setiap Prodi yang ditawarkan oleh Universitas Siber Asia dibekali dengan penguasaan skill Teknologi Informasi pada level Developer. Dengan demikian, mahasiswa di prodi-prodi bidang ilmu applied science dapat mengembangkan keilmuannya dengan memanfaatkan teknologi informasi untuk menghasilkan sistem atau entitas teknologi informasi berbentuk aplikasi digital</p>
                            <img src="{{ asset('homepages/images/keunggulan-lulusan2.png') }}" class="img-fluid" alt="Responsive image">
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
