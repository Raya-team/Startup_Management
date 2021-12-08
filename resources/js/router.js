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
import ParticipationShareIndex from './components/shares/participation-shares/index';
import ParticipationShareCreate from './components/shares/participation-shares/create';
import PreInvestorCreate from './components/shares/participation-shares/pre-investor/create';
import PreInvestorEdit from './components/shares/participation-shares/pre-investor/edit';
import NewInvestorCreate from './components/shares/participation-shares/new-investor/create';
import NewInvestorEdit from './components/shares/participation-shares/new-investor/edit';

import Financial1 from './components/financial/financial1/index';
import Financial1Create from './components/financial/financial1/create';
import BasicInformationCreate from './components/financial/financial1/basic-information/create';
import BasicInformationEdit from './components/financial/financial1/basic-information/edit';
import LandCreate from './components/financial/financial1/land/create';
import LandEdit from './components/financial/financial1/land/edit';
// import BuildingCreate from './components/financial/financial1/building/create';
// import BuildingEdit from './components/financial/financial1/building/edit';
import LaboratoryEquipmentCreate from './components/financial/financial1/laboratory-equipment/create';
import LaboratoryEquipmentEdit from './components/financial/financial1/laboratory-equipment/edit';
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

import Financial2Index from './components/financial/financial2/index';
import Financial2Show from './components/financial/financial2/show';
import Financial2Create from './components/financial/financial2/create';
import DevelopmentCostEdit from './components/financial/financial2/development-cost/edit';
import CapacityEdit from './components/financial/financial2/capacity/edit';
import RawMaterialCreate from './components/financial/financial2/raw-material/create';
import RawMaterialEdit from './components/financial/financial2/raw-material/edit';
import ManPowerCreate from './components/financial/financial2/man-power/create';
import ManPowerEdit from './components/financial/financial2/man-power/edit';
import RentCreate from './components/financial/financial2/rent/create';
import RentEdit from './components/financial/financial2/rent/edit';
import EnergyConsumptionCreate from './components/financial/financial2/energy-consumption/create';
import EnergyConsumptionEdit from './components/financial/financial2/energy-consumption/edit';
import RDCreate from './components/financial/financial2/rd/create';
import RDEdit from './components/financial/financial2/rd/edit';
import BusinessCreate from './components/financial/financial2/business/create';
import BusinessEdit from './components/financial/financial2/business/edit';
import InsuranceCreate from './components/financial/financial2/insurance/create';
import InsuranceEdit from './components/financial/financial2/insurance/edit';
import RepairCreate from './components/financial/financial2/repair/create';
import RepairEdit from './components/financial/financial2/repair/edit';
import TransportationCostCreate from './components/financial/financial2/transportation-cost/create';
import TransportationCostEdit from './components/financial/financial2/transportation-cost/edit';
import WarrantyCreate from './components/financial/financial2/warranty/create';
import WarrantyEdit from './components/financial/financial2/warranty/edit';
import ConsumerItemCreate from './components/financial/financial2/consumer-item/create';
import ConsumerItemEdit from './components/financial/financial2/consumer-item/edit';
import AfterSaleServiceCreate from './components/financial/financial2/after-sale-service/create';
import AfterSaleServiceEdit from './components/financial/financial2/after-sale-service/edit';
import OtherInformationEdit from './components/financial/financial2/other-information/edit';
import OutsourcingsCreate from './components/financial/financial2/outsourcing/create';
import OutsourcingsEdit from './components/financial/financial2/outsourcing/edit';

import JustificationPlanIndex from './components/justification-plan/index';
import JustificationPlanCreate from './components/justification-plan/create';
import JustificationPlanEdit from './components/justification-plan/edit';

import BusinessCanvasIndex from './components/business-canvas/index';
import BusinessCanvasCreate from './components/business-canvas/create';
import BusinessCanvasEdit from './components/business-canvas/edit';

