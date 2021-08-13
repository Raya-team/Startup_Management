@extends('auth.layout')
@section('title', 'ورود')
@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <!--begin::Aside header-->
                    <a href="#" class="login-logo text-center pt-lg-25 pb-10">
                        <img src="assets/media/logos/logo-1.png" class="max-h-70px" alt="" />
                    </a>
                    <!--end::Aside header-->
                    <!--begin::Aside Title-->
                    <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">User Experience &amp; Interface Design
                        <br />Strategy SaaS Solutions</h3>
                    <!--end::Aside Title-->
                </div>
                <!--end::Aside Top-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="login-content flex-row-fluid d-flex flex-column p-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-row-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form">
                        <!--begin::Form-->
                        <form class="form" id="kt_login_singin_form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ورود</h3>
                                <div class="text-muted font-weight-bold font-size-h4">حساب ندارید؟
                                    <a href="{{ route('register') }}" class="text-primary font-weight-bolder">ایجاد حساب</a></div>
                            </div>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">ایمیل</label>
                                <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text" placeholder="ایمیل خود را وارد فرمایید" name="username" value="{{ old('email') }}" autocomplete="off" required/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">رمز عبور</label>
                                    <a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">رمز عبور خود را فراموش کرده اید؟</a>
                                </div>
                                <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="password" placeholder="رمز عبور خود را وارد فرمایید" name="password" autocomplete="off" required/>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">ورود</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
@endsection