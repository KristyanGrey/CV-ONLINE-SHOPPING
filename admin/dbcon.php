<?php
//Create connection and select DB
$db = new mysqli("localhost", "root", "", "cvdb");

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}