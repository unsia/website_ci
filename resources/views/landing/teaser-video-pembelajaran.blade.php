@extends('layouts.main-page')

@section('active', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Teaser Video Pembelajaran</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Tentang USA</li>
            <li>Teaser Video Pembelajaran</li>
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
                        <div class="icon-content mb-2">
                            <p style="text-align: justify">Salah satu materi utama pembelajaran online dalam LMS
                                (Learning Management System) adalah tersedianya video pembelajaran di setiap minggu
                                perkuliahan. Anda dapat mengaksesnya setiap minggu dengan berulang-ulang untuk dapat
                                memperjelas pemahaman anda tentang materi yang dirancang setiap minggu. Dengan cara
                                demikian anda tidak dapat kehilangan satu penjelasan dari dosen yang mengampu mata
                                kuliah. Kelebihan dari metode pembelajaran on-line dengan tersedianya materi video
                                pembelajaran adalah:</p>
                            <ol class="ml-5">
                                <li>Materi bersifat <b>repeatable at anytime</b></li>
                                <li>Penjelasan dosen atau tutor dapat direkam secara digital untuk dijadikan sebagai
                                    bahan diskusi.</li>
                                <li>Setiap video pembelajaran disertai dengan pointer atau topik-topik utama dalam
                                    bentuk slide PPT yang memudahkan anda dalam memahami isi materi perkuliahan</li>
                                <li>Video dilengkapi dengan teknologi animasi audio visual yang memudahkan anda dalam
                                    memahami ilustrasi suatu sistem atau teori yang kompleks</li>
                            </ol>
                            <p style="text-align: justify">Dengan adanya video pembelajaran tersebut, diskusi dengan
                                dosen atau tutor dalam forum LMS dapat dilakukan secara interaktif. Anda dapat
                                menanyakan kepada dosen atau tutor terkait materi yang dijelaskan. Sehingga penjelasan
                                dosen dapat anda eksplorasi secara lebih mendalam dan kritis. Penjelasan utama dengan
                                video pembelajaran dalam LMS juga didukung oleh aktifitas <b>Live Video Streaming</b>
                                atau <b>Video Conference</b> di setiap minggu perkuliahan. Sehingga penjelasan oleh
                                dosen dapat anda dapatkan secara lebih dibandingkan dengan metode tatap muka di kelas.
                            </p>
                            <p>Selain itu, isi video pembelajaran di setiap mata kuliah dalam setiap minggu perkuliahan
                                dapat berupa sebagai berikut:</p>
                            <ol class="ml-5">
                                <li>Video Penjelasan Materi</li>
                                <li>Video Tutorial/Instruksi</li>
                                <li>Video Simulasi atau demo praktikum laboratorium atau perangkat lunak</li>
                                <li>Video Seminar Ilmiah (Webinar Ilmiah)</li>
                            </ol>
                            <p>Berikut adalah contoh video pembelajaran (teaser), silahkan mencoba:</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <video controls src="{{ asset('homepages/images/video/teaservideo2.mp4') }}"></video>
                              </div>
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