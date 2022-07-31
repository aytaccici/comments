require('./bootstrap');
window.Vue = require('vue').default;


import App from "./components/App";
import CommentItem from "./components/CommentItem";
import router from "./router"

Vue.component('CommentItem', CommentItem);

const app = new Vue({
    el: '#app',
    template:"<App />",
    components :  {
        App
    },
    router
});
