"use strict";

jQuery(document).ready(function ($) {

    $(function () {
        $("#quiDatepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-200:+0", // last hundred years
        });
    });
});

function fileChanged(t) {
    var o = $(t);
    if (o.hasClass("student-card-file")) {
        var f = o[0].files[0];
        var fn = f.name;
        var fs = f.size;
        var ft = f.type;
        var validImageTypes = ["image/gif", "image/jpeg", "image/png"];

        $('.std-card-fn').addClass("f-error");
        if ($.inArray(ft, validImageTypes) < 0) {
            $(".std-card-fn").html("only jpeg or png images accepted");
        } else if (fs > 1048576) {
            $(".std-card-fn").html("file size can't be greater than 1MB");
        } else {
            $('.std-card-fn').removeClass("f-error");
            $(".std-card-fn").html(fn);
        }
    }
}

function registerUser(t) {
    var o = $(t);

    $('.error-msg-list-register').html('');
    $('.error-msg-list-register').addClass('invisible');
    var errors = [];

    var $form = o,
        $email = $form.find('#register_email'),
        $password = $form.find('#register_password'),
        $name = $form.find('#register_name'),
        $sexFemale = $form.find('#register_gender_male'),
        $sexMale = $form.find('#register_gender_female'),
        $university = $form.find('#register_uni'),
        $birthdate = $form.find('#quiDatepicker'),
        $stdcard = $form.find("#customfile"),
        $terms = $form.find("#customCheck1"),
        $url = $form.attr('action'),
        $button = $form.find('button[type=submit]');


    var hasError = false;


    if ($email.val().indexOf('@') == -1) {
        $email.closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('invalid email address');
    } else {
        $email.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if ($password.val().length < 8) {
        $password.closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('password should be atleast 8 characters long');
    } else {
        $password.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if ($name.val().length < 3) {
        $password.closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('Invalid name');
    } else {
        $name.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if ($university.val().length < 4) {
        $password.closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('Invalid university name');
    } else {
        $university.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if ($birthdate.val().length == 0) {
        $birthdate.closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('birthdate can\'t be empty');
    } else {
        $birthdate.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if (!$sexFemale.is(':checked') && !$sexMale.is(':checked')) {
        $sexFemale.closest('.form-group').closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('The gender field not checked');
    } else {
        $sexFemale.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if ($stdcard.val() == 0 || $('.std-card-fn').hasClass("f-error")) {
        $stdcard.closest('.form-group').closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('Student ID card field requires a valid file');
    } else {
        $stdcard.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if (!$terms.is(':checked')) {
        $terms.closest('.form-group').closest('.form-group').addClass('has-error');
        hasError = true;
        errors.push('You need to agree to the terms and conditions');
    } else {
        $terms.closest('.form-group').addClass('has-success').removeClass('has-error');
    }

    if (!hasError) {
        $form.find('.form-group').addClass('has-success').removeClass('has-error');

        $('.error-msg-list-register').removeClass('invisible');
        $('.error-msg-list-register').html(' ');
        $('.error-msg-list-register').append(
            '<div class="alert alert-info text-center"><strong>Processing...</strong></div>'
        );

        var data = new FormData($form[0]);

        //submit form by ajax and wait for response
        $.ajax({
            type: "POST",
            url: $url,
            data: data,
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result);
                if (result['msg'] == 'success') {
                    $('.error-msg-list-register').html(' ');
                    $('.error-msg-list-register').append(
                        '<div class="alert alert-success text-center"><strong>Success!</strong></div>'
                    );
                   // $("#page-title-area").remove();
                    //$("#footer-area").remove();
                    //$(".register-page-inner").html('<div class="alert alert-success" style="margin:10px;">A verification email has been sent to your inbox. Please open it to verify email.(if not in the inbox, it could be in the spam folder)</div>');
                } else {
                    $('.error-msg-list-register').html(' ');
                    var error = result.errors;
                    error.forEach(function (v, i) {
                        $('.error-msg-list-register').append(
                            '<div class="alert alert-warning "><strong>' + v + '</strong></div>'
                        );
                    });
                    $('.error-msg-list-register').removeClass('invisible');
                }
            },
            error: function(result){
                console.log(result)
            }
        });
    } else {
        $('.error-msg-list-register').html('');
        errors.forEach(function (v, i) {
            $('.error-msg-list-register').append(
                '<div class="alert alert-warning "><strong>' + v + '</strong></div>'
            );
        });
        $('.error-msg-list-register').removeClass('invisible');
    }

    window.scrollBy(0, -window.innerHeight); // scroll to top to show messages

    return false;
}

function validateRegistrationFields() {

}

function loginUser(t) {
    var o = $(t);

    $('.error-msg-list-login').html('');
    $('.error-msg-list-login').addClass('invisible');
    var errors = [];
    var hasError = false;

    var $form = o,
        $email = $form.find('#login-email'),
        $password = $form.find('#login-password'),
        $button = $form.find('button[type=submit]');

    if (($email.val().length == 0) || $password.val().length == 0) {
        return;
    }

    if ($email.val().indexOf('@') == -1) {
        hasError = true;
    } else if ($password.val().length < 8) {
        hasError = true;
    }


    if (!hasError) {
        $form.find('.form-group').addClass('has-success').removeClass('has-error');

        $('.error-msg-list-login').removeClass('invisible');
        $('.error-msg-list-login').html(' ');
        $('.error-msg-list-login').append(
            '<div class="alert alert-info text-center"><strong>Verifying...</strong></div>'
        );

        //submit form by ajax and wait for response
        var url = $form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: $form.serialize(),
            success: function (result) {
                console.log(result);
                if (result['msg'] == 'success') {
                    $('.error-msg-list-login').html(' ');
                    $('.error-msg-list-login').append(
                        '<div class="alert alert-success text-center"><strong>Success!</strong></div>'
                    );
                    var action = result['action'];
                    if (action == 'url') {
                        window.location.replace(result['value']);

                    }
                } else {
                    $('.error-msg-list-login').html('');
                    var error = result.errors;
                    error.forEach(function (v, i) {
                        $('.error-msg-list-login').append(
                            '<div class="alert alert-warning "><strong>' + v + '</strong></div>'
                        );
                    });
                    $('.error-msg-list-login').removeClass('invisible');
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    } else {
        $('.error-msg-list-login').html('');
        errors.push("Invalid login credentials");
        errors.forEach(function (v, i) {
            $('.error-msg-list-login').append(
                '<div class="alert alert-warning "><strong>' + v + '</strong></div>'
            );
        });
        $('.error-msg-list-login').removeClass('invisible');
    }

    return false;
}