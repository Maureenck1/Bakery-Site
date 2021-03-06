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

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid"><a class="navbar-brand" href="index.html" id="loggo" style="color:#fef7f7;"><i class="fa fa-birthday-cake" style="color:rgb(240,12,245);font-size:42px;"></i><strong>&nbsp;George's Cake Factory.</strong></a><button class="navbar-toggler" data-toggle="collapse"
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
    <div class="container">
        <h1 class="heads" style="color:rgb(216,7,208);"><span style="text-decoration: underline;">Fill In The Form To Make The Purchase.</span></h1>
        <form action="assets/php/purchase.php" method="post">
            <div class="form-row">
                <div class="col-sm-10 col-md-4 col-lg-4 col-xl-4 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0">
                    <div class="form-group"><label style="font-size:20px;"><strong>First Name:</strong></label><input class="form-control" type="text" name="fname" required="" placeholder="First Name"></div>
                </div>
                <div class="col-sm-10 col-md-4 col-lg-4 col-xl-4 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0">
                    <div class="form-group" name="lname"><label style="font-size:20px;"><strong>Second Name:</strong></label><input class="form-control" type="text" name="sname" required="" placeholder="Second Name "></div>
                </div>
                <div class="col-sm-10 col-md-4 col-lg-4 col-xl-4 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0">
                    <div class="form-group"><label style="font-size:20px;"><strong>Last Name:</strong></label><input class="form-control" type="text" name="lname" required="" placeholder="Last Name "></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 offset-sm-1 offset-md-2 offset-lg-3 offset-xl-3">
                    <div class="form-group"><label style="font-size:20px;"><strong>Email Address :</strong></label><input class="form-control" type="email" required="" placeholder="Email Address "></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-10 col-md-4 col-lg-4 col-xl-4 offset-sm-1"><label class="col-form-label" style="font-size:20px;"><strong>Credit Card Type :</strong></label><select class="form-control"><optgroup label="Select Credit Card Type"><option value="" selected>Select Type Of Credit Card.</option><option value="visa">VISA</option><option value="master">Master Card.</option><option value="transut">Transit.</option></optgroup></select></div>
                <div class="col-sm-10 col-md-6 col-lg-6 col-xl-6 offset-sm-1">
                    <div class="form-group"><label style="font-size:20px;"><strong>Credit Card Number :</strong></label><input class="form-control" type="password" required=""></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 offset-sm-1 offset-md-2 offset-lg-3 offset-xl-3">
                    <div class="form-group"><label style="font-size:20px;"><strong>Phone Number :</strong></label><input class="form-control" type="text" name="phone" required="" placeholder="Phone  Number"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 offset-sm-1 offset-md-2 offset-lg-3 offset-xl-3">
                    <div class="form-group"><label style="font-size:22px;"><strong>Delivery Mode</strong></label>
                        <p style="font-size:19px;color:rgb(105,133,233);"><input type="radio" name="radio" value="home" checked=""><strong>&nbsp; &nbsp;Home Delivery .</strong></p>
                        <p style="font-size:20px;color:rgb(105,133,233);"><input type="radio" name="radio" value="home"><strong>&nbsp; &nbsp;Self Pick-Up</strong></p><button class="btn btn-primary btn-block btn-lg justify-content-center" type="submit" style="background-color:rgb(216,7,208);"><strong>Make Order.</strong></button></div>
                </div>
            </div>
        </form>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center footer">
                    <div class="col item">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="cakes&amp;pastries.html" style="font-size:20px;color:rgb(32,51,223);"><strong>Birthday Cakes</strong></a></li>
                            <li><a href="cakes&amp;pastries.html" style="font-size:20px;color:rgb(19,41,237);"><strong>Weeding Cakes.</strong></a></li>
                            <li><a href="cakes&amp;pastries.html" style="font-size:20px;color:rgb(19,41,237);"><strong>Annevasary Cakes .</strong></a></li>
                        </ul>
                    </div>
                    <div class="col-12 item social"><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-phone"></i></a><a href="https://mail.com/login"
                            target="_blank"><i class="material-icons">email</i></a>
                        <p class="copyright"><strong>George's Cake Factory &nbsp;. &nbsp; ?? 2018</strong></p>
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
    <script src="assets/js/new.js"></script>
</body>

</html>