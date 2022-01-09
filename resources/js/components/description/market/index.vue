<template>
    <div>
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">توضیحات</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a href="#" class="text-muted">بازار</a>
                                </div>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::table-->
                <div class="card card-custom gutter-b col-xl-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">بازار</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <div class="example-preview">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link active" id="market-tab" data-toggle="tab" href="#market">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">توضیحات اولیه</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="product-supply-and-demands-tab" data-toggle="tab" href="#product-supply-and-demands" aria-controls="lands">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">بررسی عرضه و تقاضای محصول</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="product-customers-tab" data-toggle="tab" href="#product-customers" aria-controls="office">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">مشتریان محصول</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="product-supply-chain-tab" data-toggle="tab" href="#product-supply-chain" aria-controls="facilities">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">زنجیره تامین محصول</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="environmental-effects-tab" data-toggle="tab" href="#environmental-effects" aria-controls="transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">تاثیرات محیطی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="product-competitors-tab" data-toggle="tab" href="#product-competitors" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">رقبای محصول</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="strengths-tab" data-toggle="tab" href="#strengths">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">نقاط قوت</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="weak-points-tab" data-toggle="tab" href="#weak-points" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">نقاط ضعف</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="opportunity-points-tab" data-toggle="tab" href="#opportunity-points">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">نقاط فرصت</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="threats-tab" data-toggle="tab" href="#threats">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">نقاط تهدید</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="alternative-tab" data-toggle="tab" href="#alternative">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">محصولات جایگزین</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="tab-content mt-5" id="myTabContent">
                                                <div class="tab-pane fade active show" id="market" role="tabpanel" aria-labelledby="market-tab">
                                                    <description-market></description-market>
                                                </div>
                                                <div class="tab-pane fade" id="product-supply-and-demands" role="tabpanel" aria-labelledby="product-supply-and-demands-tab">
                                                    <description-product-supply-and-demand></description-product-supply-and-demand>
                                                </div>
                                                <div class="tab-pane fade" id="product-customers" role="tabpanel" aria-labelledby="product-customers-tab">
                                                    <description-product-customer></description-product-customer>
                                                </div>
                                                <div class="tab-pane fade" id="product-supply-chain" role="tabpanel" aria-labelledby="product-supply-chain-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <h5 style="text-align: center">تامین کننده مواد اولیه</h5>
                                                            <description-raw-material-supplier></description-raw-material-supplier>
                                                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                            <h5 style="text-align: center">تولید کننده</h5>
                                                            <description-producer></description-producer>
                                                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                            <h5 style="text-align: center">عرضه کننده</h5>
                                                            <description-supplier></description-supplier>
                                                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                            <h5 style="text-align: center">خرده فروش</h5>
                                                            <description-retail></description-retail>
                                                        </div>
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Entry-->
                                                </div>
                                                <div class="tab-pane fade" id="environmental-effects" role="tabpanel" aria-labelledby="environmental-effects-tab">
                                                    <description-environmental-effect></description-environmental-effect>
                                                </div>
                                                <div class="tab-pane fade" id="product-competitors" role="tabpanel" aria-labelledby="product-competitors-tab">
                                                    <description-product-competitor></description-product-competitor>
                                                </div>
                                                <div class="tab-pane fade" id="strengths" role="tabpanel" aria-labelledby="strengths-tab">
                                                    <description-strengths></description-strengths>
                                                </div>
                                                <div class="tab-pane fade" id="weak-points" role="tabpanel" aria-labelledby="weak-points-tab">
                                                    <description-weak-point></description-weak-point>
                                                </div>
                                                <div class="tab-pane fade" id="opportunity-points" role="tabpanel" aria-labelledby="opportunity-points-tab">
                                                    <description-opportunity-point></description-opportunity-point>
                                                </div>
                                                <div class="tab-pane fade" id="threats" role="tabpanel" aria-labelledby="threats-tab">
                                                    <description-threats></description-threats>
                                                </div>
                                                <div class="tab-pane fade" id="alternative" role="tabpanel" aria-labelledby="alternative-tab">
                                                    <description-alternative-product></description-alternative-product>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                </div>
                <!--end::table-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    export default {
        name: "index",
        mounted() {
            var tabName = this.$router.currentRoute.params.tab;
            var someTabTriggerEl = document.querySelector(tabName);
            var tab = new bootstrap.Tab(someTabTriggerEl);
            tab.show();
        }
    }
</script>

<style scoped>

</style>