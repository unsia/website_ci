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
                        <h3 class="kt-portlet__head-title">Informasi Pengguna <small>mohon lengkapi infomasi pengguna</small></h3>
                    </div>
                </div>

                <form class="kt-form kt-form--label-right" method="POST" action="{{ route('users.update', $detail->id) }}" enctype="multipart/form-data" id="practice-form">
                    @csrf
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
                                            <img class="kt-avatar__holder" src="{{ old('foto', $detail->url_foto) }}" id="foto" onerror="this.src='{{ asset('img/blank-avatar.png') }}'">
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Unggah Foto">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="foto" accept=".png, .jpg, .jpeg" id="uploadbtn">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Ganti Foto">
                                                <i class="fa fa-times"></i>
                                            </span>
                                        </div>
                                        @if($errors->has('foto'))
                                            <div class="text-danger">{{ $errors->first('foto') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">* Nama</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama" type="text" value="{{ old('nama', $detail->nama) }}"  placeholder="Nama Lengkap">
                                        @if($errors->has('nama'))
                                            <div id="nama-error" class="error invalid-feedback">{{ $errors->first('nama') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">* Akun</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control {{ $errors->has('akun') ? 'is-invalid' : '' }}" name="akun" type="text" value="{{ old('akun', $detail->akun) }}" placeholder="Nama Akun" disabled>
                                        @if($errors->has('akun'))
                                            <div id="akun-error" class="error invalid-feedback">{{ $errors->first('akun') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Role</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <select class="form-control provinsi" type="text" placeholder="Provinsi" name="id_role">
                                            <option value="">Pilih Role</option>
                                            @foreach($roles as $item)
                                                <option value="{{ $item->id }}" {{ old('id_role') == $item->id ? 'selected' : ($detail->hasRole($item->id) ? 'selected' : '')}}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-key"></i></span></div>
                                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                                            @if($errors->has('password'))
                                                <div id="password-error" class="error invalid-feedback">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">* Konfirmasi Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-key"></i></span></div>
                                            <input type="password" name="confirm_password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}" placeholder="Konfirmasi Password">
                                            @if($errors->has('confirm_password'))
                                                <div id="confirm_password-error" class="error invalid-feedback">{{ $errors->first('confirm_password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}" name="tempat_lahir" type="text" value="{{ old('tempat_lahir', $detail->tempat_lahir) }}" placeholder="Tempat Lahir">
                                        @if($errors->has('tempat_lahir'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('tempat_lahir') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control" type="text" readonly id="tanggal_lahir" value="{{ old('tanggal_lahir', $detail->tanggal_lahir) }}" placeholder="Tanggal Lahir">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="kt-radio-inline">
                                            <label class="kt-radio kt-radio--solid kt-radio--primary">
                                                <input type="radio" {{ old('kelamin', $detail->kelamin) == 'l' ? 'checked' : '' }} name="kelamin" value="l"> Laki - Laki
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--solid kt-radio--warning">
                                                <input type="radio" {{ old('kelamin', $detail->kelamin) == 'p' ? 'checked' :'' }} name="kelamin" value="p"> Perempuan
                                                <span></span>
                                            </label>
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
                                            <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $detail->telepon) }}" placeholder="Telepon">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">* Email</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                            <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email', $detail->email) }}" placeholder="Email" disabled>
                                            @if($errors->has('email'))
                                                <div id="email-error" class="error invalid-feedback">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Provinsi</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <select class="form-control provinsi" type="text" placeholder="Provinsi" name="id_provinsi">
                                            <option value="">Pilih Provinsi</option>
                                            @foreach($provinsi as $item)
                                                <option value="{{ $item->id }}" {{ old('id_provinsi', ($detail->provinsi) ? $detail->provinsi->id : '') == $item->id ? 'selected' : ''}}>{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Kabupaten / Kota</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <select class="form-control kabupaten" placeholder="Kabupaten / Kota" id="id_kabupaten" name="id_kabupaten">
                                            <option value="">Pilih Kabupaten / Kota</option>
                                            @foreach($kabupaten as $item)
                                                <option value="{{ $item->id }}" {{ old('id_kabupaten', ($detail->kabupaten) ? $detail->kabupaten->id : '') == $item->id ? 'selected' : ''}}>{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <textarea class="form-control" placeholder="Alamat" rows="4" name="alamat">{{ old('alamat', $detail->alamat) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-3 col-xl-3">
                                </div>
                                <div class="col-lg-9 col-xl-9">
                                    <a href="{{ route('users') }}" class="btn btn-secondary"><i class="fa fa-chevron-left"></i> Kembali</a>&nbsp;
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('extraJs')
    <script>
        var URL = '{{ url('') }}';
        $('#tanggal_lahir').datepicker({
            todayHighlight: true,
            autoclose: true
        });
        $('.provinsi').change(function () {
            const id = $(this).val();
            $('.kabupaten').empty();
            const option = '<option value="">Pilih Kaputaten / Kota</option>';
            $('.kabupaten').append(option);
            if(id) {
                $.ajax({
                    type: "GET",
                    url: URL + '/api/kabupaten/' + id,
                    cache: false,
                    error: function(err) {
                        swal.fire({
                            title: 'Error',
                            text: 'Maaf, terjadi kesalahan, silahkan coba lagi!',
                            type: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok",
                            confirmButtonClass: "btn btn-brand"
                        });
                    },
                    success: function(response){
                        const kabupaten = response.data;
                        if(response.error == false)
                        {
                            for(var i = 0; i < kabupaten.length; i ++) {
                                const option = '<option value="' + kabupaten[i].id + '">' + kabupaten[i].nama + '</option>';
                                $('.kabupaten').append(option);
                            }
                        }
                    }
                });
            }
        });

        $('#uploadbtn').change(function () {
            setThumbnail(this, 'foto');
        });
    </script>
@endsection
