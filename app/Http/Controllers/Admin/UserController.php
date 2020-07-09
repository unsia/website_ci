<?php

namespace App\Http\Controllers\Admin;

use App\Model\Kabupaten;
use App\Model\Provinsi;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /** don't change this */
    public $prefix_permission = 'user';
    public $destinationDisk = 'user';
    public $route_index = 'users';

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['users'] = User::with('roles')->orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['provinsi'] = Provinsi::where('status', true)->get();
        $data['roles'] = Role::all();
        return view('users.create', $data);
    }

    /**
     * Show the information of a resource.
     * @param Request $request
     * @param bool $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function show(Request $request, $id = false)
    {
        if(!$id)
        {
            return redirect(route($this->route_index));
        }
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['detail'] = User::with(['roles', 'kabupaten', 'provinsi'])->findOrFail($id);
        return view('users.show', $data);
    }

    /**
     * Show the form for updating resource.
     * @param Request $request
     * @param bool $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit(Request $request, $id = false)
    {
        if(!$id)
        {
            return redirect(route($this->route_index));
        }
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['provinsi'] = Provinsi::where('status', true)->get();
        $data['roles'] = Role::all();
        $data['detail'] = User::with(['roles', 'kabupaten', 'provinsi'])->findOrFail($id);
        $data['kabupaten'] = [];
        if($data['detail']->provinsi) {
            $data['kabupaten'] = Kabupaten::where('id_provinsi', $data['detail']->provinsi->id)->where('status', true)->get();
        }
        return view('users.edit', $data);
    }

    /**
     * Create the specified resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required|min:3',
                'akun' => 'required|min:3|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'min:6|required_with:confirm_password|same:confirm_password',
                'foto' => 'max:10240'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = [
                'nama' => strtolower(request('nama')),
                'akun' => request('akun'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'kelamin' => request('kelamin'),
                'tempat_lahir' => request('tempat_lahir'),
                'tanggal_lahir' => Carbon::parse(request('tanggal_lahir')),
                'telepon' => request('telepon'),
                'alamat' => request('alamat'),
                'id_kabupaten' => request('id_kabupaten'),
                'id_provinsi' => request('id_provinsi')
            ];
            if($request->hasFile('foto')) {
                $file = $request->file('foto');
                $fileName = request('akun') . '.' . $file->getClientOriginalExtension();
                $destination = $this->destinationDisk . '/' . request('akun') . '/';
                $uploadedFile = upload_file($file, $fileName, $destination);
                $createdThumbnail = resize_crop_image(320, 320, $uploadedFile['path'], $destination, $fileName);
                $data['foto'] = $fileName;
                $data['url_foto'] = $createdThumbnail['url'];
            }
            $user = User::create($data);
            if(!$user->exists) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            if($request->has('id_role'))
            {
                $user->syncRoles(request('id_role'));
            }
            Alert::success('Sukses', 'Data telah tersimpan!');
            return redirect(route($this->route_index));
        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
            return redirect(route($this->route_index));
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param bool $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id = false)
    {
        if(!$id)
        {
            Alert::error('Maaf', 'Data tidak ditemukan!');
            return redirect(route($this->route_index));
        }
        try {
            $roles = [
                'nama' => 'required|min:3',
//                'akun' => 'required|min:3|unique:users,akun,' . $id,
//                'email' => 'required|email|unique:users,email,' . $id,
                'foto' => 'max:10240'
            ];
            if($request->has('password') && request('password') != null) {
                $roles['password'] = 'min:6|required_with:confirm_password|same:confirm_password';
            }
            $validator = Validator::make($request->all(), $roles);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $dataToUpdate = User::with('roles')->findOrFail($id);
            $data = [
                'nama' => strtolower(request('nama')),
//                'akun' => request('akun'),
//                'email' => request('email'),
                'kelamin' => request('kelamin'),
                'tempat_lahir' => request('tempat_lahir'),
                'tanggal_lahir' => Carbon::parse(request('tanggal_lahir')),
                'telepon' => request('telepon'),
                'alamat' => request('alamat'),
                'id_kabupaten' => request('id_kabupaten'),
                'id_provinsi' => request('id_provinsi')
            ];
            if($request->has('password')) {
                $data['password'] = Hash::make(request('password'));
            }
            if($request->hasFile('foto')) {
                $file = $request->file('foto');
                $fileName = $dataToUpdate->akun . '.' . $file->getClientOriginalExtension();
                $destination = $this->destinationDisk . '/' . $dataToUpdate->akun . '/';
                $uploadedFile = upload_file($file, $fileName, $destination);
                $createdThumbnail = resize_crop_image(320, 320, $uploadedFile['path'], $destination, $fileName);
                $data['foto'] = $fileName;
                $data['url_foto'] = $createdThumbnail['url'];
            }
            if(!$dataToUpdate->update($data)) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            if($request->has('id_role'))
            {
                foreach ($dataToUpdate->roles as $role)
                {
                    $dataToUpdate->removeRole($role);
                }
                $dataToUpdate->syncRoles(request('id_role'));
            }
            Alert::success('Sukses', 'Data telah tersimpan!');
            return Redirect::back();
        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
            return Redirect::back();
        }
    }

    public function delete(Request $request)
    {
        if(User::destroy(request('id'))) {
            Alert::success('Success', 'Data telah terhapus data!');
        } else {
            Alert::error('Error', 'Maaf terjadi kesalahan saat menghapus data!');
        }
        return Redirect::back();
    }
}
