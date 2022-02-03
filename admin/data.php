<?php
$conn = mysqli_connect("localhost","root","","cvdb");
date_default_timezone_set('Asia/Manila');
$date = date('m');
if(!$conn){
    die("Connection failed: " . $conn->error);
}

$query = sprintf("SELECT analytics FROM products");

$result = $conn->query($query);
$sum = 0;
$data = array();
foreach($result as $row){
    $sum+= $row["analytics"];
        // $data[] = $row;
}
$data[] = $sum;
$result->close();

$conn->close();

print json_encode($data);
?>
