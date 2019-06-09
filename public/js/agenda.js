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
                'depcont': {
                    required: true
                },
                'site': {
                    required: true
                },
                'scope': {
                    required: true
                },
                'auditee': {
                    required: true
                },
                'auditor[]': {
                    required: true
                },
                'from': {
                    required: true
                },
                'to': {
                    required: true
                },
                'approver': {
                    required: true
                }
            },
            messages: {
                'depcont': 'Please select a Department/Contractor',
                'site': 'Please select a Site',
                'scope': 'Please enter Audit Scope',
                'auditee': 'Please select an Auditee ',
                'auditor[]': 'Please select an Auditor (may choose more than one) ',
                'from': 'Please enter Start Date',
                'to': 'Please enter End Date',
                'approver': 'Please select an Approver'
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