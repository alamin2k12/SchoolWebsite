<?php
$username=$_POST['Username_select'];
$password=$_POST['Password_select'];
$Update_username=$_POST['Update_username'];
$Update_password=$_POST['Update_password'];
$Update_name=$_POST['Update_name'];
$Update_roll=$_POST['Update_roll'];
$con=mysql_connect("localhost","root","");
mysql_select_db('class_7',$con);

if($Update_username!='')
{
	echo'username name update';
$sql="UPDATE users SET username='$Update_username' WHERE password='$password' ";
mysql_query($sql);
}
if($Update_name!='')
{
	echo "name update";
$sql="UPDATE users SET name='$Update_name' WHERE password='$password' ";
mysql_query($sql);
}
if($Update_roll!=0)
{
	echo "roll update";
$sql="UPDATE users SET roll='$Update_roll' WHERE password='$password' ";
mysql_query($sql);
}
if($Update_password!='')
{
	echo'password update';
$sql="UPDATE users SET password='$Update_password' WHERE password='$password' ";
mysql_query($sql);
}
?>