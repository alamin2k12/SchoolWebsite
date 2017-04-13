<?php
$Insert_username=$_POST['Insert_username'];
$Insert_password=$_POST['Insert_password'];
$Insert_name=$_POST['Insert_name'];
$Insert_roll=$_POST['Insert_roll'];
$Insert_email=$_POST['Insert_email'];
$con=mysql_connect('localhost','root','');


if($_POST['select_class']=='class_5')
{
	$class='class_5';
}
if($_POST['select_class']=='class_6')
{
	$class="class_6";
}
if($_POST['select_class']=='class_7')
{
	$class='class_7';
}
if($_POST['select_class']=='class_8')
{
	$class='class_8';
}
if($_POST['select_class']=='class_9')
{
	$class='class_9';
}
if($_POST['select_class']=='class_10')
{
	$class='class_10';
}
mysql_select_db($class,$con);
if($con)
{
$sql="INSERT INTO student_info (username,password,name,roll,email) VALUES ('$Insert_username','$Insert_password','$Insert_name','$Insert_roll','$Insert_email')";
$test=mysql_query($sql);
if($test)
{
	//echo 'Insertion successful';
	 header('Location:Insert.php?error=success');
}
else
 {
	//echo "Insertion fail";
	 header('Location:Insert.php?error=fail');
}	
}
else
{
	//echo "database connection fail";
	 header('Location:Insert.php?error=database_error');
}
?>