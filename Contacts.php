<!doctype html>
<html lang="en">
</head>
<body>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="css/layouts/side-menu.css">
        <link rel="stylesheet" href="css/layouts/pricing.css">

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="index.php">FOOD-MART</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="AboutUs.html" class="pure-menu-link">About</a></li>

               <li class="pure-menu-item"><a href="products.html" class="pure-menu-link">Products</a></li>

                <li class="pure-menu-item"><a href="contacts.php" class="pure-menu-link">Contacts</a></li>
            </ul>
        </div>
    </div>


                 <h1 class="banner-head">
                <?php
                $handle = fopen("contact-info.txt", "r");
                while (($line = fgets($handle)) !== false) {
                    echo "$line<br>";
                }
    fclose($handle);
               ?>
                </h1>




 </body>
</html>