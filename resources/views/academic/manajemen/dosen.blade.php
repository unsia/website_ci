@extends('layouts.manajemen-page')

@section('title')
Dosen
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
                <h4>Daftar Dosen</h4>
            </div>
            <div class="widget-inner">
                <table class="table table-bordered text-center">
                    <tr class="bg-info">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama Dosen Tetap</th>
                        <th colspan="2">S2</th>
                        <th colspan="3">S3</th>
                        <th rowspan="2">CV</th>
                    </tr>
                    <tr class="bg-success">
                        <th>Universitas</th>
                        <th>Bidang Ilmu</th>
                        <th>Universitas</th>
                        <th>Bidang Ilmu</th>
                        <th>Tahun</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Dr. Ir. Edi Sugiono, SE., MM</td>
                        <td>Universitas Negeri Jember</td>
                        <td>Manajemen</td>
                        <td>Universitas Brawijaya</td>
                        <td>Manajemen SDM</td>
                        <td>2018</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Dr. Sugeng Prasetno, SE., MH.</td>
                        <td>Universitas Indonesia</td>
                        <td>Manajemen</td>
                        <td>Universitas Indonesia</td>
                        <td>Manajemen Strategik</td>
                        <td>-</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Dr. Kusama, Pramanajati SE., M.Si.M.</td>
                        <td>Inggris</td>
                        <td>Manajemen</td>
                        <td>Universitas Gajah Mada</td>
                        <td>Manajemen Keuangan</td>
                        <td>-</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Drs. Suadi Putra, M.Si.M</td>
                        <td>Universitas Nasional</td>
                        <td>Manajemen</td>
                        <td>Unhas</td>
                        <td>Manajemen Pemasaran</td>
                        <td>-</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Dwitya Kirana Amry, B.Sc., MSC.</td>
                        <td>Warwick University England</td>
                        <td>Manajemen</td>
                        <td>Warwick University England</td>
                        <td>Manajemen</td>
                        <td>2019</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td>Mufidah Sahid SE., MM.</td>
                        <td>Universitas Nasional</td>
                        <td>Manajemen</td>
                        <td>-</td>
                        <td>-</td>
                        <td>2016</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td>Dr. Sukusen Soemarinda, DipTech., MBA.</td>
                        <td>Universitas Indonesia</td>
                        <td>Ekonomi Manajemen</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

</main>
<div class="ttr-overlay"></div>
@endsection