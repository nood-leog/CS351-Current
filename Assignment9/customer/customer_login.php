<!DOCTYPE html>
<!--customer login index-->
<html lang="en">
    <head>
        <title>Customer Login</title>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/customer_login.css">
    </head>

    <body>
        <?php
        include('./view/header.php');
        include('./view/horizontal_nav_bar.php');
        ?>
        <main>
            <?php include('./view/aside.php'); ?>
            <form method="post" action="index.php?action=customer_page">

                <h2>Customer Login</h2>
                <p>
                    <label for="emailInput">Email Address:</label>
                    <input type="text" id="emailInput" name="emailInput">
                </p>
                <span>
                    <button type="submit">Login</button>
                    <a href="index.php?action=home"><button type="button">Cancel</button></a>
                </span>

            </form>
        </main>
        <?php include('./view/footer.php'); ?>
        <script src="./scripts/date.js"></script>
    </body>
</html>
