<?php

function getAllCategories($db) {
    $query = 'SELECT * FROM categories';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

$categories = getAllCategories($db);

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1;

