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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات تیم</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">سهامداران</div>
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
                <!--begin::table-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">لیست سهامداران</span>
                        </h3>
                        <div class="card-toolbar my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />
                                <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <router-link :to="{ name: 'shareholders-create' }">
                                <a class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>افزودن سهامدار جدید
                                </a>
                            </router-link>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                <div class="d-flex align-items-center" v-if="progress">
                                    <div class="mr-2 text-muted">لطفا صبر کنید...</div>
                                    <div class="spinner mr-10"></div>
                                </div>
                                <thead v-else>
                                <tr class="bg-gray-100 text-center">
                                    <th class="pl-7">نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>تحصیلات</th>
                                    <th>رشته</th>
                                    <th>سال تولد</th>
                                    <th>رزومه</th>
                                    <th>مسئولیت</th>
                                    <th>سرمایه گذاری</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(shareholder, index) in shareholdersFilter" :id="'del_'+shareholder.id" :key="index" class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{ shareholder.fname }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ shareholder.lname }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ shareholder.education.nickname }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-750">{{ shareholder.major }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ shareholder.age }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ shareholder.resume }}</span>
                                    </td>
                                    <td>
                                        <div v-for="res in shareholder.responsibility"><span class="label label-lg label-light-primary label-inline mt-1" >{{ res.nickname }}</span><br></div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ shareholder.investment }}</span>
                                    </td>
                                    <td>
                                        <router-link :to="{ name: 'shareholders-edit', params: { id: shareholder.id }}">
                                            <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                <i class="flaticon2-edit"></i>
                                            </a>
                                        </router-link>
                                        <button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">
                                            <i class="flaticon2-trash" :id="'icon_'+shareholder.id"></i>
                                        </button>
                                    </td>
                                    <hr>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::table-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    import Auth from "../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                shareholders: [],
                progress: true,
                filterText: null,
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/shareholders')
                .then(response => {
                    this.shareholders = response.data;
                    this.progress = false;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            deleteShareholder(id, index) {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';
                var formSubmitButton = KTUtil.getById(`icon_${id}`);
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses);
                Swal.fire({
                    title: "آیا می خواهید حذف شود؟",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "بله، حذف شود",
                    cancelButtonText: "لغو",
                }).then(function(result) {
                    if (result.value) {
                        axios.delete(`/shareholders/${id}`)
                            .then(response => {
                                if(response.data[0] == "deleted"){
                                    var table = document.getElementById(`del_${id}`);
                                    table.remove();
                                    Swal.fire({
                                        title: "حذف با موفقیت انجام شد",
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 3000,
                                    });
                                    KTUtil.btnRelease(formSubmitButton);
                                }else if(response.data[0] == "undeleted"){
                                    Swal.fire({
                                        title: "حداقل یک سهامدار باید داشته باشید",
                                        icon: "error",
                                        showConfirmButton: false,
                                        timer: 3000,
                                    });
                                    KTUtil.btnRelease(formSubmitButton);
                                }
                            })
                    } else {
                        KTUtil.btnRelease(formSubmitButton);
                    }
                });
            },
        },
        computed: {
            shareholdersFilter() {
                return this.shareholders.filter((element) => {
                    if(!this.filterText){
                        return element
                    }else{
                        return element.fname.match(this.filterText) ||
                            element.lname.match(this.filterText) ||
                            element.education.nickname.match(this.filterText) ||
                            element.major.match(this.filterText) ||
                            element.age.toString().match(this.filterText);
                            // element.responsibility[0].nickname.match(this.filterText);
                                // for(var i=0 ; i<element.responsibility.length; i++)
                                // {
                                //     element.responsibility[i].nickname.match(this.filterText);
                                // };

                            // element.resume.toString().match(this.filterText);

                    }
                })
            }
        },
    }
</script>

<style scoped>

</style>