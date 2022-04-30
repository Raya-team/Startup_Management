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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات دیگر</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">محصولات</div>
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
                            <span class="card-label font-weight-bolder text-dark">لیست محصولات</span>
                        </h3>
                        <div class="card-toolbar my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />
                                <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                            </div>
                        </div>
                        <!--<div class="card-toolbar">
                            <router-link :to="{ name: 'products-create' }">
                                <a class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                &lt;!&ndash;begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Bag2.svg&ndash;&gt;
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                &lt;!&ndash;end::Svg Icon&ndash;&gt;
                            </span>افزودن محصول جدید
                                </a>
                            </router-link>
                        </div>-->
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
                                    <th>نوع محصول</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(product, index) in productFilter" :key="index" :id="'del_'+product.id" class="text-center">
                                    <td class="pl-0 py-0">
                                        <span class="text-dark-75">{{ product.name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ product.type.nickname }}</span>
                                    </td>
                                    <td class="pr-0 text-center">
                                        <router-link :to="{ name: 'products-edit', params: { id: product.id }}">
                                            <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                <i class="flaticon2-edit"></i>
                                            </a>
                                        </router-link>
                                        <!--<button  @click="deleteProduct(product.id)" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                            <i class="flaticon2-trash" :id="'icon_'+product.id"></i>
                                        </button>-->
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
        <materials></materials>
    </div>
</template>

<script>
    import Auth from "../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                products: [],
                progress: true,
                filterText: null,
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/products')
                .then(response => {
                    this.products = response.data;
                    this.progress = false
                })
                .catch(error => console.log(error));
        },
        methods: {
            deleteProduct(id, index) {
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
                        axios.delete(`/products/${id}`)
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
                                        title: "حداقل یک محصول باید داشته باشید",
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
            productFilter() {
                return this.products.filter((element) => {
                    if(!this.filterText){
                        return element
                    }else{
                        return element.name.match(this.filterText) ||
                            element.type.nickname.match(this.filterText);
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