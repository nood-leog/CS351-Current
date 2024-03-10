//customers.js
"use strict";

function $(selector) {
    return document.querySelector(selector);
}

function validateCustomerInfo() {
    var email = $('#email').value.trim();
    var password = $('#password').value;
    var confirmPassword = $('#confirmPassword').value;

    var emailRegex = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    var passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    if (!emailRegex.test(email)) {
        alert('Invalid email address');
        return false;
    }
    
    if (!passwordRegex.test(password)) {
        alert('Invalid password. It must contain at least one digit, one special character, one lowercase and one uppercase letter, and be at least 8 characters long.');
        return false;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return false;
    }
    return true;
}

function validateBillingAddress() {
    var zipCode = $('#zipCode').value.trim();
    var phone = $('#phone').value.trim();

    var zipCodeRegex = /^\d{5}(-\d{4})?(?!-)$/;
    var phoneRegex = /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm;

    if (!zipCodeRegex.test(zipCode)) {
        alert('Invalid zip code');
        return false;
    }

    if (!phoneRegex.test(phone)) {
        alert('Invalid phone number');
        return false;
    }
    return true;
}

function validateShippingAddress() {
    var zipCode = $('#shipZipCode').value.trim();
    var phone = $('#shipPhone').value.trim();

    var zipCodeRegex = /^\d{5}(-\d{4})?(?!-)$/;
    var phoneRegex = /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm;

    if (!zipCodeRegex.test(zipCode)) {
        alert('Invalid zip code');
        return false;
    }

    if (!phoneRegex.test(phone)) {
        alert('Invalid phone number');
        return false;
    }
    return true;
}
