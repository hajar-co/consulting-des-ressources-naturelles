require('./bootstrap');

import Vue from 'vue'
import App from './Application.vue'
import Home from './pages/Home.vue'
import VueRouter from 'vue-router'
import Apropos from './pages/Apropos'
import Service from './pages/Service'
import Contactez from './pages/Contactez-nous'
import login from './pages/Login'
import signUp from './pages/SignUp'
import DashClient from './pages/DashClient'
import DashEquipe from './pages/DashEquipe'

Vue.use(VueRouter);

const routes = [
    
    {
        path:'/',
        name:'home',
        component:Home,
    },
    {
        path:'/Apropos',
        name:'apropos',
        component:Apropos,
    },
    {
        path:'/services',
        component:Service,
    },
    {
        path:'/contactez-nous',
        component:Contactez,
    },
    {
        path:'/login',
        component:login,
    },
    {
        path:'/Sign-up',
        component:signUp,
    },
    {
        path:'/formulaire',
        component:DashClient,
    },
    {
        path:'/Dashboard-equipe',
        component:DashEquipe,
    }
]

const router =  new VueRouter({
    routes
})


new Vue({
    router,
    render: h=>h(App),
}).$mount('#app');
