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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام مشارکت</h5>
                        <!--end::Page Title-->
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
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-body">
                                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-9">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">کل سرمایه لازم</h6></th>
                                                    <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">تامین شده</h6></th>
                                                    <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">مورد نیاز</h6></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="font-weight-bolder">
                                                    <td class="font-size-h3 font-weight-boldest">{{ financial_total_price }}</td>
                                                    <td class="font-size-h3 font-weight-boldest">{{ valuation_total_price }}</td>
                                                    <td class="text-danger font-size-h3 font-weight-boldest">{{ financial_total_price - valuation_total_price }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <pre-investors></pre-investors>
                        </div>
                        <!--end::Card-->
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <new-investors></new-investors>
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
                                        <span class="card-label font-weight-bolder text-dark">جدول سهامداران</span>
                                    </h3>
                                    <div class="card-toolbar my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="جستجو..." />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table id="myTable2" class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th>نام سهامدار</th>
                                                <th>سمت</th>
                                                <th>درصد سهم</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center" v-for="(shareholder, index) in shareholders" :key="index">
                                                <td>
                                                    <span class="text-dark-75">{{ shareholder[0] }}</span>
                                                </td>
                                                <td>
                                                    <div v-for="res in shareholder[1]"><span class="label label-lg label-light-primary label-inline mt-1" >{{ res }}</span><br></div>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ shareholder[2] }} %</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
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
                financial_total_price: '',
                valuation_total_price: '',
                shareholders: '',
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/participation-shares')
                .then(response => {
                    this.financial_total_price = response.data.financial_total_price;
                    this.valuation_total_price = response.data.valuation_total_price;
                    this.shareholders = response.data.shareholders;
                })
                .catch(error => {console.log(error);});
        },
    }
</script>

<style scoped>

</style>