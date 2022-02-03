<?php
session_start();
require_once("config/dbcontroller.php");
$db_handle = new DBController();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvdb";

$datatable = "products"; // MySQL table name
$results_per_page = 6; // number of results per page

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>

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
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link href="womens/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="womens/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="womens/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="womens/js/jquery.min.js"></script>
    <!-- //js -->
    <!-- countdown -->
    <link rel="stylesheet" href="womens/css/jquery.countdown.css" />
    <!-- //countdown -->
    <!-- cart -->
    <script src="womens/js/simpleCart.min.js"></script>
    <!-- cart -->
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
</head>

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
              <a class="navbar-brand agileinfo" href="index.html"><span>CV</span> ONLINE SHOPPING</a>
              <ul class="w3header-cart">
                <li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-notify my-cart-badge"></span></span>
                </li>
            </ul>
        </div>
        <div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="mens.php"><span> MEN </span></a></li>
                <li><a href="womens.php"><span> WOMEN </span></a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="login.php"><i class="fa-sign-in"></i>SIGN IN</a></li>
            </ul>
        </div>

    </div>
</nav>
<!-- //Navigation -->

<br>
<br>

<div class="header">
    <div class="container">
        <div class="w3l_logo">
            <h1><a href="index.html">Men's Fashion<span>For Fashion Lovers</span></a></h1>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12 wthree_banner_bottom_right">
            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#" id="home-tab" role="tab">Shirts</a></li>
                    <li role="presentation"><a href="mens_tuxedo.php" role="tab" id="casual-tab">Tuxedo</a></li>
                    <li role="presentation"><a href="mens_watch.php" role="tab" id="watches-tab">Watches</a></li>
                    <li role="presentation"><a href="mens_sandal.php" role="tab" id="sandals-tab">Sandals</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">

                    <!-- T S H I R T  -->
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php
                            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            $start_from = ($page-1) * $results_per_page;
                            $product_array = $db_handle->runQuery("SELECT * FROM ".$datatable." WHERE type='menshirt' ORDER BY id DESC LIMIT $start_from, ".$results_per_page);
                            if (!empty($product_array)) { 
                                foreach($product_array as $key=>$value){
                                    ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <img src="<?php echo $product_array[$key]["image1"]; ?>" alt=" " class="img-responsive" />
                                            <img src="<?php echo $product_array[$key]["image2"]; ?>" alt=" " class="img-responsive" />
                                            <img src="<?php echo $product_array[$key]["image3"]; ?>" alt=" " class="img-responsive" />
                                            <img src="<?php echo $product_array[$key]["image4"]; ?>" alt=" " class="img-responsive" />
                                            <div class="w3_hs_bottom">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h5>
                                            <?php echo $product_array[$key]["name"]; ?>
                                        </h5>
                                        <p>
                                            <?php echo $product_array[$key]["description"]; ?>
                                        </p>
                                        <p>
                                            Stocks: <?php echo $product_array[$key]["stock"]; ?>
                                        </p>
                                        <div class="simpleCart_shelfItem">
                                            <p><span>₱10000</span> <i class="item_price"><?php echo "₱".$product_array[$key]["price"]; ?></i></p>
                                            <p><a class="item_add" onclick="myFunction()">Add to cart</a></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class="clearfix"> </div>
                        </div>
                        <?php 
                        $sql = "SELECT COUNT(id) AS total FROM ".$datatable." WHERE type='menshirt' ORDER BY id DESC";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_pages = ceil($row["total"] / $results_per_page);
                        ?>

                        <div class="row">
                            <br>
                            <br>
                            <center>
                                <?php
                                for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                                    echo "<button class='btn'><a href='mens_shirt.php?page=".$i."'";
                                    if ($i==$page)  echo " class='curPage'";
                                    echo ">".$i."</a></button> "; 
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<!-- banner-bottom -->

<!-- banner-bottom1 -->
<div class="banner-bottom1">
    <div class="agileinfo_banner_bottom1_grids">
        <div class="col-md-7 agileinfo_banner_bottom1_grid_left">
            <a href="products.html">Shop Now</a>
        </div>
        <div class="col-md-5 agileinfo_banner_bottom1_grid_right">
            <h4>hot deal</h4>
            <div class="timer_wrap">
                <div id="counter"> </div>
            </div>
            <script src="js/jquery.countdown.js"></script>
            <script src="js/script.js"></script>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- banner-bottom1 -->

<!-- new-products -->
<div class="new-products">
    <div class="container">
        <h3>New Products</h3>
        <div class="agileinfo_new_products_grids">
            <div class="col-md-3 agileinfo_new_products_grid">
                <?php
                $product_array = $db_handle->runQuery("SELECT * FROM products WHERE type='menshirt' ORDER BY id DESC LIMIT 1");
                if (!empty($product_array)) { 
                    foreach($product_array as $key=>$value){
                        ?>
                        <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                            <div class="hs-wrapper hs-wrapper1">
                                <img src="<?php echo $product_array[$key]["image1"]; ?>" alt=" " class="img-responsive" />
                                <img src="<?php echo $product_array[$key]["image2"]; ?>" alt=" " class="img-responsive" />
                                <img src="<?php echo $product_array[$key]["image3"]; ?>" alt=" " class="img-responsive" />
                                <img src="<?php echo $product_array[$key]["image4"]; ?>" alt=" " class="img-responsive" />
                                <div class="w3_hs_bottom">
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h5>
                                <?php echo $product_array[$key]["name"]; ?>
                            </h5>
                            <p>
                                <?php echo $product_array[$key]["description"]; ?>
                            </p>
                            <p>
                                Stocks: <?php echo $product_array[$key]["stock"]; ?>
                            </p>
                            <div class="simpleCart_shelfItem">
                                <p><span>₱10000</span> <i class="item_price"><?php echo "₱".$product_array[$key]["price"]; ?></i></p>
                                <p><a class="item_add" onclick="myFunction()">Add to cart</a></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM products WHERE type='menwatch' ORDER BY id DESC LIMIT 1");
                    if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                                <div class="hs-wrapper hs-wrapper1">
                                    <img src="<?php echo $product_array[$key]["image1"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image2"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image3"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image4"]; ?>" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>
                                    <?php echo $product_array[$key]["name"]; ?>
                                </h5>
                                <p>
                                    <?php echo $product_array[$key]["description"]; ?>
                                </p>
                                <p>
                                    Stocks: <?php echo $product_array[$key]["stock"]; ?>
                                </p>
                                <div class="simpleCart_shelfItem">
                                    <p><span>₱10000</span> <i class="item_price"><?php echo "₱".$product_array[$key]["price"]; ?></i></p>
                                    <p><a class="item_add" onclick="myFunction()">Add to cart</a></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM products WHERE type='mensandals' ORDER BY id DESC LIMIT 1");
                    if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                                <div class="hs-wrapper hs-wrapper1">
                                    <img src="<?php echo $product_array[$key]["image1"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image2"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image3"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image4"]; ?>" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>
                                    <?php echo $product_array[$key]["name"]; ?>
                                </h5>
                                <p>
                                    <?php echo $product_array[$key]["description"]; ?>
                                </p>
                                <p>
                                    Stocks: <?php echo $product_array[$key]["stock"]; ?>
                                </p>
                                <div class="simpleCart_shelfItem">
                                    <p><span>₱10000</span> <i class="item_price"><?php echo "₱".$product_array[$key]["price"]; ?></i></p>
                                    <p><a class="item_add" onclick="myFunction()">Add to cart</a></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM products WHERE type='mentuxedo' ORDER BY id DESC LIMIT 1");
                    if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                                <div class="hs-wrapper hs-wrapper1">
                                    <img src="<?php echo $product_array[$key]["image1"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image2"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image3"]; ?>" alt=" " class="img-responsive" />
                                    <img src="<?php echo $product_array[$key]["image4"]; ?>" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>
                                    <?php echo $product_array[$key]["name"]; ?>
                                </h5>
                                <p>
                                    <?php echo $product_array[$key]["description"]; ?>
                                </p>
                                <p>
                                    Stocks: <?php echo $product_array[$key]["stock"]; ?>
                                </p>
                                <div class="simpleCart_shelfItem">
                                    <p><span>₱10000</span> <i class="item_price"><?php echo "₱".$product_array[$key]["price"]; ?></i></p>
                                    <p><a class="item_add" onclick="myFunction()">Add to cart</a></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- new-products -->



<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Top Brands</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                <li>
                    <img src="resources/brands/4.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="resources/brands/5.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="resources/brands/6.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="resources/brands/7.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="resources/brands/46.jpg" alt=" " class="img-responsive" />
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });

        </script>
        <script type="text/javascript" src="womens/js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- top-brands -->


<!-- Footer -->
<div class="agileinfofooter">
    <div class="agileinfofooter-grids">

        <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid1">
            <ul>
                <li><a href="mens.php">MEN'S</a></li>
                <li><a href="#">MEN'S ACCESSORIES</a></li>
                <li><a href="womens.php">WOMEN'S</a></li>
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
<!-- Footer -->



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
<!-- Copyright -->
</body>
<script>
    function myFunction() {
        if (confirm("Please login first!") == true) {
            window.location.href = "login.php";
        }
    }
</script>

</html>
