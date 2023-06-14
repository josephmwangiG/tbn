import Home from "./../components/pages/Home.vue";
import About from "./../components/pages/About.vue";
import Coaches from "./../components/pages/Coaches.vue";
import Profile from "./../components/pages/Profile.vue";
import Training from "./../components/pages/Training.vue";
import Contacts from "./../components/pages/Contacts.vue";
import AccountCreated from "./../components/pages/AccountCreated.vue";
import Pages from "./../components/pages/Pages.vue";
import Login from "./../components/auth/Login.vue";
import ResetPassword from "./../components/auth/ResetPassword.vue";
import RegisterBusiness from "./../components/pages/RegisterBusiness.vue";
import RegisterCoach from "./../components/pages/RegisterCoach.vue";
import Admin from "./../components/admin/Admin.vue";
import Dashboard from "./../components/admin/Dashboard.vue";
import TrainingEvents from "./../components/admin/TrainingEvents.vue";
import CoachingEvents from "./../components/admin/CoachingEvents.vue";
import Businesses from "./../components/admin/Businesses.vue";
import AdminCoaches from "./../components/admin/AdminCoaches.vue";
import Users from "./../components/admin/Users.vue";
import Roles from "./../components/admin/Roles.vue";
import ChangePassword from "./../components/admin/ChangePassword.vue";
import Reports from "./../components/admin/Reports.vue";
import Settings from "./../components/admin/Settings.vue";
import AdminProfile from "./../components/admin/AdminProfile.vue";

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
                path: "/account-created",
                name: "account-created",
                component: AccountCreated,
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
            {
                path: "training-events",
                name: "training-events",
                component: TrainingEvents,
            },
            {
                path: "coaching-events",
                name: "coaching-events",
                component: CoachingEvents,
            },
            {
                path: "businesses",
                name: "businesses",
                component: Businesses,
            },
            {
                path: "coaches",
                name: "admin-coaches",
                component: AdminCoaches,
            },
            {
                path: "users-roles",
                name: "users-roles",
                component: Roles,
            },
            {
                path: "users",
                name: "users",
                component: Users,
            },
            {
                path: "change-password",
                name: "change-password",
                component: ChangePassword,
            },
            {
                path: "profile",
                name: "profile",
                component: AdminProfile,
            },
            {
                path: "reports",
                name: "reports",
                component: Reports,
            },
            {
                path: "settings",
                name: "settings",
                component: Settings,
            },
        ],
    },
];
