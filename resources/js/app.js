import VueRouter from 'vue-router';

require('./bootstrap');

Vue.use(VueRouter);

window.Vue = require('vue').default;

import Page from './components/Content';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/user/dashboard',
            name: 'Dashboard',
            component: require('./components/Dashboard').default
        },
        {
            path: '/page',
            name: 'Page',
            component: Page
        },
        {
            path: '/team-member',
            name: 'Team',
            component:  require('./components/team-member/index').default
        },
        {
            path: '/shareholders/create',
            name: 'shareholders-create',
            component: require('./components/team-member/shareholders/create').default
        },
    ],
});

Vue.component('myAside', require('./components/Aside.vue').default);


const app = new Vue({
    el: '#app',
    router,
});
