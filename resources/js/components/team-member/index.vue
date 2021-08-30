<template>
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">سهامداران</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>ایجاد عضو جدید</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="جست و جو" id="kt_datatable_search_query" />
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table id="kt_datatable" class="datatable datatable-bordered datatable-head-custom">
                <thead>
                    <tr>
                        <th>lname</th>
                        <th>fname</th>
                    </tr>
                </thead>
            </table>
            <!--<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>-->
            <!--end: Datatable-->
        </div>
        <!--<input type="hidden" v-model="test" ref="mydiv" id="mydiv">-->
    </div>
    <!--end::Card-->
</template>

<script>
    export default {
        name: "index",
        data() {
            return {
                // teamMembers: [
                //     {fname: 'ehsan', lname: 'roozbakhsh'},
                //     {fname: 'mohammad', lname: 'jahani'},
                // ],
                // test: [],
            }
        },
        beforeCreate() {

        },
        created() {
            // axios.get('/api/team-member').then(response => {
            //     this.test = JSON.stringify(response.data);
            // });
            // var dataJSONArray = this.$refs["mydiv"];
            // var a1 = .this
            var KTDatatableDataLocalDemo = function() {
                // Private functions
                // var dataJSONArray = this.$refs["test"];
                // console.log(dataJSONArray);
                // demo initializer
                var demo = function() {
                    // var dataJSONArray = ;
                    var datatable = $('#kt_datatable').KTDatatable({
                        // datasource definition
                        // data: {
                        //     type: 'local',
                        //     source: 'http://127.0.0.1:8000/api/team-member',
                        //     pageSize: 10,
                        // },

                        // processing: true,
                        // serverSide: true,
                        ajax: '/api/team-member',

                        // layout definition
                        // layout: {
                        //     scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                        //     // height: 450, // datatable's body's fixed height
                        //     footer: false, // display/hide footer
                        // },

                        // column sorting
                        // sortable: true,

                        // pagination: true,

                        search: {
                            input: $('#kt_datatable_search_query'),
                            key: 'generalSearch',
                        },

                        columns: [
                            {data: 'fname', name: 'fname'},
                            {data: 'lname', name: 'lname'}
                        ]

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
                    // $('#kt_datatable_search_status').on('change', function() {
                    //     datatable.search($(this).val().toLowerCase(), 'Status');
                    // });
                    //
                    // $('#kt_datatable_search_type').on('change', function() {
                    //     datatable.search($(this).val().toLowerCase(), 'Type');
                    // });
                    //
                    // $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
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
            });
            // setTimeout(function() {
            // }, 1000);
        },
        methods: {
            deleteMember: function (index) {
                alert(index)
            },
        }
    }
</script>

<style scoped>

</style>