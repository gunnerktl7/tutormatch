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

$sql = "SELECT subjects.subjectname, offers.language, offers.offerfee, offers.offerid, offers.offerstatus, offers.tutorid FROM offers, subjects WHERE subjects.subjectid=offers.subjectid AND offers.tutorid='$user' AND offers.offerstatus='Open' ORDER BY offers.offerid DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border><tr><th>Subject name</th><th>Language</th><th>Offer fee</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {

         $offerid = $row['offerid'];
         echo "<tr><td>". $row['subjectname']. "</td><td>". $row['language']. "</td><td>" . $row['offerfee'] . "</td><td></center><a href ='openstudents.php?offerid=$offerid'>Students</a></td><td><a href='startclass.php?offerid=$offerid'>Start Class</a></td><td><a href='closeoffer.php?offerid=$offerid'>Close offer</a></td></tr>";
     }
          echo "</table>";

} else {
     echo "<br><br><h2><center>No in progress offers</center></h2>";
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