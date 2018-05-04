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

$regid = $_GET['id'];
$sql = "SELECT users.tutorname, users.tutoremail, users.tutorphone, users.tutoryear, subjects.subjectname, offers.language, offers.offerfee, registration.registrationid, registration.status, registration.tuteeid, offers.offerstatus FROM offers, subjects, users, registration WHERE subjects.subjectid=offers.subjectid AND users.tutorid=offers.tutorid AND registration.offerid=offers.offerid AND registration.registrationid=$regid";
$result=mysql_query($sql);
if($result == FALSE) { 
      die(mysql_error()); // TODO: better error handling
    }
$user_data=mysql_fetch_array($result);
echo "Tutor name: <b>". $user_data['tutorname']."</b><br>";
echo "E-mail: <b>". $user_data['tutoremail']."</b><br>";
echo "Phone: <b>". $user_data['tutorphone']."</b><br>";
echo "Current year: <b>". $user_data['tutoryear']."</b><br>";
echo "Subject name: <b>". $user_data['subjectname']."</b><br>";
echo "Offer fee: <b>". $user_data['offerfee']."</b><br>";



echo "<form action='evaluationtext.php?ud=$regid' method='POST'>";
?>
              <input type="number" name="evalpoints" min="1" max="10"><i>Evaluate how is course by number from 1 to 10</i><br>
              <textarea name="evaltext" style="width:200px; height:50px;"></textarea><br>
              <input type="submit" name="submit" value="Add">
              </form>
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

