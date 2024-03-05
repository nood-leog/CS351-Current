<?php

$action = $_GET['action'] ?? 'home';

if ($action === 'home') {
    require_once('./model/database.php');
    require_once('./model/category_db.php');
    require_once('home.php');
    
} elseif ($action === 'guitars') {
    require_once('./model/database.php');
    require_once('./model/category_db.php');
    require_once('./products/Guitars/guitars.php');
    
} elseif ($action === 'shipping') {
    require_once('./model/database.php');
    require_once('./model/category_db.php');
    require_once('./shipping.php');
    
} elseif ($action === 'support') {
    require_once('./model/database.php');
    require_once('./model/category_db.php');
    require_once('./support.php');
    
} elseif ($action === 'product') {
    require_once('./model/database.php');
    require_once('./model/product_db.php');
    require_once('./model/category_db.php');
    require_once('./products/product_list.php');
    
} else {
    require_once('./model/database.php');
    require_once('./model/category_db.php');
    require_once('home.php');
}
?>