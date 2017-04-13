<?php
ob_start();
session_start();
if(isset($_COOKIE['cookie']))
{
	header('Location:Studenthome.php');
}
else
{
echo 'failure';	
}

?>
<html>
<head>
	<title>this is front page</title>
	<link  href="StudentCorner.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class ="main">
<div class="header">
	<img src="images/bannar.jpg"/>
</div>
<div class ="mainmenu">
	<ul>

		<li><a href="Homepage.php">Homepage</a></li>
		<li><a href="StudentCorner.php">StudentCorner</a></li>
		<li><a href="Administration.php">Administration</a></li>
		<li><a href="NoticeBoard.php">NoticeBoard</a></li>
		<li><a href="Result.php">Result</a></li>
		<li><a href="AboutTeacher.php">AboutTeacher</a></li>
		<li><a href="Admin.php">Admin</a></li>
	</ul>
 
</div>
<div class="slider">
<div class="slider_text">	
<h1>Govt.Laboratory High School</h1>
<h1>Khulna</h1>
</div>
</div>
<div class="marquee">
<marquee bgcolor="00FFFF" loop="-1" scrollamount="2"width="100%" color="990033">
<strong>	Welcome to Govt. laboratory high school</strong></marquee>
</div>
<div class="maincontent"> 
	<div class="content">
		<center><h3>
		<?php
		if($_GET['error']=='yes')
		{
			
			echo'Invalid Password<br><br>';
			
		}
		if($_GET['error']=='username')
		{
			
			echo'Invalid Username<br><br>';
		
		}
		?>
	</h3>
	</center>
		<form action="Log in.php" method="POST">
			<fieldset>
			<center>
				<br><br>
				<legend><h2>Student Login</h2></legend>
				<br>
			<h3>Username :
			<input type="text" name="username">
			<br><br>

			Password :
			<input type="password" name="password">
<br><br>
<input type="checkbox" name="remember" >
     Remember_me    <input type="Submit" value="Log In">
		</h3>
		</center>
		<br><br>
	</fieldset>
		</form>

	</div>
	<div class="sidebar">
	<ul>

		<li><a href="Homepage.php">Homepage</a></li>
		<li><a href="StudentCorner.php">Student</a></li>
		<li><a href="Administration.php">Administration</a></li>
		<li><a href="NoticeBoard.php">Notice</a></li>
		<li><a href="Result.php">Result</a></li>
	</ul>
 

	</div>
</div>
</div>
</body>


</html>