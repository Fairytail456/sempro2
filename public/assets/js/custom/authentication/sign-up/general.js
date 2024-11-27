var KTSignupGeneral = function () {
    var e, t, a, s, r = function () {
        return 100 === s.getScore();
    };

    return {
        init: function () {
            // Ambil token CSRF
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            e = document.querySelector("#kt_sign_up_form");
            t = document.querySelector("#kt_sign_up_submit");
            s = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]'));

            a = FormValidation.formValidation(e, {
                fields: {
                    "name": {
                        validators: {
                            notEmpty: { message: "Name is required" }
                        }
                    },
                    "email": {
                        validators: {
                            notEmpty: { message: "Email address is required" },
                            emailAddress: { message: "The value is not a valid email address" },
                            remote: {
                                url: '/check-email',
                                method: 'POST',
                                data: function () {
                                    return {
                                        email: e.querySelector('[name="email"]').value
                                    };
                                },
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                            }
                        }
                    },
                    "password": {
                        validators: {
                            notEmpty: { message: "The password is required" },
                            callback: {
                                message: "Please enter a valid password",
                                callback: function (e) {
                                    if (e.value.length > 0) return r();
                                }
                            }
                        }
                    },
                    "confirm-password": {
                        validators: {
                            notEmpty: { message: "The password confirmation is required" },
                            identical: {
                                compare: function () {
                                    return e.querySelector('[name="password"]').value;
                                },
                                message: "The password and its confirm are not the same"
                            }
                        }
                    },
                    "toc": {
                        validators: {
                            notEmpty: { message: "You must accept the terms and conditions" }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(
                        { event: { password: !1 } }
                    ),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: ""
                    })
                }
            });

            t.addEventListener("click", function (event) {
                event.preventDefault();

                a.revalidateField("password"); // Revalidate the password field

                a.validate().then(function (status) {
                    if (status === "Valid") {
                        // If form is valid, prepare data to send via AJAX
                        var formData = new FormData(e);

                        // Send data to Laravel endpoint via AJAX using jQuery
                        $.ajax({
                            url: '/sign-up',
                            method: 'POST',
                            data: formData,
                            processData: false,  // Important for FormData
                            contentType: false,  // Important for FormData
                            success: function (data) {
                                // Handle response from Laravel
                                if (data.success) {
                                    // If registration is successful
                                    t.setAttribute("data-kt-indicator", "on");
                                    t.disabled = true;

                                    setTimeout(function () {
                                        t.removeAttribute("data-kt-indicator");
                                        t.disabled = false;
                                        Swal.fire({
                                            text: "You have successfully created your account!",
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "SIGN-IN",
                                            customClass: { confirmButton: "btn btn-primary" }
                                        }).then(function (result) {
                                            if (result.isConfirmed) {
                                                e.reset(); // Reset the form
                                                s.reset(); // Reset the password strength meter
                                                window.location.href = '/';
                                            }
                                        });
                                    }, 1500);
                                } else {
                                    // If registration failed, show general error message
                                    Swal.fire({
                                        text: "Registration failed. Please try again later.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-primary" }
                                    });
                                }
                            },
                            error: function (error) {
                                console.error('Error:', error);
                            }
                        });
                    }
                });
            });

            e.querySelector('input[name="password"]').addEventListener("input", function () {
                if (this.value.length > 0) {
                    a.updateFieldStatus("password", "NotValidated");
                }
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTSignupGeneral.init();
});
