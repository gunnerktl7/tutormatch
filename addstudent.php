  
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

$regid = $_GET['id'];

$query="UPDATE `registration` SET `status`='registered' WHERE `registrationid`='$regid'";
$result=mysql_query($query);



 
if($result==true) {   
    echo "Student has been registered<b><br>";
    echo "Please, go to <a href='tutormyoffers.php'>My offers</a>";
  }
else {
  echo "Error! ----> ". mysql_error();
  }
$res=mysql_query("SELECT * FROM `registration`,`offers` WHERE `offers`.`offerid`=`registration`.`offerid` AND `registration`.`registrationid`='$regid'");
    if($res == true) { 
    
      $user_data=mysql_fetch_array($res);
      $tuteeid=$user_data['tuteeid'];
      $subject=$user_data['subjectid'];
      $sql="UPDATE `request` SET `status`='closed' WHERE `tutteeid`='$tuteeid' AND `subjectid`='$subject'";
      $res1=mysql_query($sql);
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