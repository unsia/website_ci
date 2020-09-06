@extends('layouts.informatika-page')

@section('title')
Kurikulum
@endsection

@section('prodi')
Informatika
@endsection

@section('contentBox')
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
            </div>
            <div class="widget-inner">
                <p style="text-align: justify">Dengan penerapan KPT-KKNI level 6, Teknik Informatika telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai <i>recognition of competence outside the running curricula</i>, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia Cyber University sebagai pelengkap pencapaian <i>learning outcome</i>. Sistem <i>recognition</i> atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung <i>soft skill</i>, dan kompetensi pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Teknik Informatika berupaya konsisten dalam membangun mutu lulusan di bidang Teknik Informatika.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>SEBARAN MATA KULIAH PROGRAM STUDI INFORMATIKA 2020</h4>
            </div>
            <div class="widget-inner">
                <p>Jumlah sks Program Studi (minimum untuk kelulusan) : 144 sks yang tersusun
                    sebagai berikut:</p>
                <a href="{{ asset('homepages/documents/Kurikulum Program Studi TI.pdf')}}" class="btn btn-primary">KURIKULUM</a>
            </div>
        </div>
    </div>
</div>

</main>
<div class="ttr-overlay"></div>
@endsection