@extends('layouts.admin')
@section('content')
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <div class="breadcrumb-item text-muted">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
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
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection

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
                <div class="image-input image-input-outline" data-kt-image-input="true"
                    style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                    <div class="image-input-wrapper w-125px h-125px"
                        style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>
                    <label
                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        title="Change avatar">
                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                class="path2"></span></i>

                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="avatar_remove" />
                    </label>
                    <span
                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        title="Cancel avatar">
                        <i class="ki-outline ki-cross fs-3"></i>
                    </span>
                    <span
                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        title="Remove avatar">
                        <i class="ki-outline ki-cross fs-3"></i>
                    </span>
                </div>

                <form id="kt_docs_repeater_form" class="form mt-10" action="POST" autocomplete="off">
                    <div class="form-group">
                        <div data-repeater-list="data">
                            <div data-repeater-item>
                                <div class="fv-row form-group row mb-5">
                                    <div class="col-md-3">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control mb-2 mb-md-0" name="name"
                                            placeholder="Enter full name" />
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Email:</label>
                                        <input type="email" class="form-control mb-2 mb-md-0" name="email"
                                            placeholder="Enter contact number" />
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                            <input class="form-check-input" type="checkbox" name="primary"
                                                value="1" />
                                            <label class="form-check-label" for="form_checkbox">
                                                Primary
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="javascript:;" data-repeater-delete
                                            class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                                            <i class="ki-duotone ki-trash fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group">
                        <a href="javascript:;" data-repeater-create class="btn btn-flex flex-center btn-light-primary">
                            <i class="ki-duotone ki-plus fs-3"></i> Add
                        </a>
                    </div>
                    <!--end::Form group-->

                    <div class="separator my-5"></div>

                    <!--begin::Actions-->
                    <button id="kt_docs_repeater_button" type="submit" class="btn btn-primary">
                        <span class="indicator-label">
                            Validation Form
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Actions-->
                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button id="kt_docs_repeater_button" type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
