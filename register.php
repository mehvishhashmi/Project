<html>
<body>
  <h1> Registeration </h1>
    <form method = 'post' action = 'index.php'>
        <strong> First name: </strong> <input type="text" name='fname' placeholder="first name"/>
	<br></br>
    	<strong> Last name: </strong> <input type="text" name="lname" placeholder="last name"/>
	<br> </br>
	<strong> Email address: </strong> <input type='text' name='email'value="" placeholder =
	"email/Username" />
	<br> </br>
	<strong> Phone number: </strong> <input type='int' name='phone' value=""
	placeholder = "phone number" />
	<br> </br>
	<strong> Birthday: </strong> <input type='text' name='birthday'/> <br> </br>
	<strong> Gender: </strong> <input type='text' name='gender'/> <br> </br>
 <!--	 <strong> User Name: </strong> <input type='text' name='uname'/> <br> </br> -->
	 <strong> Password: </strong> <input type='text' name='password' value="" placeholder =
	 "password" /> <br> </br>
	<input type="hidden" name="action" value="register">
	<br>
<input type="submit" value="Register" />
</form>
<form action="login.php" method = 'post'>
</form>
</body>
</html>


