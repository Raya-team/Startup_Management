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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی 2</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">مالی 2</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                مواد اولیه و بسته بندی برای یک واحد محصول
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
                                    <div style="text-align: center;font-size: initial;">
                                        <b>مواد اولیه و بسته بندی برای یک واحد محصول</b><hr>
                                    </div>
                                    <div class="row" v-for="(raw, index) in data.raw_material" :key="index">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="materials_unit">نام محصول:
                                                    <span class="text-danger">*</span></label>
                                                <select name="materials_unit" class="form-control" v-model="raw.product_name"
                                                        :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.product_name`)}]">
                                                    <option v-for="product in products" :value="product.id">{{ product.name }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.product_name`)" style="display: block;">{{ errors.get(`raw_material.${index}.product_name`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="materials_unit">نام:
                                                    <span class="text-danger">*</span></label>
                                                <select name="materials_unit" class="form-control" v-model="raw.name"
                                                        :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.name`)}]">
                                                    <option v-for="material in materials" :value="material.id">{{ material.name }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.name`)" style="display: block;">{{ errors.get(`raw_material.${index}.name`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="materials_consumption">میزان مصرف:</label>
                                                <input type="text" class="form-control" id="materials_consumption" placeholder="میزان مصرف" name="materials_consumption"v-model="raw.consumption"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.consumption`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.consumption`)" style="display: block;">{{ errors.get(`raw_material.${index}.consumption`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="materials_unit">واحد:
                                                    <span class="text-danger">*</span></label>
                                                <select name="materials_unit" id="materials_unit" class="form-control" v-model="raw.unit"
                                                        :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.unit`)}]">
                                                    <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.unit`)" style="display: block;">{{ errors.get(`raw_material.${index}.unit`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="materials_unit_price">قیمت واحد:</label>
                                                <input type="text" class="form-control" id="materials_unit_price" placeholder="قیمت واحد" name="materials_unit_price" v-model="raw.unit_price"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.unit_price`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.unit_price`)" style="display: block;">{{ errors.get(`raw_material.${index}.unit_price`) }}</div>
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
                units: [],
                products: '',
                materials: '',
                year: '',
                data: {
                    raw_material: [{ name: '', product_name: '',consumption: '', unit: '', unit_price: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/rawmaterials/${this.$route.params.id}/edit`)
                .then(response => {
                    this.units = response.data.units;
                    this.year = response.data.raw_material.year;
                    this.products = response.data.products;
                    this.materials = response.data.materials;
                    this.data.raw_material[0].product_name = response.data.raw_material.product_name;
                    this.data.raw_material[0].name = response.data.raw_material.name;
                    this.data.raw_material[0].consumption = response.data.raw_material.consumption;
                    this.data.raw_material[0].unit = response.data.raw_material.unit;
                    this.data.raw_material[0].unit_price = response.data.raw_material.unit_price;
                    this.data.raw_material[0].total_price = response.data.raw_material.total_price;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/rawmaterials/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
                            Swal.fire({
                                title: "اطلاعات تجهیزات با موفقیت ثبت شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({path: `/financial2/year/${this.year}`});
                            setTimeout(() => {
                                var someTabTriggerEl = document.querySelector('#material-tab');
                                var tab = new bootstrap.Tab(someTabTriggerEl);
                                tab.show();
                            }, 1000);
                        }
                    })
                    .catch(error => {
                        console.log(error.response.data);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            goBack() {
                this.$router.push({path: `/financial2/year/${this.year}`});
                setTimeout(() => {
                    var someTabTriggerEl = document.querySelector('#material-tab');
                    var tab = new bootstrap.Tab(someTabTriggerEl);
                    tab.show();
                }, 500);
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