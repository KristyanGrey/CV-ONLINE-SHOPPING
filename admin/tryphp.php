<?php
// error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvdb";
date_default_timezone_set('Asia/Manila');
$date = date('m');
// echo $date;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

// $sql = "SELECT * FROM products WHERE analytics=(SELECT MAX(analytics) FROM products) DESC LIMIT 5";
$query = sprintf("SELECT analytics FROM products WHERE analytics = (SELECT MAX(analytics) FROM products WHERE MONTH(modified) = $date) LIMIT 1");
$result = $conn->query($query);

while($row = $result->fetch_assoc()) {
    echo $row["analytics"];
    // echo $row["name"];
}
?>