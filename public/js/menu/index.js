const menuDetail = function (id) {
    const URL = window.location.href.split('#')[0];
    $.ajax({
        type: "GET",
        url: URL + '/' + id ,
        cache: false,
        error: function(err) {
            swal.fire({
                title: 'Error',
                text: 'Maaf, terjadi kesalahan, silahkan coba lagi!',
                type: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                confirmButtonClass: "btn btn-brand"
            });
        },
        success: function(response){
            var menuType = '';
            if(response.menu_type == 'divider-menu') {
                menuType = 'Divider';
            } else if(response.menu_type == 'group-menu') {
                menuType = 'Group';
            } else if(response.menu_type == 'menu') {
                menuType = 'Menu';
            }
            $('.detail-type').html(menuType);
            $('#divider-read').modal('show');
            $('.detail-name').html(response.name);
            $('.detail-slug').html(response.slug);
            $('.detail-route_name').html(response.route_name);
            $('.detail-prefix_permission').html(response.prefix_permission);
            $('.detail-description').html(response.description);
            if(response.status == true) {
                $('.detail-status').html('aktif');
                $('.detail-status').removeClass('kt-badge--danger');
                $('.detail-status').addClass('kt-badge--success');
            } else {
                $('.detail-status').html('tidak aktif');
                $('.detail-status').removeClass('kt-badge--success');
                $('.detail-status').addClass('kt-badge--danger');
            }
        }
    });
}


const menuUpdate = function (id) {
    const URL = window.location.href.split('#')[0];
    $.ajax({
        type: "GET",
        url: URL + '/' + id ,
        cache: false,
        error: function(err) {
            swal.fire({
                title: 'Error',
                text: 'Maaf, terjadi kesalahan, silahkan coba lagi!',
                type: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                confirmButtonClass: "btn btn-brand"
            });
        },
        success: function(response){
            $('#menu-update').modal('show');
            $('.update-id').val(response.id);
            $('.update-name').val(response.name);
            $('.update-slug').val(response.slug);
            $('.update-route_name').val(response.route_name);
            $('.update-prefix_permission').val(response.prefix_permission);
            $('.update-description').val(response.description);
            $('.update-menu_type').val(response.menu_type);
            $('.update-id_parent').val(response.id_parent);
            if(response.status == true) {
                $('.update-status').prop('checked', true);
            } else {
                $('.update-status').prop('checked', false);
            }
        }
    });
}

jQuery(document).ready(function() {
    $.validator.addMethod( 'slug', function( value, element ) {
        return this.optional( element ) || /^[A-Za-z0-9-\d-._]+$/.test( value );
    }, "Letters, numbers, dash, dot and underscores only please" );

    $( '.form-divider' ).validate({
        // define validation rules
        rules: {
            name: {
                required: true
            },
            slug: {
                required: true,
                slug: true
            },
            route_name: {
                required: true,
                slug: true
            },
            prefix_permission: {
                required: true,
                lettersonly: true
            }
        },

        //display error alert on form submit
        focusInvalid: true,
        invalidHandler: function(event, validator) {
            event.preventDefault();
        },

        submitHandler: function (form) {
            form.submit();
        }
    });

    $('.delete-menu').click(function () {
        let URL = window.location.href.split('#')[0];
        URL = URL + '-delete/' + $(this).data('id');
        swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data tidak dapat lagi dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batal!',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
        }).then(function(result) {
            if (result.value) {
                window.location.href = URL;
            }
        });
    });
});