<html>
<head>
<h1 align="center">To Do Application</h1>
<h2 align="center"> Please Login: <h2>
<link rel="stylesheet" type="text/css" href="log.css">
</head>

<body>
<div class = "overall">
<form method = "post" action="index.php">
 	<div class="form-input">
<input type="text" placeholder="username" name="username" value=""/><br>
<input type="password" name="password" placeholder="Password" value=""/>

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
