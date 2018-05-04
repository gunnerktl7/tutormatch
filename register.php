<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
					<p>

              <?php
              
              if(isset($_POST['login']) && isset($_POST['password']))
              {
                  $login=htmlspecialchars(trim($_POST['login']));
                  $password=htmlspecialchars(trim($_POST['password']));
                  $cpassword=htmlspecialchars(trim($_POST['cpassword']));
                  $name=htmlspecialchars(trim($_POST['name']));
                  $email=htmlspecialchars(trim($_POST['email']));
                  $phone=htmlspecialchars(trim($_POST['phone']));
                  $year=htmlspecialchars(trim($_POST['year']));
               
                  if($login=="" || $password=="" || $name=="" || $email=="" || $year=="")
                  {
                      die("Fill all <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
                  }
               
                  include("bd.php");
                  
                  
                  $res=mysql_query("SELECT `tutorlogin` FROM `users` WHERE `tutorlogin`='$login' ");
                  
                  if($res==FALSE) {
                    die(mysql_error()+"<br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
                  }
               
                  $data=mysql_fetch_array($res);
               
                  if(!empty($data['tutorlogin']))
                  {
                      die("Such login already exists <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
                  }
               
                  if(strlen($password)<6){
                      die("Your password cannot be less than 6 symbols <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
                  }
                  if ($password!=$cpassword) {
                    die("Your passwords does not match <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>");
                    
                  }
               
                  $query="INSERT INTO `users` (`tutorlogin`,`tutorname`,`tutorpassword`,`tutoremail`,`tutorphone`, `tutoryear`) VALUES('$login','$name','$password','$email','$phone', '$year') ";
                  $result=mysql_query($query);
               
                  if($result==true)
                  {   echo "Your registration is comleteted<b><br>";
                      echo "Please, go to the <a href='index.php'>log-in page</a> <br class='clearfix' /></div><br class='clearfix' /></div><div id='footer'>&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href='http://kaist.ac.kr/'>KAIST</a></div></body></html>";
                  }
                  else
                  {
                      echo "Error! ----> ". mysql_error();
                  }
              }
              ?>
