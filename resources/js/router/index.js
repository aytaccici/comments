import Vue from 'vue';
import VueRouter from  'vue-router';
Vue.use(VueRouter);

import Blog from "../pages/Blog";
import BlogDetail from "../pages/BlogDetail";

const routes= [
    {
        path : "/",
        component: Blog,
        name: 'blogs'
    },
    {
        path : "/posts/:id",
        component: BlogDetail,
        name: 'showBlog'
    }
]

export  default  new VueRouter({
    routes: routes,
    mode : "hash"
});
