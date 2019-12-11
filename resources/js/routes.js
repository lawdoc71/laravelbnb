import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent.vue";

const routes = [
    {
        path: "/",
        component: ExampleComponent,
        name: "home",
    }
];

const router = new VueRouter({
    routes, // short for `routes: routes`
});

export default router;
