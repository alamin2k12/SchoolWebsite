<?php
session_start();
include 'Admindatabase.php';
$username=$_POST['username'];
$pass=$_POST['password'];
login($username,$pass); 

function login($name,$pass)
{  
	$sql="SELECT * FROM admin_list WHERE username='$name' ";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) {
		if($row['password']==$pass){
		if(isset($_POST['remember']))
		{

			setcookie("cookie",$_SESSION['user_id'],time()+1000);
			header('Location:Adminhome.php');

		}
		header('Location:Adminhome.php');
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