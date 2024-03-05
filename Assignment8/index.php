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
    include('home.php');
} elseif ($action === 'guitars') {
    include('./products/Guitars/guitars.php');
} elseif ($action === 'shipping') {
    include('./shipping.php');
} elseif ($action === 'support') {
    include('./support.php');
} elseif ($action === 'product') {
    include('./products/product_list.php');
} else {
    include('home.php');
}
?>