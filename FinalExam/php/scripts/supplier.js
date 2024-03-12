"use strict";

const $ = selector => document.querySelector(selector);

const validateZipCode = (zip_code) => {
    return zip_code.match(
        /^\d{5}(-\d{4})?(?!-)$/
    );    
};

const validatePhone = (phone) => {
    return phone.match(
        /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm
    );    
};

const validateAddress = evt => {
    let alert_msg = "";
    if (!validateZipCode($('#supplier_zip_code').value)) {
        alert_msg=alert_msg + ("Zip code is not valid\n\n");
        evt.preventDefault();    
    }
    if (!validatePhone($('#supplier_phone').value)) {
        alert_msg=alert_msg + ("Phone number is not valid\n\n");
        evt.preventDefault();    
    }
    if (alert_msg) {
        alert(alert_msg);
    }

};


document.addEventListener("DOMContentLoaded", () => {
	// add event handlers
        //window.location.reload();
	$("#supplier_button").addEventListener("click", validateAddress);

	// move focus
	$("#supplier_name").focus();
});