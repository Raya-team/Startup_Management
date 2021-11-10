<template>
    <div>
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::table-->
                <div class="card card-custom gutter-b">
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
                                    <th>نام و نام خانوادگی</th>
                                    <th>سمت</th>
                                    <th>درصد</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(percent, index) in percents" :id="'del_'+percent.id" class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{ percent[1] }}</span>
                                    </td>
                                    <td>
                                        <div v-for="res in percent[2]"><span class="label label-lg label-light-primary label-inline mt-1" >{{ res.nickname }}</span><br></div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{ percent[0] }}</span>
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
    import Auth from "../../../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                progress: true,
                percents: [],
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/calculations')
                .then(response => {
                    this.percents = response.data.percents;
                    this.progress = false
                })
                .catch(error => console.log(error));
        },
    }
</script>

<style scoped>

</style>