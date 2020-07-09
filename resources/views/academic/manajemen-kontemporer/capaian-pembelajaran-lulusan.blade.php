@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Capaian Pembelajaran Lulusan <br> Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
            <li>Capaian Pembelajaran Lulusan</li>
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
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer') }}">Home</a>
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
                                <a class="nav-link active" href="{{ route('manajemen-kontemporer.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <table class="table table-bordered">
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Profil Lulusan</th>
                                    <th>Capaian Pembelajaran</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Manajer Lini Pertama</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Mampu melakukan tugas sebagai pemimpin</li>
                                            <li>Mampu menganalisis fungsi-fungsi manajemen (planning, organizing, leading, controlling) berdasarkan data dan informasi sesuai fakta</li>
                                            <li>Mampu mengaplikasikan pengetahuan teknis pada fungsi organsasi (operasional, pemasaran, keuangan dan sumber daya manusia) pada berbagai tipe organisasi</li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Peneliti Pemula</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Mampu melakukan penelitian secara sederhana dengan metodologi yang benar pada fungsi organisasi berdasarkan data dan informasi sesuai fakta</li>
                                            <li>Mampu menyajikan dan mengkomunikasikan hasil penelitian</li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wirausahawan Pemula</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Mampu menangkap peluang bisnis</li>
                                            <li>Mampu mengorganisasikan dan mengelola sebuah bisnis (mampu mengelola fungsi manajemen dan fungsi organisasi)</li>
                                            <li>Mampu mengambil resiko bisnis</li>
                                        </ol>
                                    </td>
                                </tr>
                            </table>
                            <p>Mengacu kepada Permenristek dikti Nomor 44 tahun 2015 tentang Standar Nasional Pendidikan Tinggi dan Perpres RI Nomor 8 Tahun 2012 tentang KKNI, UUPT No.12 Tahun 2012, lulusan program studi memiliki capaian pembelajaran terkait sikap dan keterampilan umum, penguasaan pengetahuan dan ketrampilan khusus sebagai berikut:</p>
                            <table class="table table-bordered">
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Jenis Pendidikan</th>
                                    <th>Jenjang</th>
                                    <th>Capaian Pembelajaran Lulusan : Sikap, Pengetahuan, Keterampilan Khusus dan Ketrampilan Umum</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Strata Satu (S1)</td>
                                    <td>Level 6</td>
                                    <td>
                                        <ul style="list-style-type:none;">
                                            <li class="mb-3">
                                                <b>SIKAP</b>
                                                <ol type="a" class="ml-4">
                                                    <li>Bertaqwa kepada  Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius;</li>
                                                    <li>Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;</li>
                                                    <li>Berkontribusi dalam peningkatan untuk kehidupan bermasyarakat, berbangsa, bernegara, dan peradaban berdasarkan Pancasila;</li>
                                                    <li>Berperan sebagai warganegara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggung jawab pada negara dan bangsa;</li>
                                                    <li>Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</li>
                                                    <li>Bekerjasama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</li>
                                                    <li>Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara</li>
                                                    <li>Menginternalisasi nilai, norma, dan etika akademik;</li>
                                                    <li>Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</li>
                                                    <li>Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan</li>
                                                </ol>
                                            </li>
                                            <li class="mb-3">
                                                <b>PENGUASAAN PENGETAHUAN</b>
                                                <ol type="a" class="ml-4">
                                                    <li>konsep teoritis, metode dan perangkat analisis fungsi manajemen kontemporer (perencanaan, pengorganisasian, pengarahan, pengendalian) dan fungsi organisasi kontemporer (pemasaran, sumberdaya manusia, operasi dan keuangan) pada berbagai jenis organisasi;</li>
                                                    <li>metodologi penelitian dalam ilmu manajemen kontemporer;</li>
                                                    <li>prinsip kepemimpinan dan wirausahaan dalam berbagai tipe organisasi dan mampu beradaptasi dalam perkembangan teknologi informasi terkini</li>
                                                </ol>
                                            </li>
                                            <li class="mb-3">
                                                <b>KETRAMPILAN KHUSUS</b>
                                                <ol type="a" class="ml-4">
                                                    <li>mampu menyelesaikan masalah rutin fungsi manajemen kontemporer  (perencanaan, pengorganisasian, pengarahan, pengendalian) dan fungsi organisasi kontemporer (pemasaran, sumberdaya manusia, operasi dan keuangan) dengan kaidah yang berlaku;</li>
                                                    <li>mampu merumuskan dan mengimplementasikan rencana stratejik ke dalam rencana operasional berdasarkan perkembangan teknologi informasi terkini;</li>
                                                    <li>mampu melakukan kajian teori dan empirik dalam bidang manajemen kontemporer berdasarkan  metode ilmiah.</li>
                                                </ol>
                                            </li>
                                            <li class="mb-3">
                                                <b>KETRAMPILAN UMUM</b>
                                                <ol type="a" class="ml-4">
                                                    <li>mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya;</li>
                                                    <li>mampu menunjukkan kinerja mandiri, bermutu, dan terukur;</li>
                                                    <li>mampu mengkaji implikasi pengembangan atau implementasi ilmu pengetahuan teknologi yang memperhatikan dan menerapkan nilai humaniora sesuai dengan keahliannya berdasarkan kaidah, tata cara dan etika ilmiah dalam rangka menghasilkan solusi, gagasan, desain atau kritik seni, menyusun deskripsi saintifik hasil kajiannya dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi;</li>
                                                    <li>menyusun deskripsi saintifik hasil kajian tersebut di atas dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi;</li>
                                                    <li>mampu mengambil keputusan secara tepat dalam konteks penyelesaian masalah di bidang keahliannya, berdasarkan hasil analisis informasi dan data;</li>
                                                    <li>mampu memelihara dan mengembang-kan jaringan kerja dengan pembimbing, kolega, sejawat baik di dalam maupun di luar lembaganya;</li>
                                                    <li>mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya;</li>
                                                    <li>mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggung jawabnya, dan mampu mengelola pembelajaran secara mandiri dan;</li>
                                                    <li>mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi.</li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </td>
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