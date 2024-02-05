//support.js
"use strict";

// Define the $() function
function $(selector) {
    return document.querySelector(selector);
}


// Event handler for DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    // Attach the calculate function to the submit event of the form
    $('section').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default form submission
        calculate(); // Call the calculate function
    });

    // Move focus to the product cost text box
    $('#uInput').focus();
});

$(document).ready(function() {
    $("#categories h2").click( evt => {
        const h2 = evt.currentTarget;

        $(h2).toggleClass("minus");

        if ($(h2).attr("class") !== "minus") {
            $(h2).next().hide();
        }
        else {
            $(h2).next().show();
        }

        $("#image").attr("src", "");
    }); // end click

    $("#web_images a, #language_images a, #database_images a").each((index, img) => {
        // get old and new urls
        var imageURL = $(img).attr("href");

        // preload images		
        var bookImage = new Image();
        bookImage.src = imageURL;

        // set up event handlers			
        $(img).click( evt => {
            $("#image").attr("src", imageURL);

        // cancel the default action of each link
        evt.preventDefault();
        }); // end click 
    }); // end each
}); // end ready