<template>
    <div>
        <h1>Dettagli post</h1>

        <h2>{{ post.title }}</h2>
        <p>{{ post.content }}</p>
        <p><strong>Autore: </strong>{{ post.user.name }}</p>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            post: {},
        };
    },
    methods: {
        fetchPosts() {
            axios
                .get("/api/posts/" + this.$route.params.post)
                .then((resp) => {
                    this.post = resp.data;
                })
                .catch((er) => {
                    this.$router.replace({ name: "error" });
                });
        },
    },
    mounted() {
        this.fetchPosts();
    },
};
</script>

<style></style>
