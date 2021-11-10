@extends('user.master')
@section('title', 'محاسبه سهام مشارکت')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">سهام مشارکت</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">ایجاد</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-body" style="padding-bottom: 0px">
                            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">کل سرمایه لازم</h6></th>
                                                <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">تامین شده</h6></th>
                                                <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">مورد نیاز</h6></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="font-weight-bolder">
                                                <td class="font-size-h3 font-weight-boldest">100000</td>
                                                <td class="font-size-h3 font-weight-boldest">90000</td>
                                                <td class="text-danger font-size-h3 font-weight-boldest">10000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                        </div>
                        <!--begin::Form-->
                        <form class="form" id="kt_login_signup_form">
                            <div class="card-body" style="padding-top: 15px">
                                <div id="kt_repeater_1">
                                    <div class="form-group row">
                                        <div data-repeater-list="" class="col-lg-10">
                                            <h5 style="text-align: center">تامین از موسسین و سرمایه گذاران قبلی</h5><br>
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-4">
                                                    <label>نام تامین کننده:</label>
                                                    <select name="pre_supplier_name" class="form-control">
                                                        <option value="1">مهدی</option>
                                                        <option value="2">احسان</option>
                                                    </select>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>میزان سرمایه گذاری:</label>
                                                    <input type="text" class="form-control products" name="pre_investment" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4" style="padding-top: 23px">
                                                    <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                </div>
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <div id="kt_repeater_1">
                                    <div class="form-group row">
                                        <div data-repeater-list="" class="col-lg-10">
                                            <h5 style="text-align: center">تامین از سرمایه گذاران جدید</h5><br>
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-4">
                                                    <label>نام تامین کننده:</label>
                                                    <input type="text" class="form-control products" name="new_supplier_name" required />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>میزان سرمایه گذاری:</label>
                                                    <input type="text" class="form-control products" name="new_investment" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4" style="padding-top: 23px">
                                                    <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection

