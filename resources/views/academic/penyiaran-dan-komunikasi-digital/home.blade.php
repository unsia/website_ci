@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Penyiaran dan Komunikasi Digital</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Penyiaran dan Komunikasi Digital</li>
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
                                <a class="nav-link active"
                                    href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('/penyiaran-dan-komunikasi-digital/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('/penyiaran-dan-komunikasi-digital/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('/penyiaran-dan-komunikasi-digital/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('/penyiaran-dan-komunikasi-digital/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <h4>Gambaran Umum Program</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Program Studi</th>
                                    <td>Penyiaran dan Komunikasi Digital
                                    </td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td><a href="https://pmb.lms-usa.site/penyiaran-dan-komunikasi-digital
">https://pmb.lms-usa.site/penyiaran-dan-komunikasi-digital
                                        </a></td>
                                </tr>
                                <tr>
                                    <th>Jenjang</th>
                                    <td>Strata 1</td>
                                </tr>
                                <tr>
                                    <th>Gelar</th>
                                    <td>Sarjana Manajemen (S.M)</td>
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
                            <p style="text-align: justify">Program studi Penyiaran dan Komunikasi Digital didirikan
                                untuk menjawab tantangan revolusi industry 4,0 dimana semua operasi perusahaan saat ini
                                bekerja atas dasar teknologi informasi digital. Manajemen Kontemporer dan E-Commerce
                                diharapkan akan menghasilkan lulusan yang bermutu di bidang manajemen kontemporer untuk
                                dapat diserap oleh stake holder/user.
                            </p>
                            <p style="text-align: justify">Sebagai uniqueness Program studi dan Universitas, pendidikan
                                berbasis karakter dan integritas dipilih oleh Penyiaran dan Komunikasi Digital sebagai
                                penciri khas kurikulum. Dengan demikian, penyusunan KPT-KKNI level 6 oleh Manajemen
                                Kontemporer dan E-Commerce telah memperhatikan prosedur atau langkah-langkah standar
                                yang telah ditetapkan oleh Belmawa DIKTI, yakni telah mengacu pada rekomendasi dari
                                asosiasi prodi.
                            </p>
                            <p style="text-align: justify">Dengan demikian, penerapan KPT-KKNI level 6 di Penyiaran dan
                                Komunikasi Digital berupaya konsisten dalam membangun mutu lulusan di bidang komunikasi.
                            </p>
                            <h4>Tujuan Program</h4>
                            <ul class="ml-4">
                                <li>Dihasilkannya lulusan bidang penyiaran dan komunikasi digital yang memiliki semangat
                                    entrepreneurship dan profesionalitas.
                                </li>
                                <li>Dihasilkannya lulusan bidang penyiaran dan komunikasi digital yang memiliki
                                    integritas dan memahami norma di lingkungan sosial.</li>
                                <li>Dihasilkannya lulusan bidang penyiaran dan komunikasi digital yang mampu
                                    mengidentifikasi, menganalisis dan menemukan solusi atas permasalahan di bidang
                                    penyiaran dan komunikasi digital.
                                </li>
                                <li>Dihasilkannya karya-karya multimedia kreatif sehingga dapat bersaing di era industri
                                    ekonomi kreatif 4.0.
                                </li>
                                <li>Dihasilkannya kerjasama konkrit dengan berbagai pihak untuk bersinergi dalam
                                    kegiatan akademik (pengajaran/ pelatihan/ workshop/ seminar/ diskusi), penelitian
                                    dan pengabdian kepada masyarakat.
                                </li>
                            </ul>
                            <h4>Visi Program Studi</h4>
                            <p style="text-align: justify">Menjadi program studi yang mampu menghasilkan lulusan yang
                                memiliki semangat entrepreneurship dan profesionalitas dalam bidang komunikasi digital,
                                serta mampu menciptakan karya-karya multimedia kreatif sehingga dapat bersaing di era
                                industri ekonomi kreatif 4.0.</p>

                            <h4>Misi Program Studi</h4>
                            <ol type="a" class="ml-4">
                                <li>Menyelenggarakan pendidikan dan pengajaran berbasis siber di bidang Penyiaran dan
                                    Komunikasi Digital melalui pemanfaatan teknologi informasi dan komunikasi, yang
                                    dapat diakses oleh mahasiswa dimanapun dan kapanpun.
                                </li>
                                <li>Meningkatkan atmosfir akademik di kalangan mahasiswa dan tenaga pendidik melalui
                                    kegiatan diskusi dan seminar berbasis siber guna meningkatkan daya kritis dan
                                    analitis.
                                </li>
                                <li>Menyelenggarakan model pembelajaran praktik produksi konten komunikasi digital
                                    berbasis siber hingga mampu menghasilkan karya yang kreatif dan inovatif.
                                </li>
                                <li>Meningkatkan kualitas tenaga pendidik dan tenaga kependidikan di bidang penyiaran
                                    dan komunikasi digital melalui pelatihan, penelitian, seminar dan lokakarya ilmiah.
                                </li>
                                <li>Melakukan pengabdian dan partisipasi membangun masyarakat melalui kegiatan-kegiatan
                                    di bidang penyiaran dan komunikasi digital.
                                </li>
                                <li>Menggalang kemitraan dengan berbagai pihak, baik lembaga pemerintah maupun swasta di
                                    berbagai bidang, khususnya yang berkaitan dengan penyiaran dan komunikasi digital
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