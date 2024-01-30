// Define the $() function
function $(selector) {
    return document.querySelector(selector);
}

// Function to calculate shipping cost
function calculateShipping(productCost) {
    let shippingPercentage;

    if (productCost > 0 && productCost <= 50) {
        shippingPercentage = 0.2;
    } else if (productCost > 50 && productCost <= 200) {
        shippingPercentage = 0.18;
    } else if (productCost > 200 && productCost <= 500) {
        shippingPercentage = 0.15;
    } else if (productCost > 500 && productCost <= 1000) {
        shippingPercentage = 0.12;
    } else {
        shippingPercentage = 0.08;
    }

    const shippingCost = productCost * shippingPercentage;
    const totalCost = productCost + shippingCost;

    // Display the calculated shipping cost
    alert(`Product Cost: $${productCost}\nShipping Cost: $${shippingCost.toFixed(2)}\nTotal Cost: $${totalCost.toFixed(2)}`);

    // Update the total cost input field
    $('#total').value = totalCost.toFixed(2);

    // You can remove the alert above and use the calculated values as needed
}

// Event handler for DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    // Attach the calculateShipping function to the submit event of the form
    $('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        calculateShipping(); // Call the calculateShipping function
    });

    // Move focus to the product cost text box
    $('#uInput').focus();
});


