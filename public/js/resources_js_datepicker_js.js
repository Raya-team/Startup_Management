(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_datepicker_js"],{

/***/ "./resources/js/datepicker.js":
/*!************************************!*\
  !*** ./resources/js/datepicker.js ***!
  \************************************/
/***/ (() => {

// Class definition
var KTBootstrapDatepicker = function () {
  var arrows;

  if (KTUtil.isRTL()) {
    arrows = {
      leftArrow: '<i class="la la-angle-right"></i>',
      rightArrow: '<i class="la la-angle-left"></i>'
    };
  } else {
    arrows = {
      leftArrow: '<i class="la la-angle-left"></i>',
      rightArrow: '<i class="la la-angle-right"></i>'
    };
  } // Private functions


  var demos = function demos() {
    // minimum setup
    $('#kt_datepicker_1').datepicker({
      rtl: KTUtil.isRTL(),
      todayHighlight: true,
      orientation: "bottom left",
      templates: arrows
    });
  };

  return {
    // public functions
    init: function init() {
      demos();
    }
  };
}();

jQuery(document).ready(function () {
  KTBootstrapDatepicker.init();
});

/***/ })

}]);