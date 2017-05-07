<html>
<body>
  <h1> this is a register page</h1>
    <form method = 'post' action = 'index.php'>
    <strong> First name: </strong> <input type="text" name='fname'/> <br></br>
    	<strong> Last name: </strong> <input type="text" name="lname"/> <br> </br>
	<strong> Email address: </strong> <input type='text' name='email'value="" /> <br> </br>
	<strong> Phone number: </strong> <input type='text' name='phone'value="" /> <br> </br>
	<strong> Birthday: </strong> <input type='text' name='birthday'/> <br> </br>
	<strong> Gender: </strong> <input type='text' name='gender'/> <br> </br>
	 <strong> User Name: </strong> <input type='text' name='uname'/> <br> </br>
	 <strong> Password: </strong> <input type='text' name='password'/> <br> </br>
	<input type="hidden" name="action" value="register">
	<br>
<input type="submit" value="Register" />
</form>
<form action="login.php" method = 'post'>
</form>
</body>
</html>


