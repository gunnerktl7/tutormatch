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
					<h1><a href="mypagetutee.php">TutorMatch</a></h1>
				</div>
				</div>
			<div id="page">
				<div id="sidebar">
					<div class="box">
						<h3>Welcome</h3>
						<ul class="list">
							<li class="first"><a href='query.php'>Find offers</a></li>
							<li><a href='myclasses.php'>My classes</a></li>
							<li><a href='results.php'>Results</a></li>
              <li class="last"><a href='tuteeexit.php'>Logout</a></li>
            </ul>
					</div>
					</div>
				<div id="content">
					<div class="box">

<?php

include("bd.php");

session_start();
$user=$_SESSION['tuteeid'];

$res=mysql_query("SELECT * FROM `tutee` WHERE `tuteeid`='$user'");

if($res == FALSE) { 
  die("Please, log in"); // TODO: better error handling
}

$user_data=mysql_fetch_array($res);
$tuteeid=$user_data['tuteeid'];

$offerid = $_GET['offerid'];;

$status="unknown";

$query="INSERT INTO `registration` (`tuteeid`,`offerid`,`status`) VALUES('$tuteeid','$offerid','$status')";
$result=mysql_query($query);
 
if($result==true){   
  echo "You send request to join this offer<br>";
  echo "Please, go to the <a href='mypagetutee.php'>My page</a><br>";
}else {
  die(mysql_error());

}
?>


</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
		</div>
		<div id="footer">
			&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href="http://kaist.ac.kr/">KAIST</a>
		</div>
	</body>
</html>

