<template>
 <div id="app">
  <Navbar></Navbar>
     <section class="bg-white dark:bg-gray-900 h-screen">
         <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <Header></Header>

             <div class="grid gap-8 lg:grid-cols-2">
                <Article></Article>
             </div>

         </div>
     </section>
  <Footer></Footer>
 </div>

</template>
<script>
import Navbar from "./Navbar";
import Footer from "./Footer";
import Article from "./Article";
import Header from "./Header";
export default {
    name : "app",
    components : {
        Header,
        Navbar,
        Footer,
        Article,
    },
    data () {
        return {
            year : 2022,
            author : "Aytaç Cici"
        }
    }
}
</script>
