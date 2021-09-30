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

import InitialSharesIndex from './components/shares/initial-shares/index';
import AgreementsIndex from './components/shares/initial-shares/agreement/index';
import AgreementsEdit from './components/shares/initial-shares/agreement/edit';
import CalculationIndex from './components/shares/initial-shares/calculation/index';
import CalculationCreate from './components/shares/initial-shares/calculation/create';

import Financial1 from './components/financial/financial1/index';
import LandCreate from './components/financial/financial1/land/create';
import LandEdit from './components/financial/financial1/land/edit';
import BuildingCreate from './components/financial/financial1/building/create';
import BuildingEdit from './components/financial/financial1/building/edit';
import EquipmentAndMachineryCreate from './components/financial/financial1/equipmentandmachinery/create';
import EquipmentAndMachineryEdit from './components/financial/financial1/equipmentandmachinery/edit';
import OfficeEquipmentAndSupplyCreate from './components/financial/financial1/officeequipmentandsupply/create';
import OfficeEquipmentAndSupplyEdit from './components/financial/financial1/officeequipmentandsupply/edit';
import FacilityCreate from './components/financial/financial1/facility/create';
import FacilityEdit from './components/financial/financial1/facility/edit';
import TransportationCreate from './components/financial/financial1/transportation/create';
import TransportationEdit from './components/financial/financial1/transportation/edit';
import PreOperatingCostCreate from './components/financial/financial1/preoperatingcost/create';
import PreOperatingCostEdit from './components/financial/financial1/preoperatingcost/edit';



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

    {path: '/initial-shares', name: 'initial-shares-index', component: InitialSharesIndex, meta: {title: 'محاسبه سهام اولیه'}},
    {path: '/agreements', name: 'agreements-index', component: AgreementsIndex, meta: {title: 'توافقی'}},
    {path: '/agreements/:id/edit', name: 'agreements-edit', component: AgreementsEdit, meta: {title: 'تخصیص درصد'}},
    {path: '/calculations', name: 'calculations-index', component: CalculationIndex, meta: {title: 'محاسبه'}},
    {path: '/calculations/create', name: 'calculations-create', component: CalculationCreate, meta: {title: 'افزودن اطلاعات'}},

    {path: '/financial1', name: 'financial1-index', component: Financial1, meta: {title: 'مالی1'}},
    {path: '/lands/create', name: 'land-create', component: LandCreate, meta: {title: 'خرید زمین'}},
    {path: '/lands/:id/edit', name: 'land-edit', component: LandEdit, meta: {title: 'ویرایش زمین'}},
    {path: '/buildings/create', name: 'buildings-create', component: BuildingCreate, meta: {title: 'افزودن ساختمان'}},
    {path: '/buildings/:id/edit', name: 'buildings-edit', component: BuildingEdit, meta: {title: 'ویرایش ساختمان'}},
    {path: '/equipmentandmachineries/create', name: 'equipmentandmachineries-create', component: EquipmentAndMachineryCreate, meta: {title: 'افزودن تجهیزات و ماشین آلات فنی'}},
    {path: '/equipmentandmachineries/:id/edit', name: 'equipmentandmachineries-edit', component: EquipmentAndMachineryEdit, meta: {title: 'ویرایش تجهیزات و ماشین آلات فنی'}},
    {path: '/officeequipmentandsupplies/create', name: 'officeequipmentandsupplies-create', component: OfficeEquipmentAndSupplyCreate, meta: {title: 'افزودن تجهیزات و لوازم دفتری'}},
    {path: '/officeequipmentandsupplies/:id/edit', name: 'officeequipmentandsupplies-edit', component: OfficeEquipmentAndSupplyEdit, meta: {title: 'ویرایش تجهیزات و لوازم دفتری'}},
    {path: '/facilities/create', name: 'facilities-create', component: FacilityCreate, meta: {title: 'افزودن تاسیسات'}},
    {path: '/facilities/:id/edit', name: 'facilities-edit', component: FacilityEdit, meta: {title: 'ویرایش تاسیسات'}},
    {path: '/transportations/create', name: 'transportations-create', component: TransportationCreate, meta: {title: 'افزودن وسایل حمل و نقل'}},
    {path: '/transportations/:id/edit', name: 'transportations-edit', component: TransportationEdit, meta: {title: 'ویرایش وسایل حمل و نقل'}},
    {path: '/preoperatingcosts/create', name: 'preoperatingcosts-create', component: PreOperatingCostCreate, meta: {title: 'افزودن هزینه های قبل بهره برداری'}},
    {path: '/preoperatingcosts/:id/edit', name: 'preoperatingcosts-edit', component: PreOperatingCostEdit, meta: {title: 'ویرایش هزینه های قبل بهره برداری'}},
];

export default new VueRouter({
    mode: 'history',
    routes
});