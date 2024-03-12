<?php

if (!isset($action)) {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'supplier_choice';
        }
    }
}

if ($action == 'supplier_choice') {
    require_once('./php/model/database.php');
    require_once('./php/model/supplier_db.php');
    require_once('./php/model/category_db.php');
    // Your code should be below this and before the include

    include ('./php/supplier_choice.php');
}
elseif ($action == 'supplier_page') {
    require_once('./model/database.php');
    require_once('./model/supplier_db.php');
    require_once('./model/category_db.php');
    // Your code should be below this and before the include

    include ('./supplier.php');
}
elseif ($action == 'update_supplier') {
    require_once('./model/database.php');
    require_once('./model/supplier_db.php');
    require_once('./model/category_db.php');
    // Your code should be below this and before the include

    include ('./supplier.php');
}

else {
    include('../home.php');
}
