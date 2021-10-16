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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">بوم کسب و کار</h5>
                        <!--end::Page Title-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <div class="d-flex align-items-center">
                    <router-link :to="{ name: 'businesscanvas-edit', params: { id: data.id }}">
                        <a class="btn btn-success font-weight-bolder" dideo-checked="true">
                          <span data-v-c75cca8a="" class="svg-icon svg-icon-md">
                              <svg data-v-c75cca8a="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g data-v-c75cca8a="" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon data-v-c75cca8a="" points="0 0 24 0 24 24 0 24"></polygon>
                                      <path data-v-c75cca8a="" d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                      <path data-v-c75cca8a="" d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                  </g>
                              </svg>
                          </span>ویرایش اطلاعات
                        </a>
                    </router-link>
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
                            <div class="card-header">
                                <h3 class="card-title">شرکای کلیدی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.key_partners }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">فعالیت های اصلی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.main_activities }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">منابع اصلی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.main_sources }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">ساختار هزینه</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.cost_structure }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">ارزش پیشنهادی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.suggested_value }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">ارتباط با مشتریان</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.communication_with_clients }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">کانال توزیع</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.distribution_channels }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">بخش مشتریان</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.customer_section }}</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">جریان درآمد</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">{{ data.income_flow }}</p>
                            </div>
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
    import Auth from "../../Auth";

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
            axios.get('/api/businesscanvas')
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => {console.log(error);});
        },
    }
</script>

<style scoped>

</style>