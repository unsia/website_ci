@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Prospek Karir Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil') }}">Profil Program
                                    Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/sistem-informasi/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil-lulusan') }}">Profil
                                    Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('sistem-informasi.capaian_pembelajaran_lulusan') }}">Capaian
                                    Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ul class="ml-4">
                                <li>
                                    <b>Kompetensi Utama Lulusan Program Studi Sistem Informasi</b>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>Kompetensi Utama Lulusan Prodi Sistem Informasi</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mampu menerapkan prinsip-prinsip moral atau nilai spiritualitas sesuai dengan ajaran agama yang dianut, yang berlaku secara universal dalam upaya pengembangan pribadi yang unggul di masyarakat dengan menjadikan prinsip atau nillai tersebut sebagai motivasi untuk menguasai, mengamalkan, dan mengembangkan IPTEK.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mampu menerapkan nilai-nilai luhur Pancasila sebagai ciri khas dan jati diri bangsa dalam upaya pengembangan pribadi yang berkarakter dan berintegritas.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mampu menerapkan prinsip-prinsip nasionalisme dalam koridor Negara Kesatuan Republik Indonesia yang menjunjung tinggi nilai-nilai Pancasila dan UUD 1945.</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mampu menggunakan Bahasa Inggris sebagai bahasa internasional dalam koridor pengembangan karir profesional di dunia kerja.</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Mampu menerapkan Bahasa Indonesia sebagai bahasa ilmiah/saintifik sebagai cara untuk mendiseminasikan karya ilmiah secara tertulis dan mampu mengembangkannya sebagai bahasa komunikasi profesional untuk dunia kerja.</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mampu memahami dan mengaplikasikan teori di bidang sistem informasi secara umum, khususnya teori dalam hal pengembangan sistem, analisis sistem dan perancangan system yang berorientasi pada e-bisnis.</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Mampu mendesain, mengatur dan mengarahkan proyek di dalam sistem informasi, yang didalamnya melingkupi aspek manajemen waktu dan biaya, serta mengolah sumber daya yang tersedia untuk mencapai hasil yang diharapkan.</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Mampu memahami penggunaan  software yang berorientasi pada e-bisnis, berinteraksi langsung dengan stakeholder untuk menganalisa dan mengumpulkan kebutuhan proses bisnis.</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Mampu menjadi seorang pimpinan proyek yang up to date di dalam pengembangan sistem informasi sebagai pendukung aktivitas dan pengambilan keputusan</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Mampu mengidentifikasi, menganalisis dan mencari solusi pemecahan masalah di bidang sistem informasi.</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Mampu membuat konsep desain database sistem informasi dan dapat mengimplementasikannya serta mampu melakukan instalasi konfigurasi, upgrade, adaptasi, monitoring dan maintenance database dalam suatu organisasi.</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Mampu melakukan monitoring dan evaluasi di dalam e-bisnis dan sistem informasi secara umum serta dapat memberikan solusi pemecahan masalah pada organisasi/perusahaan.</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Mampu menerapkan metode-metode dalam penelitian dan melakukan modifikasi, perbaikan, dan peningkatan terhadap metode-metode yang sudah ada.</td>
                                        </tr>
                                    </table>
                                </li>
                                <li>
                                    <b>Profesi Lulusan</b>
                                    <ol type="1" class="ml-3">
                                        <li>Information System Manager (IS Manager)</li>
                                        <li>Information Technology Manager (IT Manager)</li>
                                        <li>Information System Development Project Manager</li>
                                        <li>Database dan E-Business Manager</li>
                                        <li>IT/IS Consultant</li>
                                        <li>System Analyst</li>
                                        <li>System Support</li>
                                        <li>System Designer</li>
                                        <li>Database Administrator</li>
                                        <li>Web Developer/Web Designer</li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection