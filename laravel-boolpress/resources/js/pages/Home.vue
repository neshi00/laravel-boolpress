<template>
    <div>
        <h1>Lista ultimi post</h1>

        <div class="card" v-for="post in posts" :key="post.id">
            <div>
                {{ post.title }}
            </div>
            <p>{{ post.content }}</p>
            <p><strong>Autore: </strong>{{ post.user.name }}</p>
            <router-link :to="{ name: 'posts.show', params: { post: post.id } }"
                >Dettagli</router-link
            >
        </div>
    </div>
</template>

<script>
import axios from "axios";

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
    mounted() {
        this.fetchPosts();
    },
};
</script>

<style lang="scss" scoped></style>
