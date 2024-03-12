<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="./styles/main.css">
    <script src="./scripts/date.js"></script>
</head>

<body>

    <header>
        <img src="./images/misc/FenderStratocasterHeader.png" alt="FenderStratocaster" >
        <h2>The Guitar Store</h2>
        <h3>For rock stars everywhere!</h3>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./lessons/index.php">Lessons</a></li>
            <li><a href="./products/index.php">Products</a></li>
            <li><a href="./support/index.php">Support</a></li>
            <li><a href="./shipping/index.php">Shipping</a></li>
            <li><a href="./contact/index.php">Contact Us</a>
                <ul>
                    <li><a href="./contact/email.php">Email</a></li>
                    <li><a href="./contact/phone.php">Phone</a></li>
                    <li><a href="./contact/chat.php">Live Chat</a></li>
                </ul>
            </li>
        </ul>
    </nav>
 
    <main>
        <aside>
            <nav>
                <ul>
                    <li><a href="./products/guitars/index.php">Guitars</a></li>
                    <li><a href="./products/basses/index.php">Basses</a></li>
                    <li><a href="./products/drums/index.php">Drums</a></li>
                    <li><a href="./products/keyboards/index.php">Keyboards</a></li>
                </ul>
            </nav>
        </aside>
        <section>
            <h2>Database Error</h2>
            <p>There was an error connecting to the database.</p>
            <p>The database must be installed as described in the appendix.</p>
            <p>MySQL must be running as described in chapter 1.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </section>
    </main>
    <footer>
        <div>&copy; 2023 The Guitar Store</div>
        <div id="currentDate"></div>
    </footer>
</body>
</html>