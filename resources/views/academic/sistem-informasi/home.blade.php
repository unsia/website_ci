@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
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
                                <a class="nav-link active" href="{{ url('/sistem-informasi') }}">Home</a>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil-lulusan') }}">Profil Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sistem-informasi.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <p style="text-align: justify">Kurikulum pendidikan tinggi Prodi Sistem Informasi (Prodi SI) merupakan body knowledge of information system yang tersusun atas perencanaan learning outcome sebagai bagian proses utama dalam menghasilkan outcome program dalam berupaya intensif untuk semakin mengokohkan jati dirinya dalam menghasilkan lulusan yang bermutu di bidang information system dan diserap oleh stakeholder/user dan rekomendasi program outcome dan learning outcome dari APTIKOM (Asosiasi Pendidikan Tinggi Informatika dan Komputer). Selanjutnya profil lulusan tersebut didefinisikan dan diturunkan menjadi rumusan capaian pembelajaran atau learning outcome sebagaimana referensi APTIKOM. Learning Outcome tersebut memperhatikan program outcome dari Prodi SI sebagaimana dikhususkan pada bidang ilmu information system mengacu pada deskripsi di IEEE dan ACM. Sebagai uniqueness Prodi dan Universitas, sistem informasi bisnis dan pendidikan berbasis karakter,integritas dan soft skill dipilih oleh Prodi SI sebagai penciri khas kurikulum. Dengan demikian, penyusunan KPT-KKNI level 6 oleh Prodi SI telah memperhatikan prosedur atau langkah-langkah standar yang telah ditetapkan oleh Belmawa Dikti. Prodi SI berupaya intensif untuk menerapkan KPT-KKNI tersebut dengan Sistem Penjaminan Mutu, yakni RPS (Rencana Pembelajaran Semester) dan Peta Program  oleh dosen pengampu yang merupakan ujung tombak implementasi akan senantiasa dimonitoring dan dievaluasi dalam realisasinya. Dengan penerapan KPT-KKNI level 6, Prodi SI telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai recognition of competence outside the running curricula, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Universitas Nasional sebagai pelengkap pencapaian learning outcome. Sistem recognition atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung soft skill, dan kompetensi pendukung talenta. Dengan demikian, Prodi SI dengan penerapan KPT-KKNI level 6 berupaya konsisten dalam membangun mutu lulusan di bidang sistem informasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection