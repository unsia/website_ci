@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Profil Program Studi Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
            <li>Profil Program Studi</li>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/sistem-informasi/profil') }}">Profil Program
                                    Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil-lulusan') }}">Profil
                                    Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('sistem-informasi.capaian_pembelajaran_lulusan') }}">Capaian
                                    Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <h4>Gambaran Umum Program</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Program Studi</th>
                                    <td>Sistem Informasi</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td><a
                                            href="https://pmb.lms-usa.site/sistem-informasi">https://pmb.lms-usa.site/sistem-informasi</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenjang</th>
                                    <td>Strata 1</td>
                                </tr>
                                <tr>
                                    <th>Gelar</th>
                                    <td>Sarjana Sistem Informasi (S.SI)</td>
                                </tr>
                                <tr>
                                    <th>Syarat Pendidikan</th>
                                    <td>Lulusan SMA/SMK dan Se-derajat, Pindahan, dan Lanjutan</td>
                                </tr>
                                <tr>
                                    <th>Lama Studi</th>
                                    <td>8 Semester</td>
                                </tr>
                                <tr>
                                    <th>Kredit Semester</th>
                                    <td>Minimal 144 SKS</td>
                                </tr>
                                <tr>
                                    <th>Info Admisi</th>
                                    <td>
                                        <ul class="ml-4">
                                            <li><a href="#">Jadwal</a></li>
                                            <li><a href="{{ route('landing.jenjang_s1') }}">Syarat</a>
                                            </li>
                                            <li><a href="{{ route('landing.jenjang_s1') }}">Prosedur Pendaftaran</a>
                                            </li>
                                            <li><a href="{{ route('landing.standar_biaya_perkuliahan') }}">Biaya
                                                    Kuliah</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pendaftaran</th>
                                    <td><a href="http://portal.koreaswt.com/apply/index.jsp">Daftar Online</a></td>
                                </tr>
                            </table>
                            <h4>Profil</h4>
                            <p style="text-align: justify">Prodi Sistem Informasi merupakan disiplin ilmu yang
                                berhubungan dengan teknologi informasi dan komunikasi guna menyelesaikan masalah?masalah
                                bisnis dan teknologi dalam perusahaan. Lulusan sistem informasi mempunyai kesempatan
                                karir di bidang bisnis dan teknologi informasi.
                            </p>
                            <p style="text-align: justify">Program ini bertujuan membekali mahasiswa dengan wawasan
                                pengetahuan dan keterampilan dalam pengembangan sistem informasi, tren penggunaan dan
                                kebutuhan sistem informasi strategis bagi perusahaan (corporate information systems),
                                penggunaan sistem informasi yang berbasis e-business, serta pengetahuan teknologi dan
                                bisnis yang dapat diaplikasikan dalam dunia usaha dan dunia industri (DUDI). Mahasiswa
                                akan diarahkan menjadi seorang pakar di dalam perencanaan strategi dan pemanfaatan SI/TI
                                guna mendukung kinerja bisnis sebuah organisasi.
                            </p>
                            <h4>Tujuan Program</h4>
                            <ul class="ml-4">
                                <li>Menghasilkan lulusan yang ahli di bidang sistem informasi E-Business berbasis
                                    capaian Pembelajaran Lulusan sesuai dengan Standar Nasional Pendidikan Tinggi dan
                                    memiliki kemampuan untuk mengembangkan keilmuan sistem informasi secara lebih maju,
                                    berkarakter profesional dan memiliki budi pekerti yang luhur.
                                </li>
                                <li>Menghasilkan topik-topik penelitian dibidang sistem informasi yang berorientasi pada
                                    kontribusi pengembangan IPTEK untuk revolusi industry 4.0 di Indonesia serta
                                    menghasilkan luaran publikasi nasional dan internasional bereputasi dan HAKI.</li>
                                <li>Menghasilkan kegiatan-kegiatan pengabdian masyarakat yang berorientasi pada
                                    kontribusi IPTEK pada masyarakat.
                                </li>
                                <li>Menghasilkan dosen tetap Prodi Sistem Informasi yang memiliki kepakaran di bidang
                                    sistem informasi E-Business mengacu pada perkembangan revolusi industry 4.0.
                                </li>
                                <li>Menciptakan budaya akademik yang unggul dengan menerapkan standar dan peraturan
                                    nasional perguruan tinggi yang mampu mengikuti perkembangan iptek di bidang sistem
                                    informasi.
                                </li>
                            </ul>
                            <h4>Visi Program Studi</h4>
                            <p style="text-align: justify">Menjadi Program Studi Sistem Informasi On-line yang unggul
                                pada tataran global dibidang E-Bisnis dan masuk dalam tujuh besar Program Studi Sistem
                                Informasi On-line unggulan di Indonesia</p>

                            <h4>Misi Program Studi</h4>
                            <ol type="a" class="ml-4">
                                <li>Menyelenggarakan pendidikan tinggi di bidang sistem informasi yang mengacu pada
                                    standar mutu nasional BAN PT dan mengikuti trend perkembangan TIK di tingkat
                                    internasional yakni revolusi industry 4.0.
                                </li>
                                <li>Menyelenggarakan penelitian di bidang ilmu sistem informasi yang berfokus pada
                                    pengembangan E-Bisnis untuk mendukung pengembangan revolusi industry 4.0 di
                                    Indonesia.
                                </li>
                                <li>Menyelenggarakan pengabdian kepada masyarakat yang berbasis ilmu pengetahuan dan
                                    teknologi dengan memanfaatkan hasil penelitian.
                                </li>
                                <li>Membangun kompetensi dosen sesuai standar nasional untuk menunjang pengembangan
                                    kurikulum yang fokus pada pengembangan E-Bisnis berdasarkan Standar Nasional
                                    Pendidikan Tinggi.
                                </li>
                                <li>Membangun budaya akademik yang menerapkan standar dan peraturan nasional perguruan
                                    tinggi yang mampu mengikuti perkembangan iptek di bidang sistem informasi pendidikan
                                    secara on-line secara global.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection