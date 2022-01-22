@extends('user.master')
@section('title', 'پروفایل')
@section('content')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">پروفایل کاربری</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">ویرایش</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">اطلاعات کاربری</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">اطلاعات شخصی خود را به روز کنید.</span>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <form role="form" action="{{ route('profile.update')}}" method="post">
            @csrf
            @method('PATCH')
                    <div class="col-lg-9 col-xl-6 offset-md-3 mt-10">
                        @include('errors')
                        @if(Session::has('current_password'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{{ Session::get('current_password') }}</li>
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ Session::get('success') }}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">نام کاربری</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" name="username" type="text" value="{{ old('username' , Auth::user()->username) }}" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">رمز عبور فعلی</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" name="current_password" type="password"/>
                        <span class="form-text text-muted">اگر قصد تغییر رمز عبور خود را ندارید میتوانید این فیلد را خالی بگذارید.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">رمز عبور جدید</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" name="password" type="password"/>
                        <span class="form-text text-muted">اگر قصد تغییر رمز عبور خود را ندارید میتوانید این فیلد را خالی بگذارید.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">تکرار رمز عبور</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" name="password_confirmation" type="password"/>
                        <span class="form-text text-muted">اگر قصد تغییر رمز عبور خود را ندارید میتوانید این فیلد را خالی بگذارید.</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
            </div>
        </form>
        <!--end::Body-->
    </div>
@endsection


