<?php

class ProductDB {
    public static function getProductsByCategory($db, $category_id) {
        $query = 'SELECT * FROM products WHERE category_id = :category_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Add other product-related functions here
}
