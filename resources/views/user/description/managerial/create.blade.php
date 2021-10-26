@extends('user.master')
@section('title', 'توضیحات - مدیریتی')
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
                            <a class="text-muted">مدیریتی</a>
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
                        <form method="POST" action="{{route('description-managerial.store')}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="card-body">
                                <h5 class="text-dark font-weight-bold">درباره تیم/شرکت</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="about_team" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">چشم انداز تیم/شرکت</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="vision" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">ماموریت تیم/شرکت</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="mission" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">شایستگی های کلیدی تیم/شرکت</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="key_competencies" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">اهداف</h5><br>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="targets" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">بیان مساله</h5>
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="form-group">
                                            <textarea name="problem_statement" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
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
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control products" name="description" value="{{ old('description') }}" placeholder="شرح" required />
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control products" name="acquisition_year" value="{{ old('acquisition_year') }}" placeholder="سال اخذ" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                </div>
                                                <div class="col-md-5">
                                                    <textarea name="comment" class="form-control form-control-solid" rows="3" placeholder="توضیحات"></textarea>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                        <i class="la la-plus"></i>افزودن</a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
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


