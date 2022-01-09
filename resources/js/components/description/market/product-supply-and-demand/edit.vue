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
                                <a class="text-muted">بازار</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">بررسی عرضه و تقاضای محصول</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">ویرایش</a>
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
                            <form class="form" novalidate="novalidate" id="kt_login_signup_form" @submit.prevent="onSubmit">
                                <div class="card-body">
                                    <div style="text-align: center;font-size: initial;">
                                        <b>بررسی عرضه و تقاضای محصول</b><hr>
                                    </div>
                                    <div class="form-group row" v-for="(pro, index) in data.product_supplies" :key="index">
                                        <div data-repeater-list="" class="col-lg-10">
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-3">
                                                    <label>سال:</label>
                                                    <input type="text" class="form-control products" name="year" v-model="pro.year"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`product_supplies.${index}.year`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`product_supplies.${index}.year`)" style="display: block;">{{ errors.get(`product_supplies.${index}.year`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-5">
                                                    <label>تقاضای کل:</label>
                                                    <input type="text" class="form-control products" name="general_request" v-model="pro.general_request"
                                                           :class="['form-control', {'is-invalid' : errors.has(`product_supplies.${index}.general_request`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`product_supplies.${index}.general_request`)" style="display: block;">{{ errors.get(`product_supplies.${index}.general_request`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>تولید داخل:</label>
                                                    <input type="text" class="form-control products" name="domestic_production" v-model="pro.domestic_production"
                                                           :class="['form-control', {'is-invalid' : errors.has(`product_supplies.${index}.domestic_production`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`product_supplies.${index}.domestic_production`)" style="display: block;">{{ errors.get(`product_supplies.${index}.domestic_production`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>واردات:</label>
                                                    <input type="text" class="form-control products" name="importation" v-model="pro.importation"
                                                           :class="['form-control', {'is-invalid' : errors.has(`product_supplies.${index}.importation`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`product_supplies.${index}.importation`)" style="display: block;">{{ errors.get(`product_supplies.${index}.importation`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>واحد:</label>
                                                    <select name="unit" class="form-control" v-model="pro.unit_id"
                                                            :class="['form-control', {'is-invalid' : errors.has(`product_supplies.${index}.unit_id`)}]">
                                                        <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`product_supplies.${index}.unit_id`)" style="display: block;">{{ errors.get(`product_supplies.${index}.unit_id`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <button @click="goBack()" type="submit" style="float: left;" class="btn btn-danger mr-2">بازگشت</button>
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
    </div>
</template>

<script>
    import Auth from "../../../../Auth";
    import Errors from "../../../../Errors";

    export default {
        name: "edit",
        data() {
            return {
                units: '',
                data: {
                    product_supplies: [{ year: '', general_request: '', domestic_production: '', importation: '', unit_id: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/product-supply-and-demands/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.product_supplies[0].year = response.data.product_supply_and_demand.year;
                    this.data.product_supplies[0].general_request = response.data.product_supply_and_demand.general_request;
                    this.data.product_supplies[0].domestic_production = response.data.product_supply_and_demand.domestic_production;
                    this.data.product_supplies[0].importation = response.data.product_supply_and_demand.importation;
                    this.data.product_supplies[0].unit_id = response.data.product_supply_and_demand.unit_id;
                    this.units = response.data.units;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/product-supply-and-demands/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
                            Swal.fire({
                                title: "اطلاعات با موفقیت ویرایش شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'description-market-index', params: {tab : '#product-supply-and-demands-tab'}});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            goBack() {
                this.$router.push({name: 'description-market-index', params: {tab : '#product-supply-and-demands-tab'}});
            }
        },
    }
</script>

<style scoped>
    .noselect {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #a2a2a2;
    }
    .slide-enter{
        opacity: 0;
        /*transform: translateY(20px)*/
    }
    .slide-enter-active{
        animation: slide-in 1s ease-out forwards;
        transition: opacity .5s;
    }
    .slide-leave{

    }
    .slide-leave-active{
        transition: all 1s ease;
    }
    .slide-leave-to {
        opacity: 0;
        transform: translateY(30px);
    }
    .slide-move{
        transition: transform 1s;
    }

    @keyframes slide-in {
        from {
            transform: translateY(20px)
        }
        to {
            transform: translateY(0)
        }
    }
    @keyframes slide-out {
        from {
            transform: translateY(0)
        }
        to {
            transform: translateY(20px)
        }
    }
</style>