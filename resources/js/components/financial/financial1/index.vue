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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a class="text-muted">اطلاعات مالی سال صفر</a>
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
                                <h3 class="card-label">اطلاعات مالی سال صفر</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <div class="example-preview">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <!--<ul class="nav nav-tabs" id="myTab" role="tablist">-->
                                            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">مفروضات طرح</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="lands-tab" data-toggle="tab" href="#lands" aria-controls="lands">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">مستغلات</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="laboratory-equipments-tab" data-toggle="tab" href="#laboratory-equipments" aria-controls="laboratory-equipments">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">تجهیزات آزمایشگاهی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="machinery-tab" data-toggle="tab" href="#machinery" aria-controls="machinery">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">تجهیزات و ماشین آلات فنی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" aria-controls="office">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">تجهیزات و لوازم دفتری</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="facilities-tab" data-toggle="tab" href="#facilities" aria-controls="facilities">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">تاسیسات</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="transportation-tab" data-toggle="tab" href="#transportation" aria-controls="transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">وسایل حمل و نقل</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="operation-tab" data-toggle="tab" href="#operation" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های قبل بهره برداری</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="tab-content mt-5" id="myTabContent">
                                                <div class="tab-pane fade active show" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                                    <basicinformation></basicinformation>
                                                </div>
                                                <div class="tab-pane fade" id="lands" role="tabpanel" aria-labelledby="lands-tab">
                                                    <lands></lands>
                                                </div>
                                                <div class="tab-pane fade" id="laboratory-equipments" role="tabpanel" aria-labelledby="laboratory-equipments-tab">
                                                    <laboratory-equipments></laboratory-equipments>
                                                </div>
                                                <div class="tab-pane fade" id="machinery" role="tabpanel" aria-labelledby="machinery-tab">
                                                    <equipmentandmachineries></equipmentandmachineries>
                                                </div>
                                                <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                                                    <officeequipmentandsupplies></officeequipmentandsupplies>
                                                </div>
                                                <div class="tab-pane fade" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
                                                    <facilities></facilities>
                                                </div>
                                                <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab">
                                                    <Transportations></Transportations>
                                                </div>
                                                <div class="tab-pane fade" id="operation" role="tabpanel" aria-labelledby="operation-tab">
                                                    <preoperatingcosts></preoperatingcosts>
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
    }
</script>

<style scoped>

</style>