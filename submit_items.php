<?php
session_start();

include 'cart.php';
$cart = new Cart;

$user = $_SESSION['username'];

$con = mysqli_connect("localhost","root","","cvdb");

while (mysqli_connect_errno())
{
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

$sel_user = "SELECT * FROM customers WHERE username='$user' ";
$result = $con->query($sel_user);


while($rs=$result->fetch_array()){
	$id = $rs["id"];

	if($cart->total_items() > 0){
		//get cart items from session

		$sql3 = "SELECT order_id FROM orders ORDER BY id DESC LIMIT 1";
		$result1 = $con->query($sql3);

		while($rs1=$result1->fetch_array()){
			$order_id = $rs1["order_id"];
			
			date_default_timezone_set('Asia/Manila');
			$date = date('Y-m-d H:i:s');
			// $datee = "joy";

			$cartItems = $cart->contents();
			$sum = 0;
			$order_id++;

			foreach($cartItems as $item){
	            $sum+= $item["subtotal"];
	            
	            $product_id = $item["id"];
	            $qty = $item["qty"];

	            $sql2 = "INSERT INTO order_items (order_id, product_id, qty, status) VALUES ('$order_id', '$product_id', $qty, 'pending')";
	            if (mysqli_query($con, $sql2)) {
	            	echo "Success";
	            }

	            $sql3 = "SELECT * FROM products where id = '$product_id'";
	            $result = $con->query($sql3);
	            while($rs=$result->fetch_array()){
	            	$a = $rs["analytics"];
	            	$b = $rs["stock"];
	            	$a++;
	            	$b--;
	            	$sql4 = "UPDATE products SET analytics = $a, stock= $b WHERE id='$product_id'";
	            	if(mysqli_query($con, $sql4)){
	            		echo "Successful updating products";
	            	}
	        	}
			}

			$sql = "INSERT INTO orders (customer_id, total_price, status, order_id, created) VALUES ($id, $sum, 'pending', '$order_id', '$date')";
			if (mysqli_query($con, $sql)) {
				echo '<script language="javascript">';
				echo 'alert("Successful!")';
				echo '</script>';
				$_SESSION['order_id'] = $order_id;
				$cart->destroy();
				header("Location: order_confirmed.php");
			}
		}
	}
}
?>