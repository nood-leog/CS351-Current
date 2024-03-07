// customerlogin.js
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("customerLoginForm");

    form.addEventListener("submit", function(event) {
        var emailInput = document.getElementById("emailInput").value;

        // Check if email is empty or no emails found
        if (emailInput.trim() === "" || document.getElementById("noEmailsFound").value === "true") {
            alert("No emails found for the entered address. Please enter a valid email. ");
            
        }
    });
});


