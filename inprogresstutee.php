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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutormatch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

session_start();
$user=$_SESSION['tuteeid'];

$sql = "SELECT users.tutorname, users.tutoremail, users.tutorphone, subjects.subjectname, offers.language, offers.offerfee, registration.registrationid, registration.status, registration.tuteeid, offers.offerstatus FROM offers, subjects, users, registration WHERE subjects.subjectid=offers.subjectid AND users.tutorid=offers.tutorid AND registration.offerid=offers.offerid AND registration.tuteeid='$user' AND offers.offerstatus='InProgress' AND registration.status='registered' ORDER BY offers.offerid DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border><tr><th>Tutor name</th><th>E-mail</th><th>Phone</th><th>Subject</th><th>Offer fee</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
       
         $id = $row['registrationid'];
         echo "<tr><td>". $row['tutorname']. "</td><td>". $row['tutoremail']. "</td><td>" . $row['tutorphone'] . "</td><td>".$row['subjectname']."</td><td>" . $row['offerfee'] . "</td><td><a href='withdraw.php?id=$id'>withdraw</a></td><td><a href='evaluate.php?id=$id'>evaluate</a></td></tr>";
     }
         echo"</table><br><a href='myclasses.php'>My classes</a><br class='clearfix' /></div></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>";

} else {
     echo "<br><br><h2><center>No in progress offers</center> <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html></h2>";
}

$conn->close();
?>
?>
        
