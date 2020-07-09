<!--DIVIDER MODAL-->
@can('menu-create')
    <!--begin::Modal-->
    <div class="modal fade" id="menu-baru" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form class="form-divider" method="POST" action="{{ route('menu.create') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><span class="create-type">Menu</span> Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Nama:</label>
                                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nama" value="{{ old('name') }}">
                                        @if($errors->has('name'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Slug:</label>
                                        <input type="text" name="slug" class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" placeholder="Slug" value="{{ old('slug') }}">
                                        @if($errors->has('slug'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Nama Route:</label>
                                        <input type="text" name="route_name" class="form-control {{ $errors->has('route_name') ? 'is-invalid' : '' }}" placeholder="Nama Route" value="{{ old('route_name') }}">
                                        @if($errors->has('route_name'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('route_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Prefix Permission:</label>
                                        <input type="text" name="prefix_permission" class="form-control {{ $errors->has('prefix_permission') ? 'is-invalid' : '' }}" placeholder="Prefix Permission" value="{{ old('prefix_permission') }}">
                                        @if($errors->has('prefix_permission'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('prefix_permission') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Tipe:</label>
                                        <select class="form-control {{ $errors->has('menu_type') ? 'is-invalid' : '' }}" name="menu_type">
                                            <option value="divider-menu" {{ old('menu_type') == 'divider-menu' ? 'selected' : '' }}>Divider</option>
                                            <option value="group-menu" {{ old('menu_type') == 'group-menu' ? 'selected' : '' }}>Group</option>
                                            <option value="menu" {{ old('menu_type') == 'menu' ? 'selected' : '' }}>Menu</option>
                                        </select>
                                        @if($errors->has('menu_type'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('menu_type') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Induk Menu:</label>
                                        <select class="form-control {{ $errors->has('id_parent') ? 'is-invalid' : '' }}" name="id_parent">
                                            <option value="0" {{ old('id_parent') == 0 ? 'selected' : '' }}>tidak ada induk</option>
                                            @foreach($allMenu as $item)
                                                @if($item->menu_type != 'menu')
                                                    <option value="{{ $item->id }}" {{ old('id_parent') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                @endif
                                                @foreach($item->subMenu as $subItem)
                                                    @if($subItem->menu_type != 'menu')
                                                            <option value="{{ $subItem->id }}" {{ old('id_parent') == $subItem->id ? 'selected' : '' }}>{{ $subItem->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @if($errors->has('id_parent'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('id_parent') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="form-control-label">Deskripsi:</label>
                                        <textarea name="description" class="form-control" placeholder="Deskripsi" rows="5">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="form-control-label">Icon(SVG):</label>
                                        <textarea name="icon" class="form-control" placeholder="Icon" rows="5">{{ old('icon') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Status</label>
                                    <div class="col-3">
                                            <span class="kt-switch kt-switch--sm kt-switch--icon">
                                                <label>
                                                    <input type="checkbox" name="status" value="1" {{ old('status') && old('status') == 1 ? 'checked': ''}}><span></span>
                                                </label>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-chevron-left"></i> Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end::Modal-->
@endcan


@can('menu-update')
    <!--begin::Modal-->
    <div class="modal fade" id="menu-update" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form class="form-update" method="POST" action="{{ route('menu.update') }}">
                @csrf
                {{ method_field('PUT') }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><span class="create-type">Menu</span> Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Nama:</label>
                                        <input type="hidden" name="id" value="{{old('id')}}" class="update-id">
                                        <input type="text" name="name" class="update-name form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nama" value="{{ old('name') }}">
                                        @if($errors->has('name'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Slug:</label>
                                        <input type="text" name="slug" class="update-slug form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" placeholder="Slug" value="{{ old('slug') }}">
                                        @if($errors->has('slug'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Nama Route:</label>
                                        <input type="text" name="route_name" class="update-route_name form-control {{ $errors->has('route_name') ? 'is-invalid' : '' }}" placeholder="Nama Route" value="{{ old('route_name') }}">
                                        @if($errors->has('route_name'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('route_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Prefix Permission:</label>
                                        <input type="text" name="prefix_permission" class="update-prefix_permission form-control {{ $errors->has('prefix_permission') ? 'is-invalid' : '' }}" placeholder="Prefix Permission" value="{{ old('prefix_permission') }}" readonly>
                                        @if($errors->has('prefix_permission'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('prefix_permission') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Tipe:</label>
                                        <select class="update-menu_type form-control {{ $errors->has('menu_type') ? 'is-invalid' : '' }}" name="menu_type">
                                            <option value="divider-menu" {{ old('menu_type') == 'divider-menu' ? 'selected' : '' }}>Divider</option>
                                            <option value="group-menu" {{ old('menu_type') == 'group-menu' ? 'selected' : '' }}>Group</option>
                                            <option value="menu" {{ old('menu_type') == 'menu' ? 'selected' : '' }}>Menu</option>
                                        </select>
                                        @if($errors->has('menu_type'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('menu_type') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label">* Induk Menu:</label>
                                        <select class="update-id_parent form-control {{ $errors->has('id_parent') ? 'is-invalid' : '' }}" name="id_parent">
                                            <option value="0" {{ old('id_parent') == 0 ? 'selected' : '' }}>tidak ada induk</option>
                                            @foreach($allMenu as $item)
                                                @if($item->menu_type != 'menu')
                                                    <option value="{{ $item->id }}" {{ old('id_parent') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                @endif
                                                @foreach($item->subMenu as $subItem)
                                                    @if($subItem->menu_type != 'menu')
                                                        <option value="{{ $subItem->id }}" {{ old('id_parent') == $subItem->id ? 'selected' : '' }}>{{ $subItem->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @if($errors->has('id_parent'))
                                            <div id="name-error" class="error invalid-feedback">{{ $errors->first('id_parent') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="form-control-label">Deskripsi:</label>
                                        <textarea name="description" class="update-description form-control" placeholder="Deskripsi" rows="5">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="form-control-label">Icon(SVG):</label>
                                        <textarea name="icon" class="update-icon form-control" placeholder="Icon" rows="5">{{ old('icon') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Status</label>
                                    <div class="col-3">
                                            <span class="kt-switch kt-switch--sm kt-switch--icon">
                                                <label>
                                                    <input type="checkbox" name="status" class="update-status" value="1" {{ old('status') && old('status') == 1 ? 'checked': ''}}><span></span>
                                                </label>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-chevron-left"></i> Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end::Modal-->
@endcan

@can('menu-read')
    <!--begin::Modal-->
    <div class="modal fade" id="divider-read" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail <span class="detail-type">Divider</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td style="width: 40%; vertical-align: middle;"><span class="text-muted">Nama</span></td>
                            <td>
                                <span class="detail-name">Nama Menu</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%; vertical-align: middle;"><span class="text-muted">Slug</span></td>
                            <td>
                                <span class="detail-slug">Slug Menu</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%; vertical-align: middle;"><span class="text-muted">Nama Route</span></td>
                            <td>
                                <span class="detail-route_name">Nama Route Menu</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%; vertical-align: middle;"><span class="text-muted">Prefix Permission</span></td>
                            <td>
                                <span class="detail-prefix_permission">Prefix Permission Menu</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%; vertical-align: middle;"><span class="text-muted">Deskripsi</span></td>
                            <td>
                                <span class="detail-description">Deskripsi Menu</span>
                            </td>
                        </tr>
                        {{--<tr>--}}
                        {{--<td style="width: 40%; vertical-align: middle;"><span class="text-muted">Icon</span></td>--}}
                        {{--<td>--}}
                        {{--<span class="detail-icon">Icon Menu</span>--}}
                        {{--</td>--}}
                        {{--</tr>--}}
                        <tr>
                            <td style="width: 40%; vertical-align: middle;"><span class="text-muted">Status</span></td>
                            <td>
                                        <span class="">
                                            <span style="width: 110px;"><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill detail-status">Tidak aktif</span></span>
                                        </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-chevron-left"></i> Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
@endcan