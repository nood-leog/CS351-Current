"use strict";

const $ = selector => document.querySelector(selector);


const validateInfo = (evt) => {
    /* Your code should be in this function */
    
    //values from the text boxes
    let firstName = $('#first_name').value.trim();
    let lastName = $('#last_name').value.trim();
    let height = parseInt($('#height').value);

    //first name
    if (firstName === ''){
    alert('Must enter first name.');
    evt.preventDefault();
    return;
    }
    
    //last name
    if (lastName === ''){
     alert('Must enter last name.');
     evt.preventDefault();
     return;
    }
    
    //validate height
    if (height < 24 || height > 110 || isNaN(height)) { 
        alert('Must enter height between 24 and 110.');
        evt.preventDefault();
        return; 
    }

    alert('Information entered correctly, returning to the home page.');
};


document.addEventListener("DOMContentLoaded", () => {
    // add event handlers
    $("#name_button").addEventListener("click", validateInfo);

    // move focus
    $("#first_name").focus();
});
