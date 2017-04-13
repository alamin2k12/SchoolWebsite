<html>
<head>
	<title>This is AddNotice page</title>
	<link rel="stylesheet" type="text/css" href="AddNotice.css">
</head>
<body>
	<div class="main">
	<form action="Noticeprocess.php" method="POST" enctype="multipart/form-data">
		<br><br><br>
		WRITE TITLE:
		<input type="text" size="100" name="title">
		<br>
		<br>

WRITE NOTICE:
<br>
<br>

	<textarea  name="notice" ></textarea>
	<br>
	<br>
	<input type="submit"   name="submit" />	
</form>
</div>
</body>
</html>