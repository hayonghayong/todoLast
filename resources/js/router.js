// vueとvuetify
import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

// component
// import myHeader from "./components/Header.vue";
// import todo from "./components/todo.vue";
// import myFooter from "./components/Footer.vue";

// Vue.component("my-header", myHeader);
// Vue.component("my-todo", todo);
// Vue.component("my-footer", myFooter);

// view-router
import TodoEdit from "./pages/todoEdit.vue";
// import myTodo from "./pages/myTodo.vue";
// import usersEdit from "./pages/usersEdit.vue";
// import Top from "./pages/Top.vue";

const routes = [
    // {
    //     path: "/home",
    //     component: Top
    // },
    // {
    //     path: "/myTodo",
    //     name: "myTodo",
    //     component: myTodo
    // },
    {
        path: "/todoEdit",
        name: "todoEdit",
        component: TodoEdit
    },
    // {
    //     path: "/usersEdit",
    //     name: "usersEdit",
    //     component: usersEdit
    // }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
