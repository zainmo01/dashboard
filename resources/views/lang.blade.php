@extends('layouts.admin')
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="Banner-image:url({{ asset('newAdmin/assets') }}/img/icons/spot-illustrations/corner-4.png);">
        </div>
        <div class="card-body position-relative m-3">
            <div class="row flex-between">
                <div class="col-lg-6">
                    <h3>Application</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between align-items-center my-3">
        <div class="col-auto">
            <button class="add_item_btn btn btn-info mx-3 "> Add Record</button>
        </div>
    </div>

    <div id="tableExample3" class="card mb-3 mt-3 p-3">
        <div class="table-responsive scrollbar">
            <table class="table mb-0 data-table fs--1" id="home_section">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="text-center"> Text En </th>
                        <th class="text-center"> Text Ar </th>
                        <th class="text-center"> image </th>
                        <th class="text-center"> Icons</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="list web_table">

                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="Add_item_model" tabindex="-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="modal-content position-relative">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" id="add_form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body p-0">
                            <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                <h4 class="mb-1" id="modalExampleDemoLabel">Add App</h4>
                            </div>
                            <div class="p-4">
                                <div class="row g-2 mt-2">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="textEn">Text En</label>
                                            <input class="form-control" type="text" name="name_en"
                                                placeholder="Place text here" required="required" id="textEn"
                                                data-wizard-validate-password="true" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="textAr">Text Ar</label>
                                            <input class="form-control" type="text" name="name_ar"
                                                placeholder="Place text here" id="textAr" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label descEn_" for="descEn">Description En</label>
                                        <textarea rows="6" class="form-control" type="text" name="desc_en" placeholder="Place text here"
                                            id="descEn"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label descAr_" for="descEn">Description Ar</label>
                                        <textarea rows="6" class="form-control" type="text" name="desc_ar" placeholder="Place text here"
                                            id="descAr"></textarea>
                                    </div>
                                    <div class=" col-lg-12 form-Roles">
                                        <div>
                                            <label class="form-label" for="customFile">
                                                {{ 'validation.img' }}
                                            </label>
                                            <input class="form-control" id="customFile" name="img" type="file" />
                                        </div>
                                    </div>
                                    <div class=" col-lg-12 form-Roles">
                                        <div>
                                            <label class="form-label" for="customFile">
                                                {{ 'validation.icon' }}
                                            </label>
                                            <input class="form-control" id="customFile" name="icon" type="file" />
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-secondary" type="button"
                                data-bs-dismiss="modal">{{ __('validation.cancel') }} </button>
                            <button class="btn btn-primary add_level" type="submit">{{ __('validation.save') }} </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update_item_model" tabindex="-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="modal-content position-relative">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" id="update_form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body p-0">
                            <input type="hidden" name="id" class="item_id">
                            <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                <h4 class="mb-1" id="modalExampleDemoLabel">Update Detail</h4>
                            </div>
                            <div class="p-4">
                                <div class="row g-2 align-items-end">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="textEn">Text En</label>
                                            <input class="form-control text_en_update" type="text" name="name_en"
                                                placeholder="Place text here" required="required" id="textEn"
                                                data-wizard-validate-password="true" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="textAr">Text Ar</label>
                                            <input class="form-control text_ar_update" type="text" name="name_ar"
                                                placeholder="Place text here" id="textAr" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label " for="descEn">Description En</label>
                                        <textarea rows="6" class="form-control desc_en_update" type="text" name="desc_en"
                                            placeholder="Place text here" id="textAr"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label " for="descEn">Description Ar</label>
                                        <textarea rows="6" class="form-control desc_ar_update" type="text" name="desc_ar"
                                            placeholder="Place text here" id="textAr"></textarea>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class=" align-middle d-flex justify-content-center mt-3">
                                                <img src="" class="w-70  " style="width:250px" id="img_edit"
                                                    alt="">
                                            </div>
                                            <label class="form-label" for="customFile">
                                                {{ 'validation.choose_img' }}
                                            </label>
                                            <input class="form-control" id="customFile" name="img" type="file" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class=" align-middle d-flex justify-content-center mt-3">
                                                <img src="" class="w-70" style="width:230px" id="icon_edit"
                                                    alt="">
                                            </div>
                                            <label class="form-label" for="customFile">
                                                {{ 'validation.choose_icon' }}
                                            </label>
                                            <input class="form-control" id="customFile" name="icon" type="file" />
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-secondary" type="button"
                                data-bs-dismiss="modal">{{ __('validation.cancel') }} </button>
                            <button class="btn btn-primary add_level" type="submit">{{ __('validation.save') }} </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            getitem()

            function getitem() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "/lan211",
                    success: function(response) {
                        $('#home_section').DataTable().destroy();
                        $('#home_section tbody').empty();
                        $.each(response.items, function(key, item) {

                            $('#home_section tbody').append('<tr>\
                                                                            <td class=" vertical-align-middle min-w-100 id text-center pt-4">\
                                                                                <h6> ' + item.name_en + '</h6> \
                                                                            </td>\
                                                                            <td class=" vertical-align-middle min-w-100 id text-center pt-4">\
                                                                                <h6> ' + item.name_ar + '</h6> \
                                                                            </td>\
                                                                            <td class="vertical-align-middle min-w-100 id text-center pt-4">\
                                                                                <img src="/upload/application/' + item
                                .img + '" class="rounded-3 w-100" alt="">\
                                                                            </td>\
                                                                            <td class="vertical-align-middle min-w-100 id text-center pt-4">\
                                                                                <img src="/upload/application/' + item
                                .icon +
                                '" class="rounded-3 w-100"  alt="">\
                                                                            </td>\
                                                                            <td class="min-w-100 vertical-align-middle">\
                                                                                <div class="d-flex">\
                                                                                    <button class="btn btn-falcon-info   w-100 me-3 edit_item_model_btn" value="' +
                                item.id +
                                '"> {{ __('
                                                                                                                                                                                                                                                                                                                                                                            validation.update ') }} </button>\
                                                                                    <button class="btn btn-falcon-danger w-100 delete_btn_item" value="' +
                                item
                                .id + '"> {{ __('
                                                                                                                                                                                                                                                                                                                                                            validation.delete ') }}</button>\
                                                                                </div>\
                                                                            </td>\
                                                                        </tr>\
                                                                    ')
                        });
                        new DataTable('#home_section');
                    }
                })
            }

            $(document).on('click', '.add_item_btn', function(e) {
                e.preventDefault();
                $('#Add_item_model').modal('show');
            });


            $('#add_form').submit(function(e) {
                e.preventDefault();
                var data = new FormData(this);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    url: "/lan211",
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
                                })
                            });
                        } else {
                            getitem()
                            $('#Add_item_model').modal('hide')
                            $('#add_form')[0].reset()

                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                            })

                        }
                    }
                });
            });

            $(document).on('click', '.edit_item_model_btn', function() {
                $('#update_item_model').modal('show');
                var item_id = $(this).val()
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "/lan211/" + item_id,
                    success: function(response) {
                        if (response.status == 404) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Sorry',
                                text: response.message,
                            })
                        }

                        $('.item_id').val(response.item.id)
                        $('.text_en_update').val(response.item.name_en)
                        $('.text_ar_update').val(response.item.name_ar)
                        $('.desc_en_update').text(response.item.desc_en)
                        $('.desc_ar_update').text(response.item.desc_ar)
                        $('#icon_edit').attr('src', '/upload/application/' + response.item.icon)
                        $('#img_edit').attr('src', '/upload/application/' + response.item.img)

                    }
                })

            })

            $('#update_form').submit(function(e) {
                e.preventDefault();
                var form = new FormData(this);
                form.append('_method', 'PATCH');
                var item_id = $('.item_id').val()
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/lan211/" + item_id,
                    dataType: "json",
                    data: form,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 505) {
                            Swal.fire({
                                icon: 'error',
                                text: response.message
                            })
                        } else if (response.status == 404) {
                            $.each(response.errors, function(key, err_values) {
                                Swal.fire({
                                    icon: 'error',
                                    title: key,
                                    text: err_values
                                })
                            });
                        } else {

                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                            })
                            $('#update_item_model').modal('hide')
                            $('#update_item_model').find('input').val('');
                            getitem()
                        }
                    }
                });
            });

            $(document).on('click', '.delete_btn_item', function() {
                var item_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    dataType: 'json',
                    url: "/lan211/" + item_id,
                    success: function(response) {
                        if (response.status == 404) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Sorry',
                                text: response.message,
                            })
                        } else {
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-falcon-info  ',
                                    cancelButton: 'btn btn-falcon-danger'
                                },
                                buttonsStyling: false
                            })

                            swalWithBootstrapButtons.fire({
                                title: '{{ __('
                                                                                                                                                                                                                                                                                                                                                            validation.delete ') }} !!?',
                                text: '{{ __('
                                                                                                                                                                                                                                                                                                                                                            validation.revet ') }}',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: '{{ __('
                                                                                                                                                                                                                                                                                                                                                            validation.yes ') }}',
                                cancelButtonText: '{{ __('
                                                                                                                                                                                                                                                                                                                                                            validation.no ') }}',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    detele_item(response.item.id)
                                    swalWithBootstrapButtons.fire(
                                        ' {{ __('
                                                                                                                                                                                                                                                                                                                                                                                                                                                    validation.deleted ') }}',
                                        ' {{ __('
                                                                                                                                                                                                                                                                                                                                                                                                                                                    validation.fileDeleted ') }}',
                                        ' success'
                                    )
                                } else if (
                                    /* Read more about handling dismissals below */
                                    result.dismiss === Swal.DismissReason.cancel
                                ) {
                                    swalWithBootstrapButtons.fire(
                                        '{{ __('
                                                                                                                                                                                                                                                                                                                                                                                                                                                    validation.cancelled ') }}',
                                        ' {{ __('
                                                                                                                                                                                                                                                                                                                                                                                                                                                    validation.fileSave ') }}',
                                        ' error'
                                    )
                                }
                            })
                        }
                    }
                })
            });

            function detele_item(item_id) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'delete',
                    dataType: 'json',
                    url: "/lan211/" + item_id,
                    data: {
                        id: item_id
                    },
                    success: function(response) {
                        getitem()
                    }
                })
            }


        });
    </script>
@endsection
