@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Profil Lulusan <br> Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
            <li>Profil Lulusan</li>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil') }}">Profil Program Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/sistem-informasi/profil-lulusan') }}">Profil Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sistem-informasi.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <p>Ciri khas profil lulusan Asia Cyber University adalah lulusan yang bercirikan, memiliki karakter, integritas dan soft-skill. Profil lulusan Asia Cyber University berlaku seragam untuk semua jenis jenjang pendidikan dari S1, S2 dan S3. Deskripsi ciri khas Capaian Pembelajaran untuk lulusan Universitas Nasional yang memiliki karakter, integritas dan soft-skill adalah sebagaimana berikut ini:</p>
                            <p class="text-center">Deskripsi Profil Lulusan Asia Cyber University yang ber-Karakter, Integritas dan Soft-Skill</p>
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
                            <p>Realisasi Capaian Pembelajaran Lulusan Tingkat Asia Cyber University Sebagai Ciri Khas Perguruan Tinggi</p>
                            <p>Profile Lulusan Sistem Informasi:</p>
                            <table class="table table-bordered">
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Profil Lulusan</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Project Manager TIK</td>
                                    <td>Lulusan yang mampu merencanakan, mengatur dan mengarahkan proyek, memanajemen waktu dan biaya, serta mengolah sumber daya yang ada untuk mencapai hasil yang diharapkan menggunakan teknologi informasi dan komunikasi</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>System Analyst</td>
                                    <td>Lulusan yang memahami penggunaan perangkat lunak untuk kepentingan bisnis, berinteraksi langsung dengan stakeholder untuk menganalisa dan mengumpulkan kebutuhan proses bisnis</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>System Database Administrator</td>
                                    <td>Lulusan yang mampu membuat disain database sistem informasi dan dapat mengimplementasikannya serta mampu melakukan instalasi konfigurasi, upgrade, adaptasi, monitoring dan maintenance database dalam suatu organisasi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>System Multimedia Developer</td>
                                    <td>Lulusan yang ahli dalam merancang sistem informasi bisnis menggunakan teknologi Multimedia.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Web Developer</td>
                                    <td>Lulusan yang membangun serta mengelola aplikasi web baik dari sisi konten, programming dan databasenya untuk kepentingan pengembangan sistem informasi bisnis.</td>
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