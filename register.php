<html>
<body>
  <h1> this is a register page</h1>
    <form method = 'post' action = 'index.php'>
    <strong> Username: </strong> <input type='text' name='reg_uname'
    value="" /> </ br> </ br>
    <strong> Password: </strong> <input type="password"
    name="reg_password" value="" /> </ br> </ br>
    <input type="hidden" name="action" value="registrar">
    <br>
    <input type="submit" value="Register" />
    </form>

<form action="login.php" method = 'post'>
<input type='submit' value='try to login' />
</form>
</body>
</html>
