"use strict";

// Class Definition
var KTLogin = function() {
	var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';

	var _handleFormSignin = function() {
		var form = KTUtil.getById('kt_login_singin_form');
		var formSubmitUrl = KTUtil.attr(form, 'action');
		var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');

		if (!form) {
			return;
		}

		FormValidation
		    .formValidation(
		        form,
		        {
		            fields: {
						username: {
							validators: {
								notEmpty: {
									message: 'ایمیل اجباری است'
								}
							}
						},
						password: {
							validators: {
								notEmpty: {
									message: 'پسورد اجباری است'
								}
							}
						}
		            },
		            plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
	            		//defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
						bootstrap: new FormValidation.plugins.Bootstrap({
						//	eleInvalidClass: '', // Repace with uncomment to hide bootstrap validation icons
						//	eleValidClass: '',   // Repace with uncomment to hide bootstrap validation icons
						})
		            }
		        }
		    )
		    .on('core.form.valid', function() {
				// Show loading state on button
				KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید");

				// Simulate Ajax request
				setTimeout(function() {
					KTUtil.btnRelease(formSubmitButton);
				}, 2000);

				// Form Validation & Ajax Submission: https://formvalidation.io/guide/examples/using-ajax-to-submit-the-form
				/**
		        FormValidation.utils.fetch(formSubmitUrl, {
		            method: 'POST',
					dataType: 'json',
		            params: {
		                name: form.querySelector('[name="username"]').value,
		                email: form.querySelector('[name="password"]').value,
		            },
		        }).then(function(response) { // Return valid JSON
					// Release button
					KTUtil.btnRelease(formSubmitButton);

					if (response && typeof response === 'object' && response.status && response.status == 'success') {
						Swal.fire({
			                text: "All is cool! Now you submit this form",
			                icon: "success",
			                buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light-primary"
							}
			            }).then(function() {
							KTUtil.scrollTop();
						});
					} else {
						Swal.fire({
			                text: "Sorry, something went wrong, please try again.",
			                icon: "error",
			                buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light-primary"
							}
			            }).then(function() {
							KTUtil.scrollTop();
						});
					}
		        });
				**/
		    })
			.on('core.form.invalid', function() {
				Swal.fire({
					text: "متاسفیم، خطاهایی در اطلاعات وارد شده وجود دارد، لطفا مجددا تلاش فرمایید.",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "باشه، فهمیدم!",
					customClass: {
						confirmButton: "btn font-weight-bold btn-light-primary"
					}
				}).then(function() {
					KTUtil.scrollTop();
				});
		    });
    }

	var _handleFormForgot = function() {
		var form = KTUtil.getById('kt_login_forgot_form');
		var formSubmitUrl = KTUtil.attr(form, 'action');
		var formSubmitButton = KTUtil.getById('kt_login_forgot_form_submit_button');

		if (!form) {
			return;
		}

		FormValidation
		    .formValidation(
		        form,
		        {
		            fields: {
						email: {
							validators: {
								notEmpty: {
									message: 'ایمیل اجباری است'
								},
								emailAddress: {
									message: 'ایمیل وارد شده معتبر نیست'
								}
							}
						}
		            },
		            plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
	            		//defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
						bootstrap: new FormValidation.plugins.Bootstrap({
						//	eleInvalidClass: '', // Repace with uncomment to hide bootstrap validation icons
						//	eleValidClass: '',   // Repace with uncomment to hide bootstrap validation icons
						})
		            }
		        }
		    )
		    .on('core.form.valid', function() {
				// Show loading state on button
				KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید");

				// Simulate Ajax request
				// setTimeout(function() {
				// 	KTUtil.btnRelease(formSubmitButton);
				// }, 2000);
                FormValidation.utils.fetch(formSubmitUrl, {
                    method: 'POST',
                    dataType: 'json',
                    params: {
                        email: form.querySelector('[name="email"]').value,
                        _token: form.querySelector('[name="_token"]').value,
                    },
                }).then(function(response) { // Return valid JSON
                    // Release button
                    KTUtil.btnRelease(formSubmitButton);
                    var message = response;
					console.log(message);
                    if (message == "passwords.sent") {
                        Swal.fire({
                            text: "پیغام بازیابی رمز عبور برای ایمیل شما ارسال شد.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "باشه، فهمیدم",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function() {
                            KTUtil.scrollTop();
                        });
                    }else if (message == "passwords.user") {
                        Swal.fire({
                            text: "کاربری با این ایمیل وجود ندارد.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "باشه، فهمیدم",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function() {
                            KTUtil.scrollTop();
                        });
					} else {
                        Swal.fire({
                            text: "متاسفانه خطایی رخ داده است لطفا مجددا تلاش فرمایید",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "باشه، فهمیدم",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function() {
                            KTUtil.scrollTop();
                        });
                    }
                });
		    })
			.on('core.form.invalid', function() {
				Swal.fire({
					text: "متاسفیم، خطاهایی در اطلاعات وارد شده وجود دارد، لطفا مجددا تلاش فرمایید.",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "باشه، فهمیدم!",
					customClass: {
						confirmButton: "btn font-weight-bold btn-light-primary"
					}
				}).then(function() {
					KTUtil.scrollTop();
				});
		    });
    }

	var _handleFormSignup = function() {
		// Base elements
		var wizardEl = KTUtil.getById('kt_login');
		var form = KTUtil.getById('kt_login_signup_form');
		var wizardObj;
		var validations = [];

		if (!form) {
			return;
		}

		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					fname: {
						validators: {
							notEmpty: {
								message: 'First name is required'
							}
						}
					},
					lname: {
						validators: {
							notEmpty: {
								message: 'Last Name is required'
							}
						}
					},
					phone: {
						validators: {
							notEmpty: {
								message: 'Phone is required'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'Email is required'
							},
							emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 2
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					address1: {
						validators: {
							notEmpty: {
								message: 'Address is required'
							}
						}
					},
					postcode: {
						validators: {
							notEmpty: {
								message: 'Postcode is required'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'City is required'
							}
						}
					},
					state: {
						validators: {
							notEmpty: {
								message: 'State is required'
							}
						}
					},
					country: {
						validators: {
							notEmpty: {
								message: 'Country is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 3
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					delivery: {
						validators: {
							notEmpty: {
								message: 'Delivery type is required'
							}
						}
					},
					packaging: {
						validators: {
							notEmpty: {
								message: 'Packaging type is required'
							}
						}
					},
					preferreddelivery: {
						validators: {
							notEmpty: {
								message: 'Preferred delivery window is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 4
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					ccname: {
						validators: {
							notEmpty: {
								message: 'Credit card name is required'
							}
						}
					},
					ccnumber: {
						validators: {
							notEmpty: {
								message: 'Credit card number is required'
							},
							creditCard: {
								message: 'The credit card number is not valid'
							}
						}
					},
					ccmonth: {
						validators: {
							notEmpty: {
								message: 'Credit card month is required'
							}
						}
					},
					ccyear: {
						validators: {
							notEmpty: {
								message: 'Credit card year is required'
							}
						}
					},
					cccvv: {
						validators: {
							notEmpty: {
								message: 'Credit card CVV is required'
							},
							digits: {
								message: 'The CVV value is not valid. Only numbers is allowed'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Initialize form wizard
		wizardObj = new KTWizard(wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		wizardObj.on('change', function (wizard) {
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}

			// Validate form before change wizard step
			var validator = validations[wizard.getStep() - 1]; // get validator for currnt step

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

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Change event
		wizardObj.on('changed', function (wizard) {
			KTUtil.scrollTop();
		});

		// Submit event
		wizardObj.on('submit', function (wizard) {
			Swal.fire({
				text: "All is good! Please confirm the form submission.",
				icon: "success",
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: "Yes, submit!",
				cancelButtonText: "No, cancel",
				customClass: {
					confirmButton: "btn font-weight-bold btn-primary",
					cancelButton: "btn font-weight-bold btn-default"
				}
			}).then(function (result) {
				if (result.value) {
					form.submit(); // Submit form
				} else if (result.dismiss === 'cancel') {
					Swal.fire({
						text: "Your form has not been submitted!.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
				}
			});
		});
    }

    // Public Functions
    return {
        init: function() {
            _handleFormSignin();
			_handleFormForgot();
			_handleFormSignup();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
