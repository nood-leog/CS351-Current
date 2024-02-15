<?php
    // connect to the my_guitar_shop database
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
    $username = 'CS351user';
    $password = '';
    $db = new PDO($dsn, $username, $password);

    // get all categories from the my_guitar_shop database
    $query = 'SELECT * FROM categories
              ORDER BY category_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
?>    
<!DOCTYPE html>
<html>
<head>
    <title>Assignment 1</title>
</head>
<body>
    <header><h1>Assignment 1</h1></header>
    <main>
        <h3>If this project connects to the database successfully, you should see a list of product categories below</h3>


        <!-- display a list of categories -->
        <h3>Categories</h3>
        <ul>
            <?php foreach ($categories as $category) : ?>
            <li><?php echo $category['category_name']; ?></li>
            <?php endforeach; ?>
        </ul>

    </main>
</body>
</html>