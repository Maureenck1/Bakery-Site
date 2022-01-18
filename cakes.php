<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut  icon" href="Favicon.png" type="image/x-icon" />
 <title>Jeorge's Cakes.</title>
</head>

<body id="details-body">
    <nav class="navbar navbar-light navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid"><a class="navbar-brand contacts-loggo" href="index.html" style="color:#fef7f7;"><i class="fa fa-birthday-cake" style="color:rgb(240,12,245);font-size:42px;"></i><strong>&nbsp;George's Cake Factory.</strong></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:#fef7f7;"><strong>Home</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="cakes&amp;pastries.html" style="color:#fef7f7;"><strong>Cakes &amp; Pastries.</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offers.html" style="color:#fef7f7;"><strong>Offers.</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offers.html" style="color:#fef7f7;"><strong>Contact Us.</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container container-main">
        <div id="cake-details-div">
            <h1 id="cake-name" style="color:rgb(240,12,245);"><span style="text-decoration: underline;"><?php echo $_GET['name']?></span></h1><img src="assets/img/<?php echo $_GET['pic']?>" class="rounded-circle img-fluid" id="img-size" /></div>
			 <input type = "hidden" value = "favs" id = "cake">
        <div id="description" style="margin:20px;">
            <p>This type of cake is best suited for the following occasions :</p>
            <p style="margin:0px 0px 0px;">Weddings</p>
            <p style="margin:0px 0px 0px;">Birthdays</p>
            <p style="margin:0px 0px 0px;">Anniversaries</p>
            <p style="margin:0px 0px 0px;">Special Occasions.</p>
        </div>
        <div id="ingridients-div">
            <h2 id="ingidients-heading">Ingredients.</h2>
            <ul  style="font-size:20px;" id = "ingredients">
			<!--THIS IS WHERE THE INRIDIENTS WILL GO.-->
            </ul>
        </div>
        <div class="mother-div2" style="font-size:20px;">
            <h1 id="price">Pricing Per Kilogram .</h1>
            <div class="mother-div">
                <h4>1. One Kg &nbsp;<span class="price-span" id="firstKg"></span></h4>
                <div class="order-div"><a id = "onekg" class="btn btn-primary btn-block btn-lg order-button" role="button" href="purchase.php?quantity=1&price=300" style="background-color:rgb(240,12,245);"><strong>Oder Now !!!!!!</strong></a></div>
                <h4>2. Two Kg &nbsp;<span class="price-span" id="secondKg"></span></h4>
                <div class="order-div" ><a id = "twokg" class="btn btn-primary btn-block btn-lg order-button" role="button" href="purchase.php?quantity=2&price=600" style="background-color:rgb(240,12,245);"><strong>Oder Now !!!!!!</strong></a></div>
                <h4>3. Three Kg  &nbsp;<span class="price-span" id="thirdKg"></span></h4>
                <div class="order-div" ><a id = "threekg" class="btn btn-primary btn-block btn-lg order-button" role="button" href="purchase.php?quantity=3&price=900" style="background-color:rgb(240,12,245);"><strong>Oder Now !!!!!!</strong></a></div>
                <h4>4. Four Kg &nbsp;<span class="price-span" id="fourthKg"></span></h4>
                <div class="order-div"><a id = "fourkg" class="btn btn-primary btn-block btn-lg order-button" role="button" href="purchase.php?quantity=4&price=1200" style="background-color:rgb(240,12,245);"><strong>Oder Now !!!!!!</strong></a></div>
            </div>
        </div>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center footer">
                    <div class="col item">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="services.html/#birthday_cake" style="font-size:20px;color:rgb(32,51,223);"><strong>Birthday Cakes</strong></a></li>
                            <li><a href="services.html" style="font-size:20px;color:rgb(19,41,237);"><strong>Weeding Cakes.</strong></a></li>
                            <li><a href="services.html" style="font-size:20px;color:rgb(19,41,237);"><strong>Annevasary Cakes .</strong></a></li>
                        </ul>
                    </div>
                    <div class="col-12 item social"><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-phone"></i></a><a href="https://mail.com/login"
                            target="_blank"><i class="material-icons">email</i></a>
                        <p class="copyright"><strong>George's Cake Factory &nbsp;. &nbsp; © 2018</strong></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="next.js"></script>
    <script src="inserting_price.js"></script>
    <script src="ingrdients.js"></script>

</body>

</html>