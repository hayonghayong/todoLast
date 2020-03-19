// vueとvuetify
import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

// component
import myHeader from "./components/Header.vue";
import todo from "./components/todo.vue";
import myFooter from "./components/Footer.vue";

Vue.component("my-header", myHeader);
Vue.component("my-todo", todo);
Vue.component("my-footer", myFooter);

// view-router
import Top from "./pages/Top.vue";
import TodoEdit from "./pages/todoEdit.vue";
import usersEdit from "./pages/usersEdit.vue";
import logout from "./pages/logout.vue";


const routes = [
    {
        path: "/home",
        component: Top
    },
    {
        path: "/todoEdit",
        name: "todoEdit",
        component: TodoEdit
    },
    {
        path: "/usersEdit",
        name: "usersEdit",
        component: usersEdit
    },
    {
        path: "/logout",
        name: "logout",
        component: logout
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
