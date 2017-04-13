<?php
session_start();
include "data.php";
$username=$_POST['username'];
$pass=$_POST['password'];
login($username,$pass); 

function login($name,$pass)
{  
	$sql="SELECT * FROM users WHERE username='$name' ";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) {
		if($row['password']==$pass){
		$_SESSION['user_id']=$row['id'];
		header('Location:Homepage.php');
		}
	     else
	     {
	     	 header('Location:StudentCorner.php');
	     }
	
}

}
?>