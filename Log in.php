<?php
session_start();
include "data.php";
$username=$_POST['username'];
$pass=$_POST['password'];
login($username,$pass); 

function login($name,$pass)
{  
	$sql="SELECT * FROM Student_info WHERE username='$name' ";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) {
		if($row['password']==$pass){
		$_SESSION['user_id']=$row['student_id'];
		if(isset($_POST['remember']))
		{

		setcookie("cookie",$_SESSION['user_id'],time()+1000);
		}
		header('Location:Index.php');
		}
	     else
	     {
	      header('Location:StudentCorner.php?error=yes');
	    
	     }
	     return;

	 }  

	 header('Location:StudentCorner.php?error=username');
}
?>