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

        // Prevent forms from submitting on enter key press
        // formClassic.on('keyup keypress', function (e) {
        //     var code = e.keyCode || e.which;

        //     if (code === 13) {
        //         e.preventDefault();
        //         return false;
        //     }
        // });
        $(document).ready(function() {
            $(window).keydown(function(event){
              if(event.keyCode == 13) {
                event.preventDefault();
                return false;
              }
            });
          });
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
                'isps-scope': {
                    required: true
                },
                'isps-content': {
                    required: true
                },
                'isps-from': {
                    required: true
                },
                'isps-to': {
                    required: true
                },
                'isps-remaks': {
                    required: true
                },
                'special-scope': {
                    required: true
                },
                'special-content': {
                    required: true
                },
                'special-from': {
                    required: true
                },
                'special-to': {
                    required: true
                },
                'special-remaks': {
                    required: true
                },
                'smt1-scope': {
                    required: true
                },
                'smt1-content': {
                    required: true
                },
                'smt1-from': {
                    required: true
                },
                'smt1-to': {
                    required: true
                },
                'smt1-remaks': {
                    required: true
                },
                'smt2-scope': {
                    required: true
                },
                'smt2-content': {
                    required: true
                },
                'smt2-from': {
                    required: true
                },
                'smt2-to': {
                    required: true
                },
                'smt2-remaks': {
                    required: true
                },
                'siap-scope': {
                    required: true
                },
                'siap-content': {
                    required: true
                },
                'siap-from': {
                    required: true
                },
                'siap-to': {
                    required: true
                },
                'siap-remaks': {
                    required: true
                }
            },
            messages: {
                'isps-scope': {
                    required: 'Please enter Audit Scope'
                },
                'isps-content': {
                    required: 'Please enter Audit Content'
                },
                'isps-from' : {
                    required: 'Please enter Start Date'
                },
                'isps-to' : {
                    required: 'Please enter End Date'
                },
                'isps-remaks': {
                    required: 'Please enter Remaks'
                },
                'special-scope': {
                    required: 'Please enter Audit Scope'
                },
                'special-content': {
                    required: 'Please enter Audit Content'
                },
                'special-from' : {
                    required: 'Please enter Start Date'
                },
                'special-to' : {
                    required: 'Please enter End Date'
                },
                'special-remaks': {
                    required: 'Please enter Remaks'
                },
                'smt1-scope': {
                    required: 'Please enter Audit Scope'
                },
                'smt1-content': {
                    required: 'Please enter Audit Content'
                },
                'smt1-from' : {
                    required: 'Please enter Start Date'
                },
                'smt1-to' : {
                    required: 'Please enter End Date'
                },
                'smt1-remaks': {
                    required: 'Please enter Remaks'
                },
                'smt2-scope': {
                    required: 'Please enter Audit Scope'
                },
                'smt2-content': {
                    required: 'Please enter Audit Content'
                },
                'smt2-from' : {
                    required: 'Please enter Start Date'
                },
                'smt2-to' : {
                    required: 'Please enter End Date'
                },
                'smt2-remaks': {
                    required: 'Please enter Remaks'
                },
                'siap-scope': {
                    required: 'Please enter Audit Scope'
                },
                'siap-content': {
                    required: 'Please enter Audit Content'
                },
                'siap-from' : {
                    required: 'Please enter Start Date'
                },
                'siap-to' : {
                    required: 'Please enter End Date'
                },
                'siap-remaks': {
                    required: 'Please enter Remaks'
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
