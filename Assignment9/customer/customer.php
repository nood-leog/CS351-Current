<!DOCTYPE html>
<!--customer index-->
<html lang="en">
    <head>
        <title> Customer Info </title>
        <link rel="stylesheet" href=./styles/main.css>
        <link rel="stylesheet" href=./styles/customer.css>
    </head>


    <body>
        <?php
        include('./view/header.php');
        include('./view/horizontal_nav_bar.php');
        ?>
        <main>
            <?php include('./view/aside.php'); ?>
            <section>
                <div>
                    <h2>Customer information</h2>
                    <form>
                        <p>
                            <label for="firstName">First Name:</label>
                            <input type="text" id="firstName" name="firstName">
                        </p>

                        <p>
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName" name="lastName">
                        </p>

                        <p>
                            <label for="emailInput">Email Address:</label>
                            <input type="text" id="emailInput" name="emailInput">
                        </p>

                        <p>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password">
                        </p>

                        <p>
                            <label for="confirmPassword">Confirm Password:</label>
                            <input type="password" id="confirmPassword" name="confirmPassword">
                        </p>

                        <span>
                            <a href="index.php?action=update_customer_info">
                            <button type="button">Update Customer Information</button>
                            </a>
                        </span>
                    </form>
                </div>

                <div>
                    <h2>Billing Address</h2>
                </div>

                <div>
                    <h2>Shipping Address</h2>
                </div>
            </section>
        </main>
        <?php
        include('./view/footer.php');
        ?>

        <script src="./scripts/date.js"></script>
    </body>
</html>

