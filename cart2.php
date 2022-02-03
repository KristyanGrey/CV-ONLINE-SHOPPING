<?php
session_start();
require_once 'config/dbconfig.php';

$id = isset($_GET['id']) ? $_GET['id'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

if(($action == 'remove') && (count($_SESSION['cart']) != 0)) {
	$_SESSION['cart'] = array_diff($_SESSION['cart'], array($id));
	header('Location: cart.php');
}

if($action == 'empty') {
	session_destroy();
	header('Location: cart.php');
}
?>

<html>
	<head>
		<title>Product List</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<body>
		<h2>View Cart</h2>
		<?php
			echo '<h3><a href="womens.php">Continue Shopping</a></h3>';
			echo '<table class="table">';

			if(isset($_SESSION['cart']) && (count($_SESSION['cart']) != 0)) {

				foreach($_SESSION['cart'] as $id) {
					echo '<tr>';
					echo '<td>' . getName($dbconnect, $id) . '</td>';
					echo '<td><a href="cart.php?action=remove&id=' . $id . '">Remove</a></td>';
					echo '</tr>';
				}
				echo '</table>';
				echo '<h3><a href="cart.php?action=empty">Empty Cart</a></h3>';
			}
			
			if(!isset($_SESSION['cart']) || (count($_SESSION['cart']) == 0)) {
				echo '<h4>';
				echo "Your cart is empty.";
				echo '</h4>';
			}
			
			
		?>
	</body>
</html>
	
<?php
	function getName($db, $pid) {
		$query = "SELECT name, price FROM products WHERE id = '$pid'";
		$result = $db->query($query);
		list($name, $price) = $result->fetch_array();
		
		return $name;
	}
?>
