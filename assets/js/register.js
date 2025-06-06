// James Thompson - register.js
// error message function with animation
function addErrorMessage(field, message) {
    'use strict';
    
    // Remove existing messages first
    removeErrorMessage(field);
    removecorrectMessage(field);
    
    // Get the error container
    var errorDiv = U.$(field + '_error');
    var formGroup = U.$(field).parentNode;
    
    if (errorDiv) {
        errorDiv.innerHTML = message;
        errorDiv.className = 'error-message show';
        
        // Add error class to form group for styling
        if (formGroup.classList) {
            formGroup.classList.add('has-error');
            formGroup.classList.remove('has-success');
        }
        
        // Add shake animation
        U.$(field).style.animation = 'shake 0.5s ease-in-out';
        setTimeout(function() {
            U.$(field).style.animation = '';
        }, 500);
    }
}

// success message function
function addCorrectMessage(field, message) {
    'use strict';
    
    var successDiv = U.$(field + '_correct');
    var formGroup = U.$(field).parentNode;
    
    if (successDiv) {
        successDiv.innerHTML = message;
        successDiv.className = 'success-message show';
        
        // Add success class to form group
        if (formGroup.classList) {
            formGroup.classList.add('has-success');
            formGroup.classList.remove('has-error');
        }
    }
}

// remove error function
function removeErrorMessage(field) {
    'use strict';
    
    var errorDiv = U.$(field + '_error');
    var formGroup = U.$(field).parentNode;
    
    if (errorDiv) {
        errorDiv.className = 'error-message';
        errorDiv.innerHTML = '';
        
        // Remove error class
        if (formGroup.classList) {
            formGroup.classList.remove('has-error');
        }
    }
}

//  remove success function
function removecorrectMessage(field) {
    'use strict';
    
    var successDiv = U.$(field + '_correct');
    var formGroup = U.$(field).parentNode;
    
    if (successDiv) {
        successDiv.className = 'success-message';
        successDiv.innerHTML = '';
        
        // Remove success class
        if (formGroup.classList) {
            formGroup.classList.remove('has-success');
        }
    }
}

// Real-time validation function
function validateFieldRealTime(field) {
    'use strict';
    
    var value = U.$(field).value;
    var isValid = false;
    
    switch(field) {
        case 'firstName':
        case 'lastName':
        case 'city':
            isValid = /^[A-Z \.\-']{2,20}$/i.test(value);
            break;
        case 'email':
            isValid = /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(value);
            break;
        case 'phone':
            isValid = /\d{3}[ \-\.]?\d{3}[ \-\.]?\d{4}/.test(value);
            break;
        case 'zip':
            isValid = /^[2-7]{1}[0-9]{3}$/.test(value);
            break;
        case 'state':
            isValid = U.$(field).selectedIndex !== 0;
            break;
    }
    
    if (value.length > 0) {
        if (isValid) {
            removeErrorMessage(field);
            addCorrectMessage(field, "✓");
        } else {
            removecorrectMessage(field);
            addErrorMessage(field, getErrorMessage(field));
        }
    } else {
        removeErrorMessage(field);
        removecorrectMessage(field);
    }
}

// function for field-specific error messages
function getErrorMessage(field) {
    'use strict';
    
    var messages = {
        'firstName': 'First name must be 2-20 characters, letters only.',
        'lastName': 'Last name must be 2-20 characters, letters only.',
        'email': 'Please enter a valid email address.',
        'phone': 'Please enter a valid phone number (e.g., 123-456-7890).',
        'city': 'City must be 2-20 characters, letters only.',
        'state': 'Please select your state.',
        'zip': 'Please enter a valid Australian post code (2000-7999).'
    };
    
    return messages[field] || 'Please check this field.';
}

// Progress indicator function
function updateFormProgress() {
    'use strict';
    
    var fields = ['firstName', 'lastName', 'email', 'phone', 'city', 'state', 'zip'];
    var completed = 0;
    
    fields.forEach(function(field) {
        var formGroup = U.$(field).parentNode;
        if (formGroup && formGroup.classList.contains('has-success')) {
            completed++;
        }
    });
    
    var progress = Math.round((completed / fields.length) * 100);
    var progressBar = U.$('formProgress');
    
    if (progressBar) {
        progressBar.style.width = progress + '%';
        progressBar.setAttribute('data-progress', progress + '%');
    }
    
    //  should enable the submit button?
    checkFormValidity();
}

//  window load with real-time validation
window.onload = function() {
    'use strict';

    // The validateForm() function handles the form:
    U.addEvent(U.$('theForm'), 'submit', validateForm);

    // Disable the submit button to start:
    U.$('submit').disabled = true;

    // Watch for changes on the terms checkbox:
    U.addEvent(U.$('terms'), 'change', toggleSubmit);

    // Enable tooltips on the phone number:
    U.enableTooltips('phone');
    
    // Add real-time validation to all fields
    var fields = ['firstName', 'lastName', 'email', 'phone', 'city', 'state', 'zip'];
    
    fields.forEach(function(field) {
        var element = U.$(field);
        if (element) {
            // Validate on blur (when user leaves field)
            U.addEvent(element, 'blur', function() {
                validateFieldRealTime(field);
                updateFormProgress();
            });
            
            // Also validate on input for immediate feedback
            U.addEvent(element, 'input', function() {
                clearTimeout(element.validationTimeout);
                element.validationTimeout = setTimeout(function() {
                    validateFieldRealTime(field);
                    updateFormProgress();
                }, 300);
            });
        }
    });
};