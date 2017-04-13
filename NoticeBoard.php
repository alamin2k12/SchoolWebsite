<html>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('noticeboard',$con);
if($con)
{
echo "connection successfully";	
}
else
{
	echo "database connection fail";
}
?>
<head>
	<title>This is NoticeBoard page</title>
	<link rel="stylesheet" type="text/css" href="NoticeBoard.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<h1><strong><i style=color:#CC0066>GOVT.LABORATORY HIGH SCHOOL</i></strong></h1>
            <h2><strong><i style=color:#660099>Khulna</i></strong></h2>
		</div>
		<div class="mainmenu">
	<ul>

		<li><a href="Homepage.php">Homepage</a></li>
		<li><a href="StudentCorner.php">StudentCorner</a></li>
		<li><a href="Administration.php">Administration</a></li>
		<li><a href="NoticeBoard.php">NoticeBoard</a></li>
		<li><a href="Admin.php">Admin</a></li>
		<li><a href="AboutTeacher.php">AboutTeacher</a></li>
		<li><a href="Result.php">Result</a></li>
	</ul>
		</div>
			<div class="Notice_header">
			<h1><i><b><center style=color:#00FF66>NOTICE BOARD</center></b></i></h1>
		</div>
		<div class="NoticeBoard">
			<div class="type_1">
				<h2><i><b><center>Latest Notice</center></b></i></h2>
			</div>
			<div class="content_1">
           <?php 
           $sql= "SELECT * FROM  add_notice ORDER BY notice_id DESC LIMIT 3";
           $res=mysql_query($sql);
           while ($row=mysql_fetch_array($res)) {
        
           ?>
           <marquee bgcolor="00FFFF" loop="-1" scrollamount="2"width="100%" color="990033">
            <strong style=color:#CC00CC><?php echo $row['notice_title'] ?></strong></marquee>
           <br><br>
           <b><p style=color:#380000><?php echo $row['notice_content'] ?></p></b>
           <?php 
       }
           ?>
			</div>
			<
			<div class="type_2">
				<h2><i><b><center>Previous Notice</center></b></i></h2>
			</div>
				<div class="content_2">
					 <?php 
           $sql= "SELECT * FROM  add_notice ORDER BY notice_id DESC LIMIT 3,3";
           $res=mysql_query($sql);
           while ($row=mysql_fetch_array($res)) {
           ?>
           <br><br>
           <center><h2 style=color:#339933><i><?php echo $row['notice_title']  ?></i></h2></center>
           <br><br>
            <b><p style=color:#380000><?php echo $row['notice_content'] ?></p></b>
            <br><br>
            <?php 
        }
            ?>
				</div>
			
		</div>
	</div>
</body>
</html>