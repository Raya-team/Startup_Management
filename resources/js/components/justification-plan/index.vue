<template>
    <div>
        <router-link :to="{name: 'justificationplan-create'}">
            <div class="breadcrumb-item text-muted">
                <a class="text-muted">ایندکس</a>
            </div>
        </router-link>
    </div>
</template>

<script>
    import Auth from "../../Auth";

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
            axios.get('/api/businesscanvas')
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => {console.log(error);});
        },
    }
</script>

<style scoped>

</style>