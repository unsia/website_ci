@extends('layouts.app')

@section('title')
    {{ config('app.name', 'USA') }} | Menu
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-8">
            <div class="alert alert-light alert-elevate fade show" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">
                    Fitur ini hanya digunakan untuk developer, fitur ini hanya bisa merubah nama dan icon menu, mengaktifkan atau tidak mengaktifkan menu. Jika anda bukan developer hindari untuk merubah slug, nama route, nama prefix permission dan menghapus menu.
                    <br>
                    Informasi lebih lanjut silahkan hubungi team developer.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <!--begin:: Widgets/Application Sales-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Daftar Menu
                            <small>Berikut adalah daftar menu yang tampil pada aplikasi admin</small>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td style=" width: 30%;">Name</td>
                                    <td style=" width: 30%;">Slug</td>
                                    <td style=" width: 20%;">Status</td>
                                    <td style=" width: 20%;" class="text-center">Aksi</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allMenu as $item)
                                    <tr>
                                        <td class="align-middle">
                                            @if($item->menu_type == 'divider-menu')
                                                <span class="kt-widget11__title">{{ $item->name }}</span>
                                            @elseif($item->menu_type == 'group-menu')
                                                <span class="kt-widget11__title">
                                                    {{ $item->name }}
                                                </span>
                                            @elseif($item->menu_type == 'menu')
                                                <span class="kt-widget11__title">
                                                    {{ $item->name }}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <span class="kt-widget11__title">{{ $item->slug }}</span>
                                        </td>
                                        <td class="align-middle">
                                            @if($item->status)
                                                <span class="kt-badge kt-badge--success kt-badge--inline">Aktif</span>
                                            @else
                                                <span class="kt-badge kt-badge--danger kt-badge--inline">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span style="overflow: visible; position: relative; width: 110px;">
                                                <button type="button" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-info" onclick="menuDetail({{$item->id}})"><i class="la la-eye"></i></button>
                                                @can('menu-update')
                                                    <button type="button" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-warning" onclick="menuUpdate({{$item->id}})"><i class="la la-edit"></i></button>
                                                @endcan
                                                @can('menu-delete')
                                                    <button type="button" title="Delete" class="btn btn-sm btn-icon btn-icon-md btn-label-danger delete-menu" data-id="{{ $item->id }}"><i class="la la-trash"></i></button>
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                    @foreach($item->subMenu as $subItem)
                                        <td class="align-middle">
                                            @if($subItem->menu_type == 'group-menu')
                                                <span class="kt-widget11__title">
                                                    {{ $subItem->name }}
                                                </span>
                                            @elseif($subItem->menu_type == 'menu')
                                                <span class="kt-widget11__title">
                                                    {{ $subItem->name }}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <span class="kt-widget11__title">{{ $subItem->slug }}</span>
                                        </td>
                                        <td class="align-middle">
                                            @if($subItem->status)
                                                <span class="kt-badge kt-badge--success kt-badge--inline">Aktif</span>
                                            @else
                                                <span class="kt-badge kt-badge--danger kt-badge--inline">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span style="overflow: visible; position: relative; width: 110px;">
                                                <button type="button" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-info" onclick="menuDetail({{$subItem->id}})"><i class="la la-eye"></i></button>
                                                @can('menu-update')
                                                    <button type="button" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-warning" onclick="menuUpdate({{$subItem->id}})"><i class="la la-edit"></i></button>
                                                @endcan
                                                @can('menu-delete')
                                                    <button type="button" title="Delete" class="btn btn-sm btn-icon btn-icon-md btn-label-danger delete-menu" data-id="{{ $subItem->id }}"><i class="la la-trash"></i></button>
                                                @endcan
                                            </span>
                                        </td>
                                        </tr>
                                        @foreach($subItem->subMenu as $subSubItem)
                                            <td class="align-middle">
                                                <span class="kt-widget11__title">
                                                    {{ $subSubItem->name }}
                                                </span>
                                            </td>
                                            <td class="align-middle">
                                                <span class="kt-widget11__title">{{ $subSubItem->slug }}</span>
                                            </td>
                                            <td class="align-middle">
                                                @if($subSubItem->status)
                                                    <span class="kt-badge kt-badge--success kt-badge--inline">Aktif</span>
                                                @else
                                                    <span class="kt-badge kt-badge--danger kt-badge--inline">Tidak aktif</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <span style="overflow: visible; position: relative; width: 110px;">
                                                    <button type="button" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-info" onclick="menuDetail({{$subSubItem->id}})"><i class="la la-eye"></i></button>
                                                    @can('menu-update')
                                                        <button type="button" title="Edit details" class="btn btn-sm btn-icon btn-icon-md btn-label-warning" onclick="menuUpdate({{$subSubItem->id}})"><i class="la la-edit"></i></button>
                                                    @endcan
                                                    @can('menu-delete')
                                                        <button type="button" title="Delete" class="btn btn-sm btn-icon btn-icon-md btn-label-danger delete-menu" data-id="{{ $subSubItem->id }}"><i class="la la-trash"></i></button>
                                                    @endcan
                                                </span>
                                            </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Application Sales-->
        </div>
    </div>

@include('menu.includes.modal')
@endsection

@section('additionalAction')
    @can('menu-create')
        <a class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10 cursor" data-toggle="modal" data-target="#menu-baru">
            <i class="la la-plus"></i>
            Menu Baru
        </a>
    @endcan
@endsection


@section('extraJs')
    @if(Session::has('validator_error'))
        @if(Session::get('validator_error') == 'create')
            <script>
                $('#menu-baru').modal('show');
            </script>
        @elseif(Session::get('validator_error') == 'update')
            <script>
                $('#menu-update').modal('show');
            </script>
        @endif
    @endif
    <script src="{{ asset('js/menu/index.js?' . time()) }}" type="text/javascript"></script>
@endsection
