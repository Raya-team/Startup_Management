"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_wizard2_js"],{

/***/ "./resources/js/wizard2.js":
/*!*********************************!*\
  !*** ./resources/js/wizard2.js ***!
  \*********************************/
/***/ (() => {

 // Class definition

var KTWizard2 = function () {
  // Base elements
  var _wizardEl;

  var _formEl;

  var _wizardObj;

  var _validations = []; // Private functions

  var _initWizard = function _initWizard() {
    // Initialize form wizard
    _wizardObj = new KTWizard(_wizardEl, {
      startStep: 1,
      // initial active step number
      clickableSteps: true // to make steps clickable this set value true and add data-wizard-clickable="true" in HTML for class="wizard" element

    }); // Validation before going to next page

    _wizardObj.on('change', function (wizard) {
      if (wizard.getStep() > wizard.getNewStep()) {
        return; // Skip if stepped back
      } // Validate form before change wizard step


      var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step


      if (validator) {
        validator.validate().then(function (status) {
          if (status == 'Valid') {
            wizard.goTo(wizard.getNewStep());
            KTUtil.scrollTop();
          } else {
            Swal.fire({
              text: "Sorry, looks like there are some errors detected, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn font-weight-bold btn-light"
              }
            }).then(function () {
              KTUtil.scrollTop();
            });
          }
        });
      }

      return false; // Do not change wizard step, further action will be handled by he validator
    }); // Change event


    _wizardObj.on('changed', function (wizard) {
      KTUtil.scrollTop();
    });
  };

  var _initValidation = function _initValidation() {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    // Step 1
    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 2


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 3


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 4


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 5


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 6


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 7


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 8


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 9


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    })); // Step 10


    _validations.push(FormValidation.formValidation(_formEl, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
          //eleInvalidClass: '',
          eleValidClass: ''
        })
      }
    }));
  };

  return {
    // public functions
    init: function init() {
      _wizardEl = KTUtil.getById('kt_wizard');
      _formEl = KTUtil.getById('kt_form');

      _initWizard();

      _initValidation();
    }
  };
}();

$(document).ready(function () {
  KTWizard2.init();
});

/***/ })

}]);