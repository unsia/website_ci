@extends('layouts.main-page')

@section('active-akademik', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Panduan Akademik</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Akademik</li>
            <li>Panduan Akademik</li>
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
                        <p style="text-align: justify;">Berikut merupakan alur perkuliahan mahasiswa UNSIA untuk jenjang pendidikan S1 pada Prodi-Prodi yang ditawarkan. Mahasiswa setelah dinyatakan lulus test seleksi online selanjutnya resmi menjadi mahasiswa UNSIA dan mendapatkan ID Mahasiswa online. Dalam ID tersebut terdapat akun-akun yang digunakan untuk aktifitas pembelajaran online di Learning Managemen System, Digital Library, dan Sistem Informasi Akademik. Berikut diagram yang menjelaskan alur perkuliahan mahasiswa UNSIA dari mulai Penerimaan hingga lulus setelah menjalani 8 semester perkuliahan.</p>
                        <div class="text-center mb-5">
                            <img src="{{ asset('homepages/images/academic-guide.png') }}" alt="">
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