@extends('layouts.app')

@section('title')
    {{ config('app.name', 'Brainloka') }} | {{ count($current_menu) > 0 ? $current_menu[count($current_menu) - 1] : 'Role' }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-shield"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Detail Role
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <fieldset disabled="disabled">
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section">
                                    <h3 class="kt-section__title kt-margin-b-20">
                                        Informasi Role:
                                    </h3>
                                    <div class="kt-section__content">
                                        <h5>Nama Role : {{ $detail->name }}</h5>
                                        <h5>Nama Guard : {{ $detail->guard_name }}</h5>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-xl"></div>
                                <div class="kt-section">
                                    <h3 class="kt-section__title">
                                        Hak Akses Role
                                    </h3>
                                    <div class="kt-section__content">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th width="30%">Fitur <i class="text-muted">( nama menu )</i></th>
                                                <th>Read</th>
                                                <th>Create</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($features as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <span class="kt-switch kt-switch--sm kt-switch--icon">
                                                            <label>
                                                                <input type="checkbox" name="permission[]" {{ ($item->read) ? 'checked' : '' }} value="{{ $item->prefix_permission . '-read' }}">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="kt-switch kt-switch--sm kt-switch--icon">
                                                            <label>
                                                                <input type="checkbox" name="permission[]" {{ ($item->create) ? 'checked' : '' }} value="{{ $item->prefix_permission . '-create' }}">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="kt-switch kt-switch--sm kt-switch--icon">
                                                            <label>
                                                                <input type="checkbox" name="permission[]" {{ ($item->update) ? 'checked' : '' }} value="{{ $item->prefix_permission . '-update' }}">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="kt-switch kt-switch--sm kt-switch--icon">
                                                            <label>
                                                                <input type="checkbox" name="permission[]" {{ ($item->delete) ? 'checked' : '' }} value="{{ $item->prefix_permission . '-delete' }}">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('roles') }}" class="btn btn-secondary btn-sm"><i class="fa fa-chevron-left"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
@endsection
