import VueRouter from 'vue-router';

require('./bootstrap');

Vue.use(VueRouter);

window.Vue = require('vue').default;

import Page from './components/Content';
import Dashboard from './components/Dashboard';
import SharehodlerIndex from './components/team-member/shareholders/index';


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
            path: '/shareholders',
            name: 'shareholders-index',
            component: SharehodlerIndex
        },
    ],
});

// Vue.component('myAside', require('./components/Aside.vue').default);


const app = new Vue({
    el: '#app',
    router,
});
