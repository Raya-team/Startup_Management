/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';

require('./bootstrap');

Vue.use(VueRouter)

window.Vue = require('vue').default;

import Aside from './components/Aside';
import Page from './components/Content';
import Dashboard from './components/Dashboard';
import TeamMember from './components/Team-member/index';

// import router from './router.js'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/user/dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: '/page',
            name: 'Page',
            component: Page
        },
        {
            path: '/team-member',
            name: 'Team',
            component: TeamMember
        },
    ],
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('myAside', require('./components/Aside.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    router,
    created(){
    }
});
