<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head><base href="../../../">
    <meta charset="utf-8" />
    <title>Base Controls | Keenthemes</title>
    <meta name="description" content="Base form control examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact">
                                <!--begin::Form-->
                                @foreach($teams as $team)
                                    <form>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="team_name">نام تیم یا شرکت:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="team_name" placeholder="نام تیم خود را وارد کنید." name="team_name" value="{{ old('team_name' , $team->name) }}" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="project_name">نام طرح:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="project_name"
                                                       placeholder="نام طرح خود را وارد کنید." name="project_name" value="{{ old('project_name', $team->project_name) }}" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">شرکت ثبت شده؟
                                                    <span class="text-danger">*</span></label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1">بله</option>
                                                    <option value="2">خیر</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">ایمیل:
                                                    <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید." name="email" value="{{ old('email', $team->email) }}" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="team_phone">شماره همراه:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="team_phone" placeholder="شماره همراه خود را وارد کنید." name="team_phone" value="{{ old('team_phone', $team->phone_number) }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="land_line">شماره ثابت:</label>
                                                <input type="text" class="form-control" id="land_line" placeholder="شماره ثابت خود را وارد کنید." name="land_line" value="{{ old('land_line', $team->landline) }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">آدرس:</label>
                                                <input type="text" class="form-control" id="address" placeholder="آدرس خود را وارد کنید." name="address" value="{{ old('address', $team->address) }}" />
                                            </div>
                                            <div class="form-group">
                                                <label for="resume">سابقه عضویت در تیم(بر حسب سال):
                                                    <span class="text-danger">*</span></label>
                                                <select name="resume" id="resume" class="form-control">
                                                    @for($i=1;$i<=20;$i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2">ثبت</button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                @endforeach
                            </div>
                            <!--end::Card-->
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
    <!--end::Content-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
</body>
<!--end::Body-->
</html>