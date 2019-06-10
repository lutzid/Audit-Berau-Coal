/*
 *  Document   : be_forms_validation.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Form Validation Page
 */

var BeFormValidation = function() {
    // Init Material Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationMaterial = function(){
        jQuery('.js-validation-material').validate({
            ignore: [],
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'no_nc': {
                    required: true
                },
                'audit_period': {
                    required: true
                },
                'depcont': {
                    required: true
                },
                'site': {
                    required: true
                },
                'date': {
                    required: true
                },
                'auditor[]': {
                    required: true
                },
                'problem': {
                    required: true
                },
                'location': {
                    required: true
                },
                'object': {
                    required: true
                },
                'category': {
                    required: true
                },
                'approver': {
                    required: true
                }
            },
            messages: {
                'no_nc': {
                    required: 'Please enter No NC'
                },
                'audit-period': {
                    required: 'Please enter Audit Period'
                },
                'depcont' : {
                    required: 'Please choose Department/Contractor'
                },
                'site' : {
                    required: 'Please choose Site'
                },
                'date': {
                    required: 'Please enter Date'
                },
                'auditor[]': {
                    required: 'Please choose Auditor'
                },
                'problem': {
                    required: 'Please enter problem'
                },
                'location' : {
                    required: 'Please enter Location'
                },
                'object' : {
                    required: 'Please enter Object'
                },
                'category' : {
                    required: 'Please enter Category'
                },
                'approver' : {
                    required: 'Please choose Approver Lead Auditor'
                }
            }
        });
    };

    return {
        init: function () {

            // Init Material Forms Validation
            initValidationMaterial();

            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BeFormValidation.init(); });
