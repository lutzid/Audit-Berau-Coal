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
                'isps_scope': {
                    required: true
                },
                'isps_content': {
                    required: true
                },
                'isps_from': {
                    required: true
                },
                'isps_to': {
                    required: true
                },
                'isps_remaks': {
                    required: true
                },
                'special_scope': {
                    required: true
                },
                'special_content': {
                    required: true
                },
                'special_from': {
                    required: true
                },
                'special_to': {
                    required: true
                },
                'special_remaks': {
                    required: true
                },
                'smt1_scope': {
                    required: true
                },
                'smt1_content': {
                    required: true
                },
                'smt1_from': {
                    required: true
                },
                'smt1_to': {
                    required: true
                },
                'smt1_remaks': {
                    required: true
                },
                'smt2_scope': {
                    required: true
                },
                'smt2_content': {
                    required: true
                },
                'smt2_from': {
                    required: true
                },
                'smt2_to': {
                    required: true
                },
                'smt2_remaks': {
                    required: true
                },
                'siap_scope': {
                    required: true
                },
                'siap_content': {
                    required: true
                },
                'siap_from': {
                    required: true
                },
                'siap_to': {
                    required: true
                },
                'siap_remaks': {
                    required: true
                }
            },
            messages: {
                'isps_scope': {
                    required: 'Please enter Audit Scope'
                },
                'isps_content': {
                    required: 'Please enter Audit Content'
                },
                'isps_from' : {
                    required: 'Please enter Start Date'
                },
                'isps_to' : {
                    required: 'Please enter End Date'
                },
                'isps_remaks': {
                    required: 'Please enter Remaks'
                },
                'special_scope': {
                    required: 'Please enter Audit Scope'
                },
                'special_content': {
                    required: 'Please enter Audit Content'
                },
                'special_from' : {
                    required: 'Please enter Start Date'
                },
                'special_to' : {
                    required: 'Please enter End Date'
                },
                'special_remaks': {
                    required: 'Please enter Remaks'
                },
                'smt1_scope': {
                    required: 'Please enter Audit Scope'
                },
                'smt1_content': {
                    required: 'Please enter Audit Content'
                },
                'smt1_from' : {
                    required: 'Please enter Start Date'
                },
                'smt1_to' : {
                    required: 'Please enter End Date'
                },
                'smt1_remaks': {
                    required: 'Please enter Remaks'
                },
                'smt2_scope': {
                    required: 'Please enter Audit Scope'
                },
                'smt2_content': {
                    required: 'Please enter Audit Content'
                },
                'smt2_from' : {
                    required: 'Please enter Start Date'
                },
                'smt2_to' : {
                    required: 'Please enter End Date'
                },
                'smt2_remaks': {
                    required: 'Please enter Remaks'
                },
                'siap_scope': {
                    required: 'Please enter Audit Scope'
                },
                'siap_content': {
                    required: 'Please enter Audit Content'
                },
                'siap_from' : {
                    required: 'Please enter Start Date'
                },
                'siap_to' : {
                    required: 'Please enter End Date'
                },
                'siap_remaks': {
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
