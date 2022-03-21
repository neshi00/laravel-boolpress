<template>
    <div class="container">
        <the-navbar></the-navbar>

        <router-view></router-view>
    </div>
</template>

<script>
import TheNavbar from "../components/TheNavbar.vue";

export default {
    components: {
        TheNavbar,
    },
};
</script>

<style lang="scss" scoped>
.container {
    width: 1200px;
    margin: 0 auto;
}
</style>
