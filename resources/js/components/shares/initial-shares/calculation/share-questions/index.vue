<template>
    <div>
        <!--begin::Invoice Body-->
        <div class="position-relative">
            <!--begin::Background Rows-->
            <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(assets/media/svg/shapes/abstract-7.svg);"></div>
            <div v-for="(question, index) in questions" :key="index">
                <div class="bg-white h-65px" v-if="index %2 == 0"></div>
                <div class="bg-light h-65px" v-else></div>
            </div>
            <!--end::Background Rows-->
            <!--begin:Table-->
            <div class="container position-absolute top-0 left-0 right-0">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr class="font-weight-boldest text-white h-65px">
                                    <td class="align-middle font-size-h4 text-center pl-0 border-0">سوالات</td>
                                    <td class="align-middle font-size-h4 text-center border-0">سهامداران</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="font-size-lg font-weight-bolder h-65px" v-for="(question, index) in questions" :key="index">
                                    <td class="align-middle text-center border-0">{{ question.question }}</td>
                                    <td class="align-middle text-center border-0">
                                        <span v-for="member in question.members" class="label label-lg label-light-primary label-inline mt-1 mr-2">{{ member.fname }} {{ member.lname }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-center pt-5" id="kt_sticky_toolbar_chat_toggler_2" data-placement="right">
                <router-link :to="{name: 'sharequestions-edit', params: { id: team_id }}">
                    <a class="btn btn-success font-weight-bolder font-size-sm py-3 px-14">ویرایش اطلاعات ثبت شده</a>
                </router-link>
            </div>
            <!--end:Table-->
        </div>
        <!--end::Invoice Body-->
    </div>
</template>

<script>
    import Auth from "../../../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                team_id: null,
                questions: [],
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/calculations')
                .then(response => {
                    this.questions = response.data.member_share_questions;
                    this.team_id = response.data.team_id;
                })
                .catch(error => console.log(error));
        },
    }
</script>

<style scoped>

</style>