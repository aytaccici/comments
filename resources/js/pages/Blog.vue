<template>

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <Leading></Leading>
        <div class="grid gap-8 lg:grid-cols-2">
         <PostItem :post="post" :key="post.id" v-for="post in posts"></PostItem>
        </div>
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mt-8">
            <Pagination :meta="meta" v-on:pageChange="getPosts"></Pagination>
        </div>
    </div>
</template>
<script>
import PostItem from "../components/PostItem";
import Leading from "../components/Leading";
import Pagination from "../components/Pagination";
import PostService from '../services/post.service'

export default {
    name : "blog",
    components : {PostItem, Leading, Pagination},
    methods: {
        getPosts(page = 1) {
            PostService.GetPostByPage(page).
            then(response => {
                this.posts = response.data.data
                this.meta = response.data.meta
            })
        }
    },
    created() {
        this.getPosts(1);
    },
    data () {
        return {
            posts : null,
            meta : {} ,
        }

    }
}
</script>
