import VueRouter from 'vue-router';

require('./bootstrap');

Vue.use(VueRouter)

window.Vue = require('vue').default;

import Aside from './components/Aside';
import Page from './components/Content';
import Dashboard from './components/Dashboard';
import TeamMember from './components/Team-member/index';


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

Vue.component('myAside', require('./components/Aside.vue').default);


const app = new Vue({
    el: '#app',
    router,
});
