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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی 1</h5>
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
                                        <b>نیروی انسانی مورد نیاز</b><hr>
                                    </div>
                                    <div class="row" v-for="(man, index) in data.man_power" :key="index">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="materials_unit">نوع نیروی انسانی:
                                                    <span class="text-danger">*</span></label>
                                                <select @change="man.name = null" name="materials_unit" id="materials_unit" class="form-control" v-model.number="man.manpower_type"
                                                        :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.manpower_type`)}]">
                                                    <option value="0">غیر تولیدی</option>
                                                    <option value="1">تولیدی</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.manpower_type`)" style="display: block;">{{ errors.get(`man_power.${index}.manpower_type`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="materials_unit">نام:
                                                    <span class="text-danger">*</span></label>
                                                <select name="materials_unit" class="form-control" v-model="man.name"
                                                        :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.name`)}]">
                                                    <option v-if="man.manpower_type == 1" v-for="production in productions" :value="production.id">{{ production.name }}</option>
                                                    <option v-if="man.manpower_type == 0" v-for="production in non_productions" :value="production.id">{{ production.name }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.name`)" style="display: block;">{{ errors.get(`man_power.${index}.name`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="powers_number">تعداد:</label>
                                                <input type="text" class="form-control" id="powers_number" placeholder="تعداد" name="powers_number" v-model="man.number"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.number`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.number`)" style="display: block;">{{ errors.get(`man_power.${index}.number`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="powers_salary">حقوق ماهانه:</label>
                                                <input type="text" class="form-control" id="powers_salary" placeholder="حقوق ماهانه" name="powers_salary" v-model="man.salary"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.salary`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.salary`)" style="display: block;">{{ errors.get(`man_power.${index}.salary`) }}</div>
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
                year: '',
                productions: '',
                non_productions: '',
                data: {
                    man_power: [{ name: '', manpower_type: 0, number: '', salary: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/manpowers/${this.$route.params.id}/edit`)
                .then(response => {
                    this.productions = response.data.productions;
                    this.non_productions = response.data.non_productions;
                    this.year = response.data.man_power.year;
                    this.data.man_power[0].name = response.data.man_power.name;
                    this.data.man_power[0].manpower_type = response.data.man_power.manpower_type;
                    this.data.man_power[0].number = response.data.man_power.number;
                    this.data.man_power[0].salary = response.data.man_power.salary;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/manpowers/${this.$route.params.id}`, this.data)
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
                                var someTabTriggerEl = document.querySelector('#man-power-tab');
                                var tab = new bootstrap.Tab(someTabTriggerEl);
                                tab.show();
                            }, 1000);
                        }
                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            goBack() {
                this.$router.push({path: `/financial2/year/${this.year}`});
                setTimeout(() => {
                    var someTabTriggerEl = document.querySelector('#man-power-tab');
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