@extends('user.master')
@section('title', 'اطلاعات مالی دو')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="/financial2" class="text-muted">اطلاعات مالی دو</a>
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
                        <form method="POST" action="/financial2" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{$id}}" required/>
                                <h3 style="color: red">هزینه های توسعه</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="dev_description">شرح:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="dev_description" placeholder="شرح" name="dev_description" value="{{ old('dev_description') }}" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="dev_cost">هزینه کل:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="dev_cost" placeholder="هزینه کل" name="dev_cost" value="{{ old('dev_cost') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">ظرفیت</h3><hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nominal_capacity">ظرفیت اسمی(در سال):
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nominal_capacity" placeholder="ظرفیت اسمی" name="nominal_capacity" value="{{ old('nominal_capacity') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="capacity_unit">واحد:
                                                <span class="text-danger">*</span></label>
                                            <select name="capacity_unit" id="capacity_unit" class="form-control">
                                                    <option value="1">کیلوگرم</option>
                                                    <option value="2">لیتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="capacity_percent">درصد استفاده از ظرفیت اسمی:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="capacity_percent" placeholder="درصد استفاده از ظرفیت اسمی" name="capacity_percent" value="{{ old('capacity_percent') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="total_production">تعداد تولید واقعی:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="total_production" placeholder="تعداد تولید واقعی" name="total_production" value="{{ old('total_production') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="production_unit">واحد:
                                                <span class="text-danger">*</span></label>
                                            <select name="production_unit" id="production_unit" class="form-control">
                                                <option value="1">کیلوگرم</option>
                                                <option value="2">لیتر</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">مواد اولیه و بسته بندی برای یک واحد محصول</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="materials_description">شرح:
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="materials_description" placeholder="شرح" name="materials_description" value="{{ old('materials_description') }}"  required/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="materials_consumption">میزان مصرف:</label>
                                            <input type="text" class="form-control" id="materials_consumption" placeholder="میزان مصرف" name="materials_consumption" value="{{ old('materials_consumption') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="materials_unit">واحد:
                                                <span class="text-danger">*</span></label>
                                            <select name="materials_unit" id="materials_unit" class="form-control">
                                                <option value="1">کیلوگرم</option>
                                                <option value="2">لیتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="materials_unit_price">قیمت واحد:</label>
                                            <input type="text" class="form-control" id="materials_unit_price" placeholder="قیمت واحد" name="materials_unit_price" value="{{ old('materials_unit_price') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="materials_total_price">قیمت کل:</label>
                                            <input type="text" class="form-control" id="materials_total_price" placeholder="قیمت کل" name="materials_total_price" value="{{ old('materials_total_price') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>

                                </div>
                                <h3 style="color: red">نیروی انسانی مورد نیاز</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="powers_description">شرح:</label>
                                            <input type="text" class="form-control" id="powers_description" placeholder="شرح" name="powers_description" value="{{ old('powers_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="powers_number">تعداد:</label>
                                            <input type="text" class="form-control" id="powers_number" placeholder="تعداد" name="powers_number" value="{{ old('powers_number') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="powers_salary">حقوق ماهانه:</label>
                                            <input type="text" class="form-control" id="powers_salary" placeholder="حقوق ماهانه" name="powers_salary" value="{{ old('powers_salary') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="powers_total_rights">حقوق کل:</label>
                                            <input type="text" class="form-control" id="powers_total_rights" placeholder="حقوق کل" name="powers_total_rights" value="{{ old('powers_total_rights') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">اجاره</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="rents_description">شرح:</label>
                                            <input type="text" class="form-control" id="rents_description" placeholder="شرح" name="rents_description" value="{{ old('rents_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="area">متراژ:</label>
                                            <input type="text" class="form-control" id="area" placeholder="متراژ" name="area" value="{{ old('area') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="monthly_rent">اجاره ماهانه:</label>
                                            <input type="text" class="form-control" id="monthly_rent" placeholder="اجاره ماهانه" name="monthly_rent" value="{{ old('monthly_rent') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="total_rent">اجاره کل:</label>
                                            <input type="text" class="form-control" id="total_rent" placeholder="اجاره کل" name="total_rent" value="{{ old('total_rent') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">انرژی مصرفی</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="energy_description">شرح:</label>
                                            <input type="text" class="form-control" id="energy_description" placeholder="شرح" name="energy_description" value="{{ old('energy_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="energy_unit">واحد:
                                                <span class="text-danger">*</span></label>
                                            <select name="energy_unit" id="energy_unit" class="form-control">
                                                <option value="1">کیلوگرم</option>
                                                <option value="2">لیتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="annual_consumption">مصرف سالیانه:</label>
                                            <input type="text" class="form-control" id="annual_consumption" placeholder="مصرف سالیانه" name="annual_consumption" value="{{ old('annual_consumption') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="energy_unit_cost">هزینه واحد:</label>
                                            <input type="text" class="form-control" id="energy_unit_cost" placeholder="هزینه واحد" name="energy_unit_cost" value="{{ old('energy_unit_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="energy_annual_cost">هزینه سالیانه:</label>
                                            <input type="text" class="form-control" id="energy_annual_cost" placeholder="هزینه سالیانه" name="energy_annual_cost" value="{{ old('energy_annual_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه های R&D</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="rd_description">شرح:</label>
                                            <input type="text" class="form-control" id="rd_description" placeholder="شرح" name="rd_description" value="{{ old('rd_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="rd_annual_cost">هزینه سالیانه:</label>
                                            <input type="text" class="form-control" id="rd_annual_cost" placeholder="هزینه سالیانه" name="rd_annual_cost" value="{{ old('rd_annual_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه های بازرگانی</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="businesses_description">شرح:</label>
                                            <input type="text" class="form-control" id="businesses_description" placeholder="شرح" name="businesses_description" value="{{ old('businesses_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="businesses_annual_cost">هزینه سالیانه:</label>
                                            <input type="text" class="form-control" id="businesses_annual_cost" placeholder="هزینه سالیانه" name="businesses_annual_cost" value="{{ old('businesses_annual_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه بیمه</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="insurances_description">شرح:
                                                <span class="text-danger">*</span></label>
                                            <select name="insurances_description" id="insurances_description" class="form-control">
                                                <option value="1">کیلوگرم</option>
                                                <option value="2">لیتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="insurances_percent">درصد</label>
                                            <input type="text" class="form-control" id="insurances_percent" placeholder="تعداد" name="insurances_percent" value="{{ old('insurances_percent') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="insurances_total_cost">هزینه کل:</label>
                                            <input type="text" class="form-control" id="insurances_total_cost" placeholder="هزینه کل" name="insurances_total_cost" value="{{ old('insurances_total_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه تعمیر و نگهداری</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="repairs_description">شرح:
                                                <span class="text-danger">*</span></label>
                                            <select name="repairs_description" id="repairs_description" class="form-control">
                                                <option value="1">کیلوگرم</option>
                                                <option value="2">لیتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="repairs_percent">درصد</label>
                                            <input type="text" class="form-control" id="repairs_percent" placeholder="تعداد" name="repairs_percent" value="{{ old('repairs_percent') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="repairs_total_cost">هزینه کل:</label>
                                            <input type="text" class="form-control" id="repairs_total_cost" placeholder="هزینه کل" name="repairs_total_cost" value="{{ old('repairs_total_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه حمل و نقل</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="transportation_description">شرح:</label>
                                            <input type="text" class="form-control" id="transportation_description" placeholder="شرح" name="transportation_description" value="{{ old('transportation_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="transportation_number">تعداد:</label>
                                            <input type="text" class="form-control" id="transportation_number" placeholder="تعداد" name="transportation_number" value="{{ old('transportation_number') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="transportation_unit_cost">هزینه واحد:</label>
                                            <input type="text" class="form-control" id="transportation_unit_cost" placeholder="هزینه واحد" name="transportation_unit_cost" value="{{ old('transportation_unit_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="transportation_total_cost">هزینه کل:</label>
                                            <input type="text" class="form-control" id="transportation_total_cost" placeholder="هزینه کل" name="transportation_total_cost" value="{{ old('transportation_total_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه گارانتی</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="warranties_description">شرح:</label>
                                            <input type="text" class="form-control" id="warranties_description" placeholder="شرح" name="warranties_description" value="{{ old('warranties_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="warranties_percent">درصد از فروش:</label>
                                            <input type="text" class="form-control" id="warranties_percent" placeholder="درصد از فروش" name="warranties_percent" value="{{ old('warranties_percent') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="warranties_total_cost">هزینه کل:</label>
                                            <input type="text" class="form-control" id="warranties_total_cost" placeholder="هزینه کل" name="warranties_total_cost" value="{{ old('warranties_total_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">هزینه اقلام مصرفی</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="consumer_description">شرح:</label>
                                            <input type="text" class="form-control" id="consumer_description" placeholder="شرح" name="consumer_description" value="{{ old('consumer_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="consumer_number">تعداد:</label>
                                            <input type="text" class="form-control" id="consumer_number" placeholder="تعداد" name="consumer_number" value="{{ old('consumer_number') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="consumer_unit_cost">هزینه واحد:</label>
                                            <input type="text" class="form-control" id="consumer_unit_cost" placeholder="هزینه واحد" name="consumer_unit_cost" value="{{ old('consumer_unit_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="consumer_total_cost">هزینه کل:</label>
                                            <input type="text" class="form-control" id="consumer_total_cost" placeholder="هزینه کل" name="consumer_total_cost" value="{{ old('consumer_total_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">درامد خدمات پس از فروش</h3><hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sale_services_description">شرح:</label>
                                            <input type="text" class="form-control" id="sale_services_description" placeholder="شرح" name="sale_services_description" value="{{ old('sale_services_description') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sale_services_number">تعداد:</label>
                                            <input type="text" class="form-control" id="sale_services_number" placeholder="تعداد" name="sale_services_number" value="{{ old('sale_services_number') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sale_services_unit_cost">هزینه واحد:</label>
                                            <input type="text" class="form-control" id="sale_services_unit_cost" placeholder="هزینه واحد" name="sale_services_unit_cost" value="{{ old('sale_services_unit_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sale_services_total_cost">هزینه کل:</label>
                                            <input type="text" class="form-control" id="sale_services_total_cost" placeholder="هزینه کل" name="sale_services_total_cost" value="{{ old('sale_services_total_cost') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="color: red">اطلاعات دیگر</h3><hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sale_price">قیمت فروش:</label>
                                            <input type="text" class="form-control" id="sale_price" placeholder="برحسب تومان" name="sale_price" value="{{ old('sale_price') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tax_rate">میزان مالیات:</label>
                                            <input type="text" class="form-control" id="tax_rate" placeholder="برحسب درصد" name="tax_rate" value="{{ old('tax_rate') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                        </div>
                                    </div>
                                </div>
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
