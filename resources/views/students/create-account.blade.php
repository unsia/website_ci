@extends('auth.app')

@section('page-css')
<!--  -->
@endsection

@section('content')
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor bg-secondary">

            <div class="m-5 text-center">
                <div class="kt-login__logo mb-5">
                    <a href="#">
                        <img alt="USA" src="{{ asset('homepages/images/logo-usa.png') }}" width="20%">
                    </a>
                </div>

                <div class="kt-login__head">
                    <h5 class="kt-login__title">Buat akun untuk melakukan pendaftaran. <br>Jika sudah pernah membuat akun, masuk dengan akun yang pernah anda buat sebelumnya dihalaman login.</h5>
                </div>
            </div>
            
            <!-- begin:: Content -->
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">	
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                            <div class="kt-portlet__body">
                                <form class="kt-form" id="kt_form" method="POST" action="{{ route('student.do_create_account') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-8">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <h3 class="kt-section__title kt-section__title-lg">Login Akun:</h3>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Username</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" name="username" type="text" value="{{ old('username') }}" placeholder="Masukkan username ..." autofocus>
                                                            @if($errors->has('username'))
                                                                <div id="username-error" class="error invalid-feedback">{{ $errors->first('username') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Password</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" type="password" value="{{ old('password') }}" placeholder="Masukkan password ...">
                                                            @if($errors->has('password'))
                                                                <div id="password-error" class="error invalid-feedback">{{ $errors->first('password') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Konfirmasi Password</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" placeholder="Masukkan konfirmasi password ...">
                                                            @if($errors->has('password_confirmation'))
                                                                <div id="password_confirmation-error" class="error invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-section">
                                                <div class="kt-section__body">
                                                    <h3 class="kt-section__title kt-section__title-lg">Identitas:</h3>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Nomor Induk Kependudukan</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('identity_number') ? 'is-invalid' : '' }}" name="identity_number" min="1" type="number" value="{{ old('identity_number') }}" placeholder="Masukkan nomor induk kependudukan ...">
                                                            @if($errors->has('identity_number'))
                                                                <div id="identity_number-error" class="error invalid-feedback">{{ $errors->first('identity_number') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Nama Sesuai KTP</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('matchname_identity') ? 'is-invalid' : '' }}" name="matchname_identity" type="text" value="{{ old('matchname_identity') }}" placeholder="Masukkan nama yang sesuai dengan identitas KTP ...">
                                                            @if($errors->has('matchname_identity'))
                                                                <div id="matchname_identity-error" class="error invalid-feedback">{{ $errors->first('matchname_identity') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Nama Sesuai Ijazah</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('matchname_certificate') ? 'is-invalid' : '' }}" name="matchname_certificate" type="text" value="{{ old('matchname_certificate') }}" placeholder="Masukkan nama yang sesuai dengan ijazah ...">
                                                            @if($errors->has('matchname_certificate'))
                                                                <div id="matchname_certificate-error" class="error invalid-feedback">{{ $errors->first('matchname_certificate') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <label class="col-4 col-form-label">Kewarganegaraan</label>
                                                        <div class="col-8">
                                                            <div class="kt-radio-inline {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                                                                <label class="kt-radio">
                                                                    <input type="radio" name="nationality" value="WNI" checked> WNI
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-radio">
                                                                    <input type="radio" name="nationality" value="WNA"> WNA
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            @if($errors->has('gender'))
                                                                <div id="gender-error" class="error invalid-feedback">{{ $errors->first('gender') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Jenis Kelamin</label>
                                                        <div class="col-8">
                                                            <div class="kt-radio-inline {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                                                                <label class="kt-radio">
                                                                    <input type="radio" name="gender" value="Pria" checked> Pria
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-radio">
                                                                    <input type="radio" name="gender" value="Wanita"> Wanita
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            @if($errors->has('gender'))
                                                                <div id="gender-error" class="error invalid-feedback">{{ $errors->first('gender') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Tempat Lahir</label>
                                                        <div class="col-5">
                                                            <input class="form-control {{ $errors->has('bornplace') ? 'is-invalid' : '' }}" name="bornplace" type="text" value="{{ old('bornplace') }}" placeholder="Masukkan tempat lahir ...">
                                                            @if($errors->has('bornplace'))
                                                                <div id="bornplace-error" class="error invalid-feedback">{{ $errors->first('bornplace') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-3">
                                                            <input type="text" name="borndate" class="form-control datepick {{ $errors->has('borndate') ? 'is-invalid' : '' }}" id="kt_datepicker_1" readonly placeholder="Pilih tanggal lahir ..."/>
                                                            @if($errors->has('borndate'))
                                                                <div id="borndate-error" class="error invalid-feedback">{{ $errors->first('borndate') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-section">
                                                <div class="kt-section__body">
                                                    <h3 class="kt-section__title kt-section__title-lg">Kontak:</h3>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Email</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="text" value="{{ old('email') }}" placeholder="Masukkan email ...">
                                                            @if($errors->has('email'))
                                                                <div id="email-error" class="error invalid-feedback">{{ $errors->first('email') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">No Handphone</label>
                                                        <div class="col-8">
                                                            <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" name="phone_number" type="text" value="{{ old('phone_number') }}" placeholder="Masukkan nomor handphone ...">
                                                            @if($errors->has('phone_number'))
                                                                <div id="phone_number-error" class="error invalid-feedback">{{ $errors->first('phone_number') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Negara</label>
                                                        <div class="col-8">
                                                            <select class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country">
                                                                <option value="">-- Pilih Negara --</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                            </select>
                                                            @if($errors->has('country'))
                                                                <div id="country-error" class="error invalid-feedback">{{ $errors->first('country') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Provinsi</label>
                                                        <div class="col-8">
                                                            <select class="form-control provinsi {{ $errors->has('id_provinsi') ? 'is-invalid' : '' }}" type="text" placeholder="Provinsi" name="id_provinsi">
                                                                <option value="">-- Pilih Provinsi --</option>
                                                                @foreach($provinsi as $item)
                                                                    <option value="{{ $item->id }}" {{ old('id_provinsi') == $item->id ? 'selected' : ''}}>{{ $item->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('id_provinsi'))
                                                                <div id="id_provinsi-error" class="error invalid-feedback">{{ $errors->first('id_provinsi') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Kabupaten / Kota</label>
                                                        <div class="col-8">
                                                            <select class="form-control kabupaten {{ $errors->has('id_kabupaten') ? 'is-invalid' : '' }}" id="id_kabupaten" name="id_kabupaten" disabled>
                                                                <option value="">-- Pilih Kabupaten / Kota --</option>
                                                            </select>
                                                            @if($errors->has('id_kabupaten'))
                                                                <div id="id_kabupaten-error" class="error invalid-feedback">{{ $errors->first('id_kabupaten') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label">Alamat Tetap</label>
                                                        <div class="col-8">
                                                            <textarea name="stay_address" class="form-control {{ $errors->has('stay_address') ? 'is-invalid' : '' }}" id="stay_address" rows="4" placeholder="Masukkan alamat tetap ...">{{ old('stay_address') }}</textarea>
                                                            @if($errors->has('stay_address'))
                                                                <div id="stay_address-error" class="error invalid-feedback">{{ $errors->first('stay_address') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-8">
                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions pull-right">
                                                    <button type="submit" class="btn btn-primary">Buat Akun</button>
                                                    <button type="button" class="btn btn-secondary" onclick="location.href='/'">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2"></div>
                                    </div>
                                </form>
                            </div>
                        </div>	
                        <!--end::Portlet-->
                    </div>
                    <div class="col-lg-2"></div>
                </div>	
            </div>
            <!-- end:: Content -->

        </div>
    </div>
</div>
<!-- end:: Page -->
@endsection

@section('page-js')
<!--begin::Page Scripts(used by this page) -->
<script src="./assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>

<script>
    var URL = '{{ url('') }}';
    $('.datepick').datepicker({
        todayHighlight: true,
        autoclose: true
    });
    $('.provinsi').change(function () {
        const id = $(this).val();
        $('.kabupaten').empty();
        const option = '<option value="">-- Pilih Kabupaten / Kota --</option>';
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
                    $('#id_kabupaten').prop('disabled', false);
                    if(response.error == false)
                    {
                        for(var i = 0; i < kabupaten.length; i ++) {
                            const option = '<option value="' + kabupaten[i].id + '">' + kabupaten[i].nama + '</option>';
                            $('.kabupaten').append(option);
                        }
                    }
                }
            });
        } else {
            $('#id_kabupaten').prop('disabled', true);
        }
    });

    $('#uploadbtn').change(function () {
        setThumbnail(this, 'foto');
    });
</script>
@endsection