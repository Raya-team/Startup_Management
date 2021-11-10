<template>
    <div>
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                <div class="card-header">
                                    <h3 class="card-title">اقتصادی</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.economical }}</p>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                <div class="card-header">
                                    <h3 class="card-title">اجتماعی</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.social }}</p>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                <div class="card-header">
                                    <h3 class="card-title">سیاسی</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.political }}</p>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                <div class="card-header">
                                    <h3 class="card-title">محیط زیستی</h3>
                                </div>
                                <div class="card-body">
                                    <p style="white-space: pre">{{ data.environmental }}</p>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-center">
                        <router-link :to="{ name: 'environmental-effects-edit', params: { id: data.id }}">
                            <a class="btn btn-success font-weight-bolder">ویرایش اطلاعات</a>
                        </router-link>
                    </div>
                </div>
                <!--end::Card-->
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
                data: {},
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/environmental-effects')
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => {console.log(error);});
        },
    }
</script>

<style scoped>

</style>