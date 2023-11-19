<html lang="en">
    <head>
        <title>Confirmation Order</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@300&family=Manrope:wght@200&family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <script src="script.js"></script>
    </head>
    <body>

        <div id="container">

            <nav class="mobile-nav">
                <div id="menu-links">
                    <a href="index.html">Home</a>
                    <a href="bouquet.html">Shop Bouquets</a>
                    <a href="holidayseason.html">Shop Holiday Seasonals</a>
                    <a href="about.html">About Us</a>
                    <a href="contact.html">Contact Us</a>
                </div>
                <a class="menu-icon" onclick="hamburger()">
                    <div>&#9776;</div>
                </a>
            </nav>   
            
            <header class="tablet-desktop">
                <p> In response to COVID 19, we do not have readymade flowers available for general walk-in 
                    trade, please call or use our website for make to order |</p>
                <p>March Special ~ 10% off for any web order</p> 
            </header>

            <nav class="tablet-desktop">
                <ul>
                    <a href="index.html"><img src="florist images/logo.png" alt="Busy Bee Logo"></a>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="bouquet.html">Shop Bouquets</a></li>
                    <li><a href="holidayseason.html">Shop Holiday Seasonals</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>

            <header class="mobile">
                <a href="index.html"><img src="florist images/logo.png" alt="Busy Bee Logo"></a>
            </header>

            <main>
                <div id="order">
                    <h1>Order Confirmation</h1>
                    <p>Thank you for ordering <?php echo $_POST['name'];?>.</p>
                    <br>
                    <h3>Order summary</h3>
                    <p>You have ordered:</p>
                    <ol>
                        <?php 
                            $flowers = $_POST["flower"];
                            foreach ($flowers as $flower) { 
                        ?>
                        <li>
                            <?php echo ucwords($flower); ?>
                        </li>
                        <?php } ?>
                    </ol>
                    <?php 
                        $priceamount = 0;
                        foreach ($flowers as $flower) {
                            if ($flower == "blossom") {$priceamount += 95;}
                            if ($flower == "love champagne") {$priceamount += 56;}
                            if ($flower == "ultraviolet") {$priceamount += 93.6;}
                            if ($flower == "carnation") {$priceamount += 29.9;}
                            if ($flower == "sweet garden") {$priceamount += 160;}
                            if ($flower == "angel") {$priceamount += 85;}
                            if ($flower == "mandala") {$priceamount += 90;}
                            if ($flower == "aerin") {$priceamount += 89;}
                            if ($flower == "charlotte") {$priceamount += 98;}
                            if ($flower == "keiko") {$priceamount += 58;}
                        }
                    ?>
                    <p>The total amount is $<?php echo $priceamount ?> and will be charged from card ending 
                        <?php $cardnumber = $_POST["card"]; echo substr($cardnumber, -4); ?>.
                    </p>
                    <p>Your orders would be ready in 3 days. You will get a confirmation when it is ready through your email.</p>
                    <?php if($_POST["delivery"] == "pickup") { ?>
                        <p>Your orders will be pickup at our flower shop.</p>
                    <?php } else { ?>
                        <p>Your orders will be delivered to <?php echo ucwords($_POST["address"]); ?>.</p>
                    <?php } ?>
                    <p>If there are any other questions or assistance, please call our shop within the trading time.</p>
                </div>
            </main>
            
            <footer>
                <h4>223 Bolsover St in Cairville, Queensland</h4>
                <h4>Mon-Fri: 9 am to 4 pm</h4>
                <h4>Sat-Sun: 9 am to 12 pm</h4>
                <h4><a href="tel:0747791243">07 4779 1243</a></h4>
            </footer>

        </div>
    </body>
</html>