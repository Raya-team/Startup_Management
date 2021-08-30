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
                       <h5 class="text-dark font-weight-bold my-1 mr-5">اعضای تیم</h5>
                       <!--end::Page Title-->
                       <!--begin::Breadcrumb-->
                       <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                           <li class="breadcrumb-item text-muted">
                               <a href="#" class="text-muted">سهامداران</a>
                           </li>
                           <li class="breadcrumb-item text-muted">
                               <a href="#" class="text-muted">افزودن</a>
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
                           <form method="POST" action="#" class="form" novalidate="novalidate" id="kt_login_signup_form">
                               <div class="card-body">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="fname">نام:
                                                   <span class="text-danger">*</span></label>
                                               <input type="text" class="form-control" id="fname" placeholder="نام خود را وارد کنید."
                                                      name="fname" value="" required/>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="lname">نام خانوادگی:
                                                   <span class="text-danger">*</span></label>
                                               <input type="text" class="form-control" id="lname"
                                                      placeholder="نام خانوادگی خود را وارد کنید." name="lname"
                                                      value="" required/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="major">رشته:
                                                   <span class="text-danger">*</span></label>
                                               <input type="text" class="form-control" id="major" placeholder="رشته خود را وارد کنید."
                                                      name="major" value="" required/>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="age">سال تولد:
                                                   <span class="text-danger">*</span></label>
                                               <select name="age" id="age" class="form-control">
                                                   <option v-for="x in 100" v-model="x">{{ x }}</option>
                                               </select>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="education">تحصیلات:
                                                   <span class="text-danger">*</span></label>
                                               <select name="education" id="education" class="form-control">
                                                   <option v-for="edu in education" v-model="edu">{{ edu }}</option>
                                               </select>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="kt_select2_3">مسئولیت:
                                                   <span class="text-danger">*</span></label>
                                               <select name="responsibility[]" id="kt_select2_3" multiple="multiple"
                                                       class="form-control select2"
                                                       data-placeholder="با نگه داشتن Ctrl می‌توانید مسئولیت‌های بیشتری را انتخاب کنید">
                                                   <option v-for="responsibility in responsibilities" v-model="responsibility">{{ responsibility }}</option>
                                               </select>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="resume">سابقه عضویت در تیم(بر حسب سال):
                                                   <span class="text-danger">*</span></label>
                                               <select name="resume" id="resume" class="form-control">
                                                   <option v-for="n in 20" v-model="n">{{n}}</option>
                                               </select>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="investment">سرمایه گذاری:
                                                   <span class="text-danger">*</span></label>
                                               <input type="text" class="form-control" id="investment" placeholder="برحسب تومان"
                                                      name="investment" value=""
                                                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                      required/>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-footer">
                                   <button type="submit" class="btn btn-primary mr-2">ثبت</button>
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
    export default {
        name: "create",
        data(){
            return {
                education: [],
                responsibilities: [],
                this_year: []
            }
        },
        created(){
            axios.get('/api/shareholders/create')
                .then(response => {
                    this.education = response.data.education;
                    this.responsibilities = response.data.responsibilities;
                    this.this_year = response.datathis_year;
                    console.log(this.education);
                });
        }
    }
</script>

<style scoped>

</style>