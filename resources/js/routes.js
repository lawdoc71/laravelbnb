import VueRouter from "vue-router";
import Example2 from "./components/Example2";
import Bookables from "./bookables/Bookables";

const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home",
    },
    {
        path: "/second",
        component: Example2,
        name: "second",
    }
];

const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: "history"
});

export default router;
