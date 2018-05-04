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
            <table><form action="addtosubjectlist.php" method="POST">
            <tr>
              <td>Name of lesson</td>
              <td><input type="text" maxlength="20" NAME="lesson"> <I>(example: Calculus I)</I></TD>
            </tr>
            <tr>
              <td>Subject Type</td>
              <td><select name="type">
                <option value="Basic Mandatory">Basic Mandatory</option>
                <option value="Basic Elective">Basic Elective</option>
                <option value="Major Mandatory">Major Mandatory</option>
                <option value="Major Elective">Major Elective</option>
                <option value="Language">Language</option>
                
              </td>
            </tr>
            <tr align="center">
              <td colspan="2"><input type="submit" name="submit" value="Add">
              <input type="reset" value="Cancle"></td><br></form>
            </tr>
            </table>
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

