<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Model\Provinsi;
use App\Model\Kabupaten;
use App\Model\Registrant;
use App\User;

class RegistrationController extends Controller
{
    public function index() {
        return 'masuk mahasiswa';
    }

    public function form_create_account() {
        $data['provinsi'] = Provinsi::where('status', true)->get();
        return view('students.create-account', $data);
    }

    public function do_create_account(Request $request) {
        // return $request->all();
        try {
            $validator = Validator::make($request->all(),
                [
                    'username' => 'required|min:6|unique:users',
                    'password' => 'required|min:6',
                    'password_confirmation' => 'required|same:password',
                    'matchname_identity' => 'required',
                    'matchname_certificate' => 'required',
                    'identity_number' => 'required',
                    'nationality' => 'required',
                    'bornplace' => 'required',
                    'borndate' => 'required',
                    'country' => 'required',
                    'id_provinsi' => 'required',
                    'id_kabupaten' => 'required',
                    'stay_address' => 'required',
                    'phone_number' => 'required',
                    'email' => 'required|email|unique:users',
                ],
                [
                    'username.required' => 'Username tidak boleh kosong',
                    'username.min' => 'Username minimal 6 karakter',
                    'username.unique' => 'Username sudah pernah digunakan, coba username yang lain',
                    'password.required' => 'Password tidak boleh kosong',
                    'password.min' => 'Password minimal 6 karakter',
                    'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong',
                    'password_confirmation.same' => 'Password dan konfirmasi password harus sama',
                    'matchname_identity.required' => 'Nama yang sesuai identitas tidak boleh kosong',
                    'matchname_certificate.required' => 'Nama yang sesuai ijazah tidak boleh kosong',
                    'identity_number.required' => 'Nomor identitas tidak boleh kosong',
                    'nationality.required' => 'Pilih kewarganegaraan',
                    'bornplace.required' => 'Tempat lahir tidak boleh kosong',
                    'borndate.required' => 'Tanggal lahir tidak boleh kosong',
                    'country.required' => 'Pilih negara',
                    'id_provinsi.required' => 'Pilih provinsi',
                    'id_kabupaten.required' => 'Pilih kabupaten',
                    'stay_address.required' => 'Alamat tetap tidak boleh kosong',
                    'phone_number.required' => 'Nomor handphone tidak boleh kosong',
                    'email.required' => 'Email tidak boleh kosong',
                    'email.email' => 'Masukkan email dengan benar',
                    'email.unique' => 'Email sudah terdaftar, coba email yang lain',
                ]
            );
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data_user = [
                'fullname' => $request->matchname_identity,
                'username' => strtolower($request->username),
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'gender' => $request->gender,
                'born_place' => $request->bornplace,
                'born_date' => Carbon::parse($request->borndate),
                'phone_number' => $request->phone_number,
                'stay_address' => $request->stay_address,
                'country' => $request->country,
                'id_provinsi' => $request->id_provinsi,
                'id_kabupaten' => $request->id_kabupaten,
            ];

            $user = User::create($data_user);
            $user->syncRoles(2);

            $data_registrar = [
                'user_id' => $user->id,
                'identity_type' => $request->identity_type,
                'identity_number' => $request->identity_number,
                'matchname_identity' => $request->matchname_identity,
                'matchname_certificate' => $request->matchname_certificate,
                'religion' => $request->religion,
                'nationality' => $request->nationality,
            ];
            
            $registrant = Registrant::create($data_registrar);
            if(!$registrant->exists) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            Alert::success('Data Tersimpan', 'Silahakan login dengan akun yang telah anda buat!');
            return redirect()->route('login');
        } catch (\Exception $e) {
            return $e;
            // Alert::error('Error', $e->getMessage());
            // return redirect(route($this->route_index));
        }
    }

    public function form_register() {
        $data['provinsi'] = Provinsi::where('status', true)->get();
        $data['kabupaten'] = Kabupaten::where('status', true)->get();
        $data['user'] = User::find(\Auth::user()->id);

        return view('students.registration', $data);
    }

    public function do_register(Request $request) {
        return $request->all();
        // return 'view(do register)';
    }
}
