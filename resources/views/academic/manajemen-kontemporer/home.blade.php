@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
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
                                <a class="nav-link active" href="{{ url('/manajemen-kontemporer') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/profil') }}">Profil Program Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/profil-lulusan') }}">Profil Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manajemen-kontemporer.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <p style="text-align: justify">Kurikulum pendidikan tinggi (KPT) Prodi Manajemen Kontemporer dan E-Commerce merupakan rangkaian proses pembelajaran tersusun atas perencanaan capaian pembelajaran (learning outcome) sebagai bagian proses utama dalam menghasilkan program outcome. Prodi Manajemen Kontemporer dan E-Commerce didirikan untuk menjawab tantangan revolusi industry 4,0 dimana semua operasi perusahaan saat ini bekerja atas dasar teknologi informasi digital. Manajemen Kontemporer dan E-Commerce diharapkan akan menghasilkan lulusan yang bermutu di bidang manajemen kontemporer untuk dapat diserap oleh stake holder/user.  Dalam upaya tersebut, Prodi Manajemen Kontemporer dan E-Commerce melakukan penyusunan kurikulum berbasis KPT-KKNI level 6 (Kurikulum Pendidikan Tinggi berbasis KKNI). KPT-KKNI level 6 disusun berdasarkan analisis data tracer study dan rekomendasi learning outcome dari Forum Manajemen Indonesia. Tracer study dilakukan oleh Prodi Manajemen dengan mengambil sampel data lulusan dari 2012 – 2015. Sistem tracer study menggunakan standar instrumen kuesioner yang telah ditetapkan oleh Belmawa DIKTI.  Dari analisis data tracer study diperoleh sebaran statistik bidang kerja lulusan Manajemen Kontemporer dan E-Commerce di dunia kerja dan atribut-atribut kontribusi soft skill oleh Asia Cyber University. Sebaran dominan bidang pekerjaan lulusan tersebut menjadi acuan dalam penentuan definisi profil lulusan. Selanjutnya definisi profil lulusan tersebut diturunkan menjadi rumusan capaian pembelajaran atau learning outcome sebagaimana referensi FMI.</p>
                            <p style="text-align: justify">Sebagai uniqueness Prodi dan Universitas, pendidikan berbasis karakter dan integritas dipilih oleh Manajemen Kontemporer dan E-Commerce sebagai penciri khas kurikulum. Dengan demikian, penyusunan KPT-KKNI level 6 oleh Manajemen Kontemporer dan E-Commerce telah memperhatikan prosedur atau langkah-langkah standar yang telah ditetapkan oleh Belmawa DIKTI, yakni telah mengacu pada rekomendasi dari asosiasi prodi (Forum Manajemen Indonesia). Prodi Manajemen berupaya intensif untuk menerapkan KPT-KKNI tersebut dengan Sistem Penjaminan Mutu, yakni RPS (Rencana Pembelajaran Semester) oleh dosen pengampu yang merupakan ujung tombak implementasi akan senantiasa dimonitoring dan dievaluasi dalam implementasinya. Dengan penerapan KPT-KKNI level 6, Manajemen Kontemporer dan E-Commerce telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai recognition of competence outside the running curricula, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia Cyber Universitysebagai pelengkap pencapaian learning outcome. Sistem recognition atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung soft skill, dan kompetensi pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Manajemen Kontemporer dan E-Commerce berupaya konsisten dalam membangun mutu lulusan di bidang manajemen kontemporer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection