import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import SinglePizza from "./pages/SinglePizza";
import PageNotFound from "./pages/PageNotFound";


const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/pizzas/:id",
            name: "single-pizza",
            component: SinglePizza
        },
        {
            path: "*",
            name: "page-404",
            component: PageNotFound
        },
    ]
});

export default router