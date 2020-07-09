@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Prospek Karir Akuntansi dan Perpajakan</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Akuntansi dan Perpajakan</li>
            <li>Prospek Karir</li>
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
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/akuntansi-dan-perpajakan/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <p style="text-align: justify">Lulusan Akuntansi & Perpajakan mampu menguasai,menerapkan dan mengembangkan bidang keilmuan akuntansi yang memiliki karakter dan berintegritas serta mempersiapkan lulusan untuk melanjutkan jenjang profesi sebagai akuntan beregister negara (sesuai dengan Pengembangan Profesi Akuntansi Indonesia;  ditetapkan oleh Pusat Pembinaan Akuntan dan Jasa Penilai; SEKJEN KEMENKEU).</p>
                            <p style="text-align: justify">Dengan mengacu kepada Degree Outcome dan Profile Lulusan yang telah ditetapkan tersebut dapat diharapkan bahwa lulusan Prodi Akuntansi berperan aktif atas pengembangan keilmuan akuntansi untuk para stakeholder dan masyarakat pada umumnya.Lulusan Prodi Akuntansi tersebut dapat mengisi bidang profesi yang seluas – luasnya terkait dengan bidang keilmuan akuntansi yang telah dirumuskan oleh Ikatan Akuntan Indonesia ( IAI ).Adapun profesi–profesi tersebut dapat didefinisikan sbb :</p>
                            <table class="table table-bordered">
                                <tr class="bg-info text-center">
                                    <th>No.</th>
                                    <th>Profil Lulusan</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Junior Akuntan Publik</td>
                                    <td><p style="text-align: justify">Mampu dan menguasai dan mengerti  konsep akuntansi, sistem informasi akuntansi serta memahami proses audit laporan keuangan dan melakukan pemeriksaan laporan keuangan baik  di sektor swasta dan nonswasta sesuai standar akuntansi yang berlaku di Indonesia SAP dan IPSAS</p></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Junior Akuntan Manajemen</td>
                                    <td><p style="text-align: justify">Mampu dan menguasai dan mengerti serta dapat menyusun dan menganalisis laporan akuntansi manajemen ,meliputi perencanaan dan penganggaran,manajemen biaya,pengendalian kualitas,pengukuran kinerja dan benchmarking yang relevan dan handal dalam mendukung pengambilan keputusan dan pengendalian manajemen dengan menerapkan teknik-teknik akuntansi manajemen</p></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Junior Akuntan Sektor Publik</td>
                                    <td><p style="text-align: justify">Mampu dan memiliki pengetahuan dan pemahaman serta dapat menganalisis laporan keuangan dengan menggunakan pendekatan yang terintegrasi mengenai ASP dalam kerangka makro dan dapat membuat  konsep akuntansi, sistem informasi akuntansi serta memahami proses audit laporan keuangan dan melakukan pemeriksaan laporan keuangan baik  di sektor publik ataupun swasta non profit sesuai  Standar Akuntansi Sektor Publik (SASP), Standar Nomenklatur, Standar Pemeriksaan keuangan (SPKN) dan Standar akuntansi Biaya (SAB)</p></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Junior Akuntan Pajak</td>
                                    <td><p style="text-align: justify">Mampu dan menguasai dan mengerti serta dapat  menghitung  seluruh perhitungan pajak sesuai dengan Undang-Undang perpajakan yang berlaku</p></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Junior Akuntan Pendidik</td>
                                    <td><p style="text-align: justify">Mampu dan menguasai serta dapat menerapkan semua ilmu akuntansi dalam bidang pendidikan akuntansi</p></td>
                                </tr>
                            </table>
                            <p style="text-align: justify">Deskripsi uraian umum profil lulusan yang terdiri atas komponen capaian pembelajaran Pengetahuan, Keterampilan Umum dan Keterampilan Khusus adalah sebagaimana berikut ini:</p>
                            <table class="table table-bordered">
                                <tr class="bg-info text-center">
                                    <th>Jenjang atau Level</th>
                                    <th>Komponen Capaian Pembelajaran</th>
                                    <th>Uraian Umum</th>
                                </tr>
                                <tr>
                                    <td rowspan="3"></td>
                                    <td>Pengetahuan</td>
                                    <td>Menguasai konsep teoritis secara mendalam tentang penyusunan laporan keuangan,penyusunan laporan audit, konsep pengendalian biaya produk,konsep perpajakan,konsep akuntansi sektor publik serta prinsip teknik manajemen keuangan.</td>
                                </tr>
                                <tr>
                                    <td>Keterampilan Umum</td>
                                    <td>Mampu menerapkan pemikiran secara logis dan kritis dalam menyelesaikan siklus akuntansi secara keseluruhan serta memahami proses audit secara keseluruhan.</td>
                                </tr>
                                <tr>
                                    <td>Keterampilan Khusus</td>
                                    <td>Mampu menerapkan pemikiran secara logis dan kritis dalam menyelesaikan  laporan keuangan  sesuai standar  akuntansi yang berlaku ,menyusun  kertas kerja audit sesuai standar audit,menganalisis laporan akuntansi manajemen serta menyusun laporan kewajiban perpajakan sesuai perundang-undangan  perpajakan yang berlaku.</td>
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