@extends('auth.layout')
@section('title', 'ثبت نام')
@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-15 px-30">
                    <!--begin::Aside header-->
                    <a href="#" class="login-logo py-6">
                        <img src="assets/media/logos/logo-1.png" class="max-h-70px" alt="" />
                    </a>
                    <!--end::Aside header-->
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav pt-5 pt-lg-30">
                        <!--begin::Wizard Steps-->
                        <div class="wizard-steps">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">1</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">اطلاعات کاربر</h3>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 1 Nav-->
                            <!--begin::Wizard Step 2 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">2</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">اطلاعات استارتاپ</h3>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 2 Nav-->
                            <!--begin::Wizard Step 3 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">3</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">اطلاعات اعضای تیم</h3>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 3 Nav-->
                            <!--begin::Wizard Step 4 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">4</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">اطلاعات محصول</h3>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 4 Nav-->
                        </div>
                        <!--end::Wizard Steps-->
                    </div>
                    <!--end: Wizard Nav-->
                </div>
                <!--end::Aside Top-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="login-content flex-column-fluid d-flex flex-column p-10">
            <!--begin::Wrapper-->
                <div class="d-flex flex-row-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-form-signup">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signup_form" method="POST" action="{{route('register')}}">
                            @csrf
                            @include('errors')
                            <!--begin: Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <!--begin::Title-->
                                <div class="pb-10 pb-lg-15">
                                    <h3 class="font-weight-bolder text-dark display5">ثبت نام</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">قبلا ثبت نام کرده ام؟
                                        <a href="{{route('login')}}" class="text-primary font-weight-bolder">ورود</a></div>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">نام کاربری:</label>
                                    <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="username" required/>
                                </div>
                                <!--end::Form Group-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">ایمیل:</label>
                                    <input type="email" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="email" required/>
                                </div>
                                <!--end::Form Group-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">رمز عبور:</label>
                                    <input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="password" required/>
                                </div>
                                <!--end::Form Group-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">تکرار رمز عبور:</label>
                                    <input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="password_confirmation" required/>
                                </div>
                                <!--end::Form Group-->
                            </div>
                            <!--end: Wizard Step 1-->
                            <!--begin: Wizard Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام تیم یا شرکت:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="team_name" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام طرح:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="project_name" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">حوزه فعالیت:</label>
                                            <select name="activity_field" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6">
                                                @foreach($activities as $activity)
                                                    <option value="{{$activity->id}}">{{$activity->nickname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">شرکت ثبت شده؟</label>
                                            <select name="status" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6">
                                                <option value="1">بله</option>
                                                <option value="2">خیر</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">ایمیل:</label>
                                            <input type="email" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="team_email" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">شماره همراه:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="team_phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">شماره ثابت:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="land_line" placeholder="این فیلد اختیاری می باشد" />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">آدرس:</label>
                                            <input type="text" name="address" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="این فیلد اختیاری می باشد" />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end: Wizard Step 2-->
                            <!--begin: Wizard Step 3-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="fname" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام خانوادگی:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="lname" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">رشته:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="major" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">سن:</label>
                                            <select name="age" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6">
                                                @for($i = $this_year-100; $i <= $this_year; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark" for="kt_select2_3">مسئولیت:</label><br>
                                            <select name="responsibility[]" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6 select2" id="kt_select2_3" multiple="multiple" data-placeholder="با نگه داشتن Ctrl می‌توانید مسئولیت‌های بیشتری را انتخاب کنید">
                                            {{--<select name="responsibility" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6">--}}
                                                @foreach($responsibilities as $responsibility)
                                                    <option value="{{$responsibility->id}}">{{$responsibility->nickname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">تحصیلات:</label>
                                            <select name="education" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6">
                                                @foreach($education as $edu)
                                                <option value="{{ $edu->id }}">{{ $edu->nickname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">سابقه عضویت در تیم(بر حسب سال):</label>
                                            <select name="resume" class="form-control h-auto py-7 px-5 border-0 rounded-lg font-size-h6">
                                                @for($i=1;$i<=20;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">سرمایه گذاری:</label>
                                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="investment" placeholder="برحسب تومان" required />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end: Wizard Step 3-->
                            <!--begin: Wizard Step 4-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <div class="row">
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"><h4>محصول:</h4></label>
                                            <div data-repeater-list="product" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="col-md-4">
                                                        <label><h5>نام محصول:</h5></label>
                                                        <input type="text" class="form-control products" name="product_name"/>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><h5>نوع محصول:</h5></label>
                                                        <select name="product_type" class="form-control">
                                                            @foreach($product_types as $product_type)
                                                                <option value="{{$product_type->id}}">{{$product_type->nickname}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 28px">
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"></label>
                                            <div class="col-lg-4">
                                                <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Wizard Step 4-->
                            <!--begin: Wizard Actions-->
                            <div class="d-flex justify-content-between pt-3">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
										<span class="svg-icon svg-icon-md mr-1">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
													<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>قبلی</button>
                                </div>
                                <div>
                                    <button class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit" type="submit" id="kt_login_signup_form_submit_button">ثبت نام
                                        <span class="svg-icon svg-icon-md ml-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span></button>
                                    <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">بعدی
                                        <span class="svg-icon svg-icon-md ml-1">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span></button>
                                </div>
                            </div>
                            <!--end: Wizard Actions-->
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
@section('script')
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/forms/widgets/form-repeater.js"></script>
    <script src="assets/js/pages/crud/forms/widgets/select2.js"></script>
    <!--end::Page Scripts-->
@endsection
@section('css')
    <style>
        .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--multiple{
            height: 66px;
            width: 310px;
        }
        .login.login-3 .login-aside .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{
            padding-right: 10px;
        }
    </style>
@endsection
