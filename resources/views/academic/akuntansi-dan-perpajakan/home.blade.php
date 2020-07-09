@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Akuntansi dan Perpajakan</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Akuntansi dan Perpajakan</li>
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
                                <a class="nav-link active" href="{{ url('/akuntansi-dan-perpajakan') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('/akuntansi-dan-perpajakan/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('/akuntansi-dan-perpajakan/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <h4>Gambaran Umum Program</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Program Studi</th>
                                    <td>Akuntansi dan Perpajakan
                                    </td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td><a
                                            href="https://pmb.lms-usa.site/akuntansi-dan-perpajakan">https://pmb.lms-usa.site/akuntansi-dan-perpajakan</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenjang</th>
                                    <td>Strata 1</td>
                                </tr>
                                <tr>
                                    <th>Gelar</th>
                                    <td>Sarjana Ekonomi (S.E)</td>
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
                            <p style="text-align: justify">Program Studi Akuntansi & Perpajakan merupakan disiplin ilmu
                                yang berhubungan dengan akuntansi dan perpajakan guna menyelesaikan masalah-masalah
                                perhitungan akuntansi dan perpajakan dalam perusahaan. Lulusan Akuntansi & Perpajakan
                                mempunyai kesempatan karir di bidang perbankan maupun perusahaan.</p>
                            <p style="text-align: justify">Program ini bertujuan membekali mahasiswa dengan wawasan
                                pengetahuan dan keterampilan dalam pengembangan Akuntansi & Perpajakan, tren penggunaan
                                dan kebutuhan Akuntansi & Perpajakan strategis bagi perusahaan (corporate information
                                systems), penggunaan sistem Akuntansi & Perpajakan yang berbasis e-business, serta
                                pengetahuan teknologi dan bisnis yang dapat diaplikasikan dalam dunia usaha dan dunia
                                industri (DUDI). Mahasiswa akan diarahkan menjadi seorang pakar di dalam perencanaan
                                strategi dan pemanfaatan Akuntansi & Perpajakan guna mendukung kinerja bisnis sebuah
                                organisasi.</p>
                            <h4>Tujuan Program</h4>
                            <ul class="ml-4">
                                <li>Tercapainya kualitas pendidikan dan pengajaran dengan lulusan yang memiliki
                                    kompetensi yang tinggi dibidang ilmu akuntansi yang berwawasan global</li>
                                <li>Tercapainya kualitas dan kuantitas penelitian untuk mengembangkan dan menerapkan
                                    ilmu akuntansi dan teknologi informasi, serta menunjang pengembangan proses
                                    pembelajaran</li>
                                <li>Tercapainya kegiatan pengabdian pada masyarakat untuk menerapkan ilmu akuntansi dan
                                    teknologi informasi dalam rangka meningkatkan pemberdayaan masyarakat</li>
                                <li>Tercapainya lulusan sarjana ekonomi akuntansi yang memiliki kemampuan tinggi dalam
                                    beradaptasi dengan lingkungan kerja dan perubahan kemajuan ilmu dan teknologi,
                                    dengan mengembangkan dan meningkatkan profesionalisme.</li>
                                <li>Tercapainya mutu dosen melalui peningkatan jenjang pendidikan akademik berkelanjutan
                                    dan profesi dalam bidang ekonomi akuntansi untuk pengembangan ilmu dan karakter
                                    peserta didik serta memiliki jaringan kerjasama untuk meningkatkan kepakaran dosen
                                    sesuai bidang ilmunya</li>
                            </ul>
                            <h4>Visi Program Studi</h4>
                            <p style="text-align: justify">Unggul dalam bidang ilmu akuntansi ditingkat global yang
                                dinamis, progresif, dan berkualitas pada tahun 2025</p>

                            <h4>Misi Program Studi</h4>
                            <p>Misi yang ditetapkan oleh Program Studi Akuntansi adalah sebagai berikut:</p>
                            <ol type="a" class="ml-4">
                                <li>Membentuk Sarjana ekonomi akuntansi yang memiliki kompetensi, dan integritas tinggi
                                    serta berjiwa pancasila yang berwawasan global.</li>
                                <li>Melaksanakan pendidikan, penelitian dan pengabdian kepada masyarakat, dengan
                                    mengimplementasikan keahlian dalam bidang ilmu akuntansi bagi kepentingan masyarakat
                                </li>
                                <li>Membentuk Sarjana yang memiliki kemampuan tinggi dalam beradaptasi dengan lingkungan
                                    kerja dan perubahan kemajuan ilmu dan teknologi, dengan mengembangkan dan
                                    meningkatkan profesionalisme dalam ilmu akuntansi</li>
                                <li>Meningkatkan mutu dosen sesuai dengan perkembangan dan kemajuan ilmu pengetahuan dan
                                    teknologi, dengan menyelenggarakan jenjang pendidikan akademik berkelanjutan dan
                                    profesi dalam bidang akuntansi untuk pengembangan ilmu dan karakter peserta didik
                                </li>
                                <li>Meningkatkan tata kelola sarana dan prasarana dalam mengembangkan kegiatan akademik
                                    dalam bidang ilmu akuntansi secara efektif dan efisien</li>
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