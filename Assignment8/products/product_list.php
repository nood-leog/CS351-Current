<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/products.css">
    <script src="./scripts/date.js"></script>
</head>
<body>
    <?php
    require_once('./model/database.php');
    require_once('./model/product_db.php');
    require_once('./model/category_db.php');

    $categories = CategoryDB::getAllCategories($db);

    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1; // Default category ID
    $products = ProductDB::getProductsByCategory($db, $category_id);
    ?>
    <main>
        <section>
            <h1>Product List</h1>
            <form method="get" action="./index.php">
                <input type="hidden" name="action" value="product">
                <select name="category_id" id="category">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category['category_id']; ?>" <?php echo ($category_id == $category['category_id']) ? 'selected' : ''; ?>>
                            <?php echo $category['category_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span>&lt;===</span>
                <input type="submit" value="Choose">
            </form>

            <?php if ($category_id) : ?>
                <?php
                $selectedCategory = array_filter($categories, function ($cat) use ($category_id) {
                    return $cat['category_id'] == $category_id;
                });
                ?>
                <h2><?php echo reset($selectedCategory)['category_name']; ?></h2>
            <?php endif; ?>

            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th class="right">Price</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['product_name']; ?></td>
                        <td class="right"><?php echo $product['list_price']; ?></td>
                        <td><a href="index.php?action=home"><button>Edit</button></td>  
                        <td><a href="index.php?action=home"><button>Delete</button></td>  
                    </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="index.php?action=home">Add Product</a></p>
        </section>
    </main>
</body>
</html>
