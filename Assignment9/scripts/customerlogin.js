//customerlogin.js
"use strict";

// Define the $() function
function $(selector) {
    return document.querySelector(selector);
}

// Event handler for DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    // Attach the calculate function to the submit event of the form
    $('form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission
    });

    // Move focus to the product cost text box
    $('#emailInput').focus();
});

// Function to validate and initiate the shipping calculation
function checkEmail() {
    // Parse the product cost
    const emailString = $('#emailInput');
    const productCost = parseFloat($('#emailInput').value);

    // Check if the product cost is a valid number and greater than 0
    if (!isNaN(productCost) && productCost > 0) {
        // Call the calculateShipping function with the product cost
        calculateShipping(productCost);
    } else {
        // Show an alert for invalid product cost
        alert("<" + emailString + '> is not a valid email. \n\Please enter a valid email.');
        // Leave focus on product cost
        $('#emailInput').focus();
    }
}







