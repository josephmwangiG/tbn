import "./bootstrap";
import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import { routes } from "./route/index.js";
import Header from "./components/shared/Header.vue";
import Footer from "./components/shared/Footer.vue";
import "remixicon/fonts/remixicon.css";
import ElementPlus from "element-plus";
import "element-plus/dist/index.css";
import axios from "axios";
import {createPinia} from "pinia";

axios.defaults.baseURL = "/api";

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
    scrollBehavior(to, from, savedPosition) {
        // always scroll to top
        return { top: 0 };
    },
});

const pinia = createPinia();
const app = createApp(App);
app.component("Header", Header);
app.component("Footer", Footer);
app.use(router);
app.use(ElementPlus);
app.use(pinia);
app.mount("#app");
