<template>
    <div  class="container w-full md:max-w-3xl mx-auto pt-20">
        <div class="w-full min-h-screen px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
            <!--Title-->
            <div class="font-sans">
                <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">{{post.title}}</h1>
                <p class="text-sm md:text-base font-normal text-gray-600">Published at {{post.created_at}}</p>
                <p class="text-sm text-end md:text-base font-normal text-gray-600">Published by {{post.created_by}}</p>
            </div>
            <p class="py-6 font-sans break-normal text-gray-900">
                {{post.content}}
            </p>
            <hr>
            <p class="py-6 font-sans break-normal text-gray-900">
                <CommentItem  v-on:onRefreshPage="getPostWithoutId"   :depth="0" :key="'comment-item-'+ comment.id+'-'+post.title" v-for="comment in post.comments" :comment="comment"></CommentItem>
            </p>
            <p>
                <NewComment  v-on:onSaved="getPostWithoutId"  :current="{level :0 , post_id  : post.id}"></NewComment>
            </p>
        </div>
    </div>
    <!--/container-->

</template>
<script>
import PostService from '../services/post.service'
import NewComment from "../components/NewComment";
export default {
    name : "blogDetail",
    components : {
        NewComment
    },
    methods: {
        getPost(id) {
            PostService.GetSingleWithComments(id).
            then(response => {
                this.post= response.data.data
                this.postId = response.data.data.post_id;
            })
        },
        getPostWithoutId() {
            PostService.GetSingleWithComments(this.$route.params.id).
            then(response => {
                this.post= response.data.data
                this.postId = response.data.data.post_id;
            })
        }
    },
    created() {
        this.getPost(this.$route.params.id);
    },
    data () {
        return {
            post : {},
        }
    }
}
</script>
