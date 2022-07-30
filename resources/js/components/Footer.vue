<template>
    <footer class="bg-gray-200 text-center lg:text-left">
        <div class="text-gray-700 text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © {{year}} Copyright:
            <a class="text-gray-800" href="https://linkedin.com/aytaccici">{{author}}</a>
        </div>
    </footer>
</template>
<script>
export default {
    name : "footer",
    data () {
        return {
            year : 2022,
            author : "Aytaç Cici"
        }

    }
}
</script>
