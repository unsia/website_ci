@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Capaian Pembelajaran Lulusan <br> Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi/prospek-karir') }}">Prospek
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
                                <a class="nav-link active"
                                    href="{{ route('sistem-informasi.capaian_pembelajaran_lulusan') }}">Capaian
                                    Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <table class="table table-bordered">
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Kompetensi Utama Lulusan Prodi Sistem Informasi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mampu menerapkan prinsip-prinsip moral atau nilai spiritualitas sesuai dengan
                                        ajaran agama yang dianut, yang berlaku secara universal dalam upaya pengembangan
                                        pribadi yang unggul di masyarakat dengan menjadikan prinsip atau nillai tersebut
                                        sebagai motivasi untuk menguasai, mengamalkan, dan mengembangkan IPTEK.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mampu menerapkan nilai-nilai luhur Pancasila sebagai ciri khas dan jati diri
                                        bangsa dalam upaya pengembangan pribadi yang berkarakter dan berintegritas.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mampu menerapkan prinsip-prinsip nasionalisme dalam koridor Negara Kesatuan
                                        Republik Indonesia yang menjunjung tinggi nilai-nilai Pancasila dan UUD 1945.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mampu menggunakan Bahasa Inggris sebagai bahasa internasional dalam koridor
                                        pengembangan karir profesional di dunia kerja di tingkat Asia</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mampu menerapkan Bahasa Indonesia sebagai bahasa ilmiah/saintifik sebagai cara
                                        untuk mendiseminasikan karya ilmiah secara tertulis dan mampu mengembangkannya
                                        sebagai bahasa komunikasi profesional untuk dunia kerja di tingkat Asia</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mampu memahami dan mengaplikasikan teori di bidang sistem informasi secara umum,
                                        khususnya teori dalam hal pengembangan sistem, analisis sistem dan perancangan
                                        system yang berorientasi pada e-bisnis.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mampu mendesain, mengatur dan mengarahkan proyek di dalam sistem informasi, yang
                                        didalamnya melingkupi aspek manajemen waktu dan biaya, serta mengolah sumber
                                        daya yang tersedia untuk mencapai hasil yang diharapkan.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Mampu memahami penggunaan software yang berorientasi pada e-bisnis, berinteraksi
                                        langsung dengan stakeholder untuk menganalisa dan mengumpulkan kebutuhan proses
                                        bisnis.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Mampu menjadi seorang pimpinan proyek yang up to date di dalam pengembangan
                                        sistem informasi sebagai pendukung aktivitas dan pengambilan keputusan</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Mampu mengidentifikasi, menganalisis dan mencari solusi pemecahan masalah di
                                        bidang sistem informasi. </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Mampu membuat konsep desain database sistem informasi dan dapat
                                        mengimplementasikannya serta mampu melakukan instalasi konfigurasi, upgrade,
                                        adaptasi, monitoring dan maintenance database dalam suatu organisasi.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Mampu melakukan monitoring dan evaluasi di dalam e-bisnis dan sistem informasi
                                        secara umum serta dapat memberikan solusi pemecahan masalah pada
                                        organisasi/perusahaan.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Mampu menerapkan metode-metode dalam penelitian dan melakukan modifikasi,
                                        perbaikan, dan peningkatan terhadap metode-metode yang sudah ada.</td>
                                </tr>
                            </table>
                            <p>Deskripsi uraian umum capaian pembelajaran luluusan yang terdiri atas komponen
                                Pengetahuan, Keterampilan Umum dan Keterampilan Khusus adalah sebagaimana berikut ini:
                            </p>
                            <table class="table table-bordered">
                                <tr class="bg-info">
                                    <th>Jenjang atau Level</th>
                                    <th>Komponen Capaian Pembelajaran</th>
                                    <th>Uraian Umum</th>
                                </tr>
                                <tr>
                                    <td rowspan="4"><b>Jenjang Kualifikasi 6(S1)</b></td>
                                    <td>Sikap</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Bertakwa kepada Allah Subhanahu wa ta’ala dan mampu menunjukkan sikap religius</li>
                                            <li>Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama,moral dan etika;</li>
                                            <li>Dapat berperan sebagai warga Negara yang bangga dan cinta tanah air,memiliki nasionalisme serta rasa tanggungjawab pada Negara dan bangsa;</li>
                                            <li>Dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa,dan bernegara  berdasarkan Pancasila;</li>
                                            <li>Dapat bekerjasama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</li>
                                            <li>Dapat menghargai keanekaragaman budaya, pandangan, agama dan kepercayaan, serta pendapatat atau temuan orisinal orang lain;</li>
                                            <li>Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</li>
                                            <li>Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</li>
                                            <li>Menginternalisasi nilai, norma dan etika akademik;</li>
                                            <li>Menginternalisasi semangat kemandirian, kejuangan dan kewirausahaan.</li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengetahuan</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Menguasai konsep-konsep matematika, statistika untuk memecahkan berbagai masalah komputasi.</li>
                                            <li>Menguasai konsep-konsep bahasa pemrograman berbasis web, dekstop dan mobile serta mengetahui berbagai model bahasa pemrograman populer. </li>
                                            <li>Memahami konsep-konsep metode dan model sistem dan mampu menganalisis kompleksitas sebuah sistem untuk memberikan solusi pemecahan masalah di dalam lingkup e- bisnis.</li>
                                            <li>Mengetahui proses rekayasa perangkat lunak, mulai dari analisis perancangan, implementasi, hingga ke pengujian.</li>
                                            <li>Memiliki pengetahuan dan mampu beradaptasi dengan perkembangan teknologi informasi dan komunikasi yang berorientasi ke perancangan e- bisnis.</li>
                                            <li>Menguasai konsep-konsep basis data dan mampu membangun basis data untuk pengembangan sistem berbasis komputer.</li>
                                            <li>Menguasai bahasa dan algoritma pemrograman yang berkaitan dengan program aplikasi untuk memanipulasi model gambar, grafis dan citra.</li>
                                            <li>Memiliki pengetahuan dan kemampuan untuk mengelola sistem menjadi lebih efektif dan efisien di dalam lingkup e- bisnis. </li>
                                            <li>Mampu merencanakan sebuah proyek pengembangan sistem dengan menggunakan metode dan teknik yang tepat.</li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterampilan Umum</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Mampu menerapkan prinsip-prinsip moral atau nilai spiritualitas sesuai dengan ajaran agama yang dianut, yang berlaku secara universal dalam upaya pengembangan pribadi yang unggul di masyarakat dengan menjadikan prinsip atau nillai tersebut sebagai motivasi untuk menguasai, mengamalkan, dan mengembangkan IPTEK.</li>
                                            <li>Mampu menerapkan nilai-nilai luhur Pancasila sebagai ciri khas dan jati diri bangsa dalam upaya pengembangan pribadi yang berkarakter dan berintegritas.</li>
                                            <li>Mampu menerapkan prinsip-prinsip nasionalisme dalam koridor Negara Kesatuan Republik Indonesia yang menjunjung tinggi nilai-nilai Pancasila dan UUD 1945.</li>
                                            <li>Mampu menggunakan Bahasa Inggris sebagai bahasa internasional dalam koridor pengembangan karir profesional di dunia kerja.</li>
                                            <li>Mampu menerapkan Bahasa Indonesia sebagai bahasa ilmiah/saintifik sebagai cara untuk mendiseminasikan karya  ilmiah secara tertulis dan mampu mengembangkannya sebagai bahasa komunikasi profesional untuk dunia kerja.</li>
                                            <li>Mampu memelihara dan mengembangkan jaringan kerjasama dengan dosen, pembimbing, kolega, dan teman sejawat..</li>
                                            <li>Memiliki kemampuan (pengelolaan) manajerial tim dan kerja sama (team work), manajemen diri, mampu berkomunikasi baik lisan maupun tertulis dengan baik dan mampu melakukan presentasi.</li>
                                            <li>Mampu menerapkan prinsip-prinsip dasar berwirausaha berbasis kreatifitas dan inovasi dengan mendayagunakan basis keilmuan prodi beorientasi e-bisnis.</li>
                                            <li>Mampu menerapkan atau mengembangkan kemampuan salah satu cabang bidang olah raga atau seni sebagai media penguatan soft-skill.</li>
                                            <li>Mampu menerapkan prinsip-prinsip dasar konservasi lingkungan hidup dalam konteks pengembangan karir profesional di perusahaan atau instansi pemerintah sebagai upaya mendukung sustainabilitas (keberlanjutan) lingkungan.</li>
                                            <li>Mampu memahami prinsip-prinsip anti korupsi dan penyalahgunaan narkoba sebagai upaya peningkatan karakter dan integritas di dunia kerja.</li>
                                            <li>Mampu mengkaji implikasi pengembangan atau implementasi ilmu pengetahuan teknologi berdasarkan kaidah, tata cara dan etika ilmiah dalam rangka menghasilkan solusi, gagasan, desain atau kritik seni, menyusun deskripsi ilmiah hasil kajiannya dalam bentuk jalur tugas akhir publikasi atau jalur laporan tugas akhir.</li>
                                            <li>Mempunyai kemampuan dalam mendefinisikan kebutuhan pengguna atau pasar terhadap kinerja (menganalisis, mengevaluasi dan mengembangkan) algoritma/metode berbasis komputerisasi.</li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterampilan Khusus</td>
                                    <td>
                                        <ol type="1" class="ml-4">
                                            <li>Mampu menganalisis dan merancang program, sistem, atau aplikasi untuk meningkatkan efektivitas penggunaan komputer untuk memecahkan masalah tertentu, menggunakan berbagai bahasa pemrograman.</li>
                                            <li>Menerapkan konsep-konsep yang berkaitan dengan manajemen informasi, termasuk menyusun pemodelan dan abstraksi data serta membangun aplikasi perangkat lunak untuk pengorganisasian di dalam lingkup e- bisnis.</li>
                                            <li>Memanfaatkan teknologi-teknologi di bidang informasi dan komunikasi untuk membangun website atau aplikasi pada perangkat mobile.</li>
                                            <li>Merancang algoritma yang efisien dan efektif untuk memecahkan berbagai persoalan komputasi</li>
                                            <li>Mampu merancang dan menerapkan infrastruktur teknologi informasi untuk mewujudkan ketahanan informasi berorientasi pada kebutuhan masyarakat dan perkembangan teknologi secara berkelanjutan</li>
                                            <li>Mampu mengidentifikasi kebutuhan organisasi/perusahaan dan memenuhi kebutuhan-kebutuhan melalui data penelitian yang tepat, mengumpulkan data, mengorganisasikan data, dan mengelola data</li>
                                            <li>Mampu merancang dan membangun aplikasi system berbasis dekstop dan mobile yang sesuai dengan kebutuhan organisasi / perusahaan berdasarkan hasil analisis sistem </li>
                                            <li>Mampu mengelola aplikasi web baik dari sisi konten, programming dan databasenya untuk kepentingan pengembangan sistem informasi bisnis.</li>
                                        </ol>
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