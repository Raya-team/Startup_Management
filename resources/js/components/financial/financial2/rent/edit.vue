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
                                اجاره
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
                                        <b>اجاره</b><hr>
                                    </div>
                                    <div class="row" v-for="(ren, index) in data.rent" :key="index">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="rents_description">شرح:</label>
                                                <input type="text" class="form-control" id="rents_description" placeholder="شرح" name="rents_description" v-model="ren.description"
                                                       :class="['form-control', {'is-invalid' : errors.has(`rent.${index}.description`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`rent.${index}.description`)" style="display: block;">{{ errors.get(`rent.${index}.description`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="area">متراژ:</label>
                                                <input type="text" class="form-control" id="area" placeholder="متراژ" name="area" v-model="ren.area"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has(`rent.${index}.area`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`rent.${index}.area`)" style="display: block;">{{ errors.get(`rent.${index}.area`) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="monthly_rent">اجاره ماهانه:</label>
                                                <input type="text" class="form-control" id="monthly_rent" placeholder="اجاره ماهانه" name="monthly_rent" v-model="ren.monthly_rent"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has(`rent.${index}.monthly_rent`)}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has(`rent.${index}.monthly_rent`)" style="display: block;">{{ errors.get(`rent.${index}.monthly_rent`) }}</div>
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
                data: {
                    rent: [{ description: '', area: '', monthly_rent: '', total_rent: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/rents/${this.$route.params.id}/edit`)
                .then(response => {
                    this.year = response.data.year;
                    this.data.rent[0].description = response.data.description;
                    this.data.rent[0].area = response.data.area;
                    this.data.rent[0].monthly_rent = response.data.monthly_rent;
                    this.data.rent[0].total_rent = response.data.total_rent;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/rents/${this.$route.params.id}`, this.data)
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
                                var someTabTriggerEl = document.querySelector('#rent-tab');
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
                    var someTabTriggerEl = document.querySelector('#rent-tab');
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