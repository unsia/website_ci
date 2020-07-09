@extends('layouts.main-page')

@section('active-about', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white text-uppercase">Sejarah Universitas Siber Asia (UNSIA)</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang UNSIA</li>
					<li>Sejarah UNSIA</li>
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
                                <div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/about/unsia.jpg') }}" alt="">
                                </div>
                                <p style="text-align: justify">
                                    Universitas Siber Asia (UNSIA) lahir atas inisiasi dua tokoh penting, yaitu Dr. El Amry Bermawi Putera dan Jan Youn Cho, Ph.D., MPA., CPA. Keduanya memiliki pengalaman Panjang di dunia Pendidikan tinggi. Dr. El Amry merupakan Rektor 3 periode di Universitas Nasional, salah satu universitas tertua di Indonesia dan Jan Youn Cho, Ph.D., MPA., CPA adalah mantan Vice President  of  Hankuk University  for Foreign Studies, yang sekaligus merupakan Operating Rector. Keduanya memiliki misi mulia untuk meningkatkan kualitas Pendidikan tinggi melalui pembelajaran berbasis full online learning.
                                </p>
                                <p style="text-align: justify">Dibawah naungan Yayasan Memajukan Ilmu dan Kebudayaan (YMIK), UNSIA hadir unutk mendorong peningkatan Angka Partisipasi Kasar (APK) atau jumlah masyarakat usia produktif yang melanjutkan ke jenjang perguruan tinggi di Indonesia yang masih rendah.  Berikut adalah milestone perjalanan Universitas Siber Asia:</p>
                                <ol class="ml-4">
                                    <li>September, 2016, YMIK merintis Cyber University dengan Korea Selatan</li>
                                    <li>Februari 2017, Universitas Nasional -Universitas dibawah naungan YMIK bekerjasama untuk pembelajaran online learning dengan Hankuk University of Foreign Studies</li>
                                    <li>2018, disiapkan persyaratan pengajuan pendirian Universitas Siber Asia</li>
                                    <li>Februari, 2019, Menteri Riset Teknologi dan Pendidikan Tinggi, Prof M. Nasir, mengunjungi Korea Selatan untuk melihat pembelajaran online di tingkat universitas</li>
                                    <li>27 Maret 2019, Lembaga Layanan  Pendidikan Tinggi (LLDIKTI) Wilayah III Kementerian Riset, Teknologi, dan Pendidikan Tinggi menerbitkan surat rekomendasi untuk YMIK pilot project untuk membangun Universitas yang berbasis siber</li>
                                    <li>16 Mei 2019, Kementerian Riset Teknologi dan Pendidikan Tinggi mengundang jajaran pimpinan YMIK dan founder Universitas Siber Asia untuk mempresentasikan pengajuan proposal pembangunan Universitas berbasis Siber</li>
                                    <li>20 Mei 2019, Pimpinan YMIK dan Universitas Siber Asia mempresentasikan proposal pendirian Universitas Siber Asia</li>
                                    <li>Agustus – Desember 2019, Kemenristek DIKTI melakukan asistensi persiapan pendirian Universitas Siber Asia. Termasuk salah satunya adalah menurunkan tenaga ahli untuk melakukan pelatihan/ training kepada para dosen yang akan mengajar di Universitas Siber Asia, serta mempersiapkan konten dan sistem pembelajaran dalam Learning Management System/ LMS</li>
                                    <li>23 Agustus 2019, Universitas Siber Asia merupakan Universitas swasta pertama yang mendapatkan Dukungan Pendirian Universitas berbasis Siber dari Kemenristek Dikti melalui surat dengan nomor T/3245/A.A4/HK.01.00/2019 yang diberikan oleh Menteri Riset Teknologi dan Pendidikan Tinggi saat itu yaitu, Prof. Mohamad Natsir Drs., Ak., M.Si., Ph.D kepada Ketua Pengurus Yayasan Memajukan Ilmu dan Kebudayaan (YMIK), Dr. Ramlan Siregar, M.Si didampingi Rektor UNSIA, Jan Youn Cho, Ph.D., pada saat Hari Kebangkitan Teknologi Nasional (HAKTEKNAS), di Bali</li>
                                </ol>
                                <div class="text-center mb-5">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ asset('homepages/images/about/penyerahan-surat1.jpg') }}" alt="">
                                        </div>
                                        <div class="col">
                                            <img src="{{ asset('homepages/images/about/penyerahan-surat2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <p>Penyerahan surat dukungan dari Menristek Dikti, Prof. M. Natsir kepada Ketua Pengurus YMIK, Dr. Ramlan Siregar, M.Si didampingi oleh Rektor UNSIA, Jang Youn Cho, MBA., CPA, pada acara HAKTEKNAS, Bali, 23 Agustus 2019</p>
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