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
                                <router-link :to="{name: 'valuation-costs-index'}">
                                    <a class="text-muted">هزینه</a>
                                </router-link>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                افزودن هزینه
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
                                            <label class="col-lg-2 col-form-label text-right"><h4>هزینه :</h4></label>
                                            <div data-repeater-list="costs" class="col-lg-10">
                                                <transition-group name="slide">
                                                    <div data-repeater-item="" class="form-group row align-items-center" v-for="(cost, index) in data.costs" :key="index">
                                                        <div class="col-md-5">
                                                            <label><h5>شرح :
                                                                <span class="text-danger">*</span></h5></label>
                                                            <input type="text" class="form-control" v-model="cost.description"
                                                                   :class="['form-control', {'is-invalid' : errors.has('costs.' + index +'.description')}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has('costs.' + index +'.description')" style="display: block;">{{ errors.get('costs.' + index +'.description') }}</div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label><h5>قیمت کل :
                                                                <span class="text-danger">*</span></h5></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text noselect">تومان</span>
                                                                </div>
                                                                <input type="text" class="form-control" v-model.number="cost.total_price"
                                                                       :class="['form-control', {'is-invalid' : errors.has('costs.' + index +'.total_price')}]"
                                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                                <div class="invalid-feedback is-invalid" v-if="errors.has('costs.' + index +'.total_price')" style="display: block;">{{ errors.get('costs.' + index +'.total_price') }}</div>
                                                            </div>
                                                        </div>
                                                        <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                            <a @click="RemoveField(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>حذف</a>
                                                        </div>
                                                    </div>
                                                </transition-group>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"></label>
                                            <div @click="AddField" class="col-lg-4">
                                                <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                                    <router-link :to="{ name: 'valuation-costs-index' }">
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
    import Auth from "../../../Auth";
    import Errors from "../../../Errors";

    export default {
        name: "create",
        data() {
            return {
                data: {
                    costs: [{ description: '', total_price: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        methods: {
            AddField() {
                this.data.costs.push({ description: '', total_price: '' });
            },
            RemoveField(index) {
                this.data.costs.splice(index, 1);
            },
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/valuation-costs', this.data)
                    .then(response => {
                        console.log(response.data);
                        if(response.status == 201){
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
                            this.$router.push({name: 'valuation-costs-index'});
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