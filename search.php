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

$lesson=$_POST['lesson'];
$lang=$_POST['lang'];

session_start();
$user=$_SESSION['tuteeid'];

$querysql="SELECT * FROM subjects WHERE subjectname='$lesson'";
$res=$conn->query($querysql);

if ($res->num_rows > 0) {
  
  $sql = "SELECT users.tutorid, users.tutorname, users.tutoremail, users.tutorphone, subjects.subjectname, offers.language, offers.offerfee, offers.offerid FROM users, offers, subjects WHERE users.tutorid=offers.tutorid AND subjects.subjectid=offers.subjectid AND subjects.subjectname='$lesson' AND offers.language='$lang' AND offers.offerstatus='Open' ORDER BY offerfee";
  $result = $conn->query($sql);
  
  while($row = $res->fetch_assoc()) {
    $subjectid=$row['subjectid'];
    }
  
  if ($result->num_rows > 0) {
      echo "<br><br><center><table border><tr><th>Name</th><th>Email</th><th>Phone</th><th>Lesson</th><th>Language</th><th>Fee per hour</th></tr>";
       // output data of each row
       while($row = $result->fetch_assoc()) {
         
           $offerid = $row['offerid'];
           $tutorid=$row['tutorid'];
           echo "<tr><td><a href='tutorinfo.php?id=$tutorid'>".$row['tutorname']."</a></td><td>". $row['tutoremail']. "</td><td>" . $row['tutorphone'] . "</td><td>" . $row['subjectname'] . "</td><td>". $row['language'] . "</td><td>". $row['offerfee']."</td><td></center><a href ='addquery.php?offerid=$offerid'>Add</a></td><tr>";
       }
      echo "</table><br><a href='mypagetutee.php'>My page</a>";

  } else {
     echo "<br><br><h2><center>No tutor available. You may <a href='addrequest.php?id=$subjectid'>add</a> request</center></h2>";
}
}
else {
  echo "<b>Such subject is not presented, please <a href='addsubject.php'>add</a> subjects first</b>";
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

