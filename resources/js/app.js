require('./bootstrap');
window.Vue = require('vue').default;


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import App from "./components/App";

const app = new Vue({
    el: '#app',
    template:"<App />",
    components :  {
        App
    }
});
