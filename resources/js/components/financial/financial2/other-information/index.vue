<template>
    <div>
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::table-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3 mt-10">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable95">
                                <div class="d-flex align-items-center" v-if="progress">
                                    <div class="mr-2 text-muted">لطفا صبر کنید...</div>
                                    <div class="spinner mr-10"></div>
                                </div>
                                <thead v-else>
                                <tr class="bg-gray-100 text-center">
                                    <th>قیمت فروش</th>
                                    <th>میزان مالیات(درصد)</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{ data.sale_price }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ data.tax_rate }}</span>
                                    </td>
                                    <td>
                                        <router-link :to="{ name: 'otherinformations-edit', params: { id: data.id }}">
                                            <a class="btn btn-icon btn-light-success btn-sm mr-2">
                                                <i class="flaticon2-edit"></i>
                                            </a>
                                        </router-link>
                                    </td>
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
    import Auth from "../../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                progress: true,
                data: '',
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/otherinformations/${this.$route.params.id}`)
                .then(response => {
                    this.data = response.data;
                    this.progress = false;
                })
                .catch(error => console.log(error));
        },
    }
</script>

<style scoped>

</style>