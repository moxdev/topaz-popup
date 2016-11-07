// JavaScript Document

var validator = new FormValidator('form-contact', [{
	name: 'names',
	display: 'Name',    
	rules: 'required'
	},  {
	name: 'email',
	display: 'Email',    
	rules: 'required|valid_email'
	}], function(errors, evt) {
		if (errors.length > 0) {
			var SELECTOR_ERRORS = jQuery('#primary .error-box');
			//console.log( jQuery('label').each().attr('for') );
			
			if (errors.length > 0) {
				SELECTOR_ERRORS.empty();
				jQuery('label').css('color','inherit');
				
				for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
					SELECTOR_ERRORS.append(errors[i].message + '<br />');
					//console.log(errors[i].name);
					jQuery('label[for="' + errors[i].name + '"]').css('color','#F00');
			}
			SELECTOR_ERRORS.fadeIn(1000);
		} 
	}
});

jQuery( "#date" ).datepicker({minDate: 0, dateFormat: 'mm/dd/y'});