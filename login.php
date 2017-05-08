<html>
<head>
<h1>To Do Application</h1>
<h2> Please Login <h2>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<div class = "overall">
<form method = "post" action="index.php">
 	<div class="form-input">

<strong>Username:</strong><input type="test" name="username" value=""/><br><br>
<strong>Password:</strong><input type="password" name="password" value=""/><br><br>

</div>
<input type ="hidden" name="action" value="test_user"><br>
<input type="submit" value="Login" class="login-button"/>
</form>


<form method = "post" action = "register.php">
	<div class="form-input">
<input type = "submit" value = "Register" class="btn-register" />
	</div>
</form>
</div>
</body>
</html>
