require("./bootstrap");

import Vue from "vue";
import Notifications from "vue-notification";
import Vuex from "vuex";

import App from "./Application.vue";
import Home from "./pages/Home.vue";
import VueRouter from "vue-router";
import Apropos from "./pages/Apropos";
import Service from "./pages/Service";
import Contactez from "./pages/Contactez-nous";
import login from "./pages/Login";
import signUp from "./pages/SignUp";
import DashClient from "./pages/DashClient";
import DashEquipe from "./pages/DashEquipe";
import DashAdmin from "./pages/DashAdmin";
import api from "./api";

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        user: null
    },
    mutations: {
        SET_USER_DATA(state, userData) {
            state.user = userData.utilisateur;
            localStorage.setItem("user", JSON.stringify(userData.utilisateur));
            localStorage.setItem("token", userData.token);
            api.defaults.headers.common[
                "Authorization"
            ] = `Bearer ${userData.token}`;
        },
        CLEAR_USER_DATA() {
            localStorage.removeItem("user");
            localStorage.removeItem("token");
            location.replace("/");
            location.reload(); // all i need here is a simple refresh and redirect the loggedout user to home page
        }
    },
    actions: {
        async signup({ commit }, data) {
            const res = await api.post("api/sign-up", data);
            commit("SET_USER_DATA", res.data);
            return res;
        },

        async login({ commit }, data) {
            const res = await api.post("api/login", data);
            commit("SET_USER_DATA", res.data);
            return res;
        },

        logout({ commit }) {
            commit("CLEAR_USER_DATA");
        }
    },
    getters: {
        authenticated(state) {
            return !!state.user;
        },
        user(state) {
            return state.user;
        },
        admin(state) {
            return state.user.role == "1";
        },
        equipe(state) {
            return state.user.role == "2";
        },
        client(state) {
            return state.user.role == "3";
        }

        // this.$store.getters.user
    },
    modules: {}
});

const routes = [
    {
        path: "/",
        name: "home",
        component: Home
    },
    {
        path: "/Apropos",
        name: "apropos",
        component: Apropos
    },
    {
        path: "/services",
        component: Service
    },
    {
        path: "/contactez-nous",
        component: Contactez
    },
    {
        path: "/login",
        component: login
    },
    {
        path: "/Sign-up",
        component: signUp
    },
    {
        path: "/formulaire",
        component: DashClient
    },
    {
        path: "/Dashboard-equipe",
        component: DashEquipe
    },
    {
        path: "/Dashboard-admin",
        component: DashAdmin
    }
];

const router = new VueRouter({
    routes
});

Vue.use(Notifications);

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount("#app");
