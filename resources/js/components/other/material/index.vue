<template>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::table-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">لیست مواد اولیه</span>
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
                        <router-link :to="{ name: 'materials-create' }">
                            <a class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Bag2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>افزودن مواد اولیه
                            </a>
                        </router-link>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                            <div class="d-flex align-items-center" v-if="progress">
                                <div class="mr-2 text-muted">لطفا صبر کنید...</div>
                                <div class="spinner mr-10"></div>
                            </div>
                            <thead v-else>
                            <tr class="bg-gray-100 text-center">
                                <th>نام محصول</th>
                                <th>نام مواد اولیه</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(material, index) in materialFilter" :key="index" :id="'del_'+material.id" class="text-center">
                                <td>
                                    <span class="text-dark-75">{{ material.product.name }}</span>
                                </td>
                                <td class="pl-0 py-0">
                                    <span class="text-dark-75">{{ material.name }}</span>
                                </td>
                                <td class="pr-0 text-center">
                                    <router-link :to="{ name: 'materials-edit', params: { id: material.id }}">
                                        <a class="btn btn-icon btn-light-success btn-sm mr-2">
                                            <i class="flaticon2-edit"></i>
                                        </a>
                                    </router-link>
                                    <button  @click="deleteMaterial(material.id)" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                        <i class="flaticon2-trash" :id="'icon_'+material.id"></i>
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
</template>

<script>
    import Auth from "../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                materials: [],
                progress: true,
                filterText: null,
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/materials')
                .then(response => {
                    this.materials = response.data;
                    this.progress = false;
                })
                .catch(error => console.log(error));
        },
        methods: {
            deleteMaterial(id, index) {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';
                var formSubmitButton = KTUtil.getById(`icon_${id}`);
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses);

                Swal.fire({
                    title: "از حذف این آیتم اطمینان دارید؟",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "بله، حذف شود",
                    cancelButtonText: "لغو",
                }).then(function(result) {
                    if (result.value) {
                        axios.delete(`/materials/${id}`)
                            .then(response => {
                                if(response.data[0] == "deleted"){
                                    var table = document.getElementById(`del_${id}`);
                                    table.remove();
                                    Swal.fire({
                                        title: "آیتم مورد نظر با موفقیت حذف شد",
                                        icon: "success",
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
            materialFilter() {
                return this.materials.filter((element) => {
                    if(!this.filterText){
                        return element
                    }else{
                        return element.name.match(this.filterText) ||
                            element.product.name.match(this.filterText);
                    }
                })
            }
        }
    }
</script>

<style scoped>
    .text-right {
        text-align: right!important;
    }
    .font-size-lg {
        margin-right: 10px;
    }
    .footer {
        margin-top: 500px !important;
    }
</style>