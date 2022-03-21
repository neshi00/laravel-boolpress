<template>
    <div>
        <nav>
            <!-- <a @click="$router.push({ name: 'contacts.index' })">test</a> -->
            <div v-for="route in routes" :key="route.path">
                <router-link class="nav-link" :to="route.path">{{
                    route.meta.linkText
                }}</router-link>
            </div>
        </nav>
    </div>
</template>

<script>
// import router from "../router";

export default {
    data() {
        return {
            routes: [],
        };
    },
    mounted() {
        this.routes = this.$router.getRoutes();
    },
};
</script>

<style lang="scss" scoped>
nav {
    display: flex;
    padding: 10px;
}
</style>
