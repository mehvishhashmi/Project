<html>

<head>
<body>
<h1>Sign Up</h1>

<link rel="stylesheet" type="text/css" href="login.css">
</head>

<div class="overall">
<form method = 'post' action = 'index.php'>
<div class="form-input">

<strong> First name: </strong> <input type="text" name='first_name'/>
<br><br>
<strong> Last name: </strong> <input type="text" name="last_name"/>
<br> <br>
<strong> Email address: </strong> <input type='text' name="email" value=""/>
<br> <br>
<!-- <strong> Username: </strong> <input type="text" name="username" value="" />
<br> <br> -->
<strong> Password: </strong> <input type='password' name="password" value=""/>
<br></br>
<strong> Phone number: </strong> <input type='text' name='phone_number'value=""/>
<br> <br>
<strong> Birthday: </strong> <input type='text'name='birthday'/>
<br> <br>
<strong> Gender: </strong> <input type='text'name='gender'/>
<br> <br>
<input type="hidden" name="action" value="register">
<br>
<input type="submit" value="Register" class="btn-register" />
</form>
</div>

</body>
</html>


