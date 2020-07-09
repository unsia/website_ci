<?php

namespace App\Http\Controllers\Admin;

use App\Model\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{
    /** don't change this */
    public $prefix_permission = 'role';
    public $route_index = 'roles';

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['roles'] = Role::all();
        return view('roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['features'] = Feature::where('menu_type', 'menu')->where('prefix_permission', '!=', 'beranda')->get();
        return view('roles.create', $data);
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
        $data['detail'] = Role::findOrFail($id);
        $data['features'] = Feature::where('menu_type', 'menu')->where('prefix_permission', '!=', 'beranda')->get();
        $data['features']->transform(function ($item) use ($data) {
            $item->{'read'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-read');
            $item->{'create'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-create');
            $item->{'update'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-update');
            $item->{'delete'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-delete');
            return $item;
        });
        return view('roles.show', $data);
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
            Alert::error('Maaf', 'Data tidak ditemukan!');
            return redirect(route($this->route_index));
        }
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['detail'] = Role::findOrFail($id);
        $data['features'] = Feature::where('menu_type', 'menu')->where('prefix_permission', '!=', 'beranda')->get();
        $data['features']->transform(function ($item) use ($data) {
            $item->{'read'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-read');
            $item->{'create'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-create');
            $item->{'update'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-update');
            $item->{'delete'} = $data['detail']->hasPermissionTo($item->prefix_permission . '-delete');
            return $item;
        });
        return view('roles.edit', $data);
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
                'name' => 'required|min:3|unique:roles',
                'guard_name' => 'required|min:3'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = [
                'name' => strtolower(request('name')),
                'guard_name' => request('guard_name')
            ];
            $roleFeature = Role::create($data);
            if(!$roleFeature->exists) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            if($request->has('permission'))
            {
                $roleFeature->syncPermissions(request('permission'));
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
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|unique:roles,name,' . $id,
                'guard_name' => 'required|min:3'
            ]);
            if($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            $dataToUpdate = Role::findOrFail($id);
            $data = [
                'name' => request('name'),
                'guard_name' => request('guard_name')
            ];
            if(!$dataToUpdate->update($data)) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            foreach ($dataToUpdate->getAllPermissions() as $permission)
            {
                $dataToUpdate->revokePermissionTo($permission);
            }
            if($request->has('permission'))
            {
                $dataToUpdate->syncPermissions(request('permission'));
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
        if(Role::destroy(request('id'))) {
            Alert::success('Success', 'Data telah terhapus data!');
        } else {
            Alert::error('Error', 'Maaf terjadi kesalahan saat menghapus data!');
        }
        return Redirect::back();
    }
}
