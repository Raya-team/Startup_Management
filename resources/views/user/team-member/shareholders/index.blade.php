@extends('user.master')
@section('title', 'لیست سهامداران')
@section('subheader')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات تیم</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">سهامداران</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">لیست سهامداران</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>افزودن سهامدار جدید
                </a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="جست و جو..." id="kt_datatable_search_query" />
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="Field #1">نام</th>
                    <th title="Field #2">نام خانوادگی</th>
                    <th title="Field #3">تحصیلات</th>
                    <th title="Field #4">رشته</th>
                    <th title="Field #5">سال تولد</th>
                    <th title="Field #6">رزومه</th>
                    <th title="Field #7">سرمایه گذاری</th>
                    <th title="Field #8">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($team_members as $member)
                    <tr>
                        <td>{{ $member->fname }}</td>
                        <td>{{ $member->lname }}</td>
                        <td>{{ $member->education->nickname }}</td>
                        <td>{{ $member->major }}</td>
                        <td>{{ $member->age }}</td>
                        <td>{{ $member->resume }}</td>
                        <td>{{ $member->investment }}</td>
                        <td>
                            <form action="{{ route('shareholders.destroy' , ['shareholder'=> $member->id]) }}" method="POST">
                                @method('delete')
                                @csrf
                                <a type="button" href="{{ route('shareholders.edit', ['shareholder' => $member->id]) }}" class="btn btn-icon btn-circle btn-xs btn-light-dark mr-2">
                                    <i class="icon-md la la-pencil-square-o"></i>
                                </a>
                                <button type="button" class="btn btn-icon btn-circle btn-xs btn-light-danger mr-2">
                                    <i class="icon-md la la-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
@endsection

@section('script')
    <script>
        'use strict';
        // Class definition

        var KTDatatableHtmlTableDemo = function() {
            // Private functions

            // demo initializer
            var demo = function() {

                var datatable = $('#kt_datatable').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch',
                    },
                    layout: {
                        class: 'datatable-bordered',
                    },
                    translate: {
                        records: {
                            processing: 'لطفا صبر کنید',
                            noRecords: 'هیچ داده ای یافت نشد',
                        },
                        toolbar: {
                            pagination: {
                                items: {
                                    default: {
                                        first: 'اولین',
                                        prev: 'قبلی',
                                        next: 'بعدی',
                                        last: 'آخرین',
                                        more: 'صفحات بیشتر',
                                        input: 'شمراه صفحه',
                                        select: 'اندازه صفحه را انتخاب کنید',
                                        all: 'همه',
                                    },
                                    {{--                                    info: 'Showing {{start}} - {{end}} of {{total}}',--}}
                                },
                            },
                        },
                    }
                });

            };

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDatatableHtmlTableDemo.init();
        });

    </script>
@endsection