<template>
    <div>
        <div v-for="(team, index) in teams" :key="index">
            <p>{{ team.fname }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "index",
        data() {
            return {
                loading: false,
                teams: null
            }
        },
        created() {
            axios
                .get('/api/team-member')
                .then(response => {
                    this.teams = response.data;
                });
        }
    }
</script>