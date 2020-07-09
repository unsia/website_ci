@extends('layouts.main-page')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Tentang UNSIA (Universitas Siber Asia)</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang UNSIA</li>
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
									<p style="text-indent: 50px; text-align: justify">
                                        Indonesia sudah memasuki Era Revolusi Industry 4.0 dimana karakteristik pengembangan Teknologi Informasi bersifat disruptif di segala sektor dan bidang. Selain itu market global semakin bersifat transparan dan sharing economy. Perguruan tinggi sebagai penghasil <i>human resource excelence</i> ditantang untuk lebih mengelaborasi keahlian-keahlian yang berorientasi inovasi, <i>break-through invention</i>, <i>high-creativity</i> dan <i>multi-complex cooperation</i>. Dengan memperhatikan tantangan dan mendesaknya kebutuhan tersebut, perguruan tinggi sudah saatnya bertransformasi dari basis konvensional menjadi basis pengembangan ilmu dan teknologi berbasis <i>Advances of Information Technology</i>. Salah satu bentuk transformasi tersebut adalah dirasa perlu untuk menuju layanan pendidikan tinggi yang berbasis <i>cyber platform</i>. Atas dasar hal tersebut, Yayasan Memajukan Ilmu dan Kebudayaan memiliki motivasi untuk mengusulkan pendirian Universitas Siber Asia. Dengan mendirikan Universitas Siber Asia di Indonesia perguruan tinggi semakin kompetitif dalam memberikan layanan akses pendidikan tinggi yang bermutu, masif dan memenuhi kualifikasi untuk bisa sukses dalam Era Revolusi Industry 4.0.
                                    </p>
                                    <p style="text-indent: 50px; text-align: justify">
                                        Indonesia memiliki keunggulan komparatif yakni bonus demografi dimana usia muda dan produktif sangat mendominasi prosentase dari komposisi SDM (Sumber Daya Manusia). Hal tersebut merupakan peluang besar dalam dunia pendidikan untuk menciptakan formula pendidikan tinggi yang berbasis <i>Cyber University</i> dengan misi utama yakni mencerdaskan kehidupan berbangsa dan bernegara. Data terakhir dari Kementristek Dikti dan BPS bahwa populasi usia 19 – 23 Tahun dari tahun 2005 hingga 2017 adalah terakumulasi sebesar 19,32 juta jiwa, sebagaimana ditunjukkan pada Gambar 1 - 4. Sementara jumlah PTN/PTS yang telah ada hingga 2017 adalah sekitar 4500 buah. Serta daya tampung mahasiswa oleh PTN/PTS dari tahun 2005 – 2017 rata-rata per tahun adalah 5,48 juta jiwa, sebagaimana ditunjukkan pada Gambar 2. Hal tersebut menunjukkan disparitas yang tinggi, yakni setiap tahun dari 2005 hingga 2017, hanya sekitar 29,36% dari populasi yang dapat menjadi mahasiswa atau masuk kuliah. Kondisi demikian dikonfirmasi oleh data Angka Partisipasi Kasar (APK) untuk jenjang pendidikan tinggi, yakni sebagaimana ditunjukkan pada Gambar 3, bahwa APK pada tahun 2005 sebesar 18,2% meningkat hingga 31,15% pada 2017. Peningkatan APK selama 13 Tahun tersebut tidaklah begitu pesat atau signifikan jika dibandingkan dengan data APK di wilayah ASEAN yang rata-rata berada pada kisaran >35%. Kondisi demikian merupakan tantangan dan peluang dalam kerangka memberikan akses pendidikan tinggi seluas-luasnya di usia produktif pada 19 – 23 tahun agar dapat meningkatkan APK, dimana target APK Kemenristekdikti pada 2016 – 2017 adalah sebesar 40%. Serta dengan memperhatikan data lulusan setiap tahun SMK secara nasional yakni berkisar dari 1,8 - 2 juta siswa per tahun, maka Universitas Siber Asia berpeluang untuk memberikan layanan pendidikan online.
                                    </p>
								</div>
                                <div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/about/about-image1.png') }}" alt="">
                                    <p>
                                        <b>Gambar 1. Populasi usia produktif pada 19 – 23 tahun dari tahun 2005 hingga 2017 (Sumber: BPS).</b>
                                    </p>
                                </div>
                                <div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/about/about-image2.png') }}" alt="">
                                    <p>
                                        <b>Gambar 2. Populasi mahasiswa produktif pada 19 – 23 tahun yang diterima oleh PTN/PTS untuk tahun 2005</br>hingga 2017 (Sumber BPS dan Laporan Tahunan Kemenristekdikti).</b>
                                    </p>
                                </div>
                                <div class="text-center mb-5">
                                    <img src="{{ asset('homepages/images/about/about-image3.png') }}" alt="">
                                    <p>
                                        <b>Gambar 3. Angka Partisipasi Kasar (APK) pada usia produktif pada 19 – 23 tahun yang diterima oleh</br>PTN/PTS untuk tahun 2005 hingga 2017 (Sumber BPS dan Laporan Tahunan Kemenristekdikti).</b>
                                    </p>
                                </div>
                                <div class="text-center mb-3">
                                    <img src="{{ asset('homepages/images/about/about-image4.png') }}" alt="">
                                    <p>
                                        <b>Gambar 4. Data sensus penduduk Indoneisa usia produktif 15 tahun ke atas pada 2017 (Sumber BPS).</b>
                                    </p>
                                </div>
                                <div>
                                    <p style="text-indent: 50px; text-align: justify">
                                        Untuk dapat meningkatkan APK setiap tahun, dimana target Kemenristekdikti adalah sebesar 40%, dengan mempertimbangkan menambah jumlah PTN/PTS adalah <i>high-cost</i> dan membutuhkan waktu <i>Setup of Operational</i> yang cukup lama, untuk itu mode pelayanan akses pendidikan tinggi perlu ditransformasi dari basis layanan konvensional menjadi layanan pendidikan tinggi berbasis <i>Full On-Line Learning</i>. Pada Agustus 2019, Kemenristekdikti telah menyetujui dan memberikan izin prinsip pendirian Universitas Siber Asia guna dilakukan persiapan-persiapan infrastruktur pendukung untuk beroperasinya perguruan tinggi online pertama di Indonesia. Dalam kesempatan Peringatan Harteknas 2019, Bapak Prof. Mohammad Natsir selaku Menteri Riset dan Pendidikan Tinggi mengapresiasi niatan mulia Yayasan Memajukan Ilmu dan Kebudayaan dalam membantu upaya pemerintah meningkatan kuantitas dan kualitas pendidikan tinggi dengan metode layanan online. Bapak Menteri berharap kelak, Universitas Siber Asia menjadi <i>World Class University</i>.
                                    </p>
                                    <p style="text-indent: 50px; text-align: justify">
                                        Dengan landasan-landasan dan uraian latar belakang tersebut Yayasan Memajukan Ilmu dan Kebudayaan mengajukan izin pendirian Perguruan Tinggi Online pertama di Indonesia dengan tujuan sebagai berikut:
                                    </p>
                                    <ol class="ml-3">
                                        <li>
                                            <p style="text-align: justify">
                                                Membantu upaya pemerintah dalam meningkatkan aksesibilitas pendidikan tinggi bagi semua kalangan dan strata sosial sehingga berdampak pada peningkatan APK secara signifikan.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify">
                                                Mempersiapkan Sumber Daya Manusia yang siap bersaing dan berkiprah di era Revolusi Industry 4.0 dengan bekal kemampuan IT literacy yang tinggi dan mampu mendayagunakan sebagai <i>Driven Digital Economy</i>.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify">
                                                Membangun platform perguruan tinggi online berbasis teknologi informasi high-end sebagai role model layanan perguruan tinggi berkelas dunia.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify">
                                                Meningkatkan kualitas layanan pendidikan tinggi berorientasi pada kebutuhan pasar global berbasis tata kelola perguruan tinggi online.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify">
                                                Mempersiapkan roadmap pengembangan Revolusi Industry 4.0 menuju <i>Era of Smart Society</i> 5.0 berbasis penguasaan teknologi digital.
                                            </p>
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