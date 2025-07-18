
// Contact Form Validation Script that forms the main part of the contact form validation.
// Function to validate the contact form
function validateContactForm(e) {
'use strict';    
    
    // Get the event object
    if (typeof e == 'undefined') e = window.event;
    
    // Get form references
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');
    
    // Flag variable for tracking errors
    var error = false;
    
    // Clear previous messages first
    clearAllMessages();
    
    // Validate name (at least 2 characters)
    if (name.value.trim().length >= 2) {
        addSuccessIndicator(name);
    } else {
        addErrorMessage(name, 'Please enter your name (2+ characters)');
        error = true;
    }
    
    // Validate email (simple pattern)
    if (/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,}$/.test(email.value)) {
        addSuccessIndicator(email);
    } else {
        addErrorMessage(email, 'Please enter a valid email address');
        error = true;
    }
    
    // Validate message (at least 10 characters)
    if (message.value.trim().length >= 10) {
        addSuccessIndicator(message);
    } else {
        addErrorMessage(message, 'Please enter a message (10+ characters)');
        error = true;
    }
    
    // If errors occurred, prevent form submission
    if (error) {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }
        return false;
    }
    
    // when everything is valid, show a sending message
    document.querySelector('.form-container').innerHTML += '<p class="sending-message">Sending your message...</p>';
}

function addErrorMessage(element, message) {
    'use strict';
    element.classList.add('error');
    
    // create error message element
    var errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    
    // add error message after the input
    element.parentNode.appendChild(errorDiv);
}


function addSuccessIndicator(element) {
    'use strict';
    element.classList.add('success');
    element.classList.remove('error');
}


function clearAllMessages() {
    'use strict';
    // remove all error messages
    var errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function(message) {
        message.parentNode.removeChild(message);
    });
   
    // remove error/success classes
    var inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(function(input) {
        input.classList.remove('error', 'success');
    });
}

// Set up the form validation when the page loads
window.onload = function() {
    'use strict';        
    var form = document.querySelector('form');
    
//add event listener if form exists
    if (form) {
        form.addEventListener('submit', validateContactForm);
    }
};
// This script validates a contact form with fields for name, email, and message.
// It checks that the name is at least 2 characters, the email is valid, and the message is at least 10 characters.