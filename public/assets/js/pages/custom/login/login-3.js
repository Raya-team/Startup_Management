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
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'ایمیل الزامی است'
                                },
                                emailAddress: {
                                    message: 'ایمیل وارد شده معتبر نیست.'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'پسورد الزامی است'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 16,
                                    message: 'رمز عبور باید بین 6 تا 16 کاراکتر باشد.'
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        // defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
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
                form.submit();
                // Simulate Ajax request
                setTimeout(function() {
                    KTUtil.btnRelease(formSubmitButton);
                }, 10000);

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
        var uniqueUrl = window.unique;
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
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'نام کاربری الزامی است.'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_.]+$/,
                                message: 'نام کاربری فقط می تواند شامل حروف الفبا لاتین، عدد، نقطه و زیر خط باشد'
                            },
                            stringLength: {
                                min:3,
                                message: 'نام کاربری حداقل باید شامل سه حرف باشد.'
                            },
                            //check unique variable
                            remote: {
                                url: uniqueUrl,
                                type: 'GET',
                                delay: 2000,
                                data: {
                                    type: 'username',
                                },
                                message: 'این نام کاربری قبلا انتخاب شده است.'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'ایمیل الزامی است.'
                            },
                            emailAddress: {
                                message: 'ایمیل وارد شده معتبر نیست.'
                            },
                            stringLength: {
                                max:255,
                                message: 'ایمیل حداکثر باید شامل 255 کاراکتر باشد.'
                            },
                            remote: {
                                url: uniqueUrl,
                                type: 'GET',
                                delay: 2000,
                                data: {
                                    type: 'email',
                                },
                                message: 'این ایمیل قبلا انتخاب شده است.'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'رمز عبور الزامی است.'
                            },
                            stringLength: {
                                min: 6,
                                max: 16,
                                message: 'رمز عبور باید بین 6 تا 16 کاراکتر باشد.'
                            },
                        }
                    },
                    password_confirmation: {
                        validators: {
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'رمز عبور و تأیید آن یکسان نیستند'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    }),
                }
            }
        ));

        // Step 2
        validations.push(FormValidation.formValidation(
            form,
            {
                fields: {
                    team_name: {
                        validators: {
                            notEmpty: {
                                message: 'نام تیم یا شرکت الزامی است.'
                            },
                            remote: {
                                url: uniqueUrl,
                                type: 'GET',
                                delay: 2000,
                                data: {
                                    type: 'team_name',
                                },
                                message: 'این نام قبلا انتخاب شده است.'
                            },
                            stringLength: {
                                min: 3,
                                max: 32,
                                message: 'نام تیم باید بین 3 تا 32 کاراکتر باشد.'
                            },
                            regexp: {
                                regexp: /^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'نام تیم فقط باید شامل حروف فارسی باشد.'
                            },
                        }
                    },
                    project_name: {
                        validators: {
                            notEmpty: {
                                message: 'نام طرح الزامی است.'
                            },
                            stringLength: {
                                min: 3,
                                max: 32,
                                message: 'نام طرح باید بین 3 تا 32 کاراکتر باشد.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'نام پروژه یک فرمت معتبر نمیباشد.'
                            }
                        }
                    },
                    activity_field: {
                        validators: {
                            notEmpty: {
                                message: 'حوزه فعالیت الزامی است.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'حوزه فعالیت یک فرمت معتبر نمیباشد.'
                            }

                        }
                    },
                    status: {
                        validators: {
                            notEmpty: {
                                message: 'وضعیت ثبت شرکت الزامی است.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'وضعیت ثبت شرکت یک فرمت معتبر نمیباشد.'
                            }
                        }
                    },
                    team_email: {
                        validators: {
                            notEmpty: {
                                message: 'ایمیل تیم یا شرکت الزامی است.'
                            },
                            emailAddress: {
                                message: 'ایمیل وارد شده معتبر نیست.'
                            },
                            remote: {
                                url: uniqueUrl,
                                type: 'GET',
                                delay: 2000,
                                data: {
                                    type: 'team_email',
                                },
                                message: 'این ایمیل قبلا انتخاب شده است.'
                            },
                            stringLength: {
                                max: 255,
                                message: 'ایمیل تیم باید حداکثر 255 کاراکتر باشد.'
                            },
                        }
                    },
                    team_phone: {
                        validators: {
                            notEmpty: {
                                message: 'شماره همراه تیم الزامی است.'
                            },
                            regexp: {
                                regexp: /(09)[0-9]/,
                                message: 'شماره تلفن باید با 09 شروع شود'
                            },
                            stringLength: {
                                min:11,
                                max: 11,
                                message: 'باید 11 رقم باشد'
                            },
                            digits: {
                                message: 'باید عدد وارد شود.'
                            },
                            remote: {
                                url: uniqueUrl,
                                type: 'GET',
                                delay: 2000,
                                data: {
                                    type: 'team_phone',
                                },
                                message: 'این ایمیل قبلا انتخاب شده است.'
                            }

                        }
                    },
                    land_line: {
                        validators: {
                            regexp: {
                                regexp: /(051)[0-9]/,
                                message: 'شماره تلفن باید با 051 شروع شود'
                            },
                            stringLength: {
                                min:11,
                                max: 11,
                                message: 'باید 11 رقم باشد'
                            },
                            digits: {
                                message: 'باید عدد وارد شود.'
                            },
                            remote: {
                                url: uniqueUrl,
                                type: 'GET',
                                delay: 2000,
                                data: {
                                    type: 'land_line',
                                },
                                message: 'این شماره ثابت قبلا انتخاب شده است.'
                            }
                        },

                    },
                    address: {
                        validators: {
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'آدرس یک فرمت معتبر نمیباشد.'
                            },
                            stringLength: {
                                max: 255,
                                message: 'آدرس باید حداکثر 255 کاراکتر باشد.'
                            },
                        },
                    },
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
                    fname: {
                        validators: {
                            notEmpty: {
                                message: 'نام اعضای تیم الزامی است.'
                            },
                            stringLength: {
                                min: 3,
                                max: 16,
                                message: 'نام اعضای تیم باید بین 3 تا 16 حرف باشد.'
                            },
                            regexp: {
                                regexp: /^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'نام اعضای تیم فقط باید شامل حروف فارسی باشد.'
                            },
                        }
                    },
                    lname: {
                        validators: {
                            notEmpty: {
                                message: 'نام خانوادگی اعضای تیم الزامی است.'
                            },
                            stringLength: {
                                min: 3,
                                max: 16,
                                message: 'نام خانوادگی اعضای تیم باید بین 3 تا 16 حرف باشد.'
                            },
                            regexp: {
                                regexp: /^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'نام خانوادگی اعضای تیم فقط باید شامل حروف فارسی باشد.'
                            },
                        }
                    },
                    major: {
                        validators: {
                            notEmpty: {
                                message: 'رشته تحصیلی الزامی است.'
                            },
                            stringLength: {
                                max: 32,
                                message: 'رشته تحصیلی حداکثر باید 32 حرف باشد.'
                            },
                            regexp: {
                                regexp: /^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'رشته تحصیلی فقط باید شامل حروف فارسی باشد.'
                            },
                        }
                    },
                    age: {
                        validators: {
                            notEmpty: {
                                message: 'سن الزامی است.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'سن یک فرمت معتبر نمیباشد.'
                            },
                        }
                    },
                    'responsibility[]': {
                        validators: {
                            notEmpty: {
                                message: 'مسئولیت الزامی است.'
                            }
                        }
                    },
                    education: {
                        validators: {
                            notEmpty: {
                                message: 'تحصیلات الزامی است.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'تحصیلات یک فرمت معتبر نمیباشد.'
                            },
                        }
                    },
                    resume: {
                        validators: {
                            notEmpty: {
                                message: 'سابقه الزامی است.'
                            },
                            digits: {
                                message: 'باید عدد وارد شود.'
                            },
                        }
                    },
                    investment: {
                        validators: {
                            notEmpty: {
                                message: 'میزان سرمایه گذاری الزامی است.'
                            },
                            digits: {
                                message: 'باید عدد وارد شود.'
                            }

                        }
                    },

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
                    productName: {
                        selector: '.productName',
                        row: '.col-md-4',
                        validators: {
                            notEmpty: {
                                message: 'نام محصول الزامی است.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'نام محصول یک فرمت معتبر نمیباشد.'
                            },
                        }
                    },
                    productType: {
                        selector: '.productType',
                        row: '.col-sm-4',
                        validators: {
                            notEmpty: {
                                message: 'نام محصول الزامی است.'
                            },
                            regexp: {
                                regexp: /^[-0123456789°._abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/,
                                message: 'نام محصول یک فرمت معتبر نمیباشد.'
                            },
                        }
                    },
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
                            text: "متاسفیم، خطاهایی در اطلاعات وارد شده وجود دارد، لطفا مجددا تلاش فرمایید.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "باشه، فهمیدم",
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
            var validator = validations[wizard.getStep() - 1];
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        Swal.fire({
                            text: "همه اطلاعات را به درستی وارد کرده‌اید؟",
                            icon: "success",
                            showCancelButton: true,
                            buttonsStyling: false,
                            confirmButtonText: "بله",
                            cancelButtonText: "خیر",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-primary",
                                cancelButton: "btn font-weight-bold btn-default"
                            }
                        }).then(function (result) {
                            if (result.value) {
                                form.submit(); // Submit form
                            } else if (result.dismiss === 'cancel') {
                                Swal.fire({
                                    text: "اطلاعات شما ارسال نشد",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "باشه، فهمیدم",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-primary",
                                    }
                                });
                            }
                        });
                    } else {
                        Swal.fire({
                            text: "متاسفیم، خطاهایی در اطلاعات وارد شده وجود دارد، لطفا مجددا تلاش فرمایید.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "باشه، فهمیدم",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

        });
    }

    var _handleSetFormForgot = function() {
        var form = KTUtil.getById('kt_login_set_forgot_form');
        var wizardEl = KTUtil.getById('kt_login');
        var formSubmitUrl = KTUtil.attr(form, 'action');
        var formSubmitButton = KTUtil.getById('kt_login_set_forgot_form_submit_button');

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
                                    message: 'ایمیل الزامی است'
                                },
                                emailAddress: {
                                    message: 'ایمیل وارد شده معتبر نیست.'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'پسورد الزامی است'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 16,
                                    message: 'رمز عبور باید بین 6 تا 16 کاراکتر باشد.'
                                },
                            },
                        },
                        password_confirmation: {
                            validators: {
                                identical: {
                                    compare: function() {
                                        return form.querySelector('[name="password"]').value;
                                    },
                                    message: 'رمز عبور و تأیید آن یکسان نیستند'
                                }
                            }
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        // defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
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
                form.submit();
                // Simulate Ajax request
                setTimeout(function() {
                    KTUtil.btnRelease(formSubmitButton);
                },10000);

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

    // Public Functions
    return {
        init: function() {
            _handleFormSignin();
            _handleFormForgot();
            _handleFormSignup();
            _handleSetFormForgot();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});