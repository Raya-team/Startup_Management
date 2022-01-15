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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">ارزش گذاری</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">نامشهود</div>
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
                <div class="card card-custom gutter-b">
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">نامشهود</span>
                        </h3>
                        <div class="card-toolbar">
                            <router-link :to="{name: 'valuation-intangible-edit', params: { id: team_id }}">
                                <a class="btn btn-success font-weight-bolder">
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
                                    </span>ویرایش اطلاعات
                                </a>
                            </router-link>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-3">
                        <div class="card card-custom gutter-b">
                            <!--begin::Invoice Body-->
                            <div class="position-relative">
                                <!--begin::Background Rows-->
                                <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(assets/media/svg/shapes/abstract-7.svg);"></div>
                                <div>
                                    <div class="bg-white h-65px"></div>
                                    <div class="bg-light h-65px"></div>
                                    <div class="bg-white h-65px"></div>
                                    <div class="bg-light h-65px"></div>
                                </div>
                                <!--end::Background Rows-->
                                <!--begin:Table-->
                                <div class="container position-absolute top-0 left-0 right-0">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr class="font-weight-boldest text-white h-65px">
                                                        <td class="align-middle font-size-h4 text-center pl-0 border-0">سوالات</td>
                                                        <td class="align-middle font-size-h4 text-center border-0">مقادیر</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="font-size-lg font-weight-bolder h-65px">
                                                        <td class="align-middle text-center border-0">نرخ تنزیل مورد نظر چند درصد است</td>
                                                        <td class="align-middle text-center border-0">{{ q.question_1 }} %</td>
                                                    </tr>
                                                    <tr class="font-size-lg font-weight-bolder h-65px">
                                                        <td class="align-middle text-center border-0">در بهترین حالت فروش و هزینه های شما چقدر بهبود می یابد</td>
                                                        <td class="align-middle text-center border-0">{{ q.question_2 }} %</td>
                                                    </tr>
                                                    <tr class="font-size-lg font-weight-bolder h-65px">
                                                        <td class="align-middle text-center border-0">در بدترین حالت فروش و هزینه های شما چقدر تغییر می یابد</td>
                                                        <td class="align-middle text-center border-0">{{ q.question_3 }} %</td>
                                                    </tr>
                                                    <tr class="font-size-lg font-weight-bolder h-65px">
                                                        <td class="align-middle text-center border-0">عمر تکنولوژِی چند سال می باشد</td>
                                                        <td class="align-middle text-center border-0">{{ q.question_4 }} سال</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:Table-->
                            </div>
                            <!--end::Invoice Body-->
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-3">
                        <div class="card card-custom gutter-b">
                            <!--begin::Invoice Body-->
                            <div class="position-relative">
                                <!--begin::Background Rows-->
                                <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(assets/media/svg/shapes/abstract-10.svg);"></div>
                                <div>
                                    <div class="bg-white h-65px"></div>
                                    <div class="bg-light h-65px"></div>
                                    <div class="bg-white h-65px"></div>
                                    <div class="bg-light h-65px"></div>
                                </div>
                                <!--end::Background Rows-->
                                <!--begin:Table-->
                                <div class="container position-absolute top-0 left-0 right-0">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr class="font-weight-boldest text-white h-65px">
                                                        <td class="align-middle font-size-h4 text-center pl-0 border-0">مدل ارزش گذاری</td>
                                                        <td class="align-middle font-size-h4 text-center border-0">مقدار (تومان)</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="font-size-lg font-weight-bolder h-65px">
                                                        <td class="align-middle text-center border-0">{{ model }}</td>
                                                        <td class="align-middle text-center border-0">{{ value }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:Table-->
                            </div>
                            <!--end::Invoice Body-->
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
</template>

<script>
    import Auth from "../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                team_id: null,
                q: [],
                model: '',
                value: '',
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/valuation-intangible')
                .then(response => {
                    this.team_id = response.data.team_id;
                    this.q = response.data.questions;
                    this.model = response.data.model.valuation_model.name;
                    this.value = response.data.value;
                })
                .catch(error => console.log(error));
        },
    }
</script>

<style scoped>

</style>