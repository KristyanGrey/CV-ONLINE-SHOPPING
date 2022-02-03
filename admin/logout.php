<?php
 session_start();
 if (!isset($_SESSION['email'])) {
  session_unset();
  session_destroy();
  header("Location: index.php");
 } else if(isset($_SESSION['email'])!="") {
  session_unset();
  session_destroy();
  header("Location: index.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['email']);
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
 }