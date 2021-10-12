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
import PreviousInvestorsCreate from './components/shares/initial-shares/calculation/previous-investor/create';
import PreviousInvestorsEdit from './components/shares/initial-shares/calculation/previous-investor/edit';
import ShareVariablesEdit from './components/shares/initial-shares/calculation/share-variable/edit';
import ShareQuestionsEdit from './components/shares/initial-shares/calculation/share-questions/edit';

import Financial1 from './components/financial/financial1/index';
import BasicInformationCreate from './components/financial/financial1/basic-information/create';
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

import ValuationCostIndex from './components/valuation/cost/index';
import ValuationCostCreate from './components/valuation/cost/create';
import ValuationCostEdit from './components/valuation/cost/edit';
import ValuationTangibleIndex from './components/valuation/tangible/index';
import ValuationTangibleCreate from './components/valuation/tangible/create';
import ValuationTangibleEdit from './components/valuation/tangible/edit';
import ValuationIntangibleIndex from './components/valuation/intangible/index';
import ValuationIntangibleCreate from './components/valuation/intangible/create';
import ValuationIntangibleEdit from './components/valuation/intangible/edit';

import TechnologyQuestionIndex from './components/readiness/technology/index';
import TechnologyQuestionCreate from './components/readiness/technology/create';
import TechnologyQuestionEdit from './components/readiness/technology/edit';
import ManufacturingQuestionIndex from './components/readiness/manufacturing/index';
import ManufacturingQuestionCreate from './components/readiness/manufacturing/create';
import ManufacturingQuestionEdit from './components/readiness/manufacturing/edit';
import MarketQuestionIndex from './components/readiness/market/index';
import MarketQuestionCreate from './components/readiness/market/create';
import MarketQuestionEdit from './components/readiness/market/edit';
import BusinessQuestionIndex from './components/readiness/business/index';
import BusinessQuestionCreate from './components/readiness/business/create';
import CommercializationQuestionEdit from './components/readiness/business/commercialization/edit';
import PublicManagementQuestionEdit from './components/readiness/business/public-management/edit';
import FunctionalManagementQuestionEdit from './components/readiness/business/functional-management/edit';
import SaleAndTechnicalSupportQuestionEdit from './components/readiness/business/sale-and-technical-support/edit';
import LiquidityAndAccessQuestionEdit from './components/readiness/business/liquidity-and-access-to-capital/edit';
import CompetitivePositionQuestionEdit from './components/readiness/business/competitive-position/edit';
import CustomerRecognitionQuestionEdit from './components/readiness/business/customer-recognition/edit';
import CustomerCommitmentQuestionEdit from './components/readiness/business/customer-commitment/edit';
import AffordableQuestionEdit from './components/readiness/business/affordable/edit';
import IntellectualManagementQuestionEdit from './components/readiness/business/intellectual-property-management/edit';
import SaleForecastQuestionEdit from './components/readiness/business/sale-forecast/edit';
import UncertaintyPredictionQuestionEdit from './components/readiness/business/uncertainty-prediction/edit';
import SupplyChainQuestionEdit from './components/readiness/business/supply-chain/edit';
import RuleQuestionEdit from './components/readiness/business/rule/edit';

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
    {path: '/previousinvestors/create', name: 'previousinvestors-create', component: PreviousInvestorsCreate, meta: {title: 'افزودن سهامدار قبلی'}},
    {path: '/previousinvestors/:id/edit', name: 'previousinvestors-edit', component: PreviousInvestorsEdit, meta: {title: 'ویرایش سهامدار'}},
    {path: '/sharevariables/:id/edit', name: 'sharevariables-edit', component: ShareVariablesEdit, meta: {title: 'ویرایش وزن متغیر ها'}},
    {path: '/sharequestions/:id/edit', name: 'sharequestions-edit', component: ShareQuestionsEdit, meta: {title: 'ویرایش اطلاعات'}},

    {path: '/financial1', name: 'financial1-index', component: Financial1, meta: {title: 'مالی1'}},
    {path: '/basic-information/create', name: 'basic-information-create', component: BasicInformationCreate, meta: {title: 'ایجاد اطلاعات اولیه'}},
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

    {path: '/valuation-costs', name: 'valuation-costs-index', component: ValuationCostIndex,meta: {title: 'ارزش گذاری - هزینه'}},
    {path: '/valuation-costs/create', name: 'valuation-costs-create', component: ValuationCostCreate, meta: {title: 'ایجاد'}},
    {path: '/valuation-costs/:id/edit', name: 'valuation-costs-edit', component: ValuationCostEdit, meta: {title: 'ویرایش'}},

    {path: '/valuation-tangible', name: 'valuation-tangible-index', component: ValuationTangibleIndex,meta: {title: 'ارزش گذاری - مشهود'}},
    {path: '/valuation-tangible/create', name: 'valuation-tangible-create', component: ValuationTangibleCreate, meta: {title: 'ایجاد'}},
    {path: '/valuation-tangible/:id/edit', name: 'valuation-tangible-edit', component: ValuationTangibleEdit, meta: {title: 'ویرایش'}},

    {path: '/valuation-intangible', name: 'valuation-intangible-index', component: ValuationIntangibleIndex,meta: {title: 'ارزش گذاری - نامشهود'}},
    {path: '/valuation-intangible/create', name: 'valuation-intangible-create', component: ValuationIntangibleCreate, meta: {title: 'ایجاد'}},
    {path: '/valuation-intangible/:id/edit', name: 'valuation-intangible-edit', component: ValuationIntangibleEdit, meta: {title: 'ویرایش'}},

    {path: '/technology-questions', name: 'technology-questions-index', component: TechnologyQuestionIndex,meta: {title: 'سطح آمادگی - فناوری'}},
    {path: '/technology-questions/create', name: 'technology-questions-create', component: TechnologyQuestionCreate, meta: {title: 'ایجاد'}},
    {path: '/technology-questions/:id/edit', name: 'technology-questions-edit', component: TechnologyQuestionEdit, meta: {title: 'ویرایش'}},

    {path: '/manufacturing-questions', name: 'manufacturing-questions-index', component: ManufacturingQuestionIndex,meta: {title: 'سطح آمادگی - تولید'}},
    {path: '/manufacturing-questions/create', name: 'manufacturing-questions-create', component: ManufacturingQuestionCreate, meta: {title: 'ایجاد'}},
    {path: '/manufacturing-questions/:id/edit', name: 'manufacturing-questions-edit', component: ManufacturingQuestionEdit, meta: {title: 'ویرایش'}},

    {path: '/market-questions', name: 'market-questions-index', component: MarketQuestionIndex,meta: {title: 'سطح آمادگی - بازار'}},
    {path: '/market-questions/create', name: 'market-questions-create', component: MarketQuestionCreate, meta: {title: 'ایجاد'}},
    {path: '/market-questions/:id/edit', name: 'market-questions-edit', component: MarketQuestionEdit, meta: {title: 'ویرایش'}},

    {path: '/business-questions', name: 'business-questions-index', component: BusinessQuestionIndex,meta: {title: 'سطح آمادگی - کسب و کار'}},
    {path: '/business-questions/create', name: 'business-questions-create', component: BusinessQuestionCreate, meta: {title: 'ایجاد'}},
    {path: '/commercialization-questions/:id/edit', name: 'commercialization-questions-edit', component: CommercializationQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/publicmanagement-questions/:id/edit', name: 'publicmanagement-questions-edit', component: PublicManagementQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/functionalmanagement-questions/:id/edit', name: 'functionalmanagement-questions-edit', component: FunctionalManagementQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/SaleAndTechnicalSupport-questions/:id/edit', name: 'SaleAndTechnicalSupport-questions-edit', component: SaleAndTechnicalSupportQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/LiquidityAndAccess-questions/:id/edit', name: 'LiquidityAndAccess-questions-edit', component: LiquidityAndAccessQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/CompetitivePosition-questions/:id/edit', name: 'CompetitivePosition-questions-edit', component: CompetitivePositionQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/CustomerRecognition-questions/:id/edit', name: 'CustomerRecognition-questions-edit', component: CustomerRecognitionQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/CustomerCommitment-questions/:id/edit', name: 'CustomerCommitment-questions-edit', component: CustomerCommitmentQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/Affordable-questions/:id/edit', name: 'Affordable-questions-edit', component: AffordableQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/IntellectualManagement-questions/:id/edit', name: 'IntellectualManagement-questions-edit', component: IntellectualManagementQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/SaleForecast-questions/:id/edit', name: 'SaleForecast-questions-edit', component: SaleForecastQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/UncertaintyPrediction-questions/:id/edit', name: 'UncertaintyPrediction-questions-edit', component: UncertaintyPredictionQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/SupplyChain-questions/:id/edit', name: 'SupplyChain-questions-edit', component: SupplyChainQuestionEdit, meta: {title: 'ویرایش'}},
    {path: '/Rule-questions/:id/edit', name: 'Rule-questions-edit', component: RuleQuestionEdit, meta: {title: 'ویرایش'}},
];

export default new VueRouter({
    mode: 'history',
    routes
});