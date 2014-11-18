'use strict';

$(function(){
    //$("#contactUsFreeSessionDiv").load("partial/contactus-free-session.html");

    $('#contactUsFreeModal').on('shown.bs.modal', function() {
        $('#contactFreeSession').bootstrapValidator('resetForm', true);
    });

    $('#contactFreeSession').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            contactus_free_firstname: {
                message: 'The firstname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The firstname is required and cannot be empty'
                    }
                }
            },
            contactus_free_surname: {
                message: 'The surname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The surname is required and cannot be empty'
                    }
                }
            },
            contactus_free_email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            contactus_free_mob: {
                validators: {
                    notEmpty: {
                        message: 'The mobile number is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^04[0-9]{8}$/i,
                        message: 'Mobile number must start with 04 and be digits only'
                    }
                }
            }
        }
    });
});