<!DOCTYPE html>

<!--Guitar product index-->


<html lang="en">
    <head>        
        <title> Guitars </title>
        <link rel="stylesheet" href="../../styles/main.css">
        <link rel="stylesheet" href="../../styles/Guitars.css"> 
        
        <script src="../../scripts/date.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../../scripts/guitars.js" defer></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />
        
    </head>

    <body>
        <header>
            <img src="../../images/FenderStratocaster.png" alt="Fender Stratocaster">
            <h2>The Guitar Store</h2>
            <h3>For rock stars everywhere!</h3>    
        </header>

        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../lessons/index.php">Lessons</a></li>
                <li><a href="../../products/index.php">Products</a></li>
                <li><a href="../../support/index.php">Support</a></li>
                <li><a href="../../shipping/index.php">Shipping</a></li>
                <li><a href="../../contact/index.php">Contact Us</a>
                    <ul>
                        <li><a href="../../contact/email/index.php">Email</a></li>
                        <li><a href="../../contact/phone/index.php">Phone</a></li>
                        <li><a href="../../contact/livechat/index.php">Live Chat</a></li>
                    </ul>
                </li>
            </ul>
        </nav>


        <main>
            <section>
                <h1>Our Guitars</h1>
                <h2>Check out our fine selection of premium guitars!</h2>
                <ul class="bxslider">
                    <li><img src="../../images/guitars/FenderStratocaster2.png" alt="FenderStratocaster" title="FenderStratocaster"/></li>
                    <li><img src="../../images/guitars/Caballero11.png" alt="Caballero11" title="Caballero11"/></li>
                    <li><img src="../../images/guitars/GibsonLesPaul.png" alt="GibsonLesPaul" title="GibsonLesPaul"/></li>
                    <li><img src="../../images/guitars/WashburnD10S.png" alt="WashburnD10S" title="WashburnD10S"/></li>
                    <li><img src="../../images/guitars/YamahaFG700S.png" alt="YamahaFG700S" title="YamahaFG700S"/></li>
                    <li><img src="../../images/guitars/GibsonSB.png" alt="GibsonSB" title="GibsonSB" /></li>
                </ul>
            </section>
           

            <aside>
                <ul>
                    <li><a href="../../products/guitars/index.php">Guitars</a></li>
                    <li><a href="../../products/basses/index.php">Basses</a></li>
                    <li><a href="../../products/drums/index.php">Drums</a></li>
                    <li><a href="../../products/keyboards/index.php">Keyboards</a></li>
                </ul>
            </aside> 
        </main>

        <footer>
            <p>
                &copy; 2023 The Guitar Store 
                <span id="currentDate"></span>
            </p>
        </footer>
    </body>
</html>
