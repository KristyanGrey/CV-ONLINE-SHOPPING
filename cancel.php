<?php
session_start();

$order_id = $_SESSION['order_id'];

$con = mysqli_connect("localhost","root","","cvdb");

while (mysqli_connect_errno())
{
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

$sql = "UPDATE orders SET status='cancelled' WHERE order_id='$order_id' ";
mysqli_query($con, $sql);

$sql2 = "DELETE FROM order_items WHERE order_id='$order_id' ";
mysqli_query($con, $sql2);

mysqli_close($con);
header("Location: index.php")
?>