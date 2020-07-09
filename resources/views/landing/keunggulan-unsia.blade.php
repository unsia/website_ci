@extends('layouts.main-page')

@section('active-about', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Keunggulan dan Manfaat Kuliah di <br>Universitas Siber Asia (UNSIA)</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Tentang UNSIA</li>
            <li>Keunggulan dan Manfaat Kuliah di UNSIA</li>
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
                            <p>Berikut keunggulan dan manfaat kuliah di Universitas Siber Asia (UNSIA)</p>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mahasiswa bisa mengikuti kuliah dari mana pun dan kapan pun.</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Rektor UNSIA adalah mantan Wakil Rektor Cyber Hankuk University yang berpengalaman dalam memimpin perguruan tinggi online bereputasi global.</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Learning Management System menggunakan teknologi Korea dengan track record berhasil diterapkan untuk menggelar kuliah online hingga peningkatan APK (Angka Partisipasi Kasar) pendidikan tinggi yang sangat siginifikan.</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>UNSIA memiliki infrastruktur dalam memproduksi materi pembelajaran digital dengan teknologi video produksi dari Korea.</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Mahasiswa mendapatkan materi kuliah online dari pakar-pakar bidang ilmu skala nasional dan global dengan tersedianya Program Teaching Professor.</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>UNSIA menyediakan tata kelola dan layanan pendidikan dan administrasi 100% berbasis online.</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Biaya kuliah dapat diminimalkan, tidak perlu biaya fotokopi materi dan tersedia koleksi e-book yang bersifat free access.</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Membantu mahasiswa yang juga harus bekerja paruh-waktu di sektor industri atau informal.</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Melatih mahasiswa agar lebih mandiri dalam mengikuti mata kuliah online.</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Mahasiswa dapat sekaligus belajar tentang penguasaan skill Teknologi dan Informasi.</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Materi digital bersifat repeatable, dapat diulang-ulang hingga jelas.</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Ditunjang oleh pelatihan bersertifikasi secara online</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Kuliah dapat berjalan tanpa gangguan adanya musibah bencana alam, bencana Covid 19 dan libur hari nasional.</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Terdapat beasiswa yang dapat membantu keringanan biaya perkuliahan.</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Terdapat link untuk memperoleh pekerjaan setelah lulus.</td>
                                </tr>
                            </table>
                            <div class="text-center mb-5">
                                <img src="{{ asset('homepages/images/manfaat.jpg') }}" alt="usa">
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