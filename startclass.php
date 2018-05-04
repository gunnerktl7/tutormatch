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
					<h1><a href="mypagetutor.php">TutorMatch</a></h1>
				</div>
				</div>
			<div id="page">
				<div id="sidebar">
					<div class="box">
						<h3>Welcome</h3>
						<ul class="list">
							<li class="first"><a href='offer.php'>Add offers</a></li>
              <li><a href='tutormyoffers.php'>My offers</a></li>
              <li><a href='myoffersquery.php'>Requests to join my offer</a></li>
              <li class="last"><a href='exit.php'>Logout</a></li>
            </ul>
					</div>
					</div>
				<div id="content">
					<div class="box">

<?php

include("bd.php");

$offerid = $_GET['offerid'];

$query="UPDATE `offers` SET `offerstatus`='InProgress' WHERE `offerid`='$offerid'";
$result=mysql_query($query);

$sql="UPDATE `registration` SET `status`='declined' WHERE `offerid`='$offerid' AND `status`='unknown'";
$res=mysql_query($sql);
 
if($result==true) {   
    echo "Offer changed from Open to InProgress<b><br>";
    echo "Please, go to <a href='tutormyoffers.php'>My offers</a>";
  }
else {
  echo "Error! ----> ". mysql_error();
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