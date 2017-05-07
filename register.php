<html>
<body>
  <h1> this is a register page</h1>
    <form method = 'post' action = 'index.php'>
    <strong> First name: </strong> <input type="text" name='reg_uname'/> <br></br>
    	<strong> Last name: </strong> <input type="text" name="reg_password"/> <br> </br>
	<strong> Email address: </strong> <input type='text' name='reg_uname'value="" /> <br> </br>
	<strong> Phone number: </strong> <input type='text' name='reg_uname'value="" /> <br> </br>
	<strong> Birthday: </strong> <input type='text' name='reg_uname'/> <br> </br>
	<strong> Gender: </strong> <input type='text' name='reg_uname'/> <br> </br>
	<input type="hidden" name="action" value="register">
	<br>
<input type="submit" value="Register" />
</form>
<form action="login.php" method = 'post'>
</form>
</body>
</html>


