<!DOCTYPE html>
<!-- database error index -->

<html lang="en">
    <head>
        <title> Shipping </title>
        <link rel="stylesheet" href=../styles/main.css>
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
                <li><a href="../index.php">Lessons</a></li>
                <li><a href="../products/index.php">Products</a></li>
                <li><a href="../support/index.php">Support</a></li>
                <li><a href="../shipping/index.php">Shipping</a></li>
                <li><a href="../index.php">Contact Us</a>
                    <ul>
                        <li><a href="../index.php">Email</a></li>
                        <li><a href="../index.php">Phone</a></li>
                        <li><a href="../index.php">Live Chat</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <section>
                <h1> Database Error! </h1>
                <p>Error message: <?php echo $error_message; ?></p>
                <h2> Whoops!! </h2>
                <img src="../images/UnderCon.png" alt="Sorry!">
            </section> 

            <aside>
                <ul>
                    <li><a href="../products/guitars/index.php">Guitars</a></li>
                    <li><a href="../index.php">Basses</a></li>
                    <li><a href="../index.php">Drums</a></li>
                    <li><a href="../index.php">Keyboards</a></li>
                </ul>
            </aside> 
        </main>

        <footer>
            <p>
                &copy; 2023 The Guitar Store 
                <span id="currentDate"></span>
            </p>
        </footer>
        <script src="../scripts/date.js"></script>
    </body>
</html>

