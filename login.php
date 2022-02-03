<?php
    session_start();
    $con = mysqli_connect("localhost","root","","cvdb");
    if (mysqli_connect_errno())
    {
        echo "MySQLi Connection was not established: " . mysqli_connect_error();
    }

    // checking the user
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con,$_POST['username']);
        $pass = mysqli_real_escape_string($con,$_POST['password']);
        $sel_user = "select * from customers where username='$email' AND password='$pass'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);

        if($check_user>0){
            $_SESSION['username']=$email;
            echo "<script>window.open('womens2.php','_self')</script>";
            echo "<script>alert('Logged in successfully!')</script>";
        }

        else{
            echo "<script>alert('Email or password is not correct, try again!')</script>";
        }
    }

    if(isset($_SESSION['username'])){
    header("location: womens2.php");
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
    <!-- //Meta-Tags -->

    <!-- Custom-StyleSheet-Links -->
    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/login_style.css" type="text/css" media="all">
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
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>

<body>
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
            </div>
            <div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="mens.php"><span> MEN </span></a></li>
                    <li><a href="womens.php"><span> WOMEN </span></a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li class="active"><a href="login.php"><i class="fa-sign-in"></i>SIGN IN</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="main">
        <div class="user">
<!--            <img src="resources/user.png" alt="">-->
        </div>
        <div class="login">
            <div class="inset">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div>
                        <span><label>Username</label></span>
                        <span><input type="text" class="textbox" id="active" name="username"></span>
                    </div>
                    <div>
                        <span><label>Password</label></span>
                        <span><input type="password" class="password" name="password"></span>
                    </div>
                    <div class="sign">
                        <div class="submit">
                            <input type="submit" value="LOGIN" name="login">
                        </div>
                        <span class="forget-pass">
							<a href="#">Forgot Password?</a>
						</span>
                        <div class="clear"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <!-- Custom-JavaScript-File-Links -->

    <!-- Default-JavaScript -->
    <script src="js/jquery-2.2.3.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- Custom-JavaScript-File-Links -->


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
    <!-- Bootstrap-JavaScript -->
    <script src="js/bootstrap.js"></script>
</body>

</html>
