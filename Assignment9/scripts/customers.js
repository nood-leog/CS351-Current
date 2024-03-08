
//customers.js
"use strict";

// Define the $() function
function $(selector) {
    return document.querySelector(selector);
}
/* 
All JavaScript functions in this file must be triggered by an event

- validateCustomerInfo()
o Validates the customer information as follows:
 First name and last name
 No validation needed
 Email
 Use this regex to validate the email: /^[a-z0-9!#$%&'*+/=?^_`{|}~-
]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-
9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/
 Password
 Use this regex to validate the password
/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/
 Confirmation password
 Ensure that the passwords match

- validateBillingAddress()
o Validates the billing address as follows:
 Line1, line2, city, & state
 No validation needed
 Zip Code
 Use this regex to validate the zip code: /^\d{5}(-\d{4})?(?!-)$/
 Phone
 Use this regex to validate the phone number:
/^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm

 validateShippingAddress()
o Validates the shipping address as follows:
 Line1, line2, city, & state
 No validation needed
 Zip Code
 Use this regex to validate the zip code: /^\d{5}(-\d{4})?(?!-)$/
 Phone
 Use this regex to validate the phone number:
/^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm

 **/


