@extends('user.master')
@section('title', 'اطلاعات مالی دو')
@section('content')
    <div>
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">بوم کسب و کار</h5>
                        <!--end::Page Title-->
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
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">شرکای کلیدی</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">فعالیت های اصلی</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">منابع اصلی</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">ساختار هزینه</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">ارزش پیشنهادی</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">ارتباط با مشتریان</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">کانال توزیع</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">بخش مشتریان</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>سهبتخهسیتبخهیسخشهباهعثابهعصغقصغث98قغ98صثغق9صغثقصغشبلصثابهعسلبهعسلسایظبعهطیهعبازعطنظبهعسیالبهعیسلبهعسلبسلبض8صثبلغبغض8خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">جریان درآمد</h3>
                            </div>
                            <div class="card-body">
                                <div name="kt-ckeditor-1" id="kt-ckeditor-1">
                                    <p>خسته نباشیییییییییییی</p>
                                </div>
                                <!--begin: Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                        </li>
                                    </ul>
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        Default Inline Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;p&gt;Click here to trigger the editor&lt;/p&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="example_code_js">
                                            <div class="example-highlight">
																<pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditorInline = function () {
                                // Private functions
                                var demos = function () {
                                    InlineEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTCkeditorInline.init();
                            });
                            </code>
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Code-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection


