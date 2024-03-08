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
                            <input type="text" id="firstName" name="firstName" value="<?php echo isset($cuEmail['first_name']) ? $cuEmail['first_name'] : ''; ?>">
                        </p>

                        <p>
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName" name="lastName" value="<?php echo isset($cuEmail['last_name']) ? $cuEmail['last_name'] : ''; ?>">
                        </p>

                        <p>
                            <label for="emailInput">Email Address:</label>
                            <input type="text" id="emailInput" name="emailInput" value="<?php echo isset($cuEmail['email_address']) ? $cuEmail['email_address'] : ''; ?>">
                        </p>

                        <p>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" value="<?php echo isset($cuEmail['password']) ? $cuEmail['password'] : ''; ?>">
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

