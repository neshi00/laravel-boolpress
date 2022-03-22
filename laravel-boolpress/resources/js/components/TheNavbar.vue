<template>
    <div>
        <nav>
            <!-- <a @click="$router.push({ name: 'contacts.index' })">test</a> -->
            <div v-for="route in routes" :key="route.path">
                <router-link class="nav-link" :to="route.path">{{
                    route.meta.linkText
                }}</router-link>
            </div>
            <div>
                <a class="nav-link" href="/login" v-if="!user">Login</a>
                <a class="nav-link" href="/admin" v-else>{{ user.name }}</a>
            </div>
        </nav>
    </div>
</template>

<script>
import axios from "axios";
// import router from "../router";

export default {
    data() {
        return {
            routes: [],
            user: null,
        };
    },
    methods: {
        fetchUser() {
            axios
                .get("/api/user")
                .then((resp) => {
                    this.user = resp.data;
                })
                .catch((er) => {
                    console.log("Utente non loggato");
                });
        },
    },
    mounted() {
        this.routes = this.$router.getRoutes();

        this.fetchUser();
    },
};
</script>

<style lang="scss" scoped>
nav {
    display: flex;
    padding: 10px;
}
</style>
