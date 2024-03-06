<?php

function getAllCategories($db) {
    $query = 'SELECT * FROM categories';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}