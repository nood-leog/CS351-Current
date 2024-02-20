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