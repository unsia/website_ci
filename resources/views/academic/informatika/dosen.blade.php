@extends('layouts.informatika-page')

@section('title')
Dosen
@endsection

@section('prodi')
Informatika
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
                                    <td>Eri Mardiani, S.Kom,M.Kom</td>
                                    <td>STMIK Nusamandiri</td>
                                    <td>e-Business</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>2</th>
                                    <td>Dr.Iskandar Fitri, ST,MT</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Universitas Indonesia</td>
                                    <td>-</td>
                                    <td>2009</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>3</th>
                                    <td>Dr.Ucuk Darusalam, ST, MT.</td>
                                    <td>Universitas Indonesia</td>
                                    <td>-</td>
                                    <td>Universitas Indonesia</td>
                                    <td>-</td>
                                    <td>2015</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Dr. Ucuk Darusalam, ST, MT.pdf') }}">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>4</th>
                                    <td>Rima Tamara Aldisa, S.Kom, M.Kom</td>
                                    <td>Universitas Budi Luhur</td>
                                    <td>Teknologi Informasi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Rima Tamara Aldisa.pdf') }}">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>5</th>
                                    <td>Albaar Rubhasy,S.Si,MTI</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Teknologi Informasi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>6</th>
                                    <td>Raden Muhamad Firzatullah, S.Pd, M.Kom</td>
                                    <td>Institut Pertanian Bogor</td>
                                    <td>Ilmu Komputer</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>7</th>
                                    <td>Riad Sahara, S.SI, MT</td>
                                    <td>Universitas Mercu Buana</td>
                                    <td>ICT</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>8</th>
                                    <td>Sigit Wijanarko, ST, M.Kom</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Teknologi Informasi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Sigit Wijanarko.pdf') }}">Download</a></td>
                                  </tr>
                              </table>
            </div>
        </div>
    </div>
</div>

</main>
<div class="ttr-overlay"></div>
@endsection