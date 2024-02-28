<!DOCTYPE html>
<aside>
    <ul>
        <?php
        require_once('./model/database.php');
        require_once('./model/category_db.php');

        $categories = CategoryDB::getAllCategories($db);

        foreach ($categories as $category) {
            $lowercaseCategory = strtolower($category['category_name']);
            echo '<li><a href="index.php?action=' . $lowercaseCategory . '">' . $category['category_name'] . '</a></li>';
        }
        ?>
    </ul>
</aside>
