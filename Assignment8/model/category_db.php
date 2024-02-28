<?php
class CategoryDB {
    public static function getAllCategories($db) {
        $query = 'SELECT * FROM categories';
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Add other category-related functions here
}
