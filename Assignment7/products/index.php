<!DOCTYPE html>

<!--Product index-->
<html>
<head>
    <title>Products</title>
    
</head>
<body>
    <header><h1>Product page test</h1></header>
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