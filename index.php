<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
<?php
session_start();
if(!isset($_SESSION['tutorlogin']) || !isset($_SESSION['tutorid'])) {
  ?>
  <form action="register.php" method="POST">
  <center><h2>Registration for tutor</h2></center>
  
  <TABLE ALIGN="center">
      <TR ALIGN="center">
        <TD COLSPAN="2"> <h3>Insert your information</h3></TD>
      </TR>
      <TR>
        <TD>Login</TD>
        <TD><INPUT TYPE="text" MAXLENGTH="12" NAME="login"> <I>(Enter your login up to 12 symbols)</I></TD>
      </TR>
      <TR>
        <TD>Name</TD>
        <TD><INPUT TYPE="text" MAXLENGTH="30" NAME="name"> <I>(Enter your name)</I></TD>
      </TR>
      <TR>
        <TD>Password</TD>
        <TD><INPUT TYPE="password" MAXLENGTH="12" NAME="password"> <I>(Make password between 6 and 12 characters)</I></TD>
      </TR>
      <TR>
        <TD>Confirm</TD>
        <TD><INPUT TYPE="password" MAXLENGTH="12" NAME="cpassword"> <I>(Please, confirm your password)</I></TD>
      </TR>
      <TR>
        <TD>E-mail</TD>
        <TD><INPUT TYPE="text" MAXLENGTH="40" NAME="email"> <I>(Enter your e-mail)</I></TD>
      </TR>
      <TR>
        <TD>Phone number</TD>
        <TD><INPUT TYPE="text" MAXLENGTH="11" NAME="phone"> <I>(Enter your phone number)</I></TD>
      </TR>
        <TD>Year</TD>
        <TD>
          <SELECT NAME="year">
            <OPTION VALUE="selected">Select your year</OPTION>
            <OPTION VALUE="Freshman">Freshman</OPTION>
            <OPTION VALUE="Sophomore">Sophomore</OPTION>
            <OPTION VALUE="Junior">Junior</OPTION>
            <OPTION VALUE="Senior">Senior</OPTION>
            <OPTION VALUE="ExtraYear">Extra year</OPTION>
          </SELECT>
        </TD>
      </TR>
      <TR align="center">
        <TD colspan="2"><INPUT id="button" type="submit" name="submit" value="Sign-Up">
        <INPUT TYPE="reset" NAME="cancle" VALUE="Cancle"></TD>
      </TR>
    </TABLE>
  </form>
  <br>
  <center>
    <h4><i>If you are already registered, please, log in</i></h4>
  </center>
  </div>
  <div class="box" align="center">
  <form action="login.php" method="POST">
    <table align="center">
      <tr align="center">
        <td colspan="2"><h3>Login</h3></td>
      <tr>
        <td>Login</td>
        <td><input type="text" name="login"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
      </td>
      <tr align="center">
        <td colspan="2"><input type="submit" value="Login"></td>
      </tr>
    </table>
  </form>
  <?php
}
if(isset($_SESSION['tutorlogin']) && isset($_SESSION['tutorid']))
{
 
    include("bd.php");
    $user=$_SESSION['tutorlogin'];
    $res=mysql_query("SELECT * FROM `users` WHERE `tutorlogin`='$user'");
    if($res == FALSE) { 
      die(mysql_error()); // TODO: better error handling
    }
    $user_data=mysql_fetch_array($res);
    
    echo "<center>";
    echo "Go to <a href='mypagetutor.php'>My page</a>";
    echo "</center>";
}
?>
            </div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
		</div>
		<div id="footer">
			&copy; 2015 Made by Aydar, Azamat, Bekbolat, Gulmira <a href="http://www.ftemplate.ru/">KAIST</a>
		</div>
	</body>
</html>
