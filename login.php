<html>

<head>
<title>Login Page</title>
<style type="text/css">
div.container {
border: 3px solid #01f1f1;
padding: 6px;
width:300px;
margin:20px auto;
text-align:center; 
}
 .login { 
 background:#f9f9f9; 
 }
 .login div {
 border:2px solid #fff;
 padding:3px;
 }
 .register { 
 background:#f9f9f9; 
 }
 .register div {
 border:2px solid #fff;
 padding:3px;
 }
 input[type=text], input[type=password] {
 padding: 6px 15px;
 margin: 8px 0;
 border: 1px solid #ccc;
 }
 button {
 background-color: #4CAF50;
 color: white;
 padding: 6px 15px;
 margin: 8px 0;
 width: 50%;
 }
 </style>
</head>



<body>
<div class="container">
<form method="post" action="index.php">
<div class="form-input">
<input type="text" name="uname" placeholder="Enter your name" required>
<input type="password" name="password" placeholder="Enter your password" required>
</div>
<input type="hidden" name="action" value="check_user">
<input type="submit" value="Login" class="btn-login">
</form>

<form method="post" action="register.php">
<div class="form-input">
<input type="submit" value="Register" class="btn-register">
</div>
</form>
</div>

</body>
</html>
