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

            <form method="POST" action="add.php">
              <center>
              <h2>Hey, you can add your offers here</h2><br>
              <table>
              <tr>
                <td>Name of lesson</td>
                <td><input type="text" maxlength="20" NAME="lesson"> <I>(example: Calculus I)</I></TD>
              </tr>
              <tr>
                <td>Language</td>
                <td><select name="lang">
                  <option value="English">English</option>
                  <option value="Korean">Korean</option>
                </td>
              </tr>
              <tr>
                <td>Fee per hour</td>
                <td><input type="number" name="fee" min="0"><i>Insert fee in KRW</i></td>
              </tr>
              <tr align="center">
                <td colspan="2"><input type="submit" name="submit" value="Add">
                <input type="reset" value="Cancle"></td><br>
              </tr>
            </table><br>
            <p>Find on which subjects tutors <a href='findrequests.php'>required</a>
            </p>
            <br><br>
            
            <center><a href='mypagetutor.php'>Back</a>
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
 