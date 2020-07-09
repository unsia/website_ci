@extends('auth.app')

@section('page-css')
<link href="{{ asset('assets/css/demo1/pages/custom/general/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
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
                    <h5 class="kt-login__title">Untuk melakukan pendaftaran siswa perlu melengkapi form dibawah.</h5>
                </div>
            </div>
            
            <!-- begin:: Content -->
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid pl-5 pr-5">
                <div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">
                    <!--begin: Form Wizard Nav -->
                    <div class="kt-wizard-v4__nav">
                        <div class="kt-wizard-v4__nav-items">
                            <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                                <div class="kt-wizard-v4__nav-body">
                                    <div class="kt-wizard-v4__nav-number">
                                        1
                                    </div>
                                    <div class="kt-wizard-v4__nav-label">
                                        <div class="kt-wizard-v4__nav-label-title">
                                            Identitas Pribadi
                                        </div>
                                        <div class="kt-wizard-v4__nav-label-desc">
                                            Personal Particulars
                                        </div>
                                    </div>
                                </div>							
                            </a>
                            <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step">
                                <div class="kt-wizard-v4__nav-body">
                                    <div class="kt-wizard-v4__nav-number">
                                        2
                                    </div>
                                    <div class="kt-wizard-v4__nav-label">
                                        <div class="kt-wizard-v4__nav-label-title">
                                            Informasi Keluarga
                                        </div>
                                        <div class="kt-wizard-v4__nav-label-desc">
                                            Family Information
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step">
                                <div class="kt-wizard-v4__nav-body">
                                    <div class="kt-wizard-v4__nav-number">
                                        3
                                    </div>
                                    <div class="kt-wizard-v4__nav-label">
                                        <div class="kt-wizard-v4__nav-label-title">
                                            Riwayat Pendidikan
                                        </div>
                                        <div class="kt-wizard-v4__nav-label-desc">
                                            History of Education
                                        </div>
                                    </div>
                                </div>							
                            </a>
                            <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step">
                                <div class="kt-wizard-v4__nav-body">
                                    <div class="kt-wizard-v4__nav-number">
                                        4
                                    </div>
                                    <div class="kt-wizard-v4__nav-label">
                                        <div class="kt-wizard-v4__nav-label-title">
                                            Piih Program Studi
                                        </div>
                                        <div class="kt-wizard-v4__nav-label-desc">
                                            Choose Study Program
                                        </div>
                                    </div>
                                </div>
                            </a>						
                        </div>
                    </div>
                    <!--end: Form Wizard Nav -->

                    <div class="kt-portlet">
                        <div class="kt-portlet__body kt-portlet__body--fit">
                            <div class="kt-grid">
                                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                                    <!--begin: Form Wizard Form-->
                                    <form class="kt-form" id="kt_form" method="POST" action="{{ route('student.do_register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <!--begin: Form Wizard Step 1-->
                                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                            <div class="kt-heading kt-heading--md">Biodata Diri Calon Mahasiswa</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Nomor Induk Siswa Nasional (NISN)</label>
                                                                <input type="number" class="form-control" name="student_number" placeholder="Masukkan nomor induk siswa nasional ..." value="{{ old('student_number') }}" required autofocus>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Nomor Induk Kependudukan (NIK)</label>
                                                                <input type="number" class="form-control" name="identity_number" placeholder="Masukkan nomor induk kependudukan ..." value="{{ $user->hasRegistrant->identity_number }}" required>
                                                            </div>
                                                        </div>						   
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nama Sesuai Ijazah</label>
                                                                <input type="text" class="form-control" name="match_certficate" placeholder="Masukkan nama sesuai ijazah ..." value="{{ $user->hasRegistrant->matchname_certificate }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tempat Lahir</label>
                                                                <input type="text" class="form-control" name="born_place" placeholder="Masukkan tempat lahir ..." value="{{ $user->born_place }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Lahir</label>
                                                                <input type="text" name="born_date" class="form-control datepick {{ $errors->has('borndate') ? 'is-invalid' : '' }}" id="kt_datepicker_1" readonly placeholder="Pilih tanggal lahir ..." value="{{ $user->born_date }}" required />
                                                            </div>
                                                        </div>						   
                                                    </div>	
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Agama</label>
                                                                <select name="religion" class="form-control" id="religion" required>
                                                                    <option value="">:: Pilih Agama</option>
                                                                    <option value="Buddha">Buddha</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                    <option value="Islam">Islam</option>
                                                                    <option value="Katolik">Katolik</option>
                                                                    <option value="Khonghucu">Khonghucu</option>
                                                                    <option value="Protestan">Protestan</option>
                                                                </select>
                                                            </div>
                                                        </div>		
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Jenis Kelamin</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="gender" value="Pria" {{ $user->gender == 'Pria' ? 'checked' : '' }}> Pria
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="gender" value="Wanita" {{ $user->gender == 'Wanita' ? 'checked' : '' }}> Wanita
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Kewarganegaraan</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="nationality" value="WNI" {{ $user->hasRegistrant->nationality == 'WNI' ? 'checked' : '' }}> WNI
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="nationality" value="WNA" {{ $user->hasRegistrant->nationality == 'WNA' ? 'checked' : '' }}> WNA
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>					   							   							   							   
                                                    </div>
                                                    <div class="row">					   					   
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" placeholder="Masukkan email ..." value="{{ $user->email }}" required>
                                                            </div>
                                                        </div>							   
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>No. Handphone</label>
                                                                <input type="text" class="form-control" name="phone_number" placeholder="Masukkan handphone ..." value="{{ $user->phone_number }}" required>
                                                            </div>
                                                        </div>							   
                                                    </div>
                                                    <div class="row">					   
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Negara</label>
                                                                <select name="country" class="form-control" id="country" required>
                                                                    <option value="">:: Pilih Negara</option>
                                                                    <option value="Indonesia" selected>Indonesia</option>
                                                                </select>
                                                            </div>
                                                        </div>						   
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Provinsi</label>
                                                                <select class="form-control provinsi" type="text" placeholder="Provinsi" name="id_provinsi" required>
                                                                    <option value="">:: Pilih Provinsi</option>
                                                                    @foreach($provinsi as $item)
                                                                        <option value="{{ $item->id }}" {{ $user->id_provinsi == $item->id ? 'selected' : ''}}>{{ $item->nama }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>						   						   						   
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Kabupaten</label>
                                                                <select class="form-control kabupaten" id="id_kabupaten" name="id_kabupaten" disabled>
                                                                    <option value="">:: Pilih Kabupaten / Kota</option>
                                                                    @foreach($kabupaten as $item)
                                                                        <option value="{{ $item->id }}" {{ $user->id_kabupaten == $item->id ? 'selected' : ''}}>{{ $item->nama }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>						   						   						   
                                                    </div>
                                                    <div class="row">					   
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Alamat Tetap</label>
                                                                <textarea name="stay_address" class="form-control" id="stay_address" rows="4" placeholder="Masukkan alamat tetap ..." required>{{ $user->stay_address }}</textarea>
                                                            </div>
                                                        </div>						   
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Alamat Saat Ini</label>
                                                                <textarea name="current_address" class="form-control" id="current_address" rows="4" placeholder="Masukkan alamat saat ini ..." required>{{ $user->current_address }}</textarea>
                                                            </div>
                                                        </div>						   						   						   
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 1-->

                                        <!--begin: Form Wizard Step 2-->
                                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Data Ayah</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Nama Lengkap Ayah</label>
                                                                <input type="text" class="form-control" name="father_name" placeholder="Masukkan nama lengkap ibu ..." value="{{ old('father_name') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tempat Lahir</label>
                                                                <input type="text" class="form-control" name="bornplace_father" placeholder="Masukkan tempat lahir ibu ..." value="{{ old('bornplace_father') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="form-group">
                                                                <label>Tanggal Lahir</label>
                                                                <input type="text" name="borndate_father" class="form-control datepick" id="kt_datepicker_1" placeholder="Tanggal lahir" value="{{ old('borndate_father') }}" required />
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Status Ayah</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="status_father" value="Hidup" checked> Hidup
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="status_father" value="Meninggal"> Meninggal
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Hubungan dengan Ayah</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_father" value="Kandung" checked> Ayah Kandung
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_father" value="Tiri"> Ayah Tiri
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_father" value="Angkat"> Ayah Angkat
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Pendidikan Terakhir Ayah</label>
                                                                <select name="lastedu_father" class="form-control" id="lastedu_father" required>
                                                                    <option value="">:: Pilih Pendidikan Terkahir</option>
                                                                    <option value="TK">TK</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="SMP">SMP</option>
                                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                                    <option value="Diploma">Diploma</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                            </div>
                                                        </div>	
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Pekerjaan Ayah</label>
                                                                <select name="occupation_father" class="form-control" id="occupation_father" required>
                                                                    <option value="">:: Pilih Pekerjaan</option>
                                                                    <option value="Wiraswasta">Wiraswasta</option>
                                                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                    <option value="PNS (Guru)">PNS (Guru)</option>
                                                                    <option value="PNS">PNS</option>
                                                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                                    <option value="Lainnya">Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>	
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Penghasilan Ayah</label>
                                                                <select name="income_father" class="form-control" id="income_father" required>
                                                                    <option value="">:: Pilih Penghasilan</option>
                                                                    <option value="kategory_satu">&lt; Rp. 500.000</option>
                                                                    <option value="kategory_dua">Rp. 500.000 - Rp. 1.000.000</option>
                                                                    <option value="kategory_tiga">Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                    <option value="kategory_empat">Rp. 2.000.000 - Rp. 5.000.000</option>
                                                                    <option value="kategory_lima">&gt; Rp. 5.000.000</option>
                                                                </select>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-heading kt-heading--md">Data Ibu</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Nama Lengkap Ibu</label>
                                                                <input type="text" class="form-control" name="mother_name" placeholder="Masukkan nama lengkap ibu ..." value="{{ old('mother_name') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tempat Lahir</label>
                                                                <input type="text" class="form-control" name="bornplace_mother" placeholder="Masukkan tempat lahir ibu ..." value="{{ old('bornplace_mother') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="form-group">
                                                                <label>Tanggal Lahir</label>
                                                                <input type="text" name="borndate_mother" class="form-control datepick" id="kt_datepicker_1" placeholder="Tanggal lahir" value="{{ old('borndate_mother') }}" required/>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Status Ibu</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="status_mother" value="Hidup" checked> Hidup
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="status_mother" value="Meninggal"> Meninggal
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Hubungan dengan Ibu</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_mother" value="Kandung" checked> Ibu Kandung
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_mother" value="Tiri"> Ibu Tiri
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_mother" value="Angkat"> Ibu Angkat
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Pendidikan Terakhir Ibu</label>
                                                                <select name="lastedu_mother" class="form-control" id="lastedu_mother" required>
                                                                    <option value="">:: Pilih Pendidikan Terkahir</option>
                                                                    <option value="TK">TK</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="SMP">SMP</option>
                                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                                    <option value="Diploma">Diploma</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                            </div>
                                                        </div>	
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Pekerjaan Ibu</label>
                                                                <select name="occupation_mother" class="form-control" id="occupation_mother" required>
                                                                    <option value="">:: Pilih Pekerjaan</option>
                                                                    <option value="Wiraswasta">Wiraswasta</option>
                                                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                    <option value="PNS (Guru)">PNS (Guru)</option>
                                                                    <option value="PNS">PNS</option>
                                                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                                    <option value="Lainnya">Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>	
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Penghasilan Ibu</label>
                                                                <select name="income_mother" class="form-control" id="income_mother" required>
                                                                    <option value="">:: Pilih Penghasilan</option>
                                                                    <option value="kategory_satu">&lt; Rp. 500.000</option>
                                                                    <option value="kategory_dua">Rp. 500.000 - Rp. 1.000.000</option>
                                                                    <option value="kategory_tiga">Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                    <option value="kategory_empat">Rp. 2.000.000 - Rp. 5.000.000</option>
                                                                    <option value="kategory_lima">&gt; Rp. 5.000.000</option>
                                                                </select>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-heading kt-heading--md">Data Saudara</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div class="form-group">
                                                                <label>Anak Ke</label>
                                                                <input type="text" class="form-control" name="number_son" placeholder="Anak ke ..." value="{{ old('father_name') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Status Anak</label>
                                                                <div class="kt-radio-inline mt-2">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_son" value="Kandung" checked> Anak Kandung
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="relation_son" value="Tiri"> Anak Tiri
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-group">
                                                                <label>Jumlah Saudara Kandung</label>
                                                                <input type="text" class="form-control" name="sibling_count" placeholder="Saudara kandung ..." value="{{ old('sibling_count') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-group">
                                                                <label>Jumlah Saudara Tiri</label>
                                                                <input type="text" class="form-control" name="step_count" placeholder="Saudara tiri ..." value="{{ old('step_count') }}" required>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 2-->
                                        
                                        <!--begin: Form Wizard Step 2-->
                                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Jenjang SD</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nama Sekolah</label>
                                                                <input type="text" class="form-control" name="sd_name" placeholder="Masukkan nama sekolah ..." value="{{ old('sd_name') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tahun Lulus</label>
                                                                <input type="text" class="form-control" name="gradaute_year" placeholder="Masukkan tahun lulus ..." value="{{ old('gradaute_year') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nilai Rata-Rata Ijazah</label>
                                                                <input type="text" class="form-control" name="sum_certificate" placeholder="Masukkan nilai rata-rata ..." value="{{ old('bornplace_father') }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="form-group">
                                                                <label>File Browser</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="form-group">
                                                                <label>Gambar Pratinjau</label>
                                                                <div class="form-group form-group-last text-center">
                                                                    <div class="alert alert-secondary">
                                                                        <div class="alert-text">
                                                                            <img src="https://3.bp.blogspot.com/-kUyBwZFRxOQ/Ws-Z4TQN0CI/AAAAAAAAN7I/Rd6LLu2J5VsxUd5Loo-xXVDbygHg8ZYegCLcBGAs/s1600/012%2BBLANGKO%2BIJAZAH%2BSMA%2BIPA%2B%2528K13%2529%2BTAHUN%2B2018.png" alt="Gambar Pratinjau" width="100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-heading kt-heading--md">Jenjang SMP</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nama Sekolah</label>
                                                                <input type="text" class="form-control" name="father_name" placeholder="Masukkan nama sekolah ..." value="{{ old('father_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tahun Lulus</label>
                                                                <input type="text" class="form-control" name="father_name" placeholder="Masukkan tahun lulus ..." value="{{ old('father_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nilai Rata-Rata Ijazah</label>
                                                                <input type="text" class="form-control" name="bornplace_father" placeholder="Masukkan nilai rata-rata ..." value="{{ old('bornplace_father') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="form-group">
                                                            <label>File Browser</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-group">
                                                            <label>Gambar Pratinjau</label>
                                                            <div class="form-group form-group-last text-center">
                                                                <div class="alert alert-secondary">
                                                                    <div class="alert-text">
                                                                        <img src="https://3.bp.blogspot.com/-kUyBwZFRxOQ/Ws-Z4TQN0CI/AAAAAAAAN7I/Rd6LLu2J5VsxUd5Loo-xXVDbygHg8ZYegCLcBGAs/s1600/012%2BBLANGKO%2BIJAZAH%2BSMA%2BIPA%2B%2528K13%2529%2BTAHUN%2B2018.png" alt="Gambar Pratinjau" width="100%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-heading kt-heading--md">Jenjang SMA</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Nama Sekolah</label>
                                                                <input type="text" class="form-control" name="father_name" placeholder="Masukkan nama sekolah ..." value="{{ old('father_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label>Jurusan</label>
                                                                <div class="kt-radio-inline mt-2 text-center">
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="major" value="IPA" checked> IPA
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="major" value="IPS"> IPS
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-radio">
                                                                        <input type="radio" name="major" value="Bahasa"> Bahasa
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Tahun Lulus</label>
                                                                <input type="text" class="form-control" name="father_name" placeholder="Masukkan tahun lulus ..." value="{{ old('father_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nilai Rata-Rata Ijazah</label>
                                                                <input type="text" class="form-control" name="bornplace_father" placeholder="Masukkan nilai rata-rata ..." value="{{ old('bornplace_father') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Nilai Ujian Nasional</label>
                                                                <input type="text" class="form-control" name="bornplace_father" placeholder="Masukkan nilai ujian nasional ..." value="{{ old('bornplace_father') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="form-group">
                                                                <label>File Browser</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="form-group">
                                                                <label>Gambar Pratinjau</label>
                                                                <div class="form-group form-group-last text-center">
                                                                    <div class="alert alert-secondary">
                                                                        <div class="alert-text">
                                                                            <img src="https://3.bp.blogspot.com/-kUyBwZFRxOQ/Ws-Z4TQN0CI/AAAAAAAAN7I/Rd6LLu2J5VsxUd5Loo-xXVDbygHg8ZYegCLcBGAs/s1600/012%2BBLANGKO%2BIJAZAH%2BSMA%2BIPA%2B%2528K13%2529%2BTAHUN%2B2018.png" alt="Gambar Pratinjau" width="100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 2-->

                                        <!--begin: Form Wizard Step 4-->
                                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading--md">Pilih Program Studi</div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v4__form">
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Program</label>
                                                                <select name="religion" class="form-control" id="religion">
                                                                    <option value="">:: Pilih Program</option>
                                                                    <option value="Regular">Regular</option>
                                                                    <option value="Karyawan">Karyawan</option>
                                                                    <option value="WNA">WNA (Asing)</option>
                                                                </select>
                                                                @if($errors->has('gender'))
                                                                    <div id="gender-error" class="error invalid-feedback">{{ $errors->first('gender') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Jalur Registrasi</label>
                                                                <select name="religion" class="form-control" id="religion">
                                                                    <option value="">:: Pilih Jalur</option>
                                                                    <option value="SPMB">SPMB</option>
                                                                    <option value="Mandiri">Mandiri</option>
                                                                </select>
                                                            </div>
                                                        </div>						   
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label>Program Studi</label>
                                                                <select name="religion" class="form-control" id="religion">
                                                                    <option value="">:: Pilih Program Studi</option>
                                                                    <option value="Penyiaran dan Komunikasi Digital">Penyiaran dan Komunikasi Digital</option>
                                                                    <option value="Manajemen Kontemporer">Manajemen Kontemporer</option>
                                                                    <option value="Akuntansi dan Perpajakan">Akuntansi dan Perpajakan</option>
                                                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                                                </select>
                                                                @if($errors->has('gender'))
                                                                    <div id="gender-error" class="error invalid-feedback">{{ $errors->first('gender') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>						   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="kt-checkbox-single">
                                                        <label class="kt-checkbox">
                                                            <input type="checkbox"> Dengan mencentang <i>checkbox</i> ini, maka data yang telah anda masukkan adalah benar.
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-last">
                                                <div class="alert alert-secondary" role="alert">
                                                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                                    <div class="alert-text txt-error">
                                                        Sebelum <i>submit</i> pastikan semua data yang telah anda masukkan sesuai, karena data yang telah anda <i>submit</i> tidak bisa diubah kembali.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 4-->

                                        <!--begin: Form Actions -->					
                                        <div class="kt-form__actions">
                                            <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                                Previous
                                            </div>
                                            <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" type="submit">
                                                Submit
                                            </button>
                                            <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                                Next Step
                                            </div>
                                        </div>		
                                        <!--end: Form Actions -->
                                    </form>			
                                    <!--end: Form Wizard Form-->
                                </div>
                            </div>
                        </div>
                    </div>
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
<script src="{{ asset('assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/demo1/pages/wizard/wizard-4.js?') .time() }}" type="text/javascript"></script>

<script>
    var URL = '{{ url('') }}';
    $('.datepick').datepicker({
        todayHighlight: true,
        autoclose: true
    });
    $('.provinsi').change(function () {
        const id = $(this).val();
        $('.kabupaten').empty();
        const option = '<option value="">:: Pilih Kabupaten / Kota</option>';
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