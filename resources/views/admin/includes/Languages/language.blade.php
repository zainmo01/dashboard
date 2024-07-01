@extends('layouts.admin')
@section('content')
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <div class="breadcrumb-item text-muted">
                    <button type="button" class="btn btn-primary add_item_btn" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_2">
                        اضافة لغة
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="app-toolbar py-3 py-lg-6 mx-10">

        <div class="py-5">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 gy-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>Name</th>
                            <th>Abbr</th>
                            <th>Local</th>
                            <th>Active</th>
                            <th>Direction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="language_section">

                    </tbody>
                </table>
            </div>
        </div>


    </div>

    {{-- Modals --}}

    <div class="modal bg-body fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content shadow-none">
                <div class="modal-header">
                    <h5 class="modal-title">اضافة لغة </h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <style>
                        .image-input-placeholder {
                            background-image: url('svg/avatars/blank.svg');
                        }

                        [data-bs-theme="dark"] .image-input-placeholder {
                            background-image: url('svg/avatars/blank-dark.svg');
                        }
                    </style>
                    <form action="{{ route('languages.store') }}" id="kt_docs_repeater_form" class="form mt-10"
                        action="POST" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <div data-repeater-list="data">
                                <div data-repeater-item>
                                    <div class="fv-row form-group row mb-5">
                                        <div class="col-md-4">
                                            <label class="form-label">اسم اللغه</label>
                                            <input type="text" class="form-control mb-2 mb-md-0" name="name"
                                                placeholder="Enter full name" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">اختصار </label>
                                            <input type="text" class="form-control mb-2 mb-md-0" name="abbr"
                                                placeholder="Enter contact number" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">المحلي</label>
                                            <input type="text" class="form-control mb-2 mb-md-0" name="local"
                                                placeholder="Enter contact number" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">الحاله </label>
                                            <input type="checkbox" class="form-control mb-2 mb-md-0  " name="active"
                                                placeholder="Enter contact number" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">الاتجاه </label>
                                            <select name="direction" class="form-select" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option value="rtl">من اليمين الي اليسار </option>
                                                <option value="ltr"> من اليسار الي اليمين</option>
                                            </select>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="kt_docs_repeater_button" type="submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                        حفظ
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="separator my-5"></div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            getitem();

            function getitem() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "{{ route('languages.store') }}",
                    success: function(response) {
                        // $('#language_section tbody').html('');
                        // $('#language_section').DataTable().destroy();
                        // $('#language_section tbody').empty();
                        $.each(response.items, function(key, data) {
                            $('#language_section').append(`
                        <tr>
                            <td class="vertical-align-middle min-w-100 text-center pt-4">${data.name}</td>
                            <td class="min-w-100 text-center pt-4">${data.abbr}</td>
                            <td class="min-w-100 text-center pt-4">${data.local}</td>
                            <td class="min-w-100 text-center pt-4">${data.active}</td>
                            <td class="min-w-100 text-center pt-4">${data.direction}</td>
                            <td class="min-w-100 pt-3 text-center">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-falcon-info w-100 me-3 edit_item_btn" value="${data.id}">Update</button>
                                    <button class="btn btn-falcon-danger w-100 delete_item_btn" value="${data.id}">Delete</button>
                                </div>
                            </td>
                        </tr>
                    `);
                        });
                    }
                });
            }

            $(document).on('click', '.add_item_btn', function(e) {
                e.preventDefault();
                $('#kt_modal_2').modal('show');
            });

            $('#kt_docs_repeater_form').submit(function(e) {
                e.preventDefault();
                var data = new FormData(this);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/languages",
                    dataType: "json",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            $.each(response.errors, function(key, err_values) {
                                Swal.fire({
                                    icon: 'error',
                                    title: key,
                                    text: err_values
                                });
                            });
                        } else {
                            getitem();
                            $('#language_section tbody').html('');

                            $('#kt_modal_2').modal('hide');
                            // $('#kt_docs_repeater_form')[0].reset();
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                            });
                        }
                    }
                });
                getitem();
            });

            $(document).on('click', '.edit_item_btn', function() {
                var item_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "/languages/" + item_id,
                    success: function(response) {
                        if (response.status == 404) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Sorry',
                                text: response.message,
                            });
                        } else {
                            $('.item_id').val(response.item.id);
                            $('.text_en_update').val(response.item.name_en);
                            $('.text_ar_update').val(response.item.name_ar);
                            $('.desc_en_update').text(response.item.desc_en);
                            $('.desc_ar_update').text(response.item.desc_ar);
                            $('#project_img_edit').attr('src', '/upload/webDetail/' + response
                                .item.img);
                            $('#kt_modal_2').modal('show');
                        }
                    }
                });
            });

            $('#update_form').submit(function(e) {
                e.preventDefault();
                var form = new FormData(this);
                form.append('_method', 'PATCH');
                var item_id = $('.item_id').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/languages/" + item_id,
                    dataType: "json",
                    data: form,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 505) {
                            Swal.fire({
                                icon: 'error',
                                text: response.message
                            });
                        } else if (response.status == 404) {
                            $.each(response.errors, function(key, err_values) {
                                Swal.fire({
                                    icon: 'error',
                                    title: key,
                                    text: err_values
                                });
                            });
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                            });
                            $('#kt_modal_2').modal('hide');
                            getitem();
                        }
                    }
                });
            });

            $(document).on('click', '.delete_item_btn', function() {
                var item_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "/languages/" + item_id,
                    success: function(response) {
                        if (response.status == 404) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Sorry',
                                text: response.message,
                            });
                        } else {
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-falcon-info',
                                    cancelButton: 'btn btn-falcon-danger'
                                },
                                buttonsStyling: false
                            });
                            swalWithBootstrapButtons.fire({
                                title: 'Delete?',
                                text: 'Are you sure you want to delete this item?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Yes',
                                cancelButtonText: 'No',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    deleteItem(response.item.id);
                                    swalWithBootstrapButtons.fire(
                                        'Deleted!',
                                        'Your item has been deleted.',
                                        'success'
                                    );
                                } else if (result.dismiss === Swal.DismissReason
                                    .cancel) {
                                    swalWithBootstrapButtons.fire(
                                        'Cancelled',
                                        'Your item is safe :)',
                                        'error'
                                    );
                                }
                            });
                        }
                    }
                });
            });

            function deleteItem(item_id) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    dataType: 'json',
                    url: "/languages/" + item_id,
                    data: {
                        id: item_id
                    },
                    success: function(response) {
                        getitem();
                    }
                });
            }
        });
    </script>
@endsection
