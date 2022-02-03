<?php
session_start();
// initializ shopping cart class
include 'cart.php';
$cart = new Cart;

$con = mysqli_connect("localhost","root","","cvdb");
    if (mysqli_connect_errno())
    {
        echo "MySQLi Connection was not established: " . mysqli_connect_error();
    }

$user = $_SESSION['username'];
$sel_user = "SELECT * FROM customers WHERE username='$user' ";
$result = $con->query($sel_user);

while($rs=$result->fetch_array()){
    $fname = $rs["fname"];
    $lname = $rs["lname"];
    $prov = $rs["province"];
    $cty = $rs["city"];
    $brgy = $rs["brgy"];
    $str = $rs["street"];
    $houseno = $rs["houseno"];
    $contact = $rs["phone"];
?>
    <!DOCTYPE html>
    <html lang="zxx">
    <!-- Head -->

    <head>

        <title>CV Online Shopping</title>

        <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="CV online Shopping">
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>
        <!-- //Meta-Tags -->

        <!-- Custom-StyleSheet-Links -->
        <!-- Bootstrap-CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <!-- Index-Page-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <!-- Header-Slider-CSS -->
        <link rel="stylesheet" href="css/fluid_dg.css" id="fluid_dg-css" type="text/css" media="all">
        <!-- //Custom-StyleSheet-Links -->

        <!-- Font-Awesome-File-Links -->
        <!-- CSS -->
        <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
        <!-- TTF -->
        <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
        <!-- //Font-Awesome-File-Links -->

        <!-- Supportive-Modernizr-JavaScript -->
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Default-JavaScript -->
        <script src="js/jquery-2.2.3.js"></script>


        <link href="womens/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script src="womens/js/jquery.min.js"></script>
        <!-- //js -->
        <!-- countdown -->
        <link rel="stylesheet" href="womens/css/jquery.countdown.css" />
        <!-- //countdown -->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="womens/js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smooth-scrolling -->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });

        </script>
        <!-- //end-smooth-scrolling -->

    </head>
    <!-- //Head -->



    <!-- Body -->

    <body>


        <!-- Navigation -->
        <nav class="navbar navbar-default w3ls navbar-fixed-top">
            <div class="container">
                <div class="navbar-header wthree nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <a class="navbar-brand agileinfo" href="index2.php"><span>CV</span> ONLINE SHOPPING</a>
                    <ul class="w3header-cart">
                        <li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-notify my-cart-badge"></span></span>
                        </li>
                    </ul>
                </div>
                <div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="mens2.php"><span> MEN </span></a></li>
                        <li><a href="womens2.php"><span> WOMEN </span></a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="logout.php"><i class="fa-sign-in"></i>SIGN OUT</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <br>
        <br>
        <br>
        <div class="header">
            <div class="container">
                <h2>C H E C K O U T</h2>
            </div>
        </div>
        
        <br>
        <br>
        <br>
        <br>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div style="background-color: #CECDCD;padding:2%;"><center><h3><b> SHIPPING INFORMATION </b></h3></center></div>
                    <br>
                    <br>
                    <div style="background-color: #f6ffee;border-style: solid;border-width: 1px;border-color: #7abd54;">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <center><h4><b><?php echo $fname;
                            echo " ";
                            echo $lname;?></b></h4></center>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <center><a class="agile-icon"><p><i class="fa fa-location-arrow"></i></a><?php echo " ";
                            echo $prov;
                            echo ", ";
                            echo $cty;
                            echo ", ";
                            echo $brgy;
                            echo ", ";
                            echo $houseno;
                            echo " ";
                            echo $str;
                            echo ". ";?></p></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 2%;">
                            <center>
                                <a class="agile-icon">
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        <?php echo " ";
                                        echo $contact;?>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div style="margin-top: 2%;">
                            <center>
                                <div style="background-color: #79be54; float:right;padding: 2%;">
                                    <p>
                                    <a class="agile-icon">
                                    <i class="fa fa-pencil"> Edit</i>
                                    </a>
                                    </p>
                                </div>
                            </center>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <form>
                        <div style="background-color: #CECDCD;padding:2%;">
                            <center>
                                <h3><b> REVIEW AND CONFIRM YOUR ORDER </b></h3>
                            </center>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <center><h4><b>Product ID</b></h4><center>
                            </div>
                            <div class="col-md-3">
                                <center><h4><b>Product Name</b></h4></center>
                            </div>
                            <div class="col-md-2">
                                <center><h4><b>Price</b></h4></center>
                            </div>
                            <div class="col-md-2">
                                <center><h4><b>Qty</b></h4><center>
                            </div>
                            <div class="col-md-2">
                                <center><h4><b>Subtotal</b></h4><center>
                            </div>
                        </div>
                        <br>
                        <?php
                        $count = 1;
                        if($cart->total_items() > 0){
                            //get cart items from session
                            $cartItems = $cart->contents();
                            $sum = 0;
                            foreach($cartItems as $item){
                                $sum+= $item["subtotal"];
                        ?>
                        <div class="row">
                            <div class="col-md-1">
                                <center><?php echo $count; ?></center>
                            </div>
                            <?php
                                $count++;
                            ?>
                            <div class="col-md-2">
                                <center><h4><?php echo $item["id"]; ?></h4></center>
                            </div>
                            <div class="col-md-3">
                                <center><h4><?php echo $item["name"]; ?></h4></center>
                            </div>
                            <div class="col-md-2">
                                <center><h4>₱<?php echo $item["price"]; ?></h4></center>
                            </div>
                            <div class="col-md-2">
                                <center><h4><?php echo $item["qty"]; ?></h4></center>
                            </div>
                            <div class="col-md-2">
                                <center><h4>₱<?php echo $item["subtotal"]; ?></h4></center>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <center>
                                    <h4><b><?php echo "Total"; ?></b></h4>
                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <center>
                                    <h4>₱<?php echo $sum; ?></h4>
                                </center>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <center>
                                    <a href="submit_items.php">SUBMIT ORDER</a>
                                </center>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        
        
        <br>
        <br>
        <br>


        
        <!-- Footer -->
        <div class="agileinfofooter" style="background-color: #CECDCD;">
            <div class="agileinfofooter-grids">

                <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid1">
                    <ul>
                        <li><a href="mens2.php">MEN'S</a></li>
                        <li><a href="#">MEN'S ACCESSORIES</a></li>
                        <li><a href="womens2.php">WOMEN'S</a></li>
                        <li><a href="#">WOMEN'S ACCESSORIES</a></li>
                    </ul>
                </div>

                <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid2">
                    <ul>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>

                <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid3">
                    <address>
					<ul>
						<li>#19 St.</li>
						<li>San Agustin</li>
						<li>Castillejos, Zambales</li>
						<li>+1 (234) 567-8910</li>
						<li><a class="mail" href="mailto:mail@example.com">cv@online.shopping</a></li>
					</ul>
				</address>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <!-- //Footer -->



        <!-- Copyright -->
        <div class="w3lscopyrightaits">
            <div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
                <p>© 2017 CV Online Shopping. All Rights Reserved</p>
            </div>
            <div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
                <div class="agilesocialwthree">
                    <ul class="social-icons">
                        <li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //Copyright -->



        <!-- Custom-JavaScript-File-Links -->

        <!-- Default-JavaScript -->
        <script src="js/jquery-2.2.3.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <!-- Custom-JavaScript-File-Links -->

        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            w3l.render();

            w3l.cart.on('w3agile_checkout', function(evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });

        </script>
        <!-- //cart-js -->
        <!-- Shopping-Cart-JavaScript -->

        <!-- Header-Slider-JavaScript-Files -->
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/fluid_dg.min.js'></script>
        <script>
            jQuery(document).ready(function() {
                jQuery(function() {
                    jQuery('#fluid_dg_wrap_4').fluid_dg({
                        height: 'auto',
                        loader: 'bar',
                        pagination: false,
                        thumbnails: true,
                        hover: false,
                        opacityOnGrid: false,
                        imagePath: '',
                        time: 4000,
                        transPeriod: 2000,
                    });
                });
            })

        </script>
        <!-- //Header-Slider-JavaScript-Files -->

        <!-- Dropdown-Menu-JavaScript -->
        <script>
            $(document).ready(function() {
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });

        </script>
        <!-- //Dropdown-Menu-JavaScript -->

        <!-- Pricing-Popup-Box-JavaScript -->
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });

        </script>
        <!-- //Pricing-Popup-Box-JavaScript -->

        <!-- Model-Slider-JavaScript-Files -->
        <script src="js/jquery.film_roll.js"></script>
        <script>
            (function() {
                jQuery(function() {
                    this.film_rolls || (this.film_rolls = []);
                    this.film_rolls['film_roll_1'] = new FilmRoll({
                        container: '#film_roll_1',
                        height: 560
                    });
                    return true;
                });
            }).call(this);

        </script>
        <!-- //Model-Slider-JavaScript-Files -->

        <!-- //Custom-JavaScript-File-Links -->



        <!-- Bootstrap-JavaScript -->
        <script src="js/bootstrap.js"></script>

    </body>
    <!-- //Body -->



    </html>
    <?php
}
?>