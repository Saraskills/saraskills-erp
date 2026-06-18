import { createRouter, createWebHistory } from "vue-router";
import AppLayout from "../layouts/AppLayout.vue";
import Login from "../pages/Login.vue";
import Dashboard from "../pages/Dashboard.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            component: Login,
        },
        {
            path: "/app",
            component: AppLayout,
            children: [
                {
                    path: "dashboard",
                    component: Dashboard,
                },
            ],
        },
    ],
});

export default router;
