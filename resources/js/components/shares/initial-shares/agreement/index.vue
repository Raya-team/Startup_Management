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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">سهام اولیه</div>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">توافقی</div>
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
                            <span class="card-label font-weight-bolder text-dark">توافقی</span>
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
                            <router-link :to="{ name: 'agreements-edit', params: { id: team_id } }">
                                <a class="btn btn-success font-weight-bolder">
                                    <i class="icon-md  fas fa-percentage"></i>تخصیص درصد
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
                                    <th>نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>مسئولیت</th>
                                    <th>میزان سهام (درصد)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(member, index) in shareholdersFilter" :id="'del'+member.id" class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{ member.fname }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ member.lname }}</span>
                                    </td>
                                    <td>
                                        <div v-for="res in member.responsibility"><span class="label label-lg label-light-primary label-inline mt-1" >{{ res.nickname }}</span><br></div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ member.percent }}</span>
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
                shareholders: [],
                team_id: '',
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
                pagi = pagi || '/api/agreements';
                axios.get(pagi)
                    .then(response => {
                        this.shareholders = response.data.shareholders.data;
                        this.team_id = response.data.team_id;
                        this.pagination = {
                            current_page: response.data.shareholders.current_page,
                            last_page: response.data.shareholders.last_page,
                            from_page: response.data.shareholders.from,
                            to_page: response.data.shareholders.to,
                            total_page: response.data.shareholders.total,
                            path_page: response.data.shareholders.path+"?page=",
                            links: response.data.shareholders.links,
                            first_link: response.data.shareholders.first_page_url,
                            last_link: response.data.shareholders.last_page_url,
                            prev_link: response.data.shareholders.prev_page_url,
                            next_link: response.data.shareholders.next_page_url,
                        };
                        this.progress = false;
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
                            element.percent.toString().match(this.filterText);
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>