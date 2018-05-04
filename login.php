<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>TutorMatch</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
</head>
<body>
  <body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="main.php">TutorMatch</a></h1>
				</div>
				</div>
			<div id="page">
				<div id="sidebar">
					<div class="box">
						<h3>Welcome</h3>
						<ul class="list">
							<li class="first"><a href="index.php">For Tutors</a></li>
							<li class="last"><a href="tuteeindex.php">For Tutees</a></li>
						</ul>
					</div>
					</div>
				<div id="content">
					<div class="box">
					
<?php

if(isset($_POST['login']) && isset($_POST['password']))
{

    include("bd.php");
 
    $login=htmlspecialchars(trim($_POST['login']));
    $password=htmlspecialchars(trim($_POST['password']));
 
    $res=mysql_query("SELECT * FROM `users` WHERE `tutorlogin`='$login' ");
    if($res == FALSE) { 
      die(mysql_error()); // TODO: better error handling
    }
    
    $data=mysql_fetch_array($res);
 
    if(empty($data['tutorlogin']))
    {
        die("Your password or login is incorrect <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
    }
    if($password!=$data['tutorpassword'])
    {
        die("Your password or login is incorrect <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
    }
    session_start();
 
    $_SESSION['tutorlogin']=$data['tutorlogin'];
    $_SESSION['tutorid']=$data['tutorid'];

    header("location:index.php");
}
 
?>
