<?php
session_start();
unset($_SESSION['tuteelogin']);
unset($_SESSION['tuteeid']);
 
header("location: main.php");
?>