<!DOCTYPE php>
<php lang="en">
    
<!-- Mirrored from demos.jeweltheme.com/wheel/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:15 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Wheel - Responsive and Modern Car Rental Website Template</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/php5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index-2.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href="#"><i class="fa fa-phone"></i><span>(+61) 3214 546789</span></a></div>
                                <div class="top-menu-item"><a href="#"><i class="fa fa-envelope"></i><span>contact@wheel-rental.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Account
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="register.php">Login</a></li>
                                            <li><a href="register.php">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-lang-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Eng
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Brazil</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Germany</a></li>
                                            <li><a href="#">India</a></li>
                                            <li><a href="#">Japan</a></li>
                                            <li><a href="#">Serbia</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-menu-item">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        USD
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">JPY</a></li>
                                            <li><a href="#">DKK</a></li>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">CHF</a></li>
                                            <li><a href="#">NZD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children  ">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="index-2.php">Home page 01</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="index2.php">Home page 02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="#"> Listing </a>
                                        <!--class=" dl-submenu "-->
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-grid.php">Car Listing - Grid View</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-3col2.php">Car Listing - List View</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-listing-details.php">car listing details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="reservation1.php">Reservation</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item "><a href="contact.php">contact</a></li>
                                            <li class="menu-item "><a href="register.php">Register</a></li>
                                            <li class="menu-item  active-color "><a href="checkout.php">Ceckout</a></li>
                                            <li class="menu-item "><a href="about.php">About</a></li>
                                            <li class="menu-item "><a href="shopping.php">shopping cart</a></li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Level 2</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="#">News</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="news.php">News</a></li>
                                            <li class="menu-item"><a href="news-details.php">News details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="#">Features</a>
                                    </li>
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                            <a href="http://goo.gl/rUdkZt" class="wheel-cheader-but" target="_blank">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Checkout</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> pages </a></li>
                                <li class="active">Checkout</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-billing">
                        <div class="wheel-header marg-lg-t140 marg-lg-b50 marg-sm-t100">
                            <h5>Billing Details</h5>
                        </div>
                        <form action="#">
                            <select class="selectpicker ">
                                <option>United States of America (USA)</option>
                                <option>UK</option>
                                <option>UA</option>
                            </select>
                            <select class="selectpicker ">
                                <option>State / County</option>
                                <option>Lviv</option>
                                <option>Kiev</option>
                            </select>
                            <input type="text" placeholder="First Name " class="wheel-half-width pull-left">
                            <input type="text" placeholder="Last Name  " class="wheel-half-width pull-right marg-r0">
                            <input type="text" placeholder="Company Name (Optional) ">
                            <input type="text" placeholder="Address Line 1">
                            <input type="text" placeholder="Address Line 2">
                            <input type="text" placeholder="City" class="wheel-half-width pull-left">
                            <input type="text" placeholder="ZIP / Postcode" class="wheel-half-width pull-right marg-r0">
                            <input type="text" placeholder="Email Address " class="wheel-half-width pull-left">
                            <input type="text" placeholder="Phone (Optional) " class="wheel-half-width pull-right marg-r0">
                            <label for="input-val8">
                            <input type="checkbox" id='input-val8'><span>Create an account?</span></label>
                            <input type="text" placeholder="Password " class="wheel-half-width pull-left">
                            <input type="text" placeholder="Confirm Password" class="wheel-half-width pull-right marg-r0">
                            <label for="input-val9">
                            <input type="checkbox" id='input-val9'><span>Ship to a different address?</span></label>
                            <textarea placeholder="Notes about your order "></textarea>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-order marg-lg-t150 marg-lg-b150 marg-sm-b100 marg-sm-t100">
                        <div class="wheel-search-form clearfix">
                            <input type="text" placeholder="Coupon Code">
                            <button class="">Apply Coupon</button>
                        </div>
                        <div class="wheel-order-price marg-lg-t30 marg-lg-b30">
                            <div class="wheel-header ">
                                <h5>Your Order</h5>
                            </div>
                            <ul>
                                <li class="clearfix"><span>Porsche Cayman<i> x 1</i></span><b>$125,000.00</b></li>
                                <li class="clearfix"><span>Porsche Cayman<i> x 1</i></span><b>$125,000.00</b></li>
                                <li class="clearfix"><span>Order Subtotal</span><b>$350,000.00</b></li>
                                <li class="clearfix"><span>Shipping and Handling</span><b>$125.00</b></li>
                                <li class="clearfix wheel-total">
                                    <h4>Order Total</h4>
                                    <b>$350,125.00</b>
                                </li>
                            </ul>
                        </div>
                        <div class="wheel-payment marg-lg-t60 marg-lg-b30">
                            <div class="wheel-header ">
                                <h5>Payment Method</h5>
                            </div>
                            <form action="#">
                                <input type="radio" id='r1' name='payment'>
                                <label for="r1"><i></i>
                                <span>Direct Bank Transfer</span>
                                </label>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit  </p>
                                <input type="radio" id='r2' name='payment'>
                                <label for="r2"><i></i>
                                <span>Cheque Payment</span>
                                </label>
                                <input type="radio" id='r3' name='payment'>
                                <label for="r3"><i></i>
                                <span>PayPal</span>
                                </label>
                                <label for="input-val10" class="wheel-agree">
                                <input type="checkbox" id='input-val10'>
                                <span>I agree with the</span>
                                <a href="#"> Terms and Conditions</a>
                                </label>
                                <button>Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wheel-billing -->
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Newsletter Signup </h5>
                            <h3>Subscribe & get<span> 20% </span> Off</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href="#"><img src="images/logo2.png" alt=""></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>121 King Street, Melbourne <br>
                                    VIC 3000, Australia  </span>
                                </li>
                                <li><a href="#"><span><i class="fa fa-phone"></i> +61 3 8376 6284</span></a></li>
                                <li><a href="#"><span><i class="fa fa-envelope"></i>contact@wheel-rental.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="#" class="">About us</a></li>
                                <li><a href="#" class="">Customer Service</a></li>
                                <li><a href="#" class="">Contact Us</a></li>
                                <li><a href="#" class="">Safety Recall</a></li>
                                <li><a href="#" class="">Privacy policy</a></li>
                                <li><a href="#" class="">Site Map</a></li>
                                <li><a href="#" class="">Terms & condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                            <h3>Vehicles</h3>
                            <ul>
                                <li><a href="#" class="">Exotic Cars</a></li>
                                <li><a href="#" class="">SUVs</a></li>
                                <li><a href="#" class="">Trucks</a></li>
                                <li><a href="#" class="">Mini Vans</a></li>
                                <li><a href="#" class="">Moving Trucks</a></li>
                                <li><a href="#" class="">Vans</a></li>
                                <li><a href="#" class="">RVs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padd-lr0">
                        <div class="wheel-footer-gallery">
                            <h3>Photo Gallery</h3>
                            <div class="  clearfix">
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i11.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i12.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i13.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i14.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i15.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i16.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i17.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i18.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By <a href="https://themeforest.net/user/bigpsfan">bigpsfan</a> &amp; Developed By <a href="https://jeweltheme.com/">Jewel Theme</a></span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> Pages</a></li>
                            <li><a href="#"> Listings</a></li>
                            <li><a href="#"> Reservation</a></li>
                            <li><a href="#">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>

<!-- Mirrored from demos.jeweltheme.com/wheel/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:15 GMT -->
</php>