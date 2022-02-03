<?php
session_start();
// initializ shopping cart class
$con = mysqli_connect("localhost","root","","cvdb");
if (mysqli_connect_errno())
{
	echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

$getkeme = $_GET["orderid"];
$sql = "SELECT * FROM order_items WHERE order_id='$getkeme' ";
$sqlres = $con->query($sql);
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

	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->

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
					<li><a href="myorders.php">MY ORDERS</a></li>
					<li><a href="logout.php"><i class="fa-sign-in"></i>SIGN OUT</a></li>
				</ul>
			</div>

		</div>
	</nav>
	<br>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="box box-primary">
				<div class="box-header with-border" style="background-color: #CECDCD;">
					<h4 class="box-title" style="color:blue;padding-top: 1%;"><b> ORDER ID: <?php echo $getkeme?></b> <joyjyo style="color:black;">[Items List]</joyjyo></h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<?php
						$idincr = 0;
						while($res=$sqlres->fetch_array()){
							$product_id = $res["product_id"];

							$idincr++;
							$sel_user = "SELECT * FROM products WHERE id='$product_id' ";
							$result = $con->query($sel_user);
							while($rs=$result->fetch_array()){
								$productID = $rs["id"];
								$name = $rs["name"];
								$description = $rs["description"];
								$image1 = $rs["image1"];
								$price = $rs["price"];
								$supplier = $rs["supplier"];

								?>
								<div class="col-md-2" style="padding: 3% 0;text-align: center;"><b><?php echo $idincr; ?></b></div>
								<div class="col-md-8">
									<ul class="products-list product-list-in-box">
										<li class="item">
											<div class="product-img">
												<img src="<?php echo $image1; ?>" alt="Product Image">
											</div>
											<div class="product-info">
												<a class="product-title"><?php echo $name; ?>
													<span class="label label-warning pull-right">&#8369;<?php echo $price; ?></span></a>
													<span class="product-description">
														<b><i>Description:</i></b> <?php echo $description; ?>
													</span>
													<span class="product-description">
														<b><i>Supplier:</i></b> <?php echo $supplier; ?>
													</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="col-md-2"></div>
								</div>
								<?php
							}
						}
						?>
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="myorders.php" class="uppercase">Go Back</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-1"></div>
		</div>
	</body>
	</html>