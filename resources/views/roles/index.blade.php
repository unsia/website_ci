@extends('layouts.app')

@section('title')
    {{ config('app.name', 'Brainloka') }} | {{ count($current_menu) > 0 ? $current_menu[count($current_menu) - 1] : 'Role' }}
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-8">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Daftar Role
                            <small>Berikut adalah daftar role pengguna</small>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <form method="POST" action="{{ route('roles.delete') }}" id="form">
                                @csrf
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid mb-0"><input type="checkbox" id="check_all">&nbsp;<span></span></label>
                                        </th>
                                        <th>Nama Role</th>
                                        <th>Nama Guard</th>
                                        <th>Modifikasi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $key => $role)
                                        <tr>
                                            <th scope="row" class="align-middle">
                                                <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid mb-0"><input type="checkbox" name="id[]" onclick="check_checked()" value="{{ $role->id }}">&nbsp;<span></span></label>
                                                {{ $key + 1 }}
                                            </th>
                                            <td class="align-middle">{{ $role->name }}</td>
                                            <td class="align-middle">{{ $role->guard_name }}</td>
                                            <td class="align-middle">{{ $role->updated_at }}</td>
                                            <td class="align-middle text-center">
                                                <span style="overflow: visible; position: relative; width: 110px;">
                                                    <a href="{{ route('roles.show', $role->id) }}" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-info">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    @can('role-update')
                                                        <a href="{{ route('roles.edit', $role->id) }}" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-warning">
                                                            <i class="la la-edit"></i>
                                                        </a>
                                                    @endcan
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalAction')
    @can('role-create')
        <a href="{{ route('roles.create') }}" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
            <i class="la la-plus"></i>
            Role Baru
        </a>
    @endcan
    @can('role-delete')
        <button type="button" id="delete_button" title="Delete" class="btn btn-label-danger btn-bold btn-sm btn-icon-h kt-margin-l-10" style="display: none;">
            <i class="la la-trash"></i> Hapus
        </button>
    @endcan
@endsection

@section('extraJs')
    <script>
        $('#delete_button').click(function () {
            remove('form');
        });
    </script>
@endsection
