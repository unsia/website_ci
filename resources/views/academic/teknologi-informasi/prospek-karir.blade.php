@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Prospek Karir Teknologi Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Teknologi Informasi</li>
            <li>Prospek Karir</li>
        </ul>
    </div>
</div>
<!-- Page Heading Box END ==== -->

<!-- Page Content Box ==== -->
<div class="content-block">
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                    <div class="feature-container">
                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/teknologi-informasi/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <p>Kompetensi lulusan yang dibutuhkan untuk menghadapi era revolusi industri 4.0 adalah:</p>
                            <ol type="1" class="ml-4">
                                <li>Kemampuan berbahasa asing. Kemampuan ini penting dikuasai agar dapat berkomunikasi pada tingkat global.</li>
                                <li>Kemampuan berpikir kritis. Kemampuan ini dapat ditingkatkan melalui kebiasaan membaca dan berdiskusi secara intensif.</li>
                                <li>Kreativitas. Kemampuan untuk menemukan sesuatu yang unik dan out of the box. Menciptakan inovasi-inovasi baru atau mengembangkan yang sudah ada.</li>
                                <li>People management. Kemampuan untuk mengatur atau leadership. Bagi mahasiswa, hal ini dapat dikembangkan saat mereka mengikuti organisasi ataupun ekstrakulikuler.</li>
                                <li>Emotional Intelligence atau kecerdasan emosi. Dalam hal ini, termasuk pula kemampuan untuk mengidentifikasi, mengelola, serta memanfaatkan emosi.</li>
                            </ol>
                            <p style="text-align: justify">Ciri khas profil lulusan Asia Cyber University adalah lulusan yang bercirikan, memiliki karakter, integritas dan soft-skill. Profil lulusan Asia Cyber University berlaku seragam untuk semua jenis jenjang pendidikan dari S1, S2 dan S3. Deskripsi ciri khas Capaian Pembelajaran untuk lulusan Asia Cyber University yang memiliki karakter, integritas dan soft-skill adalah sebagaimana berikut ini:</p>
                            <p style="text-align: center">Deskripsi Profil Lulusan Asia Cyber University yang ber-Karakter, Integritas dan Soft-Skill</p>
                            <ol type="1" class="ml-4">
                                <li>Berkarakter dan menjunjung tinggi integritas moral</li>
                                <li>Profesional berbasis keilmuan prodi</li>
                                <li>Memiliki kemampuan manajerial </li>
                                <li>Memiliki kemampuan bahasa internasional (Inggris)</li>
                                <li>Memiliki interpersonal skill</li>
                                <li>Memiliki kemampuan mengembangkan karir profesional</li>
                                <li>Memiliki kemampuan kewirausahaan</li>
                                <li>Memiliki kemampuan untuk menerapkan prinsip anti korupsi dan tidak menyalahgunakan narkoba dalam peningkatan karir profesional.</li>
                                <li>Memiliki kemampuan untuk menjaga, melestarikan dan memanfaatkan SDA dan lingkungan.</li>
                                <li>Memiliki kemampuan untuk mengembangkan bidang peminatan bakat olahraga dan seni bagi mahasiswa yang memiliki talenta atau human interest.</li>
                            </ol>
                            <p style="text-align: justify">Lulusan Informatika mampu menguasai, menerapkan, dan mengembangkan  bidang Computer Science serta memiliki karakter dan integritas untuk berkontribusi aktif dalam masyarakat yang menggunakan teknologi komputer sebagai basis pengembangan kapasitas. Dengan mengacu pada Degree Outcome dan Profile Lulusan yang telah ditetapkan tersebut dapat diharapkan bahwa lulusan Prodi Teknik Informatika berperan aktif dalam mengembangkan bidang Computer Science untuk memenuhi kebutuhan masyarakat yang memanfaatkan teknologi komputer dalam upaya peningkatan kesejahteraan ekonomi. Lulusan Prodi Informatika dengan Profile tersebut dapat mengisi bidang profesi yang seluas-luasnya terkait dengan bidang Computer Science, Profesi tersebut telah dipetakan oleh Badan Pekerjaan Umum USA dan Australia pada 2014 – 2015 dimana menghasilkan rincian kualifikasi kompetensi spesifik yang secara keseluruhan mendasarkan pada bidang Computer Science.</p>
                            <p style="text-align: center">Adapun profesi-profesi tersebut dapat didefinisikan sebagaimana berikut ini:</p>
                            <table class="table table-bordered">
                                <tr class="bg-info text-center">
                                    <th>No.</th>
                                    <th>Profil Lulusan</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Computer Engineer</td>
                                    <td><p style="text-align: justify">Lulusan yang dapat bekerja pada lingkungan yang fokus pada perancangan dan pembuatan piranti digital dan elektronik berbasis komputasi yang menggabungkan aspek pengetahuan di bidang software maupun hardware.</p></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Software Engineer</td>
                                    <td><p style="text-align: justify">Lulusan yang dapat bekerja pada perusahaan pengembang berbagai software atau piranti lunak yang dibutuhkan untuk beragam keperluan, baik yang merupakan piranti sistem operasi, piranti pendukung (tools), piranti aplikasi pada baku kualitas pengembangan yang telah distandarisasi. Misalnya piranti lunak untuk pendidikan, telekomunikasi, bisnis, hiburan, model data dan simulasi.</p></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Multimedia Developer</td>
                                    <td><p style="text-align: justify">Lulusan yang dapat bekerja dengan merancang, mengembangkan dan mengelola fiture multimedia, seperti teks, suara, grafis, foto digital, pemodelan 2 Dimensi/3 Dimensi, animasi dan video untuk membuat produk-produk seperti web site, aplikasi mobile  atau program komputer multimedia.</p></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Network and Data Communication Engineer</td>
                                    <td><p style="text-align: justify">Lulusan yang dapat bekerja di bidang jaringan dan komunikasi, bertanggung jawab untuk menerapkan, memelihara, mendukung, mengembangkan dalam permasalahan perancangan jaringan komputer komunikasi dan komunikasi data dalam suatu organisasi atau antar organisasi.</p></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Telecommunication Network Engineer</td>
                                    <td><p style="text-align: justify">Lulusan yang dapat bekerja dalam bidang desain jaringan telekomunikasi, melaksanakan, dan mengelola berbagai jaringan telekomunikasi berbasis komputer yang digunakan dalam sebuah organisasi/perusahaan. Jaringan ini termasuk jaringan data, seperti internet, jaringan suara, seperti teknologi telekonferens, dan komunikasi video, seperti video conference</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection