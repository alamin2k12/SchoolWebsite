<?php
session_start();
session_destroy();
setcookie("cookie",$_SESSION['user_id'],time()-1000);
header('Location:StudentCorner.php');
?>