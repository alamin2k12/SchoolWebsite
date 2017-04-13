<?php
$Delete_username=$_POST['Delete_username'];
$Delete_password=$_POST['Delete_password'];
$Delete_roll=$_POST['Delete_roll'];
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

$sql="SELECT * FROM Student_info WHERE username='$Delete_username' AND password='$Delete_password' ";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) {
		if($row['password']==$Delete_password&&$row['username']==$Delete_username&&$row['roll']==$Delete_roll)
		{
	
$sql="DELETE FROM student_info WHERE username='$Delete_username' AND password='$Delete_password' AND roll='$Delete_roll'";
$test=mysql_query($sql);

}
}
if($test)
{
//echo "Deletion successful";	
 header('Location:Delete.php?error=success');
}
else
{
	//echo "Deletin fail";
	 header('Location:Delete.php?error=fail');
}
?>