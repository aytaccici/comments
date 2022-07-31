<template>
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{title}}</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{message}}</p>
    </div>
</template>
<script>
export default {
    name : "leading",
    data () {
        return {
            title : "My Blog Test",
            message : "We use an agile approach to test assumptions and connect with the needs of your audience early and often."
        }
    }
}
</script>
