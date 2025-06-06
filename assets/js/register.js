// - register.js
// This script validates a form.

// Function called when the form is submitted.
// Function validates the form data.
function validateForm(e) {
    'use strict';

    // Get the event object:
	if (typeof e == 'undefined') e = window.event;

    // Get form references:
	var firstName = U.$('firstName');
	var lastName = U.$('lastName');
	var email = U.$('email');
	var phone = U.$('phone');
	var city = U.$('city');
	var state = U.$('state');
	var zip = U.$('zip');
	var terms = U.$('terms');

	// Flag variable:
	var error = false;

	// Validate the first name:
	if (/^[A-Z \.\-']{2,20}$/i.test(firstName.value)) {
		removeErrorMessage('firstName');
		addCorrectMessage("firstName", "\u2714");
	} else {
		addErrorMessage('firstName', 'Please enter your first name.');
		removecorrectMessage('firstName');
		error = true;
	}
	// Validate the last name:
	if (/^[A-Z \.\-']{2,20}$/i.test(lastName.value)) {
		removeErrorMessage('lastName');
		addCorrectMessage("lastName", "\u2714");
	} else {
		addErrorMessage('lastName', 'Please enter your last name.');
		removecorrectMessage('lastName');
		error = true;
	}
		
	// Validate the email address:
	if (/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(email.value)) {
		removeErrorMessage('email');
		addCorrectMessage("email", "\u2714");
	} else {
		addErrorMessage('email', 'Please enter your email address.');
		removecorrectMessage('email');
		error = true;
	}
	
	// Validate the phone number:
	if (/\d{3}[ \-\.]?\d{3}[ \-\.]?\d{4}/.test(phone.value)) {
		removeErrorMessage('phone');
		addCorrectMessage("phone", "\u2714");
	} else {
		addErrorMessage('phone', 'Please enter your phone number.');
		removecorrectMessage('phone');
		error = true;
	}
	// city
	if (/^[A-Z \.\-']{2,20}$/i.test(city.value)) {
		removeErrorMessage('city');
		addCorrectMessage("city", "\u2714");
	} else {
		addErrorMessage('city', 'Please enter City or Suburb.');
		removecorrectMessage('city');
		error = true;
	}
	
	// Validate the state:
	if (state.selectedIndex != 0) {
		removeErrorMessage('state');
		addCorrectMessage("state", "\u2714 You are in quite a state");
	} else {
		addErrorMessage('state', 'What state are you in?');
		removecorrectMessage('state');
		error = true;
	}
	
	// Validate the zip code:
	if (/^[2-7]{1}[0-9]{3}$/.test(zip.value)) {
		removeErrorMessage('zip');
		addCorrectMessage("zip", "\u2714");
	} else {
			addErrorMessage('zip', 'Please enter your post code.');
		error = true;
	}

    // If an error occurred, prevent the default behavior:
	if (error) {

		// Prevent the form's submission:
	    if (e.preventDefault) {
	        e.preventDefault();
	    } else {
	        e.returnValue = false;
	    }
	    return false;
    
	}
    
} // End of validateForm() function.

// Function called when the terms checkbox changes.
// Function enables and disables the submit button.
function toggleSubmit() {
	'use strict';
    
	// Get a reference to the submit button:
	var submit = U.$('submit');
	
	// Toggle its disabled property:
	if (U.$('terms').checked) {
		submit.disabled = false;
	} else {
		submit.disabled = true;
	}
	
} // End of toggleSubmit() function.

// Establish functionality on window load:
window.onload = function() {
    'use strict';

	// The validateForm() function handles the form:
    U.addEvent(U.$('theForm'), 'submit', validateForm);

	// Disable the submit button to start:
	U.$('submit').disabled = true;

	// Watch for changes on the terms checkbox:
    U.addEvent(U.$('terms'), 'change', toggleSubmit);

	// Enbable tooltips on the phone number:
	U.enableTooltips('phone');
    
};