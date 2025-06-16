// james thompson -2025 06 09
// This script defines functions for adding and removing error messages.
// This function adds the error message.
// It takes two arguments: the form element ID and the message.
// errorMessages.js - Form validation feedback module
// This script provides functions for adding/removing error and success messages

function addErrorMessage(id, msg) {
    'use strict';
    
    const element = document.getElementById(id);
    const errorId = `${id}Error`;
    
    // Check if error message already exists
    let span = document.getElementById(errorId);
    
    if (span) {
        // Update existing message
        span.textContent = msg;
    } else {
        // Create new error message
        span = document.createElement('span');
        span.id = errorId;
        span.className = 'error';
        span.textContent = msg;
        
        // Add the message after the form element
        element.parentNode.appendChild(span);
        
        // Add error class to the label if it exists
        if (element.previousSibling && element.previousSibling.nodeName === 'LABEL') {
            element.previousSibling.className = 'error';
        }
    }
    
    // Add error class to the input
    element.classList.add('error-input');
}

/**
 * Add a success indicator to a form field
 * @param {string} id - The ID of the form element
 * @param {string} msg - The success message (typically a checkmark)
 */
function addSuccessMessage(id, msg) {
    'use strict';
    
    const element = document.getElementById(id);
    const successId = `${id}Success`;
    
    // Check if success message already exists
    let span = document.getElementById(successId);
    
    if (span) {
        // Update existing message
        span.textContent = msg;
    } else {
        // Create new success message
        span = document.createElement('span');
        span.id = successId;
        span.className = 'success';
        span.textContent = msg;
        
        // Add the message after the form element
        element.parentNode.appendChild(span);
        
        // Add success class to the label if it exists
        if (element.previousSibling && element.previousSibling.nodeName === 'LABEL') {
            element.previousSibling.className = 'success';
        }
    }
    
    // Add success class to the input
    element.classList.add('success-input');
    element.classList.remove('error-input');
}
// remove error messages
function removeErrorMessage(id) {
    'use strict';
    
    const errorId = `${id}Error`;
    const span = document.getElementById(errorId);
    const element = document.getElementById(id);
    
    if (span) {
        // remove the error message
        span.parentNode.removeChild(span);
        
        // remove error class from the label if it exists
        if (element.previousSibling && element.previousSibling.nodeName === 'LABEL') {
            element.previousSibling.className = '';
        }
        
        // remove error class from the input
        element.classList.remove('error-input');
    }
}
// remove sucess messages
function removeSuccessMessage(id) {
    'use strict';
    
    const successId = `${id}Success`;
    const span = document.getElementById(successId);
    const element = document.getElementById(id);
    
    if (span) {
        // Remove the success message
        span.parentNode.removeChild(span);
        
        // Remove success class from the label if it exists
        if (element.previousSibling && element.previousSibling.nodeName === 'LABEL') {
            element.previousSibling.className = '';
        }
        
        // Remove success class from the input
        element.classList.remove('success-input');
    }
}

/**
 * Clear all validation messages from a form
 * @param {HTMLFormElement} form - The form element to clear
 */
function clearAllMessages(form) {
    'use strict';
    
    // Get all inputs in the form
    const inputs = form.querySelectorAll('input, select, textarea');
    
    // Remove messages for each input
    inputs.forEach(input => {
        if (input.id) {
            removeErrorMessage(input.id);
            removeSuccessMessage(input.id);
        }
    });
}

// Export these functions for use in register.js
window.FormValidation = {
    addError: addErrorMessage,
    addSuccess: addSuccessMessage,
    removeError: removeErrorMessage,
    removeSuccess: removeSuccessMessage,
    clearAll: clearAllMessages
};