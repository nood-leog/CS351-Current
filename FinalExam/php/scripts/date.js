"use strict";
const $d = selector => document.querySelector(selector);

const displayCurrentDate = () => {
    const now = new Date();
    let month = now.getMonth()+1;
    let day = now.getDate();
    let year = now.getFullYear();
    let currentDate = month + "/" + day + "/" + year;
    
    $d("#currentDate").textContent = currentDate;
};

document.addEventListener("DOMContentLoaded", () => {
    // set initial clock display and then set interval timer to display
    // new time every second. Don't store timer object because it 
    // won't be needed - clock will just run.
    displayCurrentDate();
});