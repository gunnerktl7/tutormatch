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

if (isset($_POST['lesson']) && isset($_POST['lang']) && isset($_POST['fee'])){

$lesson=$_POST['lesson'];
$lang=$_POST['lang'];
$fee=$_POST['fee'];


if($lesson=="" || $fee==""){
    die("Fill all.<br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>"); 
}
 
include("bd.php");

session_start();
$user=$_SESSION['tutorid'];

$res=mysql_query("SELECT * FROM `users` WHERE `tutorid`='$user'");

if($res == FALSE) { 
  die("<br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>"); // TODO: better error handling"); // TODO: better error handling
}

$user_data=mysql_fetch_array($res);
$tutorid=$user_data['tutorid'];

include("bd.php");


$res=mysql_query("SELECT * FROM `subjects` WHERE `subjectname`='$lesson'");

if(mysql_num_rows($res)==0) { 
  die("Such subject is not registered, please, <a href='addsubject.php'>add</a> subject first <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>"); // TODO: better error handling
}

$user_data=mysql_fetch_array($res);
$lessonid=$user_data['subjectid'];

$status="Open";

$query="INSERT INTO `offers` (`tutorid`,`subjectid`,`language`,`offerfee`,`offerstatus`) VALUES('$tutorid','$lessonid','$lang','$fee','$status')";
$result=mysql_query($query);

if($result==true){
  echo "You added offer<br>";
  echo "Please, return <a href='mypagetutor.php'>my page</a> <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html><br>";
}else {
  die(mysql_error());
}
}else{
  die("");
}
?>