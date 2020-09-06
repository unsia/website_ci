@extends('layouts.sistem-informasi-page')

@section('title')
Profil
@endsection

@section('prodi')
Sistem Informasi
@endsection

@section('contentBox')
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Gambaran Umum Program</h4>
            </div>
            <div class="widget-inner">
                <table class="table table-bordered">
                    <tr>
                        <th>Program Studi</th>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><a href="{{ url('sistem-informasi') }}">http://unsia.ac.id/akademik/program-studi/sistem-informasi</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Jenjang</th>
                        <td>Strata 1</td>
                    </tr>
                    <tr>
                        <th>Gelar</th>
                        <td>Sarjana Sistem Informasi (S.SI)</td>
                    </tr>
                    <tr>
                        <th>Syarat Pendidikan</th>
                        <td>Lulusan SMA/SMK dan Se-derajat, Pindahan, dan Lanjutan</td>
                    </tr>
                    <tr>
                        <th>Lama Studi</th>
                        <td>8 Semester</td>
                    </tr>
                    <tr>
                        <th>Kredit Semester</th>
                        <td>Minimal 144 SKS</td>
                    </tr>
                    <tr>
                        <th>Info Admisi</th>
                        <td><a href="{{ route('landing.jenjang_s1') }}" class="badge badge-primary">Klik Disini</a></td>
                    </tr>
                    <tr>
                        <th>Pendaftaran</th>
                        <td><a href="https://akademik.unsia.ac.id/spmbfront/" class="badge badge-primary">Klik Disini</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Profil</h4>
            </div>
            <div class="widget-inner">
                <p style="text-align: justify">Prodi Sistem Informasi merupakan disiplin ilmu yang
                    berhubungan dengan teknologi informasi dan komunikasi guna menyelesaikan masalah?masalah
                    bisnis dan teknologi dalam perusahaan. Lulusan sistem informasi mempunyai kesempatan
                    karir di bidang bisnis dan teknologi informasi.
                </p>
                <p style="text-align: justify">Program ini bertujuan membekali mahasiswa dengan wawasan
                    pengetahuan dan keterampilan dalam pengembangan sistem informasi, tren penggunaan dan
                    kebutuhan sistem informasi strategis bagi perusahaan (corporate information systems),
                    penggunaan sistem informasi yang berbasis e-business, serta pengetahuan teknologi dan
                    bisnis yang dapat diaplikasikan dalam dunia usaha dan dunia industri (DUDI). Mahasiswa
                    akan diarahkan menjadi seorang pakar di dalam perencanaan strategi dan pemanfaatan SI/TI
                    guna mendukung kinerja bisnis sebuah organisasi.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Tujuan Program Studi</h4>
            </div>
            <div class="widget-inner">
                <ul class="ml-4">
                    <li>Menghasilkan lulusan yang ahli di bidang sistem informasi E-Business berbasis
                        capaian Pembelajaran Lulusan sesuai dengan Standar Nasional Pendidikan Tinggi dan
                        memiliki kemampuan untuk mengembangkan keilmuan sistem informasi secara lebih maju,
                        berkarakter profesional dan memiliki budi pekerti yang luhur.
                    </li>
                    <li>Menghasilkan topik-topik penelitian dibidang sistem informasi yang berorientasi pada
                        kontribusi pengembangan IPTEK untuk revolusi industry 4.0 di Indonesia serta
                        menghasilkan luaran publikasi nasional dan internasional bereputasi dan HAKI.</li>
                    <li>Menghasilkan kegiatan-kegiatan pengabdian masyarakat yang berorientasi pada
                        kontribusi IPTEK pada masyarakat.
                    </li>
                    <li>Menghasilkan dosen tetap Prodi Sistem Informasi yang memiliki kepakaran di bidang
                        sistem informasi E-Business mengacu pada perkembangan revolusi industry 4.0.
                    </li>
                    <li>Menciptakan budaya akademik yang unggul dengan menerapkan standar dan peraturan
                        nasional perguruan tinggi yang mampu mengikuti perkembangan iptek di bidang sistem
                        informasi.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Visi Program Studi</h4>
            </div>
            <div class="widget-inner">
                <p style="text-align: justify">Menjadi Program Studi Sistem Informasi On-line yang unggul
                    pada tataran global dibidang E-Bisnis dan masuk dalam tujuh besar Program Studi Sistem
                    Informasi On-line unggulan di Indonesia</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Misi Program Studi</h4>
            </div>
            <div class="widget-inner">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Menyelenggarakan pendidikan tinggi di bidang sistem informasi yang mengacu pada
                                standar mutu nasional BAN PT dan mengikuti trend perkembangan TIK di tingkat
                                internasional yakni revolusi industry 4.0.</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Menyelenggarakan penelitian di bidang ilmu sistem informasi yang berfokus pada
                                pengembangan E-Bisnis untuk mendukung pengembangan revolusi industry 4.0 di
                                Indonesia.</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Menyelenggarakan pengabdian kepada masyarakat yang berbasis ilmu pengetahuan dan
                                teknologi dengan memanfaatkan hasil penelitian.</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Membangun kompetensi dosen sesuai standar nasional untuk menunjang pengembangan
                                kurikulum yang fokus pada pengembangan E-Bisnis berdasarkan Standar Nasional
                                Pendidikan Tinggi.</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Membangun budaya akademik yang menerapkan standar dan peraturan nasional perguruan
                                tinggi yang mampu mengikuti perkembangan iptek di bidang sistem informasi pendidikan
                                secara on-line secara global.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</main>
<div class="ttr-overlay"></div>
@endsection