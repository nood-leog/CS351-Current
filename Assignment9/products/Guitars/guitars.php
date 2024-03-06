<!DOCTYPE html>

<!--Guitar product index-->



<html lang="en">
    <head>        
        <title> Guitars </title>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/Guitars.css"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />
    </head>

    <body>
        <?php
        include('./view/header.php');
        include('./view/horizontal_nav_bar.php');
        ?>
        <main>
            <?php include('./view/aside.php'); ?>
            <section>
                <h1>Our Guitars</h1>
                <h2>Check out our fine selection of premium guitars!</h2>
                <ul class="bxslider">
                    <li><img src="./images/guitars/FenderStratocaster2.png" alt="FenderStratocaster" title="FenderStratocaster"/></li>
                    <li><img src="./images/guitars/Caballero11.png" alt="Caballero11" title="Caballero11"/></li>
                    <li><img src="./images/guitars/GibsonLesPaul.png" alt="GibsonLesPaul" title="GibsonLesPaul"/></li>
                    <li><img src="./images/guitars/WashburnD10S.png" alt="WashburnD10S" title="WashburnD10S"/></li>
                    <li><img src="./images/guitars/YamahaFG700S.png" alt="YamahaFG700S" title="YamahaFG700S"/></li>
                    <li><img src="./images/guitars/GibsonSB.png" alt="GibsonSB" title="GibsonSB" /></li>
                </ul>
            </section>
        </main>
        <?php
        include('./view/footer.php');
        ?>
        <script src="./scripts/date.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="./scripts/guitars.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    </body>
</html>




