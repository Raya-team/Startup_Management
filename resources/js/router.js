import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Page from './components/Content';
import Dashboard from './components/Dashboard';

import ShareholderIndex from './components/team-member/shareholders/index';
import ShareholderCreate from './components/team-member/shareholders/create';
import ShareholderEdit from './components/team-member/shareholders/edit';

import KeyEmployeesIndex from './components/team-member/key-employees/index'
import KeyEmployeesCreate from './components/team-member/key-employees/create'
import KeyEmployeesEdit from './components/team-member/key-employees/edit'

import ProductsIndex from './components/other/product/index';
import ProductsCreate from './components/other/product/create';
import ProductsEdit from './components/other/product/edit';

import TeamIndex from './components/other/team/index';
import TeamEdit from './components/other/team/edit';

import AgreementsIndex from './components/shares/initial-shares/index';
// import AgreementsCreate from './components/shares/initial-shares/create';
import AgreementsEdit from './components/shares/initial-shares/edit';

import invokable1 from './components/financial1/index';
import LandCreate from './components/financial1/land/create';

const routes = [
    {path: '/user/dashboard', name: 'Dashboard', component: Dashboard, meta: {title: 'داشبورد'}},
    {path: '/page', name: 'Page', component: Page},

    {path: '/shareholders', name: 'shareholders-index', component: ShareholderIndex,meta: {title: 'لیست سهامداران'}},
    {path: '/shareholders/create', name: 'shareholders-create', component: ShareholderCreate, meta: {title: 'ایجاد سهامدار جدید'}},
    {path: '/shareholders/:id/edit', name: 'shareholders-edit', component: ShareholderEdit, meta: {title: 'ویرایش سهامدار'}},

    {path: '/key-employees', name: 'key-employees-index', component: KeyEmployeesIndex,meta: {title: 'لیست کارکنان کلیدی'}},
    {path: '/key-employees/create', name: 'key-employees-create', component: KeyEmployeesCreate, meta: {title: 'ایجاد کارمند کلیدی جدید'}},
    {path: '/key-employees/:id/edit', name: 'key-employees-edit', component: KeyEmployeesEdit, meta: {title: 'ویرایش کارمند کلیدی'}},

    {path: '/products', name: 'products-index', component: ProductsIndex, meta: {title: 'محصولات'}},
    {path: '/products/create', name: 'products-create', component: ProductsCreate, meta: {title: 'ایجاد محصول'}},
    {path: '/products/:id/edit', name: 'products-edit', component: ProductsEdit, meta: {title: 'ویرایش محصول'}},

    {path: '/team', name: 'team-index', component: TeamIndex, meta: {title: 'تیم'}},
    {path: '/team/:id/edit', name: 'team-edit', component: TeamEdit, meta: {title: 'ویرایش تیم'}},

    {path: '/agreements', name: 'agreements-index', component: AgreementsIndex, meta: {title: 'توافقی'}},
    // {path: '/agreements/create', name: 'agreements-create', component: AgreementsCreate, meta: {title: 'توافقی'}},
    {path: '/agreements/:id/edit', name: 'agreements-edit', component: AgreementsEdit, meta: {title: 'ویرایش'}},

    {path: '/invokable1', name: 'invokable1-index', component: invokable1, meta: {title: 'مالی1'}},

    {path: '/lands/create', name: 'land-create', component: LandCreate, meta: {title: 'ایجاد زمین'}},
];

export default new VueRouter({
    mode: 'history',
    routes
});