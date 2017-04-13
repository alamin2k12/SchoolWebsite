<html>
<head>
<script type="text/javascript">
function validate_form(frm)
{
   var c=0;
  document.getElementById("chk_I_roll").innerHTML="";
  if (frm.Insert_roll.value.length==0)
  {
  	document.getElementById("chk_I_roll").innerHTML="Enter Roll No!";
  	c=1;
  }
  if(frm.Insert_roll.value.length>0)	
  {
	   var strValidChars = "0123456789০১২৩৪৫৬৭৮৯";
	   var strChar;
	   var strString = frm.Insert_roll.value;	
	   for (i = 0; i < strString.length ; i++)
		  {
		  strChar = strString.charAt(i);
		  if (strValidChars.indexOf(strChar) == -1)
			 {
			 	document.getElementById("chk_I_roll").innerHTML="Correct Roll No";
  				c=1;
			 }
		  }
   }
    document.getElementById("chk_I_email").innerHTML="";
    if(frm.Insert_email.value.length==0)
    {
   	document.getElementById("chk_I_email").innerHTML="Enter Email Address!";
	c=1;
   }
    if(frm.Insert_email.value.length>0)
  {
   apos=frm.Insert_email.value.indexOf("@");
   dotpos=frm.Insert_email.value.lastIndexOf(".");
       
   if (apos<1||dotpos-apos<2)
   {
   document.getElementById("chk_I_email").innerHTML="Correct Email Address";
   c=1;
  }		
  }
  
  document.getElementById("chk_I_name").innerHTML="";
  if (frm.Insert_name.value.length==0)
  {
   document.getElementById("chk_I_name").innerHTML="Enter Name!";
   c=1;
  }
   if (frm.Insert_username.value.length==0)
  {
   document.getElementById("chk_I_username").innerHTML="Enter Username!";
   c=1;
  }
   if (frm.Insert_password.value.length==0)
  {
   document.getElementById("chk_I_password").innerHTML="Enter Password!";
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
<form action="Insertprocess.php" method="POST" onSubmit="return validate_form(this)" >
	<link rel="stylesheet" type="text/css" href="Insert.css">
	<div clsass="main">
		<center style=color:#483D8B>
				<br>
					<br>
						<br>
	<h1> Insert Student's Information </h1>
	<br>
		<br>
			<br>
      <?php 
    if($_GET['error']=='success')
    {

      ?>
      
     <h1><b><?php echo  'Insertion Successfully!'?></h1></b>;
     <?php
   }
     ?>
       <?php 
    if($_GET['error']=='fail')
    {
      
 ?>
     <h1><b><?php echo  'Insertion Fail!'?></h1></b>;
     <?php
   }
     ?>
       <?php 
    if($_GET['error']=='database_error')
    {
      
 ?>
     <h1><b><?php echo  'Database Connecting Error!'?></h1></b>;
     <?php
   }
     ?>
				<br>
					<br>

SELECT CLASS:
<SELECT name="select_class">
<OPTION value="class_5">class_5</OPTION>
<OPTION value="class_6">class_6</OPTION>
<OPTION value="class_7">class_7</OPTION>
<OPTION value="class_8">class_8</OPTION>
<OPTION value="class_9">class_9</OPTION>
<OPTION value="class_10">class_10</OPTION>
</SELECT>
	<h3>Username:<input type="text" name="Insert_username" id="Insert_username"/><font color="#FF0000" size="2"><label id="chk_I_username"> </label></h3></font>
	<br>
    <h3>Password:<input type="password" name="Insert_password" id="Insert_password"/><font color="#FF0000" size="2"><label id="chk_I_password"> </label></h3></font>
    <br>
<h3>Name:<input type="text" name="Insert_name" id ="Insert_name"/><font color="#FF0000" size="2"> <label id="chk_I_name"><label id="chk_I_name"> </label></h3></font>
<br>
<h3>Roll:<input type="text" name="Insert_roll" id="Insert_roll"/> <font color="#FF0000" size="2"><label id="chk_I_roll"></label></h3></font>
<br>
<h3>Email:<input type="text" name="Insert_email" id="Insert_email"/> <font color="#FF0000" size="2"><label id="chk_I_email"></label></h3></font>
<br>
<input type="Submit" name="Submit">
<br>
		</center>
	</div>
	</form>
	</body>
</html>