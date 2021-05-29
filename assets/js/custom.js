"use strict";

jQuery(document).ready(function ($) {
  
    $(function() {
        $( "#quiDatepicker" ).datepicker({
             changeMonth: true,
            changeYear: true,
            yearRange: "-200:+0", // last hundred years
        });
    });

});

function registerUser(t) {
    var o = $(t);

    $("#page-title-area").remove();
    $("#footer-area").remove();
    $(".register-page-inner").html('<div class="alert alert-success" style="margin:10px;">A verification email has been sent to your inbox. Please open it now and follow the instructions.(if not in the inbox, it could be in the spam folder)</div>');
    return false;
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
                    $('.error-msg-list').html(' ');
                    $('.error-msg-list').append(
                        '<div class="alert alert-success text-center"><strong>Success!</strong></div>'
                    );
                    var action = result['action'];
                    if (action == 'url') {
                        window.location.replace(result['value']);

                    }
                } else {
                    $('.error-msg-list-login').html('');
                    var error = result.error;
                    error.forEach(function (v, i) {
                        $('.error-msg-list-login').append(
                            '<div class="alert alert-warning "><strong>' + v + '</strong></div>'
                        );
                    });
                    $('.error-msg-list-login').removeClass('invisible');
                }
            },
            error: function(err)
            {
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