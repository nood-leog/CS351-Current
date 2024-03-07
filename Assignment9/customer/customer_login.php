<!DOCTYPE html>
<!--customer login index-->
<html lang="en">
    <head>
        <title> Customer Login </title>
        <link rel="stylesheet" href=./styles/main.css>
        <link rel="stylesheet" href=./styles/customer_login.css>
    </head>


    <body>
        <?php
        include('./view/header.php');
        include('./view/horizontal_nav_bar.php');
        ?>
        <main>
            <?php include('./view/aside.php'); ?>
            <form onsubmit="checkEmail()">
                <section>
                    <h2>Customer Login</h2>
                    <p>
                        <label for="emailInput">Email Address:</label> 
                        <input type="text" id="emailInput" name="emailInput">
                        <p>
                            <button type="submit">Login</button> 
                            <a href="index.php?action=home"><button>Cancel</button></a>
                        </p>
                    </p>
                </section>
            </form>
        </main>
        <?php
        include('./view/footer.php');
        //<span><a href="index.php?action=product"><button>Login</button></a></span>
        ?>

        <script src="./scripts/customerlogin.js"></script>
        <script src="./scripts/date.js"></script>
    </body>
</html>



