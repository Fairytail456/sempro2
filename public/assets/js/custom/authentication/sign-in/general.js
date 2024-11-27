var KTSigninGeneral = function() {
    var form, submitButton, validator;

    return {
        init: function() {
            form = document.querySelector("#kt_sign_in_form");
            submitButton = document.querySelector("#kt_sign_in_submit");

            validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Email address is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "The password is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row"
                        })
                    }
                }
            );

            submitButton.addEventListener("click", function(event) {
                event.preventDefault();

                validator.validate().then(function(status) {
                    if (status === "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;

                        // Ambil nilai email dan password dari formulir
                        var email = form.querySelector('[name="email"]').value;
                        var password = form.querySelector('[name="password"]').value;

                        // Ambil nilai token CSRF dari meta tag
                        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

                        // Kirim permintaan AJAX ke endpoint autentikasi
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "/sign-in/auth");
                        xhr.setRequestHeader("Content-Type", "application/json");
                        xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken); // Sertakan token CSRF dalam header

                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.redirect) {
                                    // Redirect ke halaman utama jika autentikasi berhasil
                                    window.location.href = response.redirect;
                                } else {
                                    // Autentikasi gagal, tampilkan pesan error
                                    Swal.fire({
                                        text: "Failed to authenticate. Please try again.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-primary" }
                                    });
                                }
                            } else {
                                // Permintaan AJAX gagal, tampilkan pesan error
                                Swal.fire({
                                    text: "Failed to authenticate. Please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { confirmButton: "btn btn-primary" }
                                });
                            }

                            // Setelah selesai, atur kembali tombol submit
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                        };

                        // Kirim data email dan password dalam bentuk JSON
                        xhr.send(JSON.stringify({ email: email, password: password }));
                    }
                });
            });
        }
    };
}();

// Panggil fungsi init saat DOM telah dimuat
KTUtil.onDOMContentLoaded(function() {
    KTSigninGeneral.init();
});
