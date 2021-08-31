<template>
    <div>
        &lt;!&ndash;begin::Entry&ndash;&gt;
        <div class="d-flex flex-column-fluid">
            &lt;!&ndash;begin::Container&ndash;&gt;
            <div class="container">
                &lt;!&ndash;begin::Card&ndash;&gt;
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">لیست سهامداران</h3>
                        </div>
                        <div class="card-toolbar">
                            &lt;!&ndash;begin::Button&ndash;&gt;
                            <a class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                &lt;!&ndash;begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg&ndash;&gt;
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                                &lt;!&ndash;end::Svg Icon&ndash;&gt;
                            </span>افزودن سهامدار جدید
                            </a>
                            &lt;!&ndash;end::Button&ndash;&gt;
                        </div>
                    </div>
                    <div class="card-body">
                        &lt;!&ndash;begin: Search Form&ndash;&gt;
                        &lt;!&ndash;begin::Search Form&ndash;&gt;
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="جست و جو..." id="kt_datatable_search_query" />
                                                <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash;end::Search Form&ndash;&gt;
                        &lt;!&ndash;end: Search Form&ndash;&gt;
                        &lt;!&ndash;begin: Datatable&ndash;&gt;
                        <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                            <thead>
                            <tr>
                                <th title="Field #1">نام</th>
                                <th title="Field #2">نام خانوادگی</th>
                                <th title="Field #3">تحصیلات</th>
                                <th title="Field #4">رشته</th>
                                <th title="Field #5">سال تولد</th>
                                <th title="Field #6">رزومه</th>
                                <th title="Field #7">سرمایه گذاری</th>
                                <th title="Field #8">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="shareholder in shareholders">
                                <td>{{ shareholder.fname }}</td>
                                <td>{{ shareholder.lname }}</td>
                                <td>{{ shareholder.education.nickname }}</td>
                                <td>{{ shareholder.major }}</td>
                                <td>{{ shareholder.age }}</td>
                                <td>{{ shareholder.resume }}</td>
                                <td>{{ shareholder.investment }}</td>
                                <td>
                                    <a type="button" href="#" class="btn btn-icon btn-circle btn-xs btn-light-dark mr-2">
                                        <i class="icon-md la la-pencil-square-o"></i>
                                    </a>
                                    <button type="button" class="btn btn-icon btn-circle btn-xs btn-light-danger mr-2">
                                        <i class="icon-md la la-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        &lt;!&ndash;end: Datatable&ndash;&gt;
                    </div>
                </div>
                &lt;!&ndash;end::Card&ndash;&gt;
            </div>
            &lt;!&ndash;end::Container&ndash;&gt;
        </div>
        &lt;!&ndash;end::Entry&ndash;&gt;
    </div>
</template>

<script>
    export default {
        name: "index",
        data() {
            return {
                shareholder: [],
                test: [],
            }
        },
        created() {
            axios.get('/api/shareholders')
                .then(response => {
                    this.test = JSON.stringify(response.data);
                })
            var KTDatatableDataLocalDemo = function() {
                // Private functions
                // demo initializer
                var demo = function() {
                    // var dataJSONArray = ;
                    var datatable = $('#kt_datatable').KTDatatable({
                        // data: {
                        //     type: 'local',
                        //     source: 'http://127.0.0.1:8000/api/team-member',
                        //     pageSize: 10,
                        // },

                        // layout: {
                        //     scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                        //     // height: 450, // datatable's body's fixed height
                        //     footer: false, // display/hide footer
                        // },

                        // sortable: true,
                        // pagination: true,

                        search: {
                            input: $('#kt_datatable_search_query'),
                            key: 'generalSearch',
                        },

                        // columns definition
                        // columns: [
                        // {
                        //     field: 'fname',
                        //     title: 'نام',
                        //     sortable: false,
                        //     width: 20,
                        //     textAlign: 'center',
                        // },
                        // {
                        //     field: 'lname',
                        //     title: 'نام خانوادگی',
                        // }
                        // , {
                        //     field: 'Actions',
                        //     title: 'Actions',
                        //     sortable: false,
                        //     width: 125,
                        //     overflow: 'visible',
                        //     autoHide: false,
                        //     template: function() {
                        //         return '\
                        // 	<div class="dropdown dropdown-inline">\
                        // 		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">\
                        //             <span class="svg-icon svg-icon-md">\
                        //                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                        //                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                        //                         <rect x="0" y="0" width="24" height="24"/>\
                        //                         <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>\
                        //                     </g>\
                        //                 </svg>\
                        //             </span>\
                        //         </a>\
                        // 	  	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
                        //             <ul class="navi flex-column navi-hover py-2">\
                        //                 <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">\
                        //                     Choose an action:\
                        //                 </li>\
                        //                 <li class="navi-item">\
                        //                     <a href="#" class="navi-link">\
                        //                         <span class="navi-icon"><i class="la la-print"></i></span>\
                        //                         <span class="navi-text">Print</span>\
                        //                     </a>\
                        //                 </li>\
                        //                 <li class="navi-item">\
                        //                     <a href="#" class="navi-link">\
                        //                         <span class="navi-icon"><i class="la la-copy"></i></span>\
                        //                         <span class="navi-text">Copy</span>\
                        //                     </a>\
                        //                 </li>\
                        //                 <li class="navi-item">\
                        //                     <a href="#" class="navi-link">\
                        //                         <span class="navi-icon"><i class="la la-file-excel-o"></i></span>\
                        //                         <span class="navi-text">Excel</span>\
                        //                     </a>\
                        //                 </li>\
                        //                 <li class="navi-item">\
                        //                     <a href="#" class="navi-link">\
                        //                         <span class="navi-icon"><i class="la la-file-text-o"></i></span>\
                        //                         <span class="navi-text">CSV</span>\
                        //                     </a>\
                        //                 </li>\
                        //                 <li class="navi-item">\
                        //                     <a href="#" class="navi-link">\
                        //                         <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>\
                        //                         <span class="navi-text">PDF</span>\
                        //                     </a>\
                        //                 </li>\
                        //             </ul>\
                        // 	  	</div>\
                        // 	</div>\
                        // 	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
                        //         <span class="svg-icon svg-icon-md">\
                        //             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                        //                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                        //                     <rect x="0" y="0" width="24" height="24"/>\
                        //                     <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                        //                     <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                        //                 </g>\
                        //             </svg>\
                        //         </span>\
                        // 	</a>\
                        // 	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                        //         <span class="svg-icon svg-icon-md">\
                        //             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                        //                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                        //                     <rect x="0" y="0" width="24" height="24"/>\
                        //                     <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                        //                     <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                        //                 </g>\
                        //             </svg>\
                        //         </span>\
                        // 	</a>\
                        // ';
                        //     },
                        // }
                        // ],
                    });
                };

                return {
                    // Public functions
                    init: function() {
                        // init dmeo
                        demo();
                    },
                };
            }();

            jQuery(document).ready(function() {
                KTDatatableDataLocalDemo.init();
            })
        },
    }
</script>

<style scoped>

</style>