@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Prospek Karir Penyiaran dan Komunikasi Digital</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Penyiaran dan Komunikasi Digital</li>
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
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/penyiaran-dan-komunikasi-digital/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Profesi Lulusan</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>Komunikator Profesional</td>
                                    <td>Mampu menjadi perencana, perancang serta penyampai pesan yang atraktif dan persuasif.</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Peneliti  di bidang komunikasi</td>
                                    <td>Mampu menjadi peneliti di bidang komunikasi, khususnya bidang penyiaran dan komunikasi digital.</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Video Journalist</td>
                                    <td>Mampu  memiliki pengetahuan dan keterampilan dalam mencari, mengumpulkan, mengolah serta  menyajikan berita di media penyiaran dan komunikasi digital, serta memiliki kemampuan manajerial pemberitaan dalam kerangka etika dan hukum media massa.</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Videografer</td>
                                    <td>Mampu  menangkap informasi, atau peristiwa yang memiliki nilai berita dengan menggunakan media.</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Analis Media</td>
                                    <td>Mampu mencari, mengumpulkan, menelaah serta menganalisis konten media dan dampak media.</td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>Copywritter</td>
                                    <td>Mampumerancang pesan iklan visual dan  audio visual.</td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td>Advertising manager</td>
                                    <td>Mampu mengelola proses pembuatan iklan dari awal hingga akhir.</td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td>Media Planner</td>
                                    <td>Mampumenganalisis dan menentukan media, segmentasi, positioning dan targeting  iklan yang tepat sasaran.</td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td>Content Creator</td>
                                    <td>Mampu menciptakan konten bidang penyiaran dan komunikasi digital yang kreatif dan inovatif</td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td>Social Media Specialist</td>
                                    <td>Mampu merancang komunikasi strategis di media sosial di berbagai instansi baik pemerintah maupun swasta dalam rangka brand awareness.</td>
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