<?php
$notice_title=$_POST['title'];
$notice_content=$_POST['notice'];
$con=mysql_connect('localhost','root','');
mysql_select_db('noticeboard',$con);
if($con)
{
$sql="INSERT INTO add_notice (notice_title,notice_content) VALUES ('$notice_title','$notice_content')";
$test=mysql_query($sql);
if($test)
{
	echo 'Insertion successful';
}
else
 {
	echo "Insertion fail";
	}	
}
else
{
	echo "database connection fail";
}
?>