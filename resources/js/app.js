require('./bootstrap');

//vue
import Vue from 'vue';

window.Vue = require('vue');

/*Start of Vue Routes*/
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//defining all routes of vue
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },


    { path: '/*', component: require('./components/NotFound.vue').default }
]

//history mode//
const router = new VueRouter({
    mode: 'history',
    routes, // short for `routes: routes`
    linkActiveClass: 'active'
});