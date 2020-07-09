@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Teknologi Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Teknologi Informasi</li>
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
                                <a class="nav-link active" href="{{ url('/teknologi-informasi') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <h4>Gambaran Umum Program</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Program Studi</th>
                                    <td>Teknologi Informasi
                                    </td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td><a
                                            href="https://pmb.lms-usa.site/teknologi-informasi">https://pmb.lms-usa.site/teknologi-informasi</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenjang</th>
                                    <td>Strata 1</td>
                                </tr>
                                <tr>
                                    <th>Gelar</th>
                                    <td>Sarjana Komputer (S.Kom)</td>
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
                            <p style="text-align: justify">Program Studi Teknik Informatika didirikan untuk menjawab
                                tantangan revolusi industri 4,0 dimana semua operasi perusahaan saat ini bekerja atas
                                dasar teknologi informasi digital. Manajemen Kontemporer diharapkan akan menghasilkan
                                lulusan yang bermutu di bidang manajemen kontemporer untuk dapat diserap oleh stake
                                holder/user.</p>
                            <p style="text-align: justify">Sebagai uniqueness Prodi dan Universitas, pendidikan berbasis
                                karakter dan integritas dipilih oleh Manajemen Kontemporer sebagai penciri khas
                                kurikulum. Dengan demikian, penyusunan KPT-KKNI level 6 oleh Teknik Informatika telah
                                memperhatikan prosedur atau langkah-langkah standar yang telah ditetapkan oleh Belmawa
                                DIKTI, yakni telah mengacu pada rekomendasi dari asosiasi prodi (ASPIKOM)</p>
                            <p style="text-align: justify">Dengan demikian, penerapan KPT-KKNI level 6 di Teknik
                                Informatika berupaya konsisten dalam membangun mutu lulusan di bidang Teknik
                                Informatika.</p>
                            <h4>Tujuan Program</h4>
                            <ul class="ml-4">
                                <li>Menghasilkan lulusan yang ahli di bidang teknik informatika E-Business berbasis
                                    Capaian Pembelajaran Lulusan sesuai dengan Standar Nasional Pendidikan Tinggi dan
                                    memiliki kemampuan untuk mengembangkan keilmuan teknik informatika secara lebih
                                    maju, berkarakter profesional dan memiliki budi pekerti yang luhur.</li>
                                <li>Menghasilkan topik-topik penelitian dibidang teknik informatika yang berorientasi
                                    pada kontribusi pengembangan IPTEK untuk revolusi industry 4.0 di Indonesia serta
                                    menghasilkan luaran publikasi nasional dan internasional bereputasi dan HAKI.</li>
                                <li>Menghasilkan kegiatan-kegiatan pengabdian masyarakat yang berorientasi pada
                                    kontribusi IPTEK pada masyarakat.</li>
                                <li>Menghasilkan dosen tetap Prodi Teknik informatika yang memiliki kepakaran di bidang
                                    teknik informatika E-Business mengacu pada perkembangan revolusi industry 4.0.</li>
                                <li>Menciptakan budaya akademik yang unggul dengan menerapkan standar dan peraturan
                                    nasional perguruan tinggi yang mampu mengikuti perkembangan iptek di bidang teknik
                                    informatika.</li>
                            </ul>
                            <h4>Visi Program Studi</h4>
                            <p style="text-align: justify">Visi Program Studi Sistem Infromasi Asia Cyber University
                                yaitu: “Menjadi Program Studi Informatika On-line yang unggul pada tataran global
                                dibidang E-Bisnis dan masuk dalam tujuh besar Program Studi Teknik Informatika On-line
                                unggulan di Kopertis Wilayah III</p>

                            <h4>Misi Program Studi</h4>
                            <ol type="a" class="ml-4">
                                <li>Menyelenggarakan pendidikan tinggi di bidang teknik informatika yang mengacu pada
                                    standar mutu nasional BAN PT dan mengikuti trend perkembangan TIK di tingkat
                                    internasional yakni revolusi industry 4.0.</li>
                                <li>Menyelenggarakan penelitian di bidang ilmu teknik informatika yang berfokus pada
                                    pengembangan E-Bisnis untuk mendukung pengembangan revolusi industry 4.0 di
                                    Indonesia.</li>
                                <li>Menyelenggarakan pengabdian kepada masyarakat yang berbasis ilmu pengetahuan dan
                                    teknologi dengan memanfaatkan hasil penelitian.</li>
                                <li>Membangun kompetensi dosen sesuai standar nasional untuk menunjang pengembangan
                                    kurikulum yang fokus pada pengembangan E-Bisnis berdasarkan Standar Nasional
                                    Pendidikan Tinggi.</li>
                                <li>Membangun budaya akademik yang menerapkan standar dan peraturan nasional perguruan
                                    tinggi yang mampu mengikuti perkembangan iptek di bidang teknik informatika
                                    pendidikan secara on-line secara global</li>
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