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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="/financial2" class="text-muted">اطلاعات مالی دو</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">ظرفیت</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">ویرایش</a>
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
                                        <b>ظرفیت</b><hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nominal_capacity">ظرفیت اسمی(در سال):
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nominal_capacity" placeholder="ظرفیت اسمی" name="nominal_capacity" v-model="data.nominal_capacity"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('nominal_capacity')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('nominal_capacity')" style="display: block;">{{ errors.get('nominal_capacity') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capacity_unit">واحد:
                                                    <span class="text-danger">*</span></label>
                                                <select name="capacity_unit" id="capacity_unit" class="form-control" v-model="data.unit"
                                                        :class="['form-control', {'is-invalid' : errors.has('unit')}]">
                                                    <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('unit')" style="display: block;">{{ errors.get('unit') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capacity_percent">درصد استفاده از ظرفیت اسمی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="capacity_percent" placeholder="درصد استفاده از ظرفیت اسمی" name="capacity_percent" v-model="data.percent"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('percent')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('percent')" style="display: block;">{{ errors.get('percent') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="total_production">تعداد تولید واقعی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="total_production" placeholder="تعداد تولید واقعی" name="total_production" v-model="data.total_production"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('total_production')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('total_production')" style="display: block;">{{ errors.get('total_production') }}</div>
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
    import Errors from "../../../../Errors";
    import Auth from "../../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                units: [],
                data: {},
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/capacities/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data = response.data.capacity;
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
                axios.put(`/capacities/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if(response.status == 201){
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
                            this.$router.push({path: `/financial2/year/${this.data.year}`});
                            setTimeout(() => {
                                var someTabTriggerEl = document.querySelector('#capacity-tab');
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
                this.$router.push({path: `/financial2/year/${this.data.year}`});
                setTimeout(() => {
                    var someTabTriggerEl = document.querySelector('#capacity-tab');
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

<style scoped>

</style>