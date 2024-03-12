"use strict";

const $ = selector => document.querySelector(selector);


const validateInfo = (evt) => {
    /* Your code should be in this function */

};


document.addEventListener("DOMContentLoaded", () => {
    // add event handlers
    $("#name_button").addEventListener("click", validateInfo);

    // move focus
    $("#first_name").focus();
});