import ValuationCostIndex from './components/valuation/cost/index';
import ValuationCostCreate from './components/valuation/cost/create';
import ValuationCostEdit from './components/valuation/cost/edit';
import ValuationTangibleIndex from './components/valuation/tangible/index';
import ValuationTangibleCreate from './components/valuation/tangible/create';
// import ValuationTangibleEdit from './components/valuation/tangible/edit';
import ValEquipmentAndMachineryCreate from './components/valuation/tangible/equipment-and-machinery/create';
import ValEquipmentAndMachineryEdit from './components/valuation/tangible/equipment-and-machinery/edit';
import ValFacilityCreate from './components/valuation/tangible/facility/create';
import ValFacilityEdit from './components/valuation/tangible/facility/edit';
import ValLaboratoryEquipmentCreate from './components/valuation/tangible/laboratory-equipment/create';
import ValLaboratoryEquipmentEdit from './components/valuation/tangible/laboratory-equipment/edit';
import ValOfficeSupplyCreate from './components/valuation/tangible/office-equipment-and-supply/create';
import ValOfficeSupplyEdit from './components/valuation/tangible/office-equipment-and-supply/edit';
import ValPreOperatingCostCreate from './components/valuation/tangible/pre-operating-cost/create';
import ValPreOperatingCostEdit from './components/valuation/tangible/pre-operating-cost/edit';
import ValTenementCreate from './components/valuation/tangible/tenement/create';
import ValTenementEdit from './components/valuation/tangible/tenement/edit';
import ValTransportationCreate from './components/valuation/tangible/transportation/create';
import ValTransportationEdit from './components/valuation/tangible/transportation/edit';
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

