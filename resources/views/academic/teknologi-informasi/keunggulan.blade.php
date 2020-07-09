@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Keunggulan Teknologi Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Teknologi Informasi</li>
            <li>Keunggulan</li>
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
                                <a class="nav-link" href="{{ url('/teknologi-informasi') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/teknologi-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ol class="ml-4">
                                <li>Unggul dalam bidang pengetahuan Teknologi Informasi</li>
                                <li>Konten Pendidikan berkualitas tinggi guna mempersiapkan mahasiswa menjadi individu yang aktif dan fleksibel sesuai dengan perkembangan teknologi</li>
                                <li>Dosen dan pengajar yang mumpuni dengan melibatkan para ahli dan professional</li>
                                <li>Memberikan bimbingan dan arahan studi yang seksama</li>
                                <li>Membentuk dan menjembatani jaringan komunikasi dengan para alumni dan professional di bidangnya</li>
                                <li>Lulusan TI ditunjang dengan kompetensi mumpuni di bidangnya seperti:</li>
                            </ol>
                            <table class="table table-bordered text-center">
                                <tr class="bg-info">
                                    <th rowspan="2">No.</th>
                                    <th colspan="3">Jenis Kompetensi</th>
                                    <th rowspan="2">Nama Sertifikasi</th>
                                </tr>
                                <tr class="bg-info">
                                    <th>KPL</th>
                                    <th>KPT</th>
                                    <th>KPP</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>ORACLE Certification</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>MCSA Certification & RHCE - RedHat Certification</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Certified Macromedia Flash MX Developer & Certified Internet Web Master</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>FORESEC Certification</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Setifikasi PMP </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Sertifikasi TOEFL</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Android Academy Certified Developer (AACD)</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Sertifikasi CISCP</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Sertifikasi COBIT5</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Adobe Certified Expert</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>√</td>
                                    <td></td>
                                    <td></td>
                                    <td>Advanced GIS Training</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td></td>
                                    <td></td>
                                    <td>√</td>
                                    <td>Ketua Panitia Kegiatan Ilmiah</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td></td>
                                    <td>√</td>
                                    <td></td>
                                    <td>Seminar Lokal</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td></td>
                                    <td>√</td>
                                    <td></td>
                                    <td>Seminar Nasional</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td></td>
                                    <td>√</td>
                                    <td></td>
                                    <td>Jurnal Lokal</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td></td>
                                    <td>√</td>
                                    <td></td>
                                    <td>Jurnal Nasional</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td></td>
                                    <td>√</td>
                                    <td></td>
                                    <td>Jurnal Internasional</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td></td>
                                    <td></td>
                                    <td>√</td>
                                    <td>Peserta Bakti Sosial Lokal</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td></td>
                                    <td></td>
                                    <td>√</td>
                                    <td>Peserta Bakti Sosial Nasional</td>
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