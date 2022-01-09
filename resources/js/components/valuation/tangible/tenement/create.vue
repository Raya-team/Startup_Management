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
                                <a class="text-muted">مشهود</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">مستغلات</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">افزودن</a>
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
                                        <b>مستغلات</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(data, index) in data.valuation_tenements" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="materials_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_description" id="materials_description" class="form-control" v-model="data.description"
                                                            :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.description`)}]">
                                                        <option v-for="tenement in tenements" :value="tenement.id">{{ tenement.description }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.description`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="valuation_tenements.area">متراژ :
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                متر مربع
                                                            </span>
                                                        </div>
                                                        <input placeholder="متراژ" type="text" class="form-control" id="valuation_tenements.area" name="valuation_tenements.area" v-model.number="data.area"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.area`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.area`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.area`) }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit">مالک :
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_unit" id="materials_unit" class="form-control" v-model="data.owner"
                                                            :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.owner`)}]">
                                                        <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.owner`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="valuation_tenements.total_price">قیمت کل :
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input placeholder="قیمت کل" type="text" class="form-control" id="valuation_tenements.total_price" name="valuation_tenements.total_price" v-model.number="data.total_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.total_price`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.total_price`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.total_price`) }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                <a @click="RemoveValuationTenement(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddValuationTenement" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                                    <router-link :to="{ name: 'valuation-tangible-index' }">
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
    import Auth from "../../../../Auth";
    import Errors from "../../../../Errors";

    export default {
        name: "create",
        data() {
            return {
                shareholders: [],
                tenements: [],
                data: {
                    valuation_tenements: [{description: '', area: '', owner: '', total_price: ''}],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/val-tenements/create')
                .then(response => {
                    this.shareholders = response.data.shareholders;
                    this.tenements = response.data.tenements;
                })
                .catch(error => console.log(error));
        },
        methods: {
            AddValuationTenement() {
                this.data.valuation_tenements.push({description: '', area: '', owner: '', total_price: ''});
            },
            RemoveValuationTenement(index) {
                this.data.valuation_tenements.splice(index, 1);
            },
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/val-tenements', this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
                            Swal.fire({
                                title: "اطلاعات با موفقیت ثبت شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'valuation-tangible-index'});
                        }
                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
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