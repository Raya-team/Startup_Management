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
                            <li class="breadcrumb-item text-muted">
                                مواد اولیه
                            </li>
                            <li class="breadcrumb-item text-muted">
                                ویرایش
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
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"><h4>مواد اولیه:</h4></label>
                                            <div data-repeater-list="material" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center" v-for="(mat, index) in data.material" :key="index">
                                                    <div class="col-md-4">
                                                        <label><h5>نام محصول:
                                                            <span class="text-danger">*</span></h5></label>
                                                        <select name="product_name" class="form-control" v-model="mat.product_name" :class="['form-control', {'is-invalid' : errors.has(type_error[index])}]">
                                                            <option v-for="product in products" :value="product.id">{{ product.name }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(type_error[index])" style="display: block;">{{ errors.get(type_error[index]) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><h5>نام:
                                                            <span class="text-danger">*</span></h5></label>
                                                        <input type="text" class="form-control materials" name="name" v-model="mat.name" :class="['form-control', {'is-invalid' : errors.has(name_error[index])}]" required />
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(name_error[index])" style="display: block;">{{ errors.get(name_error[index]) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <router-link :to="{ name: 'products-index' }">
                                        <button type="submit" style="float: left;" class="btn btn-danger mr-2">بازگشت</button>
                                    </router-link>
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
    import Auth from "../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                products: [],
                data: {
                    material: [{ name: '',product_name: '' }],
                },
                name_error: ['material.0.name'],
                type_error: ['material.0.product_name'],
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/materials/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.material[0].name = response.data.materials.name;
                    this.data.material[0].product_name = response.data.materials.product_name;
                    this.products = response.data.products;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/materials/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
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
                        KTUtil.btnRelease(formSubmitButton);
                    });
            }
        },
    }
</script>

<style scoped>

</style>