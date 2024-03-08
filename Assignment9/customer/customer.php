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
                            <label for="line1">Address line 1:</label>
                            <input type="text" id="line1" name="line1" value="<?php echo isset($address_id['line1']) ? $address_id['line1'] : ''; ?>">
                        </p>

                        <p>
                            <label for="line2">Address line 2:</label>
                            <input type="text" id="line2" name="line2" value="<?php echo isset($address_id['line2']) ? $address_id['line2'] : ''; ?>">
                        </p>

                        <p>
                            <label for="city">City:</label>
                            <input type="text" id="city" name="city" value="<?php echo isset($address_id['city']) ? $address_id['city'] : ''; ?>">
                        </p>

                        <p>
                            <label for="state">State:</label>
                            <select id="state" name="state">
                                <?php foreach ($states as $state): ?>
                                    <option value="<?php echo $state['state']; ?>" <?php echo isset($address_id['state']) && $address_id['state'] === $state['state'] ? 'selected' : ''; ?>><?php echo $state['state']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </p>

                        <p>
                            <label for="zip_code">Zip Code:</label>
                            <input type="text" id="zip_code" name="zip_code" value="<?php echo isset($address_id['zip_code']) ? $address_id['zip_code'] : ''; ?>">
                        </p>

                        <p>
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" value="<?php echo isset($address_id['phone']) ? $address_id['phone'] : ''; ?>">
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
                            <label for="line1">Address line 1:</label>
                            <input type="text" id="line1" name="line1" value="<?php echo isset($address_id['line1']) ? $address_id['line1'] : ''; ?>">
                        </p>

                        <p>
                            <label for="line2">Address line 2:</label>
                            <input type="text" id="line2" name="line2" value="<?php echo isset($address_id['line2']) ? $address_id['line2'] : ''; ?>">
                        </p>

                        <p>
                            <label for="city">City:</label>
                            <input type="text" id="city" name="city" value="<?php echo isset($address_id['city']) ? $address_id['city'] : ''; ?>">
                        </p>

                        <p>
                            <label for="state">State:</label>
                            <select id="state" name="state">
                                <?php foreach ($states as $state): ?>
                                    <option value="<?php echo $state['state']; ?>" <?php echo isset($address_id['state']) && $address_id['state'] === $state['state'] ? 'selected' : ''; ?>><?php echo $state['state']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </p>

                        <p>
                            <label for="zip_code">Zip Code:</label>
                            <input type="text" id="zip_code" name="zip_code" value="<?php echo isset($address_id['zip_code']) ? $address_id['zip_code'] : ''; ?>">
                        </p>

                        <p>
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" value="<?php echo isset($address_id['phone']) ? $address_id['phone'] : ''; ?>">
                        </p>

                        <span>
                            <a href="index.php?action=update_customer_info">
                                <button type="button">Update Billing Information</button>
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

