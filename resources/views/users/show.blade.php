@extends('layouts.app')

@section('title')
    {{ config('app.name', 'USA') }} | {{ count($current_menu) > 0 ? $current_menu[count($current_menu) - 1] : 'Pengguna' }}
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-8">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Informasi Pengguna <small>perbarui informasi pengguna</small></h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="dropdown dropdown-inline">
                                @can('user-update')
                                    <a href="{{ route('users.edit', $detail->id) }}" class="btn btn-label-brand btn-sm btn-icon btn-icon-md">
                                        <i class="flaticon2-gear"></i>
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>

                <form class="kt-form kt-form--label-right">
                    <fieldset disabled="disabled">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Profil Pengguna:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
                                                <img class="kt-avatar__holder" src="{{ $detail->url_foto }}" onerror="this.src='{{ asset('img/blank-avatar.png') }}'">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Nama</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="{{ $detail->nama }}" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Akun</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="{{ $detail->akun }}" placeholder="Nama Akun">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="{{ $detail->tempat_lahir }}" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="{{ $detail->tanggal_lahir }}" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-radio-inline">
                                                @if($detail->kelamin == 'l')
                                                    <label class="kt-radio kt-radio--solid kt-radio--primary">
                                                        <input type="radio" {{ $detail->kelamin == 'l' ? 'checked' : '' }}> Laki - Laki
                                                        <span></span>
                                                    </label>
                                                @elseif($detail->kelamin =='p')
                                                    <label class="kt-radio kt-radio--solid kt-radio--warning">
                                                        <input type="radio" {{ $detail->kelamin == 'p' ? 'checked' :'' }}> Perempuan
                                                        <span></span>
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Informasi Kontak:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Telepon</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                <input type="text" class="form-control" value="{{ $detail->telepon }}" placeholder="Telepon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                <input type="text" class="form-control" value="{{ $detail->email }}" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-lg-9 col-xl-6">
                                        <textarea class="form-control" placeholder="Alamat" rows="4">{{ $detail->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Kabupaten / Kota</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="{{ ($detail->kabupaten) ? $detail->kabupaten->nama : ''}}" placeholder="Kabupaten / Kota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Provinsi</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control" type="text" value="{{ ($detail->provinsi) ? $detail->provinsi->nama : '' }}" placeholder="Provinsi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-3 col-xl-3">
                                </div>
                                <div class="col-lg-9 col-xl-9">
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="fa fa-chevron-left"></i> Kembali</a>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
