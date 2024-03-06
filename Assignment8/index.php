<?php

include('./model/database.php');
include('./model/category_db.php');
include('./model/product_db.php');

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
    include('./products/product_list.php');
} else {
    $categories = getAllCategories($db);
    include('home.php');
}
?>