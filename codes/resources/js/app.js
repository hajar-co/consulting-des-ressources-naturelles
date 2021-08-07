require('./bootstrap');

import Vue from 'vue'


import App from './pages/Apropos.vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);


new Vue({
    render: h=>h(App),
}).$mount('#app');
