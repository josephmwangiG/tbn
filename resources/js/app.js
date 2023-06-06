import "./bootstrap";
import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import { routes } from "./route/index.js";
import Header from "./components/shared/Header.vue";
import Footer from "./components/shared/Footer.vue";

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
    scrollBehavior(to, from, savedPosition) {
        // always scroll to top
        return { top: 0 };
    },
});

const app = createApp(App);
app.component("Header", Header);
app.component("Footer", Footer);
app.use(router);
app.mount("#app");
