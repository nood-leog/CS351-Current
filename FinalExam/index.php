<?php

require_once('./php/model/database.php');
require_once('./php/model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action == 'home') {
    include('./home.php');
}
elseif ($action == 'htmlcss') {
    $action = 'home';
    include ('./htmlcss/index.php');
}
elseif ($action == 'javascript') {
    include ('./javascript/index.php');
}
elseif ($action == 'php') {
    $action = "supplier_choice";
    include ('./php/index.php');
}
else {
    $categories = get_categories();
    include('./home.php');
}