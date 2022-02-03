<?php
 session_start();
 if (!isset($_SESSION['username'])) {
  session_unset();
  session_destroy();
  header("Location: index.html");
 } else if(isset($_SESSION['username'])!="") {
  session_unset();
  session_destroy();
  header("Location: index.html");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['username']);
  unset($_SESSION['order_id']);
  session_unset();
  session_destroy();
  header("Location: index.html");
  exit;
 }