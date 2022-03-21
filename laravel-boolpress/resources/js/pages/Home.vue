<template>
    <div>
        <!-- <nav>
            <a @click="$router.push({ name: 'contacts.index' })">test</a>
            <router-link class="nav-link" :to="{ name: 'contacts.index' }">
                TEST
            </router-link>
        </nav> -->

        <h1>Lista ultimi post</h1>

        <div class="card" v-for="post in posts" :key="post.id">
            <div>
                {{ post.title }}
            </div>
            <p>{{ post.content }}</p>
            <p><strong>Autore: </strong>{{ post.user.name }}</p>
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
