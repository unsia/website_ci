@extends('layouts.main-page')

@section('active-akademik', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Program Kampus Merdeka</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Akademik</li>
            <li>Program Kampus Merdeka</li>
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
                            <p class="text-justify">Sebagai tindak lanjut kebijakan “Kampus Merdeka” yang telah dicanangkan oleh Kemendikbud melalui peraturan No. 3 Tahun 2020, UNSIA mengadakan program akademik sebagai berikut:</p>
                            <ol class="ml-4">
                                <li>
                                    <b>Implementasi Program Kampus Merdeka</b>
                                    <p class="text-justify">Program kampus merdeka merupakan “hak” yang diberikan kepada mahasiswa dalam kerangka meningkatkan Hard-Skill dan Soft-Skill. Mahasiswa boleh memanfaatkannya atau tidak atau mengikuti jenjang kredit semester sebagaimana proses akademik yang standar. Jenis-jenis implementasi program kampus merderka adalah sebagai berikut:</p>
                                    <ol class="ml-4 mb-4">
                                        <li>Mahasiswa dapat mengambil kredit semester (SKS) di luar perguruan tinggi sebanyak 2  semester (setara dengan 40 sks)</li>
                                        <li>Ditambah lagi, dapat mengambil SKS di prodi yang  berbeda di PT yang sama sebanyak 1 semester (setara  dengan 20 sks)</li>
                                        <li>Kegiatan non-kuliah disetarakan dengan kredit semester. Kegiatan yang dimaksud adalah aktifitas mahasiswa yang berorientasi pada peningkatan Hard-Skill dan Soft-Skill mendapatkan pengakuan penyetaraan kredit semester maksimal 20 SKS.</li>
                                    </ol>
                                    <div class="text-center">
                                        <img src="{{ asset('homepages/images/pkm.png') }}" alt="" class="mb-4">
                                        <img src="{{ asset('homepages/images/pkm1.png') }}" alt="" class="mb-4">
                                    </div>
                                    <p>Persyaratan bagi mahasiswa yang mengambil program kampus merdeka adalah sebagai berikut:</p>
                                    <ul class="ml-4 mb-3">
                                        <li>Telah menempuh kredit semester minimal 90 SKS</li>
                                        <li>Nilai minimal di setiap mata kuliah adalah “C”</li>
                                        <li>Mendapatkan persetujuan dari dosen PEmbimbing Akademik</li>
                                        <li>Melaporkan kepada Kaprodi dan Biro Administrasi Akademik</li>
                                        <li>Melengkapi persyaratan lainnya sebagaimana tabel kegiatan Kampus Merdeka diatas.</li>
                                    </ul>
                                </li>
                                <li>
                                    <b>Rekognisi Kompetensi</b>
                                    <p class="text-justify">Pengakuan Kompetensi dalam bentuk konversi kredit Semester yang diperuntukkan bagi mahasiswa yang sudah bekerja di industri atau perkantoran dimana bidang pekerjaan yang ditangani terkait atau memiliki korelasi penerapan bidang ilmu dari program studi yang dijalankan di UNSIA. Pengakuan kompetensi yang telah dicapai pada saat sedang bekerja oleh calon mahasiswa adalah disetarakan maksimal dengan kredit semester sejumlah 20 SKS atau setara dengan 1 semester. </p>
                                    <span>Keuntungan Pengakuan Kompetensi:</span>
                                    <ul class="ml-4 mb-3">
                                        <li>Mempercepat masa studi</li>
                                        <li>Mahasiswa meneruskan sisa beban kredit wajib dari 144 SKS dari kredit semester yang telah diakui atau disetarakan.</li>
                                        <li>Menghemat biaya studi.</li>
                                    </ul>
                                    <span>Persyaratan untuk jalur rekognisi kompetensi:</span>
                                    <ul class="ml-4 mb-4">
                                        <li>Telah bekerja di industri atau perkantoran dengan masa kerja minimal selama 2 tahun, yang dibuktikan dengan surat keterangan dari HRD.</li>
                                        <li>Telah memiliki beberapa sertifikat pelatihan yang diselenggarakan oleh perusahaan atau pelatihan professional mandiri.</li>
                                        <li>Ijazah minimal SMA/SMK/MAN/Paket C</li>
                                        <li>Atau telah memiliki ijazah diploma (D1, D2, atau D3)</li>
                                    </ul>
                                    <div class="text-center">
                                        <img src="{{ asset('homepages/images/pkm2.png') }}" alt="" class="mb-4">
                                    </div>
                                </li>
                            </ol>
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