<!DOCTYPE html>
<!--shipping index-->

<html lang="en">
    <head>
        <title> Shipping </title>
        <link rel="stylesheet" href=../styles/main.css>
        <link rel="stylesheet" href=../styles/shipping.css>
        <script src="../scripts/shipping.js"></script>
        <script src="../scripts/date.js"></script>
    </head>
    <body>
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
                        <li><a href="../contact/email/index.php">Email</a></li>
                        <li><a href="../contact/phone/index.php">Phone</a></li>
                        <li><a href="../contact/livechat/index.php">Live Chat</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <form onsubmit="calculateShipping()">
                <h2>Shipping Costs</h2>
                <br>
                <p>
                    <label for="uInput">Enter the cost of the product:</label> 
                    <input type="text" id="uInput" name="uInput">
                    <button type="submit">Calculate</button>
                </p>
                <p>
                    <label for="total">Total cost, including shipping:</label>
                    <input readonly type="text" id="total" name="total">
                </p>
            </form>

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

