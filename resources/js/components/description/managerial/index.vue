<template>
    <div>
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
                                <div class="text-muted">
                                    <a class="text-muted">مدیریتی</a>
                                </div>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">درباره تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">{{ managerial.about_team }}</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">چشم انداز تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">{{ managerial.vision }}</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">ماموریت تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">{{ managerial.mission }}</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">شایستگی‌های کلیدی تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">{{ managerial.key_competencies }}</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">اهداف</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">{{ managerial.targets }}</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">بیان مساله</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">{{ managerial.problem_statement }}</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex flex-center">
                                <router-link :to="{ name: 'description-managerial-edit', params: { id: managerial.id } }">
                                    <a class="btn btn-success font-weight-bolder">ویرایش اطلاعات</a>
                                </router-link>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">لیست استانداردها، گواهی‌ها و افتخارات کسب شده</span>
                                    </h3>
                                    <div class="card-toolbar my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-toolbar">
                                        <router-link :to="{ name: 'description-obtainedcertificates-create'}">
                                            <a class="btn btn-primary font-weight-bolder">
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
                                            </span>افزودن
                                            </a>
                                        </router-link>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <div class="d-flex align-items-center" v-if="progress">
                                                <div class="mr-2 text-muted">لطفا صبر کنید...</div>
                                                <div class="spinner mr-10"></div>
                                            </div>
                                            <thead v-else>
                                            <tr class="bg-gray-100 text-center">
                                                <th>شرح</th>
                                                <th>سال اخذ</th>
                                                <th>توضیحات</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="(cer, index) in certificatesFilter" :id="'del_'+cer.id" class="text-center">
                                                <td>
                                                    <span class="text-dark-75">{{ cer.description }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ cer.acquisition_year }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ cer.comment }}</span>
                                                </td>
                                                <td>
                                                    <router-link :to="{ name: 'description-obtainedcertificates-edit', params: { id: cer.id }}">
                                                        <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                            <i class="flaticon2-edit"></i>
                                                        </a>
                                                    </router-link>
                                                    <button type="button" @click="deleteCertificate(cer.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                        <i class="flaticon2-trash" :id="'icon_'+cer.id"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row" v-if="certificate_pagination.total_page > 10">
                                        <div class="col-md-10">
                                            <div class="d-flex flex-wrap py-4 mr-3">
                                                <div :class="{disables: !certificate_pagination.first_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.first_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                                    </a>
                                                </div>
                                                <div :class="{disables: !certificate_pagination.prev_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.prev_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-arrow-back icon-xs"></i>
                                                    </a>
                                                </div>
                                                <div v-for='link in certificate_pagination.links' :class="{active: link.active}" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" @click="getResults(link.url)" v-if="link.label != '&laquo; قبلی' && link.label != 'بعدی &raquo;'">
                                                    <a>{{ link.label }}</a>
                                                </div>
                                                <div :class="{disables: !certificate_pagination.next_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.next_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-arrow-next icon-xs"></i>
                                                    </a>
                                                </div>
                                                <div :class="{disables: !certificate_pagination.last_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.last_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="d-flex align-items-center py-3">
                                                <span class="text-muted">
                                                    Page: {{ certificate_pagination.from_page }} - {{ certificate_pagination.to_page }}
                                                    Total: {{ certificate_pagination.total_page }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">پیش‌بینی برنامه زمان‌بندی اجرای طرح</span>
                                    </h3>
                                    <div class="card-toolbar my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-toolbar">
                                        <router-link :to="{ name: 'description-planimplementations-create'}">
                                            <a class="btn btn-primary font-weight-bolder">
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
                                            </span>افزودن
                                            </a>
                                        </router-link>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable2">
                                            <div class="d-flex align-items-center" v-if="progress">
                                                <div class="mr-2 text-muted">لطفا صبر کنید...</div>
                                                <div class="spinner mr-10"></div>
                                            </div>
                                            <thead v-else>
                                            <tr class="bg-gray-100 text-center">
                                                <th>موضوع کار</th>
                                                <th>مدت زمان کار</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="(plan, index) in PlanImplementationsFilter" :id="'del_'+plan.id" class="text-center">
                                                <td>
                                                    <span class="text-dark-75">{{ plan.subject_of_work }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ plan.duration_of_work }}</span>
                                                </td>
                                                <td>
                                                    <router-link :to="{ name: 'description-planimplementations-edit', params: { id: plan.id }}">
                                                        <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                            <i class="flaticon2-edit"></i>
                                                        </a>
                                                    </router-link>
                                                    <button type="button" @click="deletePlanImplementation(plan.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                        <i class="flaticon2-trash" :id="'icon_'+plan.id"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row" v-if="certificate_pagination.total_page > 10">
                                        <div class="col-md-10">
                                            <div class="d-flex flex-wrap py-4 mr-3">
                                                <div :class="{disables: !certificate_pagination.first_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.first_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                                    </a>
                                                </div>
                                                <div :class="{disables: !certificate_pagination.prev_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.prev_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-arrow-back icon-xs"></i>
                                                    </a>
                                                </div>
                                                <div v-for='link in certificate_pagination.links' :class="{active: link.active}" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" @click="getResults(link.url)" v-if="link.label != '&laquo; قبلی' && link.label != 'بعدی &raquo;'">
                                                    <a>{{ link.label }}</a>
                                                </div>
                                                <div :class="{disables: !certificate_pagination.next_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.next_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-arrow-next icon-xs"></i>
                                                    </a>
                                                </div>
                                                <div :class="{disables: !certificate_pagination.last_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(certificate_pagination.last_link)">
                                                    <a href="#">
                                                        <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="d-flex align-items-center py-3">
                                                <span class="text-muted">
                                                    Page: {{ certificate_pagination.from_page }} - {{ certificate_pagination.to_page }}
                                                    Total: {{ certificate_pagination.total_page }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    import Auth from "../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                managerial: {},
                progress: true,
                filterText: null,
                certificate_pagination: {},
                certificates: [],
                plan_implementations: [],
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            this.getResults()
        },
        methods: {
            getResults(pagi) {
                pagi = pagi || '/api/description-managerial';
                axios.get(pagi)
                    .then(response => {
                        this.managerial = response.data.managerial;
                        this.certificates = response.data.certificate.data;
                        this.plan_implementations = response.data.plan_implementations.data;
                        this.certificate_pagination = {
                            current_page: response.data.certificate.current_page,
                            last_page: response.data.certificate.last_page,
                            from_page: response.data.certificate.from,
                            to_page: response.data.certificate.to,
                            total_page: response.data.certificate.total,
                            path_page: response.data.certificate.path+"?page=",
                            links: response.data.certificate.links,
                            first_link: response.data.certificate.first_page_url,
                            last_link: response.data.certificate.last_page_url,
                            prev_link: response.data.certificate.prev_page_url,
                            next_link: response.data.certificate.next_page_url,
                        };
                        this.certificate_pagination = {
                            current_page: response.data.plan_implementations.current_page,
                            last_page: response.data.plan_implementations.last_page,
                            from_page: response.data.plan_implementations.from,
                            to_page: response.data.plan_implementations.to,
                            total_page: response.data.plan_implementations.total,
                            path_page: response.data.plan_implementations.path+"?page=",
                            links: response.data.plan_implementations.links,
                            first_link: response.data.plan_implementations.first_page_url,
                            last_link: response.data.plan_implementations.last_page_url,
                            prev_link: response.data.plan_implementations.prev_page_url,
                            next_link: response.data.plan_implementations.next_page_url,
                        };
                        this.progress = false;
                    });
            },
            deleteCertificate(id, index) {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';
                var formSubmitButton = KTUtil.getById(`icon_${id}`);
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses);

                Swal.fire({
                    title: "آیا می خواهید حذف شود؟",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "بله، حذف شود",
                    cancelButtonText: "لغو",
                }).then(function(result) {
                    if (result.value) {
                        axios.delete(`/description-obtainedcertificates/${id}`)
                            .then(response => {
                                if(response.data[0] == "deleted"){
                                    var table = document.getElementById(`del_${id}`);
                                    table.remove();
                                    Swal.fire({
                                        title: "حذف با موفقیت انجام شد",
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 3000,
                                    });
                                    KTUtil.btnRelease(formSubmitButton);
                                }
                            });
                    } else {
                        KTUtil.btnRelease(formSubmitButton);
                    }

                });
            },
            deletePlanImplementation(id, index) {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';
                var formSubmitButton = KTUtil.getById(`icon_${id}`);
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses);

                Swal.fire({
                    title: "آیا می خواهید حذف شود؟",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "بله، حذف شود",
                    cancelButtonText: "لغو",
                }).then(function(result) {
                    if (result.value) {
                        axios.delete(`/description-planimplementations/${id}`)
                            .then(response => {
                                if(response.data[0] == "deleted"){
                                    var table = document.getElementById(`del_${id}`);
                                    table.remove();
                                    Swal.fire({
                                        title: "حذف با موفقیت انجام شد",
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 3000,
                                    });
                                    KTUtil.btnRelease(formSubmitButton);
                                }
                            });
                    } else {
                        KTUtil.btnRelease(formSubmitButton);
                    }

                });
            },
        },
        computed: {
            certificatesFilter() {
                return this.certificates.filter((element) => {
                    if(!this.filterText){
                        return element
                    }else{
                        return element.description.match(this.filterText) ||
                            element.acquisition_year.toString().match(this.filterText) ||
                            element.comment.match(this.filterText);
                    }
                })
            },
            PlanImplementationsFilter() {
                return this.plan_implementations.filter((element) => {
                    if(!this.filterText){
                        return element
                    }else{
                        return element.subject_of_work.match(this.filterText) ||
                            element.duration_of_work.match(this.filterText) ||
                            element.comment.match(this.filterText);
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>