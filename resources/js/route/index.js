import Home from "./../components/pages/Home.vue";
import About from "./../components/pages/About.vue";
import Coaches from "./../components/pages/Coaches.vue";
import Profile from "./../components/pages/Profile.vue";
import Training from "./../components/pages/Training.vue";
import Contacts from "./../components/pages/Contacts.vue";
import Pages from "./../components/pages/Pages.vue";
import Login from "./../components/auth/Login.vue";
import ResetPassword from "./../components/auth/ResetPassword.vue";
import RegisterBusiness from "./../components/pages/RegisterBusiness.vue";
import RegisterCoach from "./../components/pages/RegisterCoach.vue";
import Admin from "./../components/admin/Admin.vue";
import Dashboard from "./../components/admin/Dashboard.vue";

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
                path: "/reset-password",
                name: "reset-password",
                component: ResetPassword,
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
    {
        path: "/admin",
        component: Admin,
        children: [
            {
                path: "",
                alias: "dashboard",
                name: "dashboard",
                component: Dashboard,
            },
        ],
    },
];
