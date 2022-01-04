<template>
    <div>
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::table-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <div class="card-toolbar my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <router-link :to="{ name: 'rents-create', params: { year: this.$route.params.id }}">
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
                                    </span>افزودن
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
                                    <th>ردیف</th>
                                    <th>شرح</th>
                                    <th>متراژ</th>
                                    <th>اجاره ماهانه(تومان)</th>
                                    <th>اجاره کل(تومان)</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(rent, index) in rentsFilter" :id="'del_'+rent.id" class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{ ++index }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ rent.description }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ rent.area }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-750">{{ rent.monthly_rent }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-750">{{ rent.total_rent }}</span>
                                    </td>
                                    <td>
                                        <router-link :to="{ name: 'rents-edit', params: { id: rent.id }}">
                                            <a class="btn btn-icon btn-light-success btn-sm mr-2">
                                                <i class="flaticon2-edit"></i>
                                            </a>
                                        </router-link>
                                        <button type="button" @click="deleteRent(rent.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">
                                            <i class="flaticon2-trash" :id="'icon_'+rent.id"></i>
                                        </button>
                                    </td>
                                    <hr>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row" v-if="pagination.total_page > 10">
                            <div class="col-md-10">
                                <div class="d-flex flex-wrap py-4 mr-3">
                                    <div :class="{disables: !pagination.first_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(pagination.first_link)">
                                        <a href="#">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                    </div>
                                    <div :class="{disables: !pagination.prev_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(pagination.prev_link)">
                                        <a href="#">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                    </div>
                                    <div v-for='link in pagination.links' :class="{active: link.active}" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" @click="getResults(link.url)" v-if="link.label != '&laquo; قبلی' && link.label != 'بعدی &raquo;'">
                                        <a>{{ link.label }}</a>
                                    </div>
                                    <div :class="{disables: !pagination.next_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(pagination.next_link)">
                                        <a href="#">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div :class="{disables: !pagination.last_link}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" @click="getResults(pagination.last_link)">
                                        <a href="#">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="d-flex align-items-center py-3">
                                <span class="text-muted">
                                    Page: {{ pagination.from_page }} - {{ pagination.to_page }}
                                    Total: {{ pagination.total_page }}
                                </span>
                                </div>
                            </div>
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
    import Auth from "../../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                rents: [],
                progress: true,
                filterText: null,
                pagination: {},
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            this.getResults()
        },
        methods: {
            getResults(pagi) {
                pagi = pagi || `/api/rents/${this.$route.params.id}`;
                axios.get(pagi)
                    .then(response => {
                        this.rents = response.data.data;
                        this.pagination = {
                            current_page: response.data.data.current_page,
                            last_page: response.data.data.last_page,
                            from_page: response.data.data.from,
                            to_page: response.data.data.to,
                            total_page: response.data.data.total,
                            path_page: response.data.data.path+"?page=",
                            links: response.data.data.links,
                            first_link: response.data.data.first_page_url,
                            last_link: response.data.data.last_page_url,
                            prev_link: response.data.data.prev_page_url,
                            next_link: response.data.data.next_page_url,
                        };
                        this.progress = false;
                    });
            },
            deleteRent(id, index) {
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
                        axios.delete(`/rents/${id}`)
                            .then(response => {
                                if(response.data[0] == "deleted"){
                                    var table = document.getElementById(`del_${id}`);
                                    table.remove();
                                    Swal.fire({
                                        title: "حذف با موقیت انجام شد.",
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 3000,
                                    });
                                    KTUtil.btnRelease(formSubmitButton);
                                }
                            });
                    } else {
                        KTUtil.btnRelease(formSubmitButton);
                    }

                });
            },
        },
        computed: {
            rentsFilter() {
                return this.rents.filter((element) => {
                    if(!this.filterText){
                        return element
                    }else{
                        return element.description.match(this.filterText) ||
                            element.consumption.toString().match(this.filterText) ||
                            element.unit.toString().match(this.filterText) ||
                            element.unit_price.toString().match(this.filterText) ||
                            element.total_price.toString().match(this.filterText);
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>