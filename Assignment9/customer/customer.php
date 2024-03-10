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
                    <form>
                        <p>
                            <label for="billLine1">Address line 1:</label>
                            <input type="text" id="billLine1" name="billLine1" value="<?php echo isset($billLine1) ? $billLine1 : ''; ?>">
                        </p>
                    </form>


                    <p>
                        <label for="billLine2">Address line 2:</label>
                        <input type="text" id="billLine2" name="billLine2" value="<?php echo isset($billLine2) ? $billLine2 : ''; ?>">
                    </p>

                    <p>
                        <label for="billCity">City:</label>
                        <input type="text" id="billCity" name="billCity" value="<?php echo isset($billCity) ? $billCity : ''; ?>">
                    </p>

                    <p>
                        <label for="state">State:</label>
                        <select id="state" name="state">
                            <?php foreach ($states as $state): ?>
                                <option value="<?php echo $state['state']; ?>" <?php echo isset($billState) && $billState === $state['state'] ? 'selected' : ''; ?>><?php echo $state['state']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>



                    <p>
                        <label for="billZip">Zip Code:</label>
                        <input type="text" id="billZip" name="billZip" value="<?php echo isset($billZip) ? $billZip : ''; ?>">
                    </p>

                    <p>
                        <label for="billPhone">Phone:</label>
                        <input type="text" id="billPhone" name="billPhone" value="<?php echo isset($billPhone) ? $billPhone : ''; ?>">
                    </p>

                    <span>
                        <a href="index.php?action=update_customer_info">
                            <button type="button">Update Billing Information</button>
                        </a>
                    </span>
                    </form>
                </div>

                <div>
                    <h2>Shipping Address</h2>
                    <form>
                        <p>
                            <label for="shipLine1">Address line 1:</label>
                            <input type="text" id="shipLine1" name="shipLine1" value="<?php echo isset($shipLine1) ? $shipLine1 : ''; ?>">
                        </p>
                    </form>


                    <p>
                        <label for="shipLine2">Address line 2:</label>
                        <input type="text" id="shipLine2" name="shipLine2" value="<?php echo isset($shipLine2) ? $shipLine2 : ''; ?>">
                    </p>

                    <p>
                        <label for="shipCity">City:</label>
                        <input type="text" id="shipCity" name="shipCity" value="<?php echo isset($shipCity) ? $shipCity : ''; ?>">
                    </p>

                    <p>
                        <label for="state">State:</label>
                        <select id="state" name="state">
                            <?php foreach ($states as $state): ?>
                                <option value="<?php echo $state['state']; ?>" <?php echo isset($shipState) && $shipState === $state['state'] ? 'selected' : ''; ?>><?php echo $state['state']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>

                    <p>
                        <label for="shipZip">Zip Code:</label>
                        <input type="text" id="shipZip" name="shipZip" value="<?php echo isset($shipZip) ? $shipZip : ''; ?>">
                    </p>

                    <p>
                        <label for="shipPhone">Phone:</label>
                        <input type="text" id="shipPhone" name="shipPhone" value="<?php echo isset($shipPhone) ? $shipPhone : ''; ?>">
                    </p>

                    <span>
                        <a href="index.php?action=update_customer_info">
                            <button type="button">Update Shipping Information</button>
                        </a>
                    </span>
                    </form>
                </div>
            </section>
        </main>
        <?php
        include('./view/footer.php');
        ?>

        <script src="./scripts/date.js"></script>
    </body>
</html>

