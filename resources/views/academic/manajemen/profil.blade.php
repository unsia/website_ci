@extends('layouts.manajemen-page')

@section('title')
Profil
@endsection

@section('prodi')
Manajemen
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
                        <td>Manajemen</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><a href="{{ url('manajemen') }}">http://unsia.ac.id/akademik/program-studi/manajemen</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Jenjang</th>
                        <td>Strata 1</td>
                    </tr>
                    <tr>
                        <th>Gelar</th>
                        <td>Sarjana Manajemen (S.M)</td>
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
                <p style="text-align: justify">Prodi Manajemen didirikan untuk menjawab
                    tantangan revolusi industri 4,0 dimana semua operasi perusahaan saat ini bekerja atas
                    dasar teknologi informasi digital. Manajemen Kontemporer diharapkan akan menghasilkan
                    lulusan yang bermutu di bidang manajemen kontemporer untuk dapat diserap oleh stake
                    holder/user.</p>
                <p style="text-align: justify">Sebagai uniqueness Prodi dan Universitas, pendidikan berbasis
                    karakter dan integritas dipilih oleh Manajemen Kontemporer sebagai penciri khas
                    kurikulum. Dengan demikian, penyusunan KPT-KKNI level 6 oleh Manajemen Kontemporer telah
                    memperhatikan prosedur atau langkah-langkah standar yang telah ditetapkan oleh Belmawa
                    DIKTI, yakni telah mengacu pada rekomendasi dari asosiasi prodi (Forum Manajemen
                    Indonesia).</p>
                <p style="text-align: justify">Dengan demikian, penerapan KPT-KKNI level 6 di Manajemen
                    Kontemporer berupaya konsisten dalam membangun mutu lulusan di bidang manajemen
                    kontemporer.</p>
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
                    <li>Tercapainya kualitas pendidikan dan pengajaran dengan lulusan yang memiliki
                        kompetensi yang tinggi di bidang ilmu manajemen kontemporer</li>
                    <li>Tercapainya kualitas dan kuantitas penelitian untuk mengembangkan dan menerapkan
                        ilmu manajemen kontemporer dan teknologi, serta menunjang pengembangan proses
                        pembelajaran</li>
                    <li>Tercapainya kegiatan pengabdian pada masyarakat untuk menerapkan ilmu manajemen
                        kontemporer dan teknologi dalam rangka meningkatkan pemberdayaan masyarakat</li>
                    <li>Tercapainya efisiensi dan efektivitas manajemen kelembagaan untuk menghasilkan tata
                        kelola sarana dan prasarana Program Studi Manajemen Kontemporer. yang baik dan
                        transparan </li>
                    <li>Tercapainya jaringan kerjasama untuk meningkatkan kepakaran dosen sesuai bidang
                        ilmunya</li>
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
                <p style="text-align: center">Menciptakan dan mewujudkan pendidikan tinggi dalam bidang
                    ilmu manajemen kontemporer yang dinamis, progresif dan berkualitas.</p>
                <p style="text-align: center">Menjadi Program Studi unggulan dalam pengembangan ilmu
                    pengetahuan dan teknologi manajemen kontemporer on-line unggulan dalam tata kelola
                    pendidikan, penelitian, dan pengabdian masyarakat pada tahun 2024.</p>
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
                            <td>Membentuk sarjana ekonomi manajemen kontemporer yang memiliki kompetensi dan
                                profesionalitas</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Membentuk sarjana ekonomi manajemen kontemporer yang memiliki kemampuan tinggi dalam
                                beradaptasi dengan lingkungan kerja dan perubahan kemajuan ilmu dan teknologi</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Meningkatkan mutu dosen sesuai dengan perkembangan dan kemajuan ilmu manajemen
                                kontemporer dan teknologi</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Melaksanakan pendidikan, penelitian dan pengabdian kepada masyarakat di bidang ilmu
                                manajemen kontemporer.</td>
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