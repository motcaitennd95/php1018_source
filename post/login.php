<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<form action="proccess.php" method="post">
		<label>Username</label>
		<input type="text" name="txtUser"><br>
		<label>Password</label>
		<input type="pass" name="txtPass"><br>
		<label></label>
		<input type="submit" name="btnLogin" value="Login">
	</form>
</body>
</html>