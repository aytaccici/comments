<template>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <router-link  :to="{ name: 'blogs'}" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Comments System</span>
            </router-link>
        </div>
    </nav>

</template>
<script>
export default {
    name : "navbar",
    data () {
        return {
        }

    }
}
</script>
