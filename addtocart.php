<?php
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

	if(!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	if(in_array($id, $_SESSION['cart'])) {
		header('Location: cart.php?action=exist&id=' . $id . '');
	} else {
		array_push($_SESSION['cart'], $id);
		header('Location: cart.php?action=add&id=' . $id . '');
	}
?>