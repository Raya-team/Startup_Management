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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">سهام مشارکت</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">ایجاد</a>
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
                            <div class="card-body" style="padding-bottom: 0px">
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
                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            </div>
                            <!--begin::Form-->
                            <form class="form" id="kt_form" @submit.prevent="onSubmit">
                                <div class="card-body" style="padding-top: 15px">
                                    <div id="kt_repeater_1">
                                        <div class="text-center">
                                            <b style="font-size: initial;">تامین از موسسین و سرمایه گذاران قبلی</b><br><br><br>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="form-group row" v-for="(investor, index) in data.pre_investors" :key="index">
                                                <div data-repeater-list="" class="col-lg-12">
                                                    <div data-repeater-item="" class="form-group row align-items-center">
                                                        <div class="col-md-4">
                                                            <label>نام تامین کننده:</label>
                                                            <select name="pre_supplier_name" class="form-control" v-model="investor.investor">
                                                                <option v-for="member in members" :value="member.id">{{ member.fname }} {{ member.lname }}</option>
                                                            </select>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>میزان سرمایه گذاری:</label>
                                                            <input type="text" class="form-control products" name="pre_investment" v-model="investor.investment"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div v-if="index != 0" class="col-md-4" style="padding-top: 23px">
                                                            <a @click="RemovePreInvestors(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddPreInvestors" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <div id="kt_repeater_2">
                                        <div class="text-center">
                                            <b style="font-size: initial;">تامین از سرمایه گذاران جدید</b><br><br><br>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="form-group row" v-for="(investor, index) in data.new_investors" :key="index">
                                                <div data-repeater-list="" class="col-lg-12">
                                                    <div data-repeater-item="" class="form-group row align-items-center">
                                                        <div class="col-md-4">
                                                            <label>نام تامین کننده:</label>
                                                            <input type="text" class="form-control products" name="new_supplier_name" v-model="investor.supplier"/>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>میزان سرمایه گذاری:</label>
                                                            <input type="text" class="form-control products" name="new_investment"  v-model="investor.investment"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div v-if="index != 0" class="col-md-4" style="padding-top: 23px">
                                                            <a @click="RemoveNewInvestors(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddNewInvestors" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
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
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                members: [],
                financial_total_price: '',
                valuation_total_price: '',
                data: {
                    pre_investors: [{ investor: '', investment: '' }],
                    new_investors: [{ supplier: '', investment: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/participation-shares/create')
                .then(response => {
                    this.members = response.data.members;
                    this.financial_total_price = response.data.financial_total_price;
                    this.valuation_total_price = response.data.valuation_total_price;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post(`/participation-shares`, this.data)
                    .then(response => {
                        console.log(response);
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
                            this.$router.push({name: 'participation-shares-index'});
                        }
                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            AddPreInvestors() {
                this.data.pre_investors.push({ investor: '', investment: '' });
            },
            RemovePreInvestors(index) {
                this.data.pre_investors.splice(index, 1);
            },
            AddNewInvestors() {
                this.data.new_investors.push({ supplier: '', investment: '' });
            },
            RemoveNewInvestors(index) {
                this.data.new_investors.splice(index, 1);
            },
        },
    }
</script>

<style>
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{
        font-weight: 600
    }
    .wizard.wizard-2 .wizard-nav{
        -webkit-box-flex: 0;
        flex: 0 0 400px;
        width: auto;
        max-width: none;
    }
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current]{
        background-color: #509eff45;
        -webkit-transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease, -webkit-box-shadow 0.15s ease;
    }
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current]:after{
        left: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        content: " ";
        height: 0;
        width: 0;
        border: solid transparent;
        position: absolute;
        border-left-color: #509eff45;
        border-width: 1rem;
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