<!DOCTYPE html>
<!--shipping index-->
<html lang="en">
    <head>
        <title> Shipping </title>
        <link rel="stylesheet" href=./styles/main.css>
        <link rel="stylesheet" href=./styles/shipping.css>
    </head>

    <?php
    include('./view/header.php');
    include('./view/horizontal_nav_bar.php');
    include('./view/aside.php');
    ?>
    <body>
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
        </main>
        <script src="./scripts/shipping.js"></script>
        <script src="./scripts/date.js"></script>
    </body>
</html>

<?php
include('./view/footer.php');
?>

