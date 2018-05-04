<?php
session_start();
unset($_SESSION['tutorlogin']);
unset($_SESSION['tutorid']);
 
header("location: main.php");
?>