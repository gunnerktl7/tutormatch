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

include("bd.php");

if (isset($_POST['lesson']) && isset($_POST['type'])){

$lesson=$_POST['lesson'];
$type=$_POST['type'];

if($lesson==""){
  die("Fill all. <a href='addsubject.php'>Go Back</a> <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html><br>");
 
}
$query="INSERT INTO `subjects`(`subjectname`,`type`) VALUES ('$lesson','$type')";
$result=mysql_query($query);

if($result==true){
  echo "You added subjects<br>";
  echo "Please, return <a href='main.php'>main page</a> <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html><br>";
}
else {
  die(mysql_error());
}
}
else{
  die("$lesson");
}

?>
