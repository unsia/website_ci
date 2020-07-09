<?php

use Illuminate\Database\Seeder;
use App\Model\Feature;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** create roles */
        $developer = Role::create(['name' => 'developer']);
        $siswa = Role::create(['name' => 'mahasiswa']);
        $tutor = Role::create(['name' => 'tutor']);
        $admin = Role::create(['name' => 'admin']);

        /** create features group */
        $dashboard = Feature::create([
            'name' => 'Beranda',
            'slug' => 'home',
            'route_name' => 'home',
            'menu_type' => 'menu',
            'prefix_permission' => 'beranda',
            'description' => 'Menu Beranda',
            'id_parent' => 0
        ]);

        $configuration = Feature::create([
            'name' => 'Pengaturan',
            'slug' => 'pengaturan',
            'route_name' => 'pengaturan',
            'menu_type' => 'divider-menu',
            'prefix_permission' => 'pengaturan',
            'description' => 'divider pengaturan',
            'id_parent' => 0
        ]);

        $userManagementGroup = Feature::create([
            'name' => 'Manajemen User',
            'slug' => 'manajemen-user',
            'route_name' => 'manajemen-user',
            'menu_type' => 'group-menu',
            'prefix_permission' => 'manajemenuser',
            'description' => 'group menu manajemen user',
            'id_parent' => $configuration->id
        ]);

        $featureManagementGroup = Feature::create([
            'name' => 'Manajemen Menu',
            'slug' => 'manajemen-menu',
            'route_name' => 'manajemen-menu',
            'menu_type' => 'group-menu',
            'prefix_permission' => 'manajemenmenu',
            'description' => 'group menu manajemen menu',
            'id_parent' => $configuration->id
        ]);


        /** create features */
        $userList = Feature::create([
            'name' => 'User',
            'slug' => 'users',
            'route_name' => 'users',
            'prefix_permission' => 'user',
            'description' => 'menu daftar user',
            'id_parent' => $userManagementGroup->id
        ]);
        $userCreate = Permission::create(['name'=> $userList->prefix_permission . '-create']);
        $userRead = Permission::create(['name'=> $userList->prefix_permission . '-read']);
        $userUpdate = Permission::create(['name'=> $userList->prefix_permission . '-update']);
        $userDelete = Permission::create(['name'=> $userList->prefix_permission . '-delete']);

        $roleList = Feature::create([
            'name' => 'Role',
            'slug' => 'roles',
            'route_name' => 'roles',
            'prefix_permission' => 'role',
            'description' => 'menu list roles',
            'id_parent' => $userManagementGroup->id
        ]);
        $roleCreate = Permission::create(['name'=> $roleList->prefix_permission . '-create']);
        $roleRead = Permission::create(['name'=> $roleList->prefix_permission . '-read']);
        $roleUpdate = Permission::create(['name'=> $roleList->prefix_permission . '-update']);
        $roleDelete  =Permission::create(['name'=> $roleList->prefix_permission . '-delete']);

        $featureList = Feature::create([
            'name' => 'Menu',
            'slug' => 'menu',
            'route_name' => 'slug',
            'prefix_permission' => 'menu',
            'description' => 'menu daftar menu',
            'id_parent' => $featureManagementGroup->id
        ]);
        $featureCreate = Permission::create(['name'=> $featureList->prefix_permission . '-create']);
        $featureRead = Permission::create(['name'=> $featureList->prefix_permission . '-read']);
        $featureUpdate = Permission::create(['name'=> $featureList->prefix_permission . '-update']);
        $featureDelete = Permission::create(['name'=> $featureList->prefix_permission . '-delete']);

        /** assign permissions to role */
        $developer->syncPermissions([$userCreate, $userRead, $userUpdate, $userDelete, $roleCreate, $roleRead, $roleUpdate, $roleDelete, $featureCreate, $featureRead, $featureUpdate, $featureDelete]);
        $admin->syncPermissions([$userRead, $roleRead, $featureRead, $featureUpdate]);


        /** create users */
        $userDeveloper = User::create([
            'fullname' => 'developer',
            'username'=> 'developer',
            'email' => 'developer@admin.com',
            'password' => Hash::make('developer')
        ]);
        $userDeveloper->syncRoles([$developer]);

        $userAdmin = User::create([
            'fullname' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);
        $userAdmin->syncRoles([$admin]);

        $userSiswa = User::create([
            'fullname' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@admin.com',
            'password' => Hash::make('mahasiswa')
        ]);
        $userSiswa->syncRoles([$siswa]);

        $userTutor = User::create([
            'fullname' => 'tutor',
            'username' => 'tutor',
            'email' => 'tutor@admin.com',
            'password' => Hash::make('tutor')
        ]);
        $userTutor->syncRoles([$tutor]);
    }
}
