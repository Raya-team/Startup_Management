require('./bootstrap');


window.Vue = require('vue').default;
import router from './router';


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

Vue.component('Basicinformation', require('./components/financial/financial1/basic-information/index').default);
Vue.component('Lands', require('./components/financial/financial1/land/index.vue').default);
// Vue.component('Buildings', require('./components/financial/financial1/building/index.vue').default);
Vue.component('LaboratoryEquipments', require('./components/financial/financial1/laboratory-equipment/index.vue').default);
Vue.component('Equipmentandmachineries', require('./components/financial/financial1/equipmentandmachinery/index.vue').default);
Vue.component('Officeequipmentandsupplies', require('./components/financial/financial1/officeequipmentandsupply/index.vue').default);
Vue.component('Facilities', require('./components/financial/financial1/facility/index.vue').default);
Vue.component('Transportations', require('./components/financial/financial1/transportation/index.vue').default);
Vue.component('Preoperatingcosts', require('./components/financial/financial1/preoperatingcost/index.vue').default);

Vue.component('Percents', require('./components/shares/initial-shares/calculation/percents/index.vue').default);
Vue.component('Previousinvestors', require('./components/shares/initial-shares/calculation/previous-investor/index.vue').default);
Vue.component('Sharevariables', require('./components/shares/initial-shares/calculation/share-variable/index.vue').default);
Vue.component('Sharequestions', require('./components/shares/initial-shares/calculation/share-questions/index.vue').default);
Vue.component('PreInvestors', require('./components/shares/participation-shares/pre-investor/index.vue').default);
Vue.component('NewInvestors', require('./components/shares/participation-shares/new-investor/index.vue').default);

Vue.component('Commercialization', require('./components/readiness/business/commercialization/index.vue').default);
Vue.component('PublicManagement', require('./components/readiness/business/public-management/index.vue').default);
Vue.component('FunctionalManagement', require('./components/readiness/business/functional-management/index.vue').default);
Vue.component('SaleAndTechnicalSupport', require('./components/readiness/business/sale-and-technical-support/index.vue').default);
Vue.component('LiquidityAndAccessToCapital', require('./components/readiness/business/liquidity-and-access-to-capital/index.vue').default);
Vue.component('CompetitivePosition', require('./components/readiness/business/competitive-position/index.vue').default);
Vue.component('CustomerRecognition', require('./components/readiness/business/customer-recognition/index.vue').default);
Vue.component('CustomerCommitment', require('./components/readiness/business/customer-commitment/index.vue').default);
Vue.component('Affordable', require('./components/readiness/business/affordable/index.vue').default);
Vue.component('IntellectualPropertyManagement', require('./components/readiness/business/intellectual-property-management/index.vue').default);
Vue.component('SaleForecast', require('./components/readiness/business/sale-forecast/index.vue').default);
Vue.component('UncertaintyPrediction', require('./components/readiness/business/uncertainty-prediction/index.vue').default);
Vue.component('SupplyChain', require('./components/readiness/business/supply-chain/index.vue').default);
Vue.component('Rule', require('./components/readiness/business/rule/index.vue').default);

Vue.component('DevelopmentCost', require('./components/financial/financial2/development-cost/index.vue').default);
Vue.component('Capacity', require('./components/financial/financial2/capacity/index.vue').default);
Vue.component('RawMaterial', require('./components/financial/financial2/raw-material/index.vue').default);
Vue.component('ManPower', require('./components/financial/financial2/man-power/index.vue').default);
Vue.component('Rent', require('./components/financial/financial2/rent/index.vue').default);
Vue.component('EnergyConsumption', require('./components/financial/financial2/energy-consumption/index.vue').default);
Vue.component('RD', require('./components/financial/financial2/rd/index.vue').default);
Vue.component('Business', require('./components/financial/financial2/business/index.vue').default);
Vue.component('Insurance', require('./components/financial/financial2/insurance/index.vue').default);
Vue.component('Repair', require('./components/financial/financial2/repair/index.vue').default);
Vue.component('TransportationCost', require('./components/financial/financial2/transportation-cost/index.vue').default);
Vue.component('Warranty', require('./components/financial/financial2/warranty/index.vue').default);
Vue.component('ConsumerItem', require('./components/financial/financial2/consumer-item/index.vue').default);
Vue.component('AfterSaleService', require('./components/financial/financial2/after-sale-service/index.vue').default);
Vue.component('OtherInformation', require('./components/financial/financial2/other-information/index.vue').default);

Vue.component('ValEquipmentAndMachinery', require('./components/valuation/tangible/equipment-and-machinery/index.vue').default);
Vue.component('ValFacility', require('./components/valuation/tangible/facility/index.vue').default);
Vue.component('ValLaboratoryEquipment', require('./components/valuation/tangible/laboratory-equipment/index.vue').default);
Vue.component('ValOfficeSupply', require('./components/valuation/tangible/office-equipment-and-supply/index.vue').default);
Vue.component('ValPreOperatingCost', require('./components/valuation/tangible/pre-operating-cost/index.vue').default);
Vue.component('ValTenement', require('./components/valuation/tangible/tenement/index.vue').default);
Vue.component('ValTransportation', require('./components/valuation/tangible/transportation/index.vue').default);

Vue.component('DescriptionMarket', require('./components/description/market/market/index.vue').default);
Vue.component('DescriptionProductSupplyAndDemand', require('./components/description/market/product-supply-and-demand/index.vue').default);
Vue.component('DescriptionProductCustomer', require('./components/description/market/product-customer/index.vue').default);
Vue.component('DescriptionRawMaterialSupplier', require('./components/description/market/product-supply/raw-material-supplier/index.vue').default);
Vue.component('DescriptionProducer', require('./components/description/market/product-supply/producer/index.vue').default);
Vue.component('DescriptionSupplier', require('./components/description/market/product-supply/supply/index.vue').default);
Vue.component('DescriptionRetail', require('./components/description/market/product-supply/retail/index.vue').default);
Vue.component('DescriptionEnvironmentalEffect', require('./components/description/market/environmental-effect/index.vue').default);
Vue.component('DescriptionProductCompetitor', require('./components/description/market/product-competitor/index.vue').default);
Vue.component('DescriptionStrengths', require('./components/description/market/strength/index.vue').default);
Vue.component('DescriptionWeakPoint', require('./components/description/market/weak-point/index.vue').default);
Vue.component('DescriptionOpportunityPoint', require('./components/description/market/opportunity-point/index.vue').default);
Vue.component('DescriptionThreats', require('./components/description/market/threat/index.vue').default);
Vue.component('DescriptionAlternativeProduct', require('./components/description/market/alternative-product/index.vue').default);

const app = new Vue({
    el: '#app',
    router,
});
