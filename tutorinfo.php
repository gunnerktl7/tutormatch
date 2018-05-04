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

$tutorid = $_GET['id'];
$sql = "SELECT users.tutorname, users.tutoremail, users.tutorphone, users.tutoryear FROM users WHERE users.tutorid=$tutorid";
$result=mysql_query($sql);
if($result == FALSE) { 
      die(mysql_error()); // TODO: better error handling
    }
$user_data=mysql_fetch_array($result);
echo "Tutor name: <b>". $user_data['tutorname']."</b><br>";
echo "E-mail: <b>". $user_data['tutoremail']."</b><br>";
echo "Phone: <b>". $user_data['tutorphone']."</b><br>";
echo "Current year: <b>". $user_data['tutoryear']."</b><br>";
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutormatch";

$tutorid = $_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


  
  $sql = "SELECT users.tutorname, users.tutoremail, users.tutorphone, users.tutoryear, evaluation.evalext, evaluation.evalpoint, subjects.subjectname FROM offers, users, registration, evaluation, subjects WHERE subjects.subjectid=offers.subjectid AND evaluation.registrationid=registration.registrationid AND users.tutorid=offers.tutorid AND registration.offerid=offers.offerid AND users.tutorid=$tutorid";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
       // output data of each row
       echo "evaluations";
       while($row = $result->fetch_assoc()) {
         
           echo "<table border><tr><td>Points out of ten: <b>".$row['evalpoint']."</b></td><td>".$row['subjectname']."</td></tr><td colspan='2'>". $row['evalext']."</td></tr></table><br>";
       }
  }

$conn->close();
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

