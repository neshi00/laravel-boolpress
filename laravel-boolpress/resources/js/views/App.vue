<template>
    <h1>Hello Vue</h1>
</template>

<script>
export default {
    components: {},
    data() {
        return {
            posts: [],
        };
    },
    methods: {
        fetchPosts() {
            axios.get("/api/posts").then((resp) => {
                this.posts = resp.data;
            });
        },
    },
};
</script>

<style lang="scss" scoped></style>
