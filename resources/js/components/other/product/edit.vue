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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات دیگر</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <router-link :to="{name: 'products-index'}">
                                    <a class="text-muted">محصولات</a>
                                </router-link>
                            </li>
                            <li class="breadcrumb-item text-muted">ویرایش</li>
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
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"><h4>محصول:</h4></label>
                                            <div data-repeater-list="product" class="col-lg-10">
                                                    <div data-repeater-item="" class="form-group row align-items-center" v-for="(pro, index) in data.product" :key="index">
                                                        <div class="col-md-4">
                                                            <label><h5>نام محصول:</h5></label>
                                                            <input type="text" class="form-control products" name="product_name" v-model="pro.product_name" :class="['form-control', {'is-invalid' : errors.has(name_error[index])}]" required />
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(name_error[index])" style="display: block;">{{ errors.get(name_error[index]) }}</div>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><h5>نوع محصول:</h5></label>
                                                            <select name="product_type" class="form-control" v-model="pro.product_type" :class="['form-control', {'is-invalid' : errors.has(type_error[index])}]">
                                                                <option v-for="type in productTypes" :value="type.id">{{ type.nickname }}</option>
                                                            </select>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(type_error[index])" style="display: block;">{{ errors.get(type_error[index]) }}</div>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
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
    import Errors from './../../../Errors';

    export default {
        name: "edit",
        data() {
            return {
                productTypes: [],
                data: {
                    id: null,
                    product: [{ product_name: '',product_type: '' }],
                },
                name_error: ['product.0.product_name'],
                type_error: ['product.0.product_type'],
                errors: new Errors(),
            }
        },
        created() {
            axios.get(`/api/products/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.id = response.data.product.id;
                    this.data.product[0].product_name = response.data.product.name;
                    this.data.product[0].product_type = response.data.product.type_id;
                    this.productTypes = response.data.product_types;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                axios.put(`/products/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
                            var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                            var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                            KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                            Swal.fire({
                                title: "محصولات با موفقیت ثبت شدند",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'products-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                    });
            }
        },
    }
</script>

<style scoped>

</style>