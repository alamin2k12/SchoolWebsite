<html>
<title> This is Delete page</title>
<link rel="stylesheet" type="text/css" href="Delete.css">
<head>
	<script type="text/javascript">
	function validate_form(frm)
{
   var c=0;
  document.getElementById("chk_D_roll").innerHTML="";
  if (frm.Delete_roll.value.length==0)
  {
  	document.getElementById("chk_D_roll").innerHTML="Enter Roll No!";
  	c=1;
  }
  if(frm.Delete_roll.value.length>0)	
  {
	   var strValidChars = "0123456789০১২৩৪৫৬৭৮৯";
	   var strChar;
	   var strString = frm.Delete_roll.value;	
	   for (i = 0; i < strString.length ; i++)
		  {
		  strChar = strString.charAt(i);
		  if (strValidChars.indexOf(strChar) == -1)
			 {
			 	document.getElementById("chk_D_roll").innerHTML="Correct Roll No";
  				c=1;
			 }
		  }
   }
  
   if (frm.Delete_username.value.length==0)
  {
   document.getElementById("chk_D_username").innerHTML="Enter Username!";
   c=1;
  }
   if (frm.Delete_password.value.length==0)
  {
   document.getElementById("chk_D_password").innerHTML="Enter Password!";
   c=1;
  }
  if(c>=1)
  {
   return false;
  }
}
	</script>
</head>
<body>
<form action="Deleteprocess.php" method='POST' onSubmit="return validate_form(this)">
	<div class="main">
	
<center style=color:blue>
<br><br>
	<h1 style=color:#663333> Deletion  Information </h1>
	<br><br>
	     <?php 
    if($_GET['error']=='success')
    {
      
 ?>
     <h1><b><?php echo  'Deletion Successfully!'?></h1></b>;
     <?php
   }
     ?>
       <?php 
    if($_GET['error']=='fail')
    {
      
 ?>
     <h1><b><?php echo  'Deletion Fail!'?></h1></b>;
     <?php
   }
     ?>

			SELECT CLASS:
<SELECT name="select_class">
<OPTION value="class_5">class_5</OPTION>
<OPTION value="class_6">class_6</OPTION>
<OPTION value="class_7">class_7</OPTION>
<OPTION value="class_8">class_8</OPTION>
<OPTION value="class_9">class_9</OPTION>
<OPTION value="class_10">class_10</OPTION>
</SELECT>
	<br><br>
	<h3>Roll:<input type="text" name="Delete_roll" id="Delete_roll"/><font color="#FF0000" size="2"><label id="chk_D_roll"> </label></h3></font>
	<br><br>

	<h3>Username:<input type="text" name="Delete_username" id="Delete_username"/><font color="#FF0000" size="2"><label id="chk_D_username"> </label></h3></font>
	<br><br>

	<h3>Password:<input type="password" name="Delete_password" id="Delete_password"/><font color="#FF0000" size="2"><label id="chk_D_password"> </label></h3></font>
		<br><br>
     <input type="Submit" name="Submit"></h3>
		</center>
	</div>
	</body>
</html>