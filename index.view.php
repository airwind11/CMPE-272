<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Airwind.me - A CMPE-272 e-commerce project</title>




<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<link rel="stylesheet" href="css/layouts/side-menu.css">
<link rel="stylesheet" href="css/layouts/pricing.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">





    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->







</head>
<body>


    <a class="admin""
 href="admin.html" ><h1>Admin Login</h1></a>








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
               <li class="pure-menu-item"><a href="http://www.independent.co.uk/extras/indybest/food-drink/the-50-best-food-websites-8665600.html" class="pure-menu-link"  target="_blank">News</a></li>

                <li class="pure-menu-item"><a href="contacts.php" class="pure-menu-link">Contacts</a></li>
                <li class="pure-menu-item"><a href="user.html" class="pure-menu-link">User Registration</a></li>
                <li class="pure-menu-item"><a href="alluserlist.php" class="pure-menu-link">All User List</a></li>

            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1><?= $course;?></h1>
            <h2>No Fuss - Healthy Food</h2>
        </div>




            <div class="pure-g">
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="https://static1.squarespace.com/static/5463ef8ee4b03e12fd68d829/t/55915e57e4b0f74ef3f0d069/1435590232060/?format=1000w" alt="Peyto Lake">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://a3145z1.americdn.com/wp-content/uploads/2012/09/Eat-Healthy-300x201.jpeg" alt="Train">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="https://s-media-cache-ak0.pinimg.com/originals/b7/83/b8/b783b89bfbc80a5786619dd8546710f6.png" alt="T-Shirt Store">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="https://i.ytimg.com/vi/M_md8ZAzmiM/maxresdefault.jpg" alt="Mountain">
                </div>
                <br/>
                <a href="redirect.php" ><h1>Login  With Merkato</h1></a>
            </div>


        </div>
    </div>






<script src="js/ui.js"></script>


</body>
</html>
