<?php

include('./model/database.php');
include('./model/category_db.php');
include('./model/product_db.php');
include('./model/customer_db.php');
include('./model/address_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action === 'home') {
    $categories = getAllCategories($db);
    include('home.php');
} elseif ($action === 'guitars') {
    $categories = getAllCategories($db);
    include('./products/Guitars/guitars.php');
} elseif ($action === 'shipping') {
    $categories = getAllCategories($db);
    include('./shipping.php');
} elseif ($action === 'support') {
    $categories = getAllCategories($db);
    include('./support.php');
} elseif ($action === 'product') {
    $categories = getAllCategories($db);
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1;
    $products = getProductsByCategory($db, $category_id);
    $selectedCategory = array_filter($categories, function ($filtercat) use ($category_id) {
        return $filtercat['category_id'] == $category_id;
    });
    include('./products/product_list.php');
} elseif ($action === 'customer_login') {
    $categories = getAllCategories($db);
    include('./customer/customer_login.php');
} elseif ($action === 'customer_page') {
    $categories = getAllCategories($db);
    $emailInput = filter_input(INPUT_POST, 'emailInput');
    $customerInfo = get_customer_info_by_email_address($emailInput);

    if (!empty($customerInfo)) {
        $cuEmail = $customerInfo[0];
        $states = get_states();
        $customer_id = $cuEmail['customer_id'];
        $customer = get_customer_info($customer_id);
        $address_id = get_address($customer_id);

        
        include('./customer/customer.php');
    } else {
        include('./customer/customer_login.php');
        echo '<script>alert("The email address you entered was not found in our system.")</script>';
    }
} elseif ($action === 'update_customer_info') {
    $categories = getAllCategories($db);
    include('./customer/customer.php');
    //Updates customer information that has changed
    //Displays the customer page with the updated information
} elseif ($action === 'update_billing_address') {
    $categories = getAllCategories($db);
    //Updates the complete billing address
    //Displays the customer page with the updated information
} elseif ($action === 'update_shipping_address') {
    $categories = getAllCategories($db);
    //Updates the complete shipping address
    //Displays the customer page with the updated information
} else {
    $categories = getAllCategories($db);
    include('home.php');
}
?>