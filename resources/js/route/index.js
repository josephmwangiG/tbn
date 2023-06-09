import Home from "./../components/pages/Home.vue";
import About from "./../components/pages/About.vue";
import Coaches from "./../components/pages/Coaches.vue";
import Profile from "./../components/pages/Profile.vue";
import Training from "./../components/pages/Training.vue";
import Contacts from "./../components/pages/Contacts.vue";
import Pages from "./../components/pages/Pages.vue";
import Login from "./../components/auth/Login.vue";
import RegisterBusiness from "./../components/pages/RegisterBusiness.vue";
import RegisterCoach from "./../components/pages/RegisterCoach.vue";

export const routes = [
    {
        path: "",
        component: Pages,
        children: [
            {
                path: "/",
                name: "home",
                component: Home,
            },
            {
                path: "/login",
                name: "login",
                component: Login,
            },
            {
                path: "/about",
                name: "about",
                component: About,
            },
            {
                path: "/contacts",
                name: "contacts",
                component: Contacts,
            },
            {
                path: "/coaches",
                name: "coaches",
                component: Coaches,
            },
            {
                path: "/training",
                name: "training",
                component: Training,
            },
            {
                path: "/business-application",
                name: "business-join",
                component: RegisterBusiness,
            },
            {
                path: "/coach-application",
                name: "coach-join",
                component: RegisterCoach,
            },
            {
                path: "/profile",
                name: "profile",
                component: Profile,
            },
        ],
    },
];
