import VueRouter from 'vue-router';

require('./bootstrap');

Vue.use(VueRouter);

window.Vue = require('vue').default;

import Page from './components/Content';
import Dashboard from './components/Dashboard';
import SharehodlerIndex from './components/team-member/shareholders/index';
import SharehodlerCreate from './components/team-member/shareholders/create';
import SharehodlerEdit from './components/team-member/shareholders/edit';
import ProductIndex from './components/other/product/index';
import ProductCreate from './components/other/product/create';
import ProductEdit from './components/other/product/edit';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/user/dashboard', name: 'Dashboard', component: Dashboard, meta: {title: 'داشبورد'}},
        {path: '/page', name: 'Page', component: Page},
        {path: '/shareholders', name: 'shareholders-index', component: SharehodlerIndex,meta: {title: 'لیست سهامداران'}},
        {path: '/shareholders/create', name: 'shareholders-create', component: SharehodlerCreate, meta: {title: 'ایجاد سهامدار جدید'}},
        {path: '/shareholders/:id/edit', name: 'shareholders-edit', component: SharehodlerEdit, meta: {title: 'ویرایش سهامدار'}},
        {path: '/product', name: 'product-index', component: ProductIndex, meta: {title: 'محصولات'}},
        {path: '/product/create', name: 'product-create', component: ProductCreate, meta: {title: 'ایجاد محصول'}},
        {path: '/product/:id/edit', name: 'product-edit', component: ProductEdit, meta: {title: 'ویرایش محصول'}},
    ],
});
router.beforeEach((to, from, next) => {
    // This goes through the matched routes from last to first, finding the closest route with a title.
    // e.g., if we have `/some/deep/nested/route` and `/some`, `/deep`, and `/nested` have titles,
    // `/nested`'s will be chosen.
    const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);

    // Find the nearest route element with meta tags.
    const nearestWithMeta = to.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);

    const previousNearestWithMeta = from.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);

    // If a route with a title was found, set the document (page) title to that value.
    if(nearestWithTitle) {
        document.title = nearestWithTitle.meta.title;
    } else if(previousNearestWithMeta) {
        document.title = previousNearestWithMeta.meta.title;
    }

    // Remove any stale meta tags from the document using the key attribute we set below.
    Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(el => el.parentNode.removeChild(el));

    // Skip rendering meta tags if there are none.
    if(!nearestWithMeta) return next();

    // Turn the meta tag definitions into actual elements in the head.
    nearestWithMeta.meta.metaTags.map(tagDef => {
        const tag = document.createElement('meta');

        Object.keys(tagDef).forEach(key => {
            tag.setAttribute(key, tagDef[key]);
        });

        // We use this to track which meta tags we create so we don't interfere with other ones.
        tag.setAttribute('data-vue-router-controlled', '');

        return tag;
    })
    // Add the meta tags to the document head.
        .forEach(tag => document.head.appendChild(tag));

    next();
});

// Vue.component('myAside', require('./components/Aside.vue').default);


const app = new Vue({
    el: '#app',
    router,
});
