//date.js
"use strict";

document.addEventListener("DOMContentLoaded", () => 
{
    const currentDate = new Date();
    const formattedDate = currentDate.toLocaleDateString("en-US", 
    {
        month: "2-digit",
        day: "2-digit",
        year: "numeric"
    });
    document.getElementById('currentDate').textContent = formattedDate;
});