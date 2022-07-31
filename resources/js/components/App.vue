<template>
 <div id="app">
  <Navbar></Navbar>
     <section class="bg-white dark:bg-gray-900">
         <router-view></router-view>
     </section>
  <Footer></Footer>
 </div>

</template>
<script>
import Navbar from "./Navbar";
import Footer from "./Footer";
export default {
    name : "app",
    components : {
        Navbar,
        Footer,
    },
    data () {
        return {
            year : 2022,
            author : "Aytaç Cici"
        }
    }
}
</script>
