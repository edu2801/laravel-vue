import AllCostumer from "./components/AllCostumer.vue";
import CreateCostumer from "./components/CreateCostumer.vue";
import EditCostumer from "./components/EditCostumer.vue";
import "./bootstrap";
import { createApp } from "vue";
import App from "./App.vue";
import VueAxios from "vue-axios";
import { createRouter, createWebHistory } from "vue-router";
import axios from "axios";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: "home",
            path: "/",
            component: AllCostumer,
        },
        {
            name: "create",
            path: "/create",
            component: CreateCostumer,
        },
        {
            name: "edit",
            path: "/edit/:id",
            component: EditCostumer,
        },
    ],
});
const app = createApp(App);
app.use(router);
app.use(VueAxios, axios);
app.mount("#app");
