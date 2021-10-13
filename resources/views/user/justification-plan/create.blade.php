@extends('user.master')
@section('title', 'طرح توجیهی مقدماتی')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">طرح توجیهی مقدماتی</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">افزودن</a>
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
                        <form method="POST" action="{{route('justificationplan.store')}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="card-body">
                                <h5>در صورت وجود شرکت ثبت شده موارد زیر را پر کنید:</h5><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="team_name">نام شرکت:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="team_name" placeholder="نام شرکت" name="team_name" value="{{ old('team_name') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="registration_number">شماره ثبت:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="registration_number" placeholder="شماره ثبت" name="registration_number" value="{{ old('registration_number') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="registration_date">تاریخ:
                                                <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="registration_date" placeholder="تاریخ" name="registration_date" value="{{ old('registration_date') }}" required/>
                                        </div>
                                    </div>
                                </div>
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5>اطلاعات مدیر کسب و کار</h5><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">نام و نام خانوادگی:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" placeholder="نام و نام خانوادگی" name="name" value="{{ old('name') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="manager_phone_number">شماره تماس:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="manager_phone_number" placeholder="شماره تماس" name="manager_phone_number" value="{{ old('manager_phone_number') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">ایمیل:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="email" placeholder="ایمیل" name="email" value="{{ old('email') }}" required/>
                                        </div>
                                    </div>
                                </div>
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5>سوالات کسب و کار</h5><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="growth_center">آیا سابقه حضور در شتابدهنده و یا مرکز رشد را دارید؟ نام مرکز را بنویسید.
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="growth_center" placeholder="نام مرکز" name="growth_center" value="{{ old('growth_center') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="start_date">تاریخ شروع رسمی کسب و کار را بنویسد.
                                                <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="start_date" placeholder="تاریخ شروع رسمی کسب و کار" name="start_date" value="{{ old('start_date') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">شماره تماس خود را بنویسید.
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="phone_number" placeholder="شماره تماس" name="phone_number" value="{{ old('phone_number') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="site_address">آدرس وب سایت خود را درصورت وجود بنویسید.
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="site_address" placeholder="آدرس وب سایت" name="site_address" value="{{ old('site_address') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location_address">آدرس محل فعالیت را بنویسید.
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="location_address" placeholder="آدرس محل فعالیت" name="location_address" value="{{ old('location_address') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="important_note">اگر نکته قابل توجه ای وجود دارد که می خواهید سرمایه گذار آن را بداند اینجا بنویسد.
                                                <span class="text-danger">*</span></label>
                                            <textarea name="important_note" id="important_note" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">نیاز</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>کل ایده تجاری شما به حل یک مشکل خاص متکی است.آن را به روشنی توصیف نمایید.(هرچه کمی تر بهتر)</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="requirement" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">راه حل</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>پس از تشریح مشکل، توضیح دهید که کسب و کار شما چگونه می خواهد آن مشکل را حل کند</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="solution" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">رقبا</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>احتمالا شما تنها کسی نیستید که می‌خواهید آن مشکل خاص را حل کنید. حتماً رقابت مستقیم و غیرمستقیم خود را تجزیه و تحلیل کنید تا مشخص شود در مقابل چه کسانی ایستاده‌اید.</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="competitors" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">مزیت رقابتی</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>محصول یا خدمت شما در چه زمینه‌ای نسبت به دیگر رقبای داخلی یا خارجی مزیت دارد؟ آن را تشریح کنید.</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="competitive_advantage" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">بازار هدف</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>اصلی‌ترین مشتریان محصول/خدمت شما چه کسانی هستند؟ آن‌ها را بیان کنید.</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="target_market" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">سطح آمادگی فناوری</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>فن‌آوری شما در چه مرحله‌ای از آمادگی قرار دارد؟ آن را بیان کنید.</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="Technology_level" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">بودجه مورد نیاز تقریبی</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>به طور تقریبی برای راه‌اندازی کسب و کار خود به چه میزان سرمایه‌ نیاز دارید؟ چه میزان از آن تامین شده و چه میزان باقی مانده است؟</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="required_budget" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">درآمد تقریبی</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>به طور تقریبی میزان فروش و درآمد کسب  وکار خود را بیان کنید. چه میزان تا به امروز کسب شده است و چه میزان پیش‌بینی می‌شود؟</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="Income" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <h5 class="text-dark font-weight-bold">عمر تکنولوژی(طرح)</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>عمر طرح مورد نظر چند سال است؟</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="technology_life" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">دلیل عدم ایجاد/توسعه طرح</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>چرا تا به امروز این کسب و کار راه‌اندازی/ توسعه داده نشده است؟ مشکل در عدم وجود بازار، عدم آمادگی تکنولوژی، نبود سرمایه کافی یا .... می‌تواند باشد.</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="plan_development" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                <h5 class="text-dark font-weight-bold">ارزش دانش فنی</h5>
                                <!--begin::Group-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-text text-muted">
                                            <span>دانش‌ فنی خود را به طور تقریبی چه میزان ارزیابی می‌کنید؟</span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="technical_knowledge" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">ثبت</button>
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
@section('script')
    <script src="../assets/js/pages/crud/forms/widgets/select2.js"></script>
@endsection
