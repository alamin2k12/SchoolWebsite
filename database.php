<?php
$conn_error='Could not connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='class_7';
if(mysql_connect($mysql_host,$mysql_user,$mysql_pass)&& mysql_select_db($mysql_db))
{
	echo "connect successful!";
}
$query ="SELECT username, password ,roll,name FROM users ORDER BY id";
if($query_run=mysql_query($query))
{
	echo "Query success<br>";
	while ($query_row=mysql_fetch_assoc($query_run))
	 {
	$username=$query_row['username'];
	$password=$query_row['password'];
	$roll=$query_row['roll'];
	$name=$query_row['name'];
	echo $username ;
	echo $password;
	echo 'roll is '.$roll .' name is '.$name;
	echo "<br>";
}
}
else 
{
	echo mysql_error();
}
?>