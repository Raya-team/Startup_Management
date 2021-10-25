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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی 2</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a href="#" class="text-muted">سال {{ this.$route.params.id }}</a>
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
                                <h3 class="card-label">اطلاعات مالی 2</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <div class="example-preview">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <!--<ul class="nav nav-tabs" id="myTab" role="tablist">-->
                                            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link active" id="development-tab" data-toggle="tab" href="#development-cost">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های توسعه</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="capacity-tab" data-toggle="tab" href="#capacity" aria-controls="lands">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">ظرفیت</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="material-tab" data-toggle="tab" href="#raw-material" aria-controls="office">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">مواد اولیه وبسته بندی برای یک واحد محصول</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="man-power-tab" data-toggle="tab" href="#man-power" aria-controls="facilities">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">نیروی انسانی مورد نیاز</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" aria-controls="transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">اجاره</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="energy-tab" data-toggle="tab" href="#energy-consumption" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">انرژی مصرفی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="rd-tab" data-toggle="tab" href="#rd">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های R&D</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های بارزگانی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="insurance-tab" data-toggle="tab" href="#insurance">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه بیمه</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="repair-tab" data-toggle="tab" href="#repair">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه تعمیر و نگهداری</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="transportation-tab" data-toggle="tab" href="#transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه حمل و نقل</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="warranty-tab" data-toggle="tab" href="#warranty">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه گارانتی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="consumer-item-tab" data-toggle="tab" href="#consumer-item">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه اقلام مصرفی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="sale-service-tab" data-toggle="tab" href="#sale-service">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">درآمد خدمات پس از فروش</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="information-tab" data-toggle="tab" href="#information">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">اطلاعات دیگر</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="tab-content mt-5" id="myTabContent">
                                                <div class="tab-pane fade active show" id="development-cost" role="tabpanel" aria-labelledby="development-tab">
                                                    <development-cost></development-cost>
                                                </div>
                                                <div class="tab-pane fade" id="capacity" role="tabpanel" aria-labelledby="capacity-tab">
                                                    <capacity></capacity>
                                                </div>
                                                <div class="tab-pane fade" id="raw-material" role="tabpanel" aria-labelledby="material-tab">
                                                    <raw-material></raw-material>
                                                </div>
                                                <div class="tab-pane fade" id="man-power" role="tabpanel" aria-labelledby="man-power-tab">
                                                    <man-power></man-power>
                                                </div>
                                                <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                                    <rent></rent>
                                                </div>
                                                <div class="tab-pane fade" id="energy-consumption" role="tabpanel" aria-labelledby="energy-tab">
                                                    <energy-consumption></energy-consumption>
                                                </div>
                                                <div class="tab-pane fade" id="rd" role="tabpanel" aria-labelledby="rd-tab">
                                                    <r-d></r-d>
                                                </div>
                                                <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                                    <business></business>
                                                </div>
                                                <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                                                    <insurance></insurance>
                                                </div>
                                                <div class="tab-pane fade" id="repair" role="tabpanel" aria-labelledby="repair-tab">
                                                    <repair></repair>
                                                </div>
                                                <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab">
                                                    <transportation-cost></transportation-cost>
                                                </div>
                                                <div class="tab-pane fade" id="warranty" role="tabpanel" aria-labelledby="warranty-tab">
                                                    <warranty></warranty>
                                                </div>
                                                <div class="tab-pane fade" id="consumer-item" role="tabpanel" aria-labelledby="consumer-item-tab">
                                                    <consumer-item></consumer-item>
                                                </div>
                                                <div class="tab-pane fade" id="sale-service" role="tabpanel" aria-labelledby="sale-service-tab">
                                                    <after-sale-service></after-sale-service>
                                                </div>
                                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                                    <other-information></other-information>
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
        name: "show"
    }
</script>

<style scoped>

</style>