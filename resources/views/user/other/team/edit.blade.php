@extends('user.master')
@section('title', 'ویرایش تیم')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات دیگر</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('team.index')}}" class="text-muted">تیم</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">ویرایش</a>
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
                        <form method="POST" action="{{route('team.update',['team'=> $team->id])}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @method('PATCH')
                            {{--{{ method_field('PATCH') }}--}}
                            @include('errors')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="team_name">نام تیم یا شرکت:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="team_name" placeholder="نام تیم خود را وارد کنید." name="team_name" value="{{ old('team_name', $team->name) }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="project_name">نام طرح:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="project_name" placeholder="نام طرح خود را وارد کنید." name="project_name" value="{{ old('project_name', $team->project_name) }}" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">شرکت ثبت شده؟:
                                                <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="1">بله</option>
                                                <option value="2">خیر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="team_email">ایمیل:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="team_email" placeholder="ایمیل خود را وارد کنید." name="team_email" value="{{ old('team_email', $team->email) }}" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="team_phone">شماره همراه:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="team_phone" placeholder="شماره همراه خود را وارد کنید." name="team_phone" value="{{ old('team_phone', $team->phone_number) }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="land_line">شماره ثابت شهری:</label>
                                            <input type="text" class="form-control" id="land_line" placeholder="شماره ثابت شهری خود را وارد کنید." name="land_line" value="{{ old('land_line', $team->landline) }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">آدرس:</label>
                                            <input type="text" class="form-control" id="address" placeholder="این فیلد اختیاری می باشد." name="address" value="{{ old('address', $team->address) }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
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