import DescriptionManagerialCreate from './components/description/managerial/create';
import DescriptionManagerialIndex from './components/description/managerial/index';
import DescriptionManagerialEdit from './components/description/managerial/edit';
import DescriptionObtainedCertificateCreate from './components/description/managerial/obtained-certificate/create';
import DescriptionObtainedCertificateEdit from './components/description/managerial/obtained-certificate/edit';
import DescriptionPlanImplementationCreate from './components/description/managerial/plan-implementation/create';
import DescriptionPlanImplementationEdit from './components/description/managerial/plan-implementation/edit';
import DescriptionMarketCreate from './components/description/market/create';
import DescriptionMarketEdit from './components/description/market/edit';
import ProductSupplyAndDemandCreate from './components/description/market/product-supply-and-demand/create';
import ProductSupplyAndDemandEdit from './components/description/market/product-supply-and-demand/edit';
import ProductCustomerCreate from './components/description/market/product-customer/create';
import ProductCustomerEdit from './components/description/market/product-customer/edit';
import RawMaterialSupplierCreate from './components/description/market/product-supply/raw-material-supplier/create';
import RawMaterialSupplierEdit from './components/description/market/product-supply/raw-material-supplier/edit';
import ProducerCreate from './components/description/market/product-supply/producer/create';
import ProducerEdit from './components/description/market/product-supply/producer/edit';
import SupplierCreate from './components/description/market/product-supply/supply/create';
import SupplierEdit from './components/description/market/product-supply/supply/edit';
import RetailCreate from './components/description/market/product-supply/retail/create';
import RetailEdit from './components/description/market/product-supply/retail/edit';
import EnvironmentalEffectEdit from './components/description/market/environmental-effect/edit';
import ProductCompetitorCreate from './components/description/market/product-competitor/create';
import ProductCompetitorEdit from './components/description/market/product-competitor/edit';
import StrengthCreate from './components/description/market/strength/create';
import StrengthEdit from './components/description/market/strength/edit';
import WeakPointCreate from './components/description/market/weak-point/create';
import WeakPointEdit from './components/description/market/weak-point/edit';
import OpportunityPointCreate from './components/description/market/opportunity-point/create';
import OpportunityPointEdit from './components/description/market/opportunity-point/edit';
import ThreatCreate from './components/description/market/threat/create';
import ThreatEdit from './components/description/market/threat/edit';
import AlternativeProductCreate from './components/description/market/alternative-product/create';
import AlternativeProductEdit from './components/description/market/alternative-product/edit';
import DescriptionMarketIndex from './components/description/market/index';
import DescriptionTechnicalCreate from './components/description/technical/create';
import DescriptionTechnicalIndex from './components/description/technical/index';
import DescriptionTechnicalEdit from './components/description/technical/edit';
import DescriptionRequiredCertificateCreate from './components/description/technical/required-certificate/create';
import DescriptionRequiredCertificateEdit from './components/description/technical/required-certificate/edit';

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
    {path: '/participation-shares', name: 'participation-shares-index', component: ParticipationShareIndex, meta: {title: 'محاسبه سهام مشارکت'}},
    {path: '/participation-shares/create', name: 'participation-shares-create', component: ParticipationShareCreate, meta: {title: 'محاسبه سهام مشارکت'}},
    {path: '/pre-investors/create', name: 'pre-investors-create', component: PreInvestorCreate, meta: {title: 'تامین از موسسین و سرمایه گذران قبلی | افزودن'}},
    {path: '/pre-investors/:id/edit', name: 'pre-investors-edit', component: PreInvestorEdit, meta: {title: 'تامین از موسسین و سرمایه گذران قبلی | ویرایش'}},
    {path: '/new-investors/create', name: 'new-investors-create', component: NewInvestorCreate, meta: {title: 'تامین از سرمایه گذران جدید | افزودن'}},
    {path: '/new-investors/:id/edit', name: 'new-investors-edit', component: NewInvestorEdit, meta: {title: 'تامین از سرمایه گذران جدید | ویرایش'}},

    {path: '/financial1', name: 'financial1-index', component: Financial1, meta: {title: 'مالی1'}},
    {path: '/financial1/create', name: 'financial1-create', component: Financial1Create, meta: {title: 'مالی1 | ایجاد'}},
    {path: '/basic-information/create', name: 'basic-information-create', component: BasicInformationCreate, meta: {title: 'ایجاد اطلاعات اولیه'}},
    {path: '/basic-information/:id/edit', name: 'basic-information-edit', component: BasicInformationEdit, meta: {title: 'ویرایش اطلاعات اولیه'}},
    {path: '/lands/create', name: 'land-create', component: LandCreate, meta: {title: 'خرید مستغلات'}},
    {path: '/lands/:id/edit', name: 'land-edit', component: LandEdit, meta: {title: 'ویرایش مستغلات'}},
    // {path: '/buildings/create', name: 'buildings-create', component: BuildingCreate, meta: {title: 'افزودن ساختمان'}},
    // {path: '/buildings/:id/edit', name: 'buildings-edit', component: BuildingEdit, meta: {title: 'ویرایش ساختمان'}},
    {path: '/laboratory-equipments/create', name: 'laboratory-equipments-create', component: LaboratoryEquipmentCreate, meta: {title: 'افزودن تجهیزات آزمایشگاهی'}},
    {path: '/laboratory-equipments/:id/edit', name: 'laboratory-equipments-edit', component: LaboratoryEquipmentEdit, meta: {title: 'ویرایش تجهیزات آزمایشگاهی'}},
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

    {path: '/financial2', name: 'financial2-index', component: Financial2Index, meta: {title: 'اطلاعات مالی 2'}},
    {path: '/financial2/year/:id', name: 'financial2-show', component: Financial2Show, meta: {title: 'اطلاعات مالی 2'}},
    {path: '/financial2/year/:id/create', name: 'financial2-create', component: Financial2Create, meta: {title: 'اطلاعات مالی 2 - ایجاد'}},
    {path: '/developmentcosts/:id/edit', name: 'developmentcosts-edit', component: DevelopmentCostEdit, meta: {title: 'هزینه های توسعه - ویرایش'}},
    {path: '/capacities/:id/edit', name: 'capacities-edit', component: CapacityEdit, meta: {title: 'ظرفیت - ویرایش'}},
    {path: '/rawmaterials/:year/create', name: 'rawmaterials-create', component: RawMaterialCreate, meta: {title: 'مواد اولیه وبسته بندی برای یک واحد محصول - ایجاد'}},
    {path: '/rawmaterials/:id/edit', name: 'rawmaterials-edit', component: RawMaterialEdit, meta: {title: 'مواد اولیه وبسته بندی برای یک واحد محصول - ویرایش'}},
    {path: '/manpowers/:year/create', name: 'manpowers-create', component: ManPowerCreate, meta: {title: 'نیروی انسانی مورد نیاز - ایجاد'}},
    {path: '/manpowers/:id/edit', name: 'manpowers-edit', component: ManPowerEdit, meta: {title: 'نیروی انسانی مورد نیاز - ویرایش'}},
    {path: '/rents/:year/create', name: 'rents-create', component: RentCreate, meta: {title: 'اجاره - ایجاد'}},
    {path: '/rents/:id/edit', name: 'rents-edit', component: RentEdit, meta: {title: 'اجاره - ویرایش'}},
    {path: '/energyconsumptions/:year/create', name: 'energyconsumptions-create', component: EnergyConsumptionCreate, meta: {title: 'انرژی مصرفی - ایجاد'}},
    {path: '/energyconsumptions/:id/edit', name: 'energyconsumptions-edit', component: EnergyConsumptionEdit, meta: {title: 'انرژی مصرفی - ویرایش'}},
    {path: '/rds/:year/create', name: 'rds-create', component: RDCreate, meta: {title: 'هزینه های R&D - ایجاد'}},
    {path: '/rds/:id/edit', name: 'rds-edit', component: RDEdit, meta: {title: 'هزینه های R&D - ویرایش'}},
    {path: '/businesses/:year/create', name: 'businesses-create', component: BusinessCreate, meta: {title: 'هزینه های بازرگانی - ایجاد'}},
    {path: '/businesses/:id/edit', name: 'businesses-edit', component: BusinessEdit, meta: {title: 'هزینه های بازرگانی - ویرایش'}},
    {path: '/insurances/:year/create', name: 'insurances-create', component: InsuranceCreate, meta: {title: 'هزینه بیمه - ایجاد'}},
    {path: '/insurances/:id/edit', name: 'insurances-edit', component: InsuranceEdit, meta: {title: 'هزینه بیمه - ویرایش'}},
    {path: '/repairs/:year/create', name: 'repairs-create', component: RepairCreate, meta: {title: 'هزینه تعمیر و نگهداری - ایجاد'}},
    {path: '/repairs/:id/edit', name: 'repairs-edit', component: RepairEdit, meta: {title: 'هزینه تعمیر و نگهداری - ویرایش'}},
    {path: '/transportationcosts/:year/create', name: 'transportationcosts-create', component: TransportationCostCreate, meta: {title: 'هزینه حمل و نقل - ایجاد'}},
    {path: '/transportationcosts/:id/edit', name: 'transportationcosts-edit', component: TransportationCostEdit, meta: {title: 'هزینه حمل و نقل - ویرایش'}},
    {path: '/warranties/:year/create', name: 'warranties-create', component: WarrantyCreate, meta: {title: 'هزینه گارانتی - ایجاد'}},
    {path: '/warranties/:id/edit', name: 'warranties-edit', component: WarrantyEdit, meta: {title: 'هزینه گارانتی - ویرایش'}},
    {path: '/consumeritems/:year/create', name: 'consumeritems-create', component: ConsumerItemCreate, meta: {title: 'هزینه اقلام مصرفی - ایجاد'}},
    {path: '/consumeritems/:id/edit', name: 'consumeritems-edit', component: ConsumerItemEdit, meta: {title: 'هزینه اقلام مصرفی - ویرایش'}},
    {path: '/aftersaleservices/:year/create', name: 'aftersaleservices-create', component: AfterSaleServiceCreate, meta: {title: 'درآمد خدمات پس از فروش - ایجاد'}},
    {path: '/aftersaleservices/:id/edit', name: 'aftersaleservices-edit', component: AfterSaleServiceEdit, meta: {title: 'درآمد خدمات پس از فروش - ویرایش'}},
    {path: '/outsourcings/:year/create', name: 'outsourcings-create', component: OutsourcingsCreate, meta: {title: 'برونسپاری - ایجاد'}},
    {path: '/outsourcings/:id/edit', name: 'outsourcings-edit', component: OutsourcingsEdit, meta: {title: 'برونسپاری - ویرایش'}},
    {path: '/otherinformations/:id/edit', name: 'otherinformations-edit', component: OtherInformationEdit, meta: {title: 'اطلاعات دیگر - ویرایش'}},

    {path: '/justificationplan', name: 'justificationplan-index', component: JustificationPlanIndex,meta: {title: 'طرح توجیهی مقدماتی'}},
    {path: '/justificationplan/create', name: 'justificationplan-create', component: JustificationPlanCreate, meta: {title: 'طرح توجیهی مقدماتی - ایجاد'}},
    {path: '/justificationplan/:id/edit', name: 'justificationplan-edit', component: JustificationPlanEdit, meta: {title: 'طرح توجیهی مقدماتی - ویرایش'}},

    {path: '/businesscanvas', name: 'businesscanvas-index', component: BusinessCanvasIndex,meta: {title: 'بوم کسب و کار'}},
    {path: '/businesscanvas/create', name: 'businesscanvas-create', component: BusinessCanvasCreate, meta: {title: 'بوم کسب و کار - ایجاد'}},
    {path: '/businesscanvas/:id/edit', name: 'businesscanvas-edit', component: BusinessCanvasEdit, meta: {title: 'بوم کسب و کار - ویرایش'}},

    {path: '/valuation-costs', name: 'valuation-costs-index', component: ValuationCostIndex,meta: {title: 'ارزش گذاری - هزینه'}},
    {path: '/valuation-costs/create', name: 'valuation-costs-create', component: ValuationCostCreate, meta: {title: 'ایجاد'}},
    {path: '/valuation-costs/:id/edit', name: 'valuation-costs-edit', component: ValuationCostEdit, meta: {title: 'ویرایش'}},

    {path: '/valuation-tangible', name: 'valuation-tangible-index', component: ValuationTangibleIndex,meta: {title: 'ارزش گذاری - مشهود'}},
    {path: '/valuation-tangible/create', name: 'valuation-tangible-create', component: ValuationTangibleCreate, meta: {title: 'ایجاد'}},
    {path: '/val-equipment-and-machineries/create', name: 'val-equipment-and-machineries-create', component: ValEquipmentAndMachineryCreate, meta: {title: 'ایجاد'}},
    {path: '/val-equipment-and-machineries/:id/edit', name: 'val-equipment-and-machineries-edit', component: ValEquipmentAndMachineryEdit, meta: {title: 'ویرایش'}},
    {path: '/val-facilities/create', name: 'val-facilities-create', component: ValFacilityCreate, meta: {title: 'ایجاد'}},
    {path: '/val-facilities/:id/edit', name: 'val-facilities-edit', component: ValFacilityEdit, meta: {title: 'ویرایش'}},
    {path: '/val-laboratory-equipments/create', name: 'val-laboratory-equipments-create', component: ValLaboratoryEquipmentCreate, meta: {title: 'ایجاد'}},
    {path: '/val-laboratory-equipments/:id/edit', name: 'val-laboratory-equipments-edit', component: ValLaboratoryEquipmentEdit, meta: {title: 'ویرایش'}},
    {path: '/val-office-supplies/create', name: 'val-office-supplies-create', component: ValOfficeSupplyCreate, meta: {title: 'ایجاد'}},
    {path: '/val-office-supplies/:id/edit', name: 'val-office-supplies-edit', component: ValOfficeSupplyEdit, meta: {title: 'ویرایش'}},
    {path: '/val-pre-operating-costs/create', name: 'val-pre-operating-costs-create', component: ValPreOperatingCostCreate, meta: {title: 'ایجاد'}},
    {path: '/val-pre-operating-costs/:id/edit', name: 'val-pre-operating-costs-edit', component: ValPreOperatingCostEdit, meta: {title: 'ویرایش'}},
    {path: '/val-tenements/create', name: 'val-tenements-create', component: ValTenementCreate, meta: {title: 'ایجاد'}},
    {path: '/val-tenements/:id/edit', name: 'val-tenements-edit', component: ValTenementEdit, meta: {title: 'ویرایش'}},
    {path: '/val-transportations/create', name: 'val-transportations-create', component: ValTransportationCreate, meta: {title: 'ایجاد'}},
    {path: '/val-transportations/:id/edit', name: 'val-transportations-edit', component: ValTransportationEdit, meta: {title: 'ویرایش'}},

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

    {path: '/description-managerial', name: 'description-managerial-index', component: DescriptionManagerialIndex,meta: {title: 'توضیحات - مدیریتی'}},
    {path: '/description-managerial/create', name: 'description-managerial-create', component: DescriptionManagerialCreate, meta: {title: 'توضیحات - مدیریتی | ایجاد'}},
    {path: '/description-managerial/:id/edit', name: 'description-managerial-edit', component: DescriptionManagerialEdit, meta: {title: 'توضیحات - مدیریتی | ویرایش'}},
    {path: '/description-obtainedcertificates/create', name: 'description-obtainedcertificates-create', component: DescriptionObtainedCertificateCreate, meta: {title: 'توضیحات - مدیریتی | ایجاد'}},
    {path: '/description-obtainedcertificates/:id/edit', name: 'description-obtainedcertificates-edit', component: DescriptionObtainedCertificateEdit, meta: {title: 'توضیحات - مدیریتی | ویرایش'}},
    {path: '/description-planimplementations/create', name: 'description-planimplementations-create', component: DescriptionPlanImplementationCreate, meta: {title: 'توضیحات - مدیریتی | ایجاد'}},
    {path: '/description-planimplementations/:id/edit', name: 'description-planimplementations-edit', component: DescriptionPlanImplementationEdit, meta: {title: 'توضیحات - مدیریتی | ویرایش'}},
    {path: '/description-market/create', name: 'description-market-create', component: DescriptionMarketCreate, meta: {title: 'توضیحات - مدیریتی | ایجاد'}},
    {path: '/description-market', name: 'description-market-index', component: DescriptionMarketIndex, meta: {title: 'توضیحات - بازار'}},
    {path: '/description-market/:id/edit', name: 'description-market-edit', component: DescriptionMarketEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/product-supply-and-demands/create', name: 'product-supply-and-demands-create', component: ProductSupplyAndDemandCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/product-supply-and-demands/:id/edit', name: 'product-supply-and-demands-edit', component: ProductSupplyAndDemandEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/product-customers/create', name: 'product-customers-create', component: ProductCustomerCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/product-customers/:id/edit', name: 'product-customers-edit', component: ProductCustomerEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/raw-material-suppliers/create', name: 'raw-material-suppliers-create', component: RawMaterialSupplierCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/raw-material-suppliers/:id/edit', name: 'raw-material-suppliers-edit', component: RawMaterialSupplierEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/producers/create', name: 'producers-create', component: ProducerCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/producers/:id/edit', name: 'producers-edit', component: ProducerEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/suppliers/create', name: 'suppliers-create', component: SupplierCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/suppliers/:id/edit', name: 'suppliers-edit', component:  SupplierEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/retails/create', name: 'retails-create', component: RetailCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/retails/:id/edit', name: 'retails-edit', component: RetailEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/environmental-effects/:id/edit', name: 'environmental-effects-edit', component: EnvironmentalEffectEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/product-competitors/create', name: 'product-competitors-create', component: ProductCompetitorCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/product-competitors/:id/edit', name: 'product-competitors-edit', component: ProductCompetitorEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/strengths/create', name: 'strengths-create', component: StrengthCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/strengths/:id/edit', name: 'strengths-edit', component: StrengthEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/weak-points/create', name: 'weak-points-create', component: WeakPointCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/weak-points/:id/edit', name: 'weak-points-edit', component: WeakPointEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/opportunity-points/create', name: 'opportunity-points-create', component: OpportunityPointCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/opportunity-points/:id/edit', name: 'opportunity-points-edit', component: OpportunityPointEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/threats/create', name: 'threats-create', component: ThreatCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/threats/:id/edit', name: 'threats-edit', component: ThreatEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/alternative-products/create', name: 'alternative-products-create', component: AlternativeProductCreate, meta: {title: 'توضیحات - بازار'}},
    {path: '/alternative-products/:id/edit', name: 'alternative-products-edit', component: AlternativeProductEdit, meta: {title: 'توضیحات - بازار'}},
    {path: '/description-technical', name: 'description-technical-index', component: DescriptionTechnicalIndex,meta: {title: 'توضیحات - فنی'}},
    {path: '/description-technical/create', name: 'description-technical-create', component: DescriptionTechnicalCreate, meta: {title: 'توضیحات - فنی | ایجاد'}},
    {path: '/description-technical/:id/edit', name: 'description-technical-edit', component: DescriptionTechnicalEdit, meta: {title: 'توضیحات - فنی | ویرایش'}},
    {path: '/description-requiredcertificates/create', name: 'description-requiredcertificates-create', component: DescriptionRequiredCertificateCreate, meta: {title: 'توضیحات - فنی | ایجاد'}},
    {path: '/description-requiredcertificates/:id/edit', name: 'description-requiredcertificates-edit', component: DescriptionRequiredCertificateEdit, meta: {title: 'توضیحات - فنی | ویرایش'}},
];

export default new VueRouter({
    mode: 'history',
    routes
});