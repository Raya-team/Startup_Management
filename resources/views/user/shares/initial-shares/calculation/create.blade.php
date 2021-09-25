@extends('user.master')
@section('title', 'محاسبه')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('initial')}}" class="text-muted">سهام اولیه</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">محاسبه</a>
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
                        <form method="POST" action="{{route('calculations.store')}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="row">
                                <label class="col-3 col-form-label" style="margin-right: 15px"><h6>آیا سرمایه گذار قبلی وجود دارد؟ </h6></label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <div data-repeater-list="product" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control products" name="investor_name" value="{{ old('previous_investor') }}" placeholder="نام سرمایه گذار قبلی" required />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control products" name="percent" value="{{ old('percent') }}" placeholder="درصد" required />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body" style="padding-top: 0px">
                                    <h3 style="color: red;">محاسبه وزن متغیرها</h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idea">ایده:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="idea" placeholder="وزن" name="idea" value="{{ old('idea') }}" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="finance">مباحث مالی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="finance" placeholder="وزن" name="finance" value="{{ old('finance') }}" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="experience">تجربه:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="experience" placeholder="وزن" name="experience" value="{{ old('experience') }}" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="risk">مسئولیت و ریسک:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="risk" placeholder="وزن" name="risk" value="{{ old('risk') }}" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="technology">ایجاد و توسعه:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="technology" placeholder="وزن" name="technology" value="{{ old('technology') }}" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="investment">جذب سرمایه گذار:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="investment" placeholder="وزن" name="investment" value="{{ old('investment') }}" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="management">مباحث مدیریتی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="management" placeholder="وزن" name="management" value="{{ old('management') }}" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sale">فروش:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="sale" placeholder="وزن" name="sale" value="{{ old('sale') }}" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="full_time">تمام وقت بودن:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="full_time" placeholder="وزن" name="full_time" value="{{ old('full_time') }}" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 style="color: red;">سوالات</h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q1">ایده اجرای این طرح با چه شخصی بود؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q1[]" id="Q1" multiple="multiple" class="form-control select2" data-placeholder="ایده">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q2">چه کسی مسئول مباحث مالی طرح است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q2[]" id="Q2" multiple="multiple" class="form-control select2" data-placeholder="مباحث مالی">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q3">چه کسی در زمینه مرتبط تجربه داشته است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q3[]" id="Q3" multiple="multiple" class="form-control select2" data-placeholder="تجربه">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q4"> مسئولیت و ریسک طرح با چه کسی است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q4[]" id="Q4" multiple="multiple" class="form-control select2" data-placeholder="مسئولیت و ریسک طرح">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q5">مسئول ایجاد و توسعه محصول/خدمت چه کسی است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q5[]" id="Q5" multiple="multiple" class="form-control select2" data-placeholder="ایجاد و توسعه محصول/خدمت">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q6">چه کسی مسئول جذب سرمایه گذار است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q6[]" id="Q6" multiple="multiple" class="form-control select2" data-placeholder="جذب سرمایه گذار">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q7">مباحث مدیریتی طرح با چه کسی است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q7[]" id="Q7" multiple="multiple" class="form-control select2" data-placeholder="مباحث مدیریتی">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q8">مسئولیت بازاریابی و فروش با چه کسی است؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q8[]" id="Q8" multiple="multiple" class="form-control select2" data-placeholder="بازاریابی و فروش">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Q9">چه کسانی به صورت تمام وقت در طرح فعالیت می کنند؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="Q9[]" id="Q9" multiple="multiple" class="form-control select2" data-placeholder="تمام وقت">
                                                    @foreach($shareholders as $shareholder)
                                                        <option value="{{$shareholder->id}}">{{$shareholder->fname}} {{ $shareholder->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2">ثبت</button>
                                </div>
                            </div>
                        </form>
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
    <script>
        $(document).ready(function () {
            $('#Q1').select2();
            $('#Q2').select2();
            $('#Q3').select2();
            $('#Q4').select2();
            $('#Q5').select2();
            $('#Q6').select2();
            $('#Q7').select2();
            $('#Q8').select2();
            $('#Q9').select2();
        });
    </script>
@endsection

