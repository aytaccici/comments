<template>
    <div class="flex-col w-full py-4 mx-auto">

        <div v-if="errorMessage.length>0" class="w-full p-4">
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium">Error :</span>{{errorMessage}}
            </div>
        </div>

        <form action="" class="w-full p-4">
            <div class="mb-2">
                <input name="post_id" type="hidden"  v-model="newCommentRow.post_id">
                <input class="w-full p-1 mb-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
                          name="created_by" v-model="newCommentRow.created_by" placeholder="Please entry your name">
                <textarea class="w-full h-30 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
                          name="content" v-model="newCommentRow.content"  placeholder="">{{current.content}}</textarea>
            </div>
            <button @click="saveItem" class="px-3 py-2 text-sm text-blue-100 bg-blue-600 rounded">Send</button>
        </form>
    </div>
</template>
<script>
import CommentService from '../services/comment.service'
export default {
    name: "newComment",
    props: ["current"],
    methods: {

        clearInput() {
            this.newCommentRow.content='';
            this. newCommentRow.created_by='';
        },

        saveItem(e) {
            this.newCommentRow.post_id = this.current.post_id;
            this.newCommentRow.level = this.current.level+1;
            this.newCommentRow.parent_id = this.current.id;
            CommentService.saveComment(this.newCommentRow).then(data => {
                    this.$emit('onSaved',this.item);
            }).catch(response =>{
                this.errorMessage= response.response.data.message;
            });
            this.clearInput();
            e.preventDefault();
        }
    },
    data() {
        return {
            newCommentRow  : {},
            errorMessage :''
        }
    }
}
</script>
