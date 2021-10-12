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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">سهام اولیه</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">محاسبه</a>
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
                <div class="row">
                    <div class="col-xl-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">سهام اولیه</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Example-->
                                <div class="example">
                                    <div class="example-preview">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="previous-tab" data-toggle="tab" href="#previous-investor">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="nav-text">سرمایه گذاران قبلی</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="variables-tab" data-toggle="tab" href="#variables" aria-controls="profile">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="nav-text">متغیرها</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="questions-tab" data-toggle="tab" href="#share_questions" aria-controls="contact">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="nav-text">سوالات</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5" id="myTabContent">
                                            <div class="tab-pane fade active show" id="previous-investor" role="tabpanel" aria-labelledby="previous-tab">
                                                <previousinvestors></previousinvestors>
                                            </div>
                                            <div class="tab-pane fade" id="variables" role="tabpanel" aria-labelledby="variables-tab">
                                                <sharevariables></sharevariables>
                                            </div>
                                            <div class="tab-pane fade" id="share_questions" role="tabpanel" aria-labelledby="questions-tab">
                                                <sharequestions></sharequestions>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Example-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    export default {
        name: "index"
    }
</script>

<style scoped>

</style>