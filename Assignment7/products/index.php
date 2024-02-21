<!DOCTYPE html>

<!-- product index -->

<html lang="en">
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/products.css">
        <script src="../scripts/date.js"></script>
    </head>
    <body>

        <?php
        require_once('../model/database.php');

// Fetch categories
        $query = 'SELECT * FROM categories';
        $statement = $db->prepare($query);
        $statement->execute();
        $categories = $statement->fetchAll();
        $statement->closeCursor();

// Fetch products for the selected category
        $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1; // Default category ID
        $query = 'SELECT * FROM products WHERE category_id = :category_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        ?>
        <header>
            <img src="../images/FenderStratocaster.png" alt="Fender Stratocaster">
            <h2>The Guitar Store</h2>
            <h3>For rock stars everywhere!</h3>
        </header>

        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../lessons/index.php">Lessons</a></li>
                <li><a href="../products/index.php">Products</a></li>
                <li><a href="../support/index.php">Support</a></li>
                <li><a href="../shipping/index.php">Shipping</a></li>
                <li><a href="../contact/index.php">Contact Us</a>
                    <ul>
                        <li><a href="../contact/email.php">Email</a></li>
                        <li><a href="../contact/phone.php">Phone</a></li>
                        <li><a href="../contact/live_chat.php">Live Chat</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <section>
                <h1>Product List</h1>
                <h2>Categories</h2>
                <nav>
                    <ul>
                        <?php foreach ($categories as $category) : ?>
                            <li><a href="?category_id=<?php echo $category['category_id']; ?>">
                                    <?php echo $category['category_id']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <h2><?php echo $product_id; ?></h2>
                <table>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th class="right">Price</th>
                        <th>&nbsp;</th>
                    </tr>

                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?php echo $product['productCode']; ?></td>
                            <td><?php echo $product['productName']; ?></td>
                            <td class="right"><?php echo $product['listPrice']; ?></td>
                            <td>
                                <a href="../products/edit_product.php?product_id=<?php echo $product['product_id']; ?>">Edit</a>
                                <form action="../products/delete_product.php" method="post" style="display: inline;">
                                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                    <input type="hidden" name="category_id" value="<?php echo $product['category_id']; ?>">
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <p><a href="../products/add_product.php">Add Product</a></p>
            </section>

            <aside>
                <ul>
                    <li><a href="../products/guitars/index.php">Guitars</a></li>
                    <li><a href="../products/basses/index.php">Basses</a></li>
                    <li><a href="../products/drums/index.php">Drums</a></li>
                    <li><a href="../products/keyboards/index.php">Keyboards</a></li>
                </ul>
            </aside>
        </main>

        <footer>
            <p>
                &copy; 2023 The Guitar Store
                <span id="currentDate"></span>
            </p>
        </footer>

    </body>
</html>
