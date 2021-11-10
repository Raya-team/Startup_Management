<template>
    <div>
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                <div class="card-header">
                                    <h3 class="card-title">معرفی محصول</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.product_introduction }}</p>
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
                                    <h3 class="card-title">ویژگی های محصول</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.product_features }}</p>
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
                                    <h3 class="card-title">مزیت های رقابتی محصول</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.product_competitive_advantages }}</p>
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
                                    <h3 class="card-title">تجزیه و تحلیل موقعیت</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.position_analysis }}</p>
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
                                    <h3 class="card-title">استراتژی قیمت گذاری محصول</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.product_pricing_strategy }}</p>
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
                                    <h3 class="card-title">استراتژی بازاریابی محصول</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.product_marketing_strategy }}</p>
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
                                    <h3 class="card-title">وضعیت بازار</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.market_status }}</p>
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
                                    <h3 class="card-title">وضعیت بازار</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.target_market }}</p>
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
                                    <h3 class="card-title">وضعیت بازار</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.forecast_the_future_of_the_market }}</p>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-center">
                        <router-link :to="{ name: 'description-market-edit', params: { id: data.id }}">
                            <a class="btn btn-success font-weight-bolder">ویرایش اطلاعات</a>
                        </router-link>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    import Auth from "../../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                data: {},
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/description-market')
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => {console.log(error);});
        },
    }
</script>

<style scoped>

</style>