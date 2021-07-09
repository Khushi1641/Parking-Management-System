<!DOCTYPE php>
<php lang="en">
    
<!-- Mirrored from demos.jeweltheme.com/wheel/car-listing-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:04:43 GMT -->
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
                                    <li class="menu-item current-menu-parent menu-item-has-children   active-color ">
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
                                            <li class="menu-item "><a href="checkout.php">Ceckout</a></li>
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
        <div class="wheel-start3 style-5">
            <img src="images/z-bg-11.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Listing Details</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> Listing </a></li>
                                <li class="active">Listing details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imgOnBanner-wrap">
                <img src="images/z-banner-img.png" alt="" class="imgOnBanner img-responsive">
            </div>
        </div>
        <div class="container-fluid padd-lr0">
            <div class="row padd-lr0">
                <div class="col-xs-12 padd-lr0">
                    <div class="container padd-lr0 xs-padd">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="listing-hedlines t-center">
                                    <h5 class="title">Lamborghini Sesto Elemento 2013</h5>
                                    <div class="subtitle">Exotic Car Collection</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 padd-lr0 xs-padd sm-addpadd">
                                <div class="wheel-collection style-2">
                                    <div class="tabs">
                                        <div class="tabs-header">
                                            <ul>
                                                <li class="active"><a href="#">Features</a></li>
                                                <li><a href="#">Description</a></li>
                                                <li><a href="#">(4)reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="tabs-content marg-lg-b30">
                                            <div class="tabs-item text-item active">
                                                <ul class="tabslist">
                                                    <li class="item">2 Adult Passanger Seats</li>
                                                    <li class="item">1 Baby Seat</li>
                                                    <li class="item">2 Doors</li>
                                                    <li class="item">Air Conditioning</li>
                                                </ul>
                                                <ul class="tabslist">
                                                    <li class="item">Airbags</li>
                                                    <li class="item">Power Steering</li>
                                                    <li class="item">Automatic Transmission</li>
                                                    <li class="item">Central Locking</li>
                                                </ul>
                                                <ul class="tabslist">
                                                    <li class="item">CO2 145g/km</li>
                                                    <li class="item">AM/FM/CD Stereo Radio</li>
                                                    <li class="item">ABS Breaks</li>
                                                    <li class="item">140km Mileage Per Tank</li>
                                                </ul>
                                            </div>
                                            <div class="tabs-item text-item">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est expedita harum neque odio perspiciatis tempora? Aliquid aut autem debitis, deserunt ipsum nesciunt placeat quas voluptatum. Accusantium beatae nobis sint.
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eveniet id natus nesciunt, quis quisquam reiciendis similique. Cum debitis doloribus et facere iste modi nam necessitatibus obcaecati, placeat quasi, repellat.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est expedita harum neque odio perspiciatis tempora? Aliquid aut autem debitis, deserunt ipsum nesciunt placeat quas voluptatum. Accusantium beatae nobis sint.
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur dicta eos error exercitationem ipsam laudantium libero, magni molestias necessitatibus nesciunt nobis non omnis, possimus quis recusandae sed vel vitae.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsa, ipsum. Deleniti dicta eos numquam odio quasi quis reiciendis, velit veniam. Architecto consectetur ducimus esse mollitia, natus nemo quia repellat?
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid, aperiam architecto dicta dolores eaque est exercitationem fugit iusto, molestias placeat praesentium ratione sit sunt temporibus ullam voluptatum. Deleniti, non?
                                                </p>
                                            </div>
                                            <div class="tabs-item text-item">
                                                <div class="wheel-comments-area wheel-bg1">
                                                    <div class="wheel-comments-list">
                                                        <ul>
                                                            <li>
                                                                <div class="wheel-comment-body">
                                                                    <div class="clearfix">
                                                                        <div class="comment-author">
                                                                            <img src="images/l3.png" alt="">
                                                                            <a href="#">Anthony Martial</a>
                                                                            <div class="ratings">
                                                                                <img src="images/stars.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-metadata">
                                                                            <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="wheel-sub-comment">
                                                                    <div class="wheel-comment-body">
                                                                        <div class="clearfix">
                                                                            <div class="comment-author">
                                                                                <img src="images/l4.png" alt=""><a href="#">Katherine Sanders</a>
                                                                                <div class="ratings">
                                                                                    <img src="images/stars.png" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="comment-metadata">
                                                                                <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="wheel-comment-body">
                                                                    <div class="clearfix">
                                                                        <div class="comment-author">
                                                                            <img src="images/l5.png" alt=""><a href="#">Vicki Rogers</a>
                                                                            <div class="ratings">
                                                                                <img src="images/stars.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-metadata">
                                                                            <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <section class="wheel-reply-form wheel-bg1">
                                                    <header>
                                                        <h3>Add Your Review</h3>
                                                    </header>
                                                    <form action="#">
                                                        <input type="text" placeholder="Your Name *">
                                                        <input type="text" placeholder="Your Email *">
                                                        <textarea placeholder="Your Message *"></textarea>
                                                        <button>Submit Now</button>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row marg-lg-t55 marg-sm-t0 marg-sm-b0 marg-lg-b75">
                            <div class="col-xs-12 marg-lg-b75 marg-sm-b0 padd-lr0">
                                <div class="wheel-map style-1" data-lat="40.7143528" data-lng="-74.0059731" data-marker="images/marker.png" data-zoom="10" data-style="style-1" data-string="WPC string"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid padd-lr0 z-bg-1">
            <div class="row marg-lg-t75 marg-xs-t0">
                <div class="col-xs-12 padd-lr0 xs-padd">
                    <div class="container padd-lr0 xs-padd">
                        <div class="row">
                            <div class="col-xs-12 padd-lr0 xs-padd marg-lg-b90 marg-lg-t70 marg-sm-t30">
                                <div class="wheel-header text-center">
                                    <h5>book now</h5>
                                    <h3>Make a <span>reservation</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row marg-lg-b20">
                            <div class="col-xs-12 padd-lr0 xs-padd marg-lg-b60 marg-sm-b10">
                                <div class="wheel-start-form wheel-start-form2    ">
                                    <form action="#">
                                        <label for="input-val20"><span>Dropping Off</span>
                                        <input type="text" id=input-val20 placeholder="ZIP, City, Airport or Address" required>
                                        </label>
                                        <label for="input-val21"><span>Picking Up</span>
                                        <input type="text" id=input-val21 placeholder="ZIP, City, Airport or Address" required>
                                        </label>
                                        <div class="clearfix">
                                            <div class="wheel-date">
                                                <span>Pickup Date</span>
                                                <label class="fa fa-calendar" for="input-val22">
                                                <input  class="datetimepicker" type="text" id=input-val22 value="29 Apr">
                                                </label>
                                            </div>
                                            <div class="wheel-date ">
                                                <span>Pickup time</span>
                                                <label for="input-val23" class="fa fa-clock-o">
                                                <input class="timepicker" type="text" id=input-val23 value="18:00">
                                                </label>
                                            </div>
                                            <div class="wheel-date">
                                                <span>Return Date</span>
                                                <label class="fa fa-calendar" for="input-val24">
                                                <input  class="datetimepicker" type="text" id=input-val24 value="29 Apr">
                                                </label>
                                            </div>
                                            <div class="wheel-date">
                                                <span>Return Time</span>
                                                <label for="input-val25" class="fa fa-clock-o">
                                                <input class="timepicker" type="text" id='input-val25' value="18:00">
                                                </label>
                                            </div>
                                            <div class="wheel-date">
                                                <span>Driver’s Age</span>
                                                <select class="selectpicker">
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                    <option>35</option>
                                                    <option>36</option>
                                                    <option>37</option>
                                                    <option>38</option>
                                                    <option>39</option>
                                                    <option>40</option>
                                                    <option>41</option>
                                                    <option>42</option>
                                                    <option>43</option>
                                                    <option>44</option>
                                                    <option>45</option>
                                                    <option>46</option>
                                                    <option>47</option>
                                                    <option>48</option>
                                                    <option>49</option>
                                                    <option>50</option>
                                                </select>
                                            </div>
                                            <div class="wheel-date">
                                                <span>Resident</span>
                                                <select class="selectpicker">
                                                    <option>USA</option>
                                                    <option>UA</option>
                                                    <option>UK</option>
                                                    <option>AU</option>
                                                    <option>LT</option>
                                                    <option>JP</option>
                                                    <option>IT</option>
                                                </select>
                                            </div>
                                            <label for="input-val26" class="promo">
                                            <input type="text" id='input-val26' placeholder="Promo Code (Optional)">
                                            </label>
                                            <label for="input-val27" class="promo promo2">
                                            <button class="wheel-btn" id='input-val27'>Search</button>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6 padd-lr0 xs-padd">
                                <div class="checkblock style-3">
                                    <h5 class="title">Extras</h5>
                                    <label for="input-driver">
                                    <input type="checkbox" id='input-driver' class="input-check" value="Additional Driver">
                                    <span>Additional Driver</span>
                                    <span><b>$120</b>/Per Rental</span>
                                    </label>
                                    <label for="input-gps">
                                    <input type="checkbox" id='input-gps' class="input-check" value="GPS" checked>
                                    <span>GPS</span>
                                    <span><b>$24</b>/Per Day</span>
                                    </label>
                                    <label for="input-biy">
                                    <input type="checkbox" id='input-biy' class="input-check" value="Biycicle Rack" checked>
                                    <span>Biycicle Rack</span>
                                    <span><b>$40</b>/Per Rental</span>
                                    </label>
                                    <label for="input-gps2">
                                    <input type="checkbox" id='input-gps2' class="input-check" value="GPS">
                                    <span>Music</span>
                                    <span><b>$50</b>/Per Rental</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 padd-lr0 xs-padd">
                                <div class="checkblock style-3">
                                    <h5 class="title">Protection</h5>
                                    <label for="input-waiv">
                                    <input type="checkbox" id='input-waiv' class="input-check" value="Collision Damage Waiver">
                                    <span>Collision Damage Waiver</span>
                                    <span><b>$500</b>/Per Rental</span>
                                    </label>
                                    <label for="input-protect">
                                    <input type="checkbox" id='input-protect' class="input-check" value="Theft Protection" checked>
                                    <span>Theft Protection</span>
                                    <span><b>$125</b>/Per Day</span>
                                    </label>
                                    <label for="input-contract">
                                    <input type="checkbox" id='input-contract' class="input-check" value="Rental Contract Fee">
                                    <span>Rental Contract Fee</span>
                                    <span><b>$10</b>/Per Rental</span>
                                    </label>
                                    <label for="input-protect2">
                                    <input type="checkbox" id='input-protect2' class="input-check" value="Theft Protection">
                                    <span>Personal First Aid Service</span>
                                    <span><b>$25</b>/Per Rental</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="total-cost clearfix">
                                    <div class="title">Total Cost</div>
                                    <div class="price">$255<sup>00</sup></div>
                                </div>
                            </div>
                        </div>
                        <div class="row marg-lg-b80 marg-sm-b0">
                            <div class="col-xs-12 marg-lg-t30 marg-lg-b70 t-center">
                                <a href="#" class="wheel-btn type-2">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="car-swiper-wrap">
            <!-- /////////////////////////////////// -->
            <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="1000" data-slides-per-view="responsive" data-add-slides="3" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- swiper slide -->
                        <div class="car-item-wrap">
                            <div class="title">2016 Marcedes-Benz SLK</div>
                            <div class="price"><span>$79<sup>00</sup></span>/Day</div>
                            <div class="img-wrap">
                                <img src="images/z-car-1.png" alt="img" class="img-responsive">
                            </div>
                            <ul class="metadata">
                                <li>2 seats</li>
                                <li>2 bags</li>
                                <li>150 mpg</li>
                                <li>airbags</li>
                                <li>manual/auto</li>
                                <li>ac</li>
                                <li>v8 engine</li>
                            </ul>
                            <a href="#" class="link">view details</a>
                        </div>
                    </div>
                    <!-- .swiper slide -->
                    <div class="swiper-slide">
                        <!-- swiper slide -->
                        <div class="car-item-wrap">
                            <div class="title">2016 Chevrolet Malibu</div>
                            <div class="price"><span>$81<sup>00</sup></span>/Day</div>
                            <div class="img-wrap">
                                <img src="images/z-car-2.png" alt="img" class="img-responsive">
                            </div>
                            <ul class="metadata">
                                <li>2 seats</li>
                                <li>2 bags</li>
                                <li>150 mpg</li>
                                <li>airbags</li>
                                <li>manual/auto</li>
                                <li>ac</li>
                                <li>v8 engine</li>
                            </ul>
                            <a href="#" class="link">view details</a>
                        </div>
                    </div>
                    <!-- .swiper slide -->
                    <div class="swiper-slide">
                        <!-- swiper slide -->
                        <div class="car-item-wrap">
                            <div class="title">Bugatti Veyron</div>
                            <div class="price"><span>$79<sup>00</sup></span>/Day</div>
                            <div class="img-wrap">
                                <img src="images/z-car-3.png" alt="img" class="img-responsive">
                            </div>
                            <ul class="metadata">
                                <li>2 seats</li>
                                <li>2 bags</li>
                                <li>150 mpg</li>
                                <li>airbags</li>
                                <li>manual/auto</li>
                                <li>ac</li>
                                <li>v8 engine</li>
                            </ul>
                            <a href="#" class="link">view details</a>
                        </div>
                    </div>
                    <!-- .swiper slide -->
                </div>
                <div class="pagination"></div>
            </div>
            <div class="swiper-outer-left"></div>
            <div class="swiper-outer-right"></div>
            <!-- /////////////////////////////// -->
        </div>
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

<!-- Mirrored from demos.jeweltheme.com/wheel/car-listing-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:12 GMT -->
</php>