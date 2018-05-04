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
$user=$_SESSION['tutorid'];


$sql = "SELECT tutee.tuteename, tutee.tuteeemail, tutee.tuteephone, registration.registrationid, registration.status, subjects.subjectname, offers.tutorid FROM tutee, registration, subjects, offers WHERE registration.tuteeid=tutee.tuteeid AND registration.offerid=offers.offerid AND subjects.subjectid=offers.subjectid AND offers.tutorid='$user' AND registration.status='unknown'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border><tr><th>Tutee name</th><th>Tutee email</th><th>Tutee Phone</th><th>Offer status</th><th>Subject name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
       
         $registration = $row['registrationid'];
         echo "<tr><td>". $row['tuteename']. "</td><td>". $row['tuteeemail']. "</td><td>" . $row['tuteephone'] . "</td><td>" . $row['status'] ."</td><td>".$row['subjectname']."</center></td><td><a href='addstudent.php?id=$registration'>Add</a></td><td><a href='declinestudent.php?id=$registration'>Decline</a></td></tr>";
     }
          echo "</table><br><a href='mypagetutor.php'>My Page</a>";

} else {
     echo "<br><br><h2><center>No Students</center></h2>";
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
