<aside>
    <ul>
        <?php
        $categories = CategoryDB::getAllCategories($db);

        foreach ($categories as $category) {
            $lowercaseCategory = strtolower($category['category_name']);
            echo '<li><a href="index.php?action=' . $lowercaseCategory . '">' . $category['category_name'] . '</a></li>';
        }
        ?>
    </ul>
</aside>
