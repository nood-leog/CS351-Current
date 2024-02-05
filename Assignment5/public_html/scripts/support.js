//support.js script

"use strict";

// Define the $() function
const $ = (selector) => document.querySelector(selector);

document.addEventListener("DOMContentLoaded", () =>
{
    document.querySelectorAll("#faq h2").forEach((h2) =>
    {
        h2.addEventListener("click", () =>
        {

            h2.classList.toggle("minus");

            const div = h2.nextElementSibling;

            if (!h2.classList.contains("minus"))
            {
                div.style.display = "none";
                h2.style.color = "#9b59b6";
            } else
            {
                div.style.display = "block";
                h2.style.color = "blue";
            }
        });
    });
});
