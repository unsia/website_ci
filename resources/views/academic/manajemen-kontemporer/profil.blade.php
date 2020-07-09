@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Profil Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
            <li>Profil</li>
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
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/manajemen-kontemporer/profil') }}">Profil
                                    Program Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/profil-lulusan') }}">Profil
                                    Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('manajemen-kontemporer.capaian_pembelajaran_lulusan') }}">Capaian
                                    Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <h4>Gambaran Umum Program</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Program Studi</th>
                                    <td>Manajemen Kontemporer</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td><a
                                            href="https://pmb.lms-usa.site/manajemen-kontemporer">https://pmb.lms-usa.site/manajemen-kontemporer</a>
                                    </td>
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
                            <p style="text-align: justify">Prodi Manajemen Kontemporer didirikan untuk menjawab
                                tantangan revolusi industri 4,0 dimana semua operasi perusahaan saat ini bekerja atas
                                dasar teknologi informasi digital. Manajemen Kontemporer diharapkan akan menghasilkan
                                lulusan yang bermutu di bidang manajemen kontemporer untuk dapat diserap oleh stake
                                holder/user.</p>
                            <p style="text-align: justify">Sebagai uniqueness Prodi dan Universitas, pendidikan berbasis
                                karakter dan integritas dipilih oleh Manajemen Kontemporer sebagai penciri khas
                                kurikulum. Dengan demikian, penyusunan KPT-KKNI level 6 oleh Manajemen Kontemporer telah
                                memperhatikan prosedur atau langkah-langkah standar yang telah ditetapkan oleh Belmawa
                                DIKTI, yakni telah mengacu pada rekomendasi dari asosiasi prodi (Forum Manajemen
                                Indonesia).</p>
                            <p style="text-align: justify">Dengan demikian, penerapan KPT-KKNI level 6 di Manajemen
                                Kontemporer berupaya konsisten dalam membangun mutu lulusan di bidang manajemen
                                kontemporer.</p>
                            <h4>Tujuan Program</h4>
                            <ul class="ml-4">
                                <li>Tercapainya kualitas pendidikan dan pengajaran dengan lulusan yang memiliki
                                    kompetensi yang tinggi di bidang ilmu manajemen kontemporer</li>
                                <li>Tercapainya kualitas dan kuantitas penelitian untuk mengembangkan dan menerapkan
                                    ilmu manajemen kontemporer dan teknologi, serta menunjang pengembangan proses
                                    pembelajaran</li>
                                <li>Tercapainya kegiatan pengabdian pada masyarakat untuk menerapkan ilmu manajemen
                                    kontemporer dan teknologi dalam rangka meningkatkan pemberdayaan masyarakat</li>
                                <li>Tercapainya efisiensi dan efektivitas manajemen kelembagaan untuk menghasilkan tata
                                    kelola sarana dan prasarana Program Studi Manajemen Kontemporer. yang baik dan
                                    transparan </li>
                                <li>Tercapainya jaringan kerjasama untuk meningkatkan kepakaran dosen sesuai bidang
                                    ilmunya</li>
                            </ul>
                            <h4>Visi Program Studi</h4>
                            <p style="text-align: justify">Menciptakan dan mewujudkan pendidikan tinggi dalam bidang
                                ilmu manajemen kontemporer yang dinamis, progresif dan berkualitas.</p>
                            <p style="text-align: justify">Menjadi Program Studi unggulan dalam pengembangan ilmu
                                pengetahuan dan teknologi manajemen kontemporer on-line unggulan dalam tata kelola
                                pendidikan, penelitian, dan pengabdian masyarakat pada tahun 2024.</p>
                            <h4>Misi Program Studi</h4>
                            <ol type="a" class="ml-4">
                                <li>Membentuk sarjana ekonomi manajemen kontemporer yang memiliki kompetensi dan
                                    profesionalitas</li>
                                <li>Membentuk sarjana ekonomi manajemen kontemporer yang memiliki kemampuan tinggi dalam
                                    beradaptasi dengan lingkungan kerja dan perubahan kemajuan ilmu dan teknologi</li>
                                <li>Meningkatkan mutu dosen sesuai dengan perkembangan dan kemajuan ilmu manajemen
                                    kontemporer dan teknologi</li>
                                <li>Melaksanakan pendidikan, penelitian dan pengabdian kepada masyarakat di bidang ilmu
                                    manajemen kontemporer.</li>
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