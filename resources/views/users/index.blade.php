@extends('layouts.app')

@section('title')
    {{ config('app.name', 'USA') }} | {{ count($current_menu) > 0 ? $current_menu[count($current_menu) - 1] : 'Pengguna' }}
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Daftar Pengguna
                            <small>Berikut adalah daftar pengguna</small>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <form method="POST" action="{{ route('users.delete') }}" id="form">
                                @csrf
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid mb-0"><input type="checkbox" id="check_all">&nbsp;<span></span></label>
                                        </th>
                                        <th>Nama Pengguna</th>
                                        <th>Email</th>
                                        <th class="text-center">Role <i>(level)</i></th>
                                        <th>Modifikasi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $item)
                                        <tr>
                                            <th scope="row" class="align-middle">
                                                <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid mb-0"><input type="checkbox" name="id[]" onclick="check_checked()" value="{{ $item->id }}">&nbsp;<span></span></label>
                                                {{ $users->firstItem() + $key }}
                                            </th>
                                            <td class="align-middle">{{ $item->nama }}</td>
                                            <td class="align-middle">{{ $item->email }}</td>
                                            <td class="align-middle text-center">
                                                @foreach($item->roles as $key => $role)
                                                    <span class="kt-badge badge-secondary kt-font-bold kt-badge--inline">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td class="align-middle">{{ $item->updated_at }}</td>
                                            <td class="align-middle text-center">
                                            <span style="overflow: visible; position: relative; width: 110px;">
                                                <a href="{{ route('users.show', $item->id) }}" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-info">
                                                    <i class="la la-eye"></i>
                                                </a>
                                                @can('user-update')
                                                    <a href="{{ route('users.edit', $item->id) }}" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-warning">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                @endcan
                                            </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalAction')
    @can('user-create')
        <a href="{{ route('users.create') }}" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
            <i class="la la-plus"></i>
            Pengguna Baru
        </a>
    @endcan
    @can('user-delete')
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
