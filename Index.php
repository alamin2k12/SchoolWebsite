<?php
session_start();
if($_SESSION['user_id']) header('Location:Studenthome.php');
else
{
  header('Location:StudentCorner.php');
}
?>