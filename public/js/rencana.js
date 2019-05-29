/*
 *  Document   : be_forms_wizard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Form Wizard Page
 */

var BeFormWizard = function() {
    // Init Wizard defaults
    var initWizardDefaults = function(){
        jQuery.fn.bootstrapWizard.defaults.tabClass         = 'nav nav-tabs';
        jQuery.fn.bootstrapWizard.defaults.nextSelector     = '[data-wizard="next"]';
        jQuery.fn.bootstrapWizard.defaults.previousSelector = '[data-wizard="prev"]';
        jQuery.fn.bootstrapWizard.defaults.firstSelector    = '[data-wizard="first"]';
        jQuery.fn.bootstrapWizard.defaults.lastSelector     = '[data-wizard="lsat"]';
        jQuery.fn.bootstrapWizard.defaults.finishSelector   = '[data-wizard="finish"]';
        jQuery.fn.bootstrapWizard.defaults.backSelector     = '[data-wizard="back"]';
    };

    // Init simple wizard, for more examples you can check out https://github.com/VinceG/twitter-bootstrap-wizard
    var initWizardSimple = function(){
        jQuery('.js-wizard-simple').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                var percent = ((index + 1) / navigation.find('li').length) * 100;

                // Get progress bar
                var progress = navigation.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                // Update progress bar if there is one
                if (progress.length) {
                    progress.css({ width: percent + 1 + '%' });
                }
            }
        });
    };

    // Init wizards with validation, for more examples you can check out https://github.com/VinceG/twitter-bootstrap-wizard
    // and https://github.com/jzaefferer/jquery-validation
    var initWizardValidation = function(){
        // Get forms
        var formMaterial    = jQuery('.js-wizard-validation-material-form');

        // Init form validation on material wizard form
        var validatorMaterial = formMaterial.validate({
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
                'wizard-validation-material-scope1': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-content1': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-remaks1': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-scope2': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-content2': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-remaks2': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-scope3': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-content3': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-remaks3': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-scope4': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-content4': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-remaks4': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-scope5': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-content5': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation-material-remaks5': {
                    required: true,
                    minlength: 2
                },
                'example-datepicker1' : {
                    required : true
                },
                'example-datepicker2' : {
                    required : true
                },
                'example-datepicker3' : {
                    required : true
                },
                'example-datepicker4' : {
                    required : true
                },
                'example-datepicker5' : {
                    required : true
                },
                'end-datepicker1' : {
                    required : true
                },
                'end-datepicker2' : {
                    required : true
                },
                'end-datepicker3' : {
                    required : true
                },
                'end-datepicker4' : {
                    required : true
                },
                'end-datepicker5' : {
                    required : true
                }
            },
            messages: {
                'wizard-validation-material-scope1': {
                    required: 'Please enter audit scope',
                    minlength: 'Your audit scope must consist of at least 2 characters'
                },
                'wizard-validation-material-content1': {
                    required: 'Please enter audit content',
                    minlength: 'Your audit content must consist of at least 2 characters'
                },
                'wizard-validation-material-remaks1': {
                    required: 'Please enter remaks',
                    minlength: 'Your remaks must consist of at least 2 characters'
                },
                'wizard-validation-material-scope2': {
                    required: 'Please enter audit scope',
                    minlength: 'Your audit scope must consist of at least 2 characters'
                },
                'wizard-validation-material-content2': {
                    required: 'Please enter audit content',
                    minlength: 'Your audit content must consist of at least 2 characters'
                },
                'wizard-validation-material-remaks2': {
                    required: 'Please enter remaks',
                    minlength: 'Your remaks must consist of at least 2 characters'
                },
                'wizard-validation-material-scope3': {
                    required: 'Please enter audit scope',
                    minlength: 'Your audit scope must consist of at least 2 characters'
                },
                'wizard-validation-material-content3': {
                    required: 'Please enter audit content',
                    minlength: 'Your audit content must consist of at least 2 characters'
                },
                'wizard-validation-material-remaks3': {
                    required: 'Please enter remaks',
                    minlength: 'Your remaks must consist of at least 2 characters'
                },
                'wizard-validation-material-scope4': {
                    required: 'Please enter audit scope',
                    minlength: 'Your audit scope must consist of at least 2 characters'
                },
                'wizard-validation-material-content4': {
                    required: 'Please enter audit content',
                    minlength: 'Your audit content must consist of at least 2 characters'
                },
                'wizard-validation-material-remaks4': {
                    required: 'Please enter remaks',
                    minlength: 'Your remaks must consist of at least 2 characters'
                },
                'wizard-validation-material-scope5': {
                    required: 'Please enter audit scope',
                    minlength: 'Your audit scope must consist of at least 2 characters'
                },
                'wizard-validation-material-content5': {
                    required: 'Please enter audit content',
                    minlength: 'Your audit content must consist of at least 2 characters'
                },
                'wizard-validation-material-remaks5': {
                    required: 'Please enter remaks',
                    minlength: 'Your remaks must consist of at least 2 characters'
                },
                'example-datepicker1' : {
                    required: 'Please enter start date'
                },
                'example-datepicker2' : {
                    required: 'Please enter start date'
                },
                'example-datepicker3' : {
                    required: 'Please enter start date'
                },
                'example-datepicker4' : {
                    required: 'Please enter start date'
                },
                'example-datepicker5' : {
                    required: 'Please enter start date'
                },
                'end-datepicker1' : {
                    required: 'Please enter end date'
                },
                'end-datepicker2' : {
                    required: 'Please enter end date'
                },
                'end-datepicker3' : {
                    required: 'Please enter end date'
                },
                'end-datepicker4' : {
                    required: 'Please enter end date'
                },
                'end-datepicker5' : {
                    required: 'Please enter end date'
                }
            }
        });

        // Init wizard with validation
        jQuery('.js-wizard-validation-material').bootstrapWizard({
            tabClass: '',
            onTabShow: function(tab, navigation, index) {
                var percent = ((index + 1) / navigation.find('li').length) * 100;

                // Get progress bar
                var progress = navigation.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                // Update progress bar if there is one
                if (progress.length) {
                    progress.css({ width: percent + 1 + '%' });
                }
            },
            onNext: function(tab, navigation, index) {
                if( !formMaterial.valid() ) {
                    validatorMaterial.focusInvalid();
                    return false;
                }
            },
            onTabClick: function(tab, navigation, index) {
                jQuery('a', navigation).blur();
        return false;
            }
        });
    };

    return {
        init: function () {
            // Init Wizard Defaults
            initWizardDefaults();

            // Init Form Simple Wizard
            initWizardSimple();

            // Init Form Validation Wizard
            initWizardValidation();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BeFormWizard.init(); });
