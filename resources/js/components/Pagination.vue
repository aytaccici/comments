<template>
    <div class="flex items-center space-x-1">
        <a class="flex items-center px-4 font-bold py-2 text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 hover:text-white"
           @click="pageChange(meta.current_page- 1)"
           :class="{
      'disabled': meta.current_page === 1
    }"
        >
            Previous
        </a>
        <a
            :class="{
      'bg-blue-400': meta.current_page ===  page
    }"
            @click.prevent="pageChange(page)" v-for="page in meta.last_page" href="#"
            class="  px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
            {{ page }}
        </a>
        <a @click="pageChange(meta.current_page + 1)"
           class="flex items-center px-4 font-bold py-2 text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 hover:text-white"
           :class="{
      'disabled': meta.current_page ===  meta.last_page
    }"
        >
            Next
        </a>
    </div>
</template>
<script>
export default {
    name: "navbar",
    props: ["meta"],
    methods: {
        pageChange(page) {
            this.$emit('pageChange', page);
        }
    },
    data() {
        return {}
    }
}
</script>
