<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Feature;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;

class MenuController extends Controller
{
    /** don't change this */
    public $prefix_permission = 'menu';

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $data['current_menu'] = getCurrentMenu($this->prefix_permission);
        $data['allMenu'] = Feature::with('subMenu')->where('id_parent', 0)->get();
        return view('menu.index', $data);
    }

    public function menuDetail($id)
    {
        $allMenu = Feature::with('subMenu')->where('id_parent', 0)->get();
        $menu = Feature::with('allParent')->findOrFail($id);
        $menu->{'allMenu'} = $allMenu;
        return $menu;
    }

    /**
     * Create the specified resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function create(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'slug' => 'required|min:3|unique:features',
                'route_name' => 'required|min:3|unique:features',
                'prefix_permission' => 'required|min:3|unique:features',
            ]);
            if ($validator->fails()) {
                $request->session()->flash('validator_error', 'create');
                return Redirect::back()->withErrors($validator)->withInput();
            }
            $data = [
                'name' => request('name'),
                'slug' => request('slug'),
                'route_name' => request('route_name'),
                'prefix_permission' => request('prefix_permission'),
                'description' => (request('description')) ? request('description') : '',
                'icon' => request('icon'),
                'id_parent' => request('id_parent'),
                'menu_type' => request('menu_type'),
                'status' => request('status') ? request('status') : false
            ];
            $createFeature = Feature::create($data);
            if(!$createFeature->exists) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            Permission::create(['name'=> $createFeature->prefix_permission . '-create']);
            Permission::create(['name'=> $createFeature->prefix_permission . '-read']);
            Permission::create(['name'=> $createFeature->prefix_permission . '-update']);
            Permission::create(['name'=> $createFeature->prefix_permission . '-delete']);

            Alert::success('Sukses', 'Data telah tersimpan!');
            return Redirect::back();
        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
            return Redirect::back();
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'name' => 'required|min:3',
                'slug' => 'required|min:3|unique:features,slug,' . request('id'),
                'route_name' => 'required|min:3|unique:features,route_name,' . request('id'),
                'prefix_permission' => 'required|min:3|unique:features,prefix_permission,' . request('id'),
            ]);
            if ($validator->fails()) {
                $request->session()->flash('validator_error', 'update');
                return Redirect::back()->withErrors($validator)->withInput();
            }
            $dataToUpdate = Feature::findOrFail(request('id'));
            $data = [
                'name' => request('name'),
                'slug' => request('slug'),
                'route_name' => request('route_name'),
                'prefix_permission' => request('prefix_permission'),
                'description' => (request('description')) ? request('description') : '',
                'icon' => request('icon'),
                'id_parent' => request('id_parent'),
                'menu_type' => request('menu_type'),
                'status' => request('status') ? request('status') : false
            ];
            if(!$dataToUpdate->update($data)) {
                Alert::error('Error', 'Terjadi kesalahan saat menyimpan data, silahkan coba lagi!');
            }
            Alert::success('Sukses', 'Data telah tersimpan!');
            return Redirect::back();
        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $menu = Feature::find($id);
        $create = Permission::findByName($menu->prefix_permission . '-create');
        $read = Permission::findByName($menu->prefix_permission . '-read');
        $update = Permission::findByName($menu->prefix_permission . '-update');
        $delete = Permission::findByName($menu->prefix_permission . '-delete');
        if (Feature::destroy($id)) {
            Permission::destroy([$create->id, $read->id, $update->id, $delete->id]);
            Alert::success('Success', 'Data telah terhapus data!');
        } else {
            Alert::error('Error', 'Maaf terjadi kesalahan saat menghapus data!');
        }
        return Redirect::back();
    }
}
