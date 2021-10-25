@extends('user.master')
@section('title', 'توضیحات - فنی')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">توضیحات</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">فنی</a>
                        </li>
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
                        <!--begin::Form-->
                        <form method="POST" action="{{route('technicals.store')}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="card-body">
                                <h5 class="text-dark font-weight-bold">معرفی محصول</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="product_introduction" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">مشخصات فنی</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="technical_specifications" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">مبانی علمی</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="scientific_principles" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">استانداردها، گواهی‌ها و افتخارات کسب شده</h5><br>
                                <div class="form-group row">
                                    <div id="kt_repeater_1">
                                        <div data-repeater-list="product" class="col-lg-10">
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control products" name="description" value="{{ old('description') }}" placeholder="شرح" required />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control products" name="acquisition_year" value="{{ old('acquisition_year') }}" placeholder="سال اخذ" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select name="type" class="form-control">
                                                            <option value="1">اجباری</option>
                                                            <option value="0">غیر اجباری</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
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


