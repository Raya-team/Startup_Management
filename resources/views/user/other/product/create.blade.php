@extends('user.master')
@section('title', 'افزودن محصول')
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
                            <a href="{{route('product.index')}}" class="text-muted">محصولات</a>
                        </li>
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
                        <form method="POST" action="{{route('product.store')}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="card-body">
                                <div id="kt_repeater_1">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label text-right"><h4>محصول:</h4></label>
                                        <div data-repeater-list="product" class="col-lg-10">
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-4">
                                                    <label><h5>نام محصول:</h5></label>
                                                    <input type="text" class="form-control products" name="product_name" value="{{ old('product_name') }}" required />
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
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success mr-2">ثبت</button>
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
    <script src="../assets/js/pages/crud/forms/widgets/form-repeater.js"></script>
@endsection

