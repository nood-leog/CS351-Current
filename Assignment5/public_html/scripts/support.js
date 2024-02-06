//support.js script

"use strict";

document.addEventListener("DOMContentLoaded", () => 
{
    const faqSection = document.querySelectorAll("#faq h2");

    faqSection.forEach((h2) => 
    {
        h2.addEventListener("click", () => 
        {
            //close section in advance of opening a new one
            faqSection.forEach((otherH2) => 
            {
                if (otherH2 !== h2) 
                {
                    otherH2.classList.remove("minus");
                    otherH2.nextElementSibling.style.display = "none";
                    otherH2.style.color = "#9b59b6";
                }
            });

            //toggle clicked section to open
            h2.classList.toggle("minus");
            const div = h2.nextElementSibling;

            if (h2.classList.contains("minus")) 
            {
                div.style.display = "block";
                h2.style.color = "blue";
            } 
            else 
            {
                div.style.display = "none";
                h2.style.color = "#9b59b6";
            }
        });
    });
});

