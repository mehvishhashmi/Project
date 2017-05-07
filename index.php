<?php
require('database.php');
require('GlobalDB.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
 $action = "show_login_page";
}
 if($action == "show_login_page")
 {
  include('login.php')
 }
 
if($action == "register") {
$fname = filter_input(INPUT_POST,'fname');
$lname = filter_input(INPUT_POST,'lname');
$uname = filter_input(INPUT_POST,'uname');
$password = filter_input(INPUT_POST,'password')
$email = filter_input(INPUT_POST,'email');
$exit = registerUser($fname,$lname,$uname,$password,$email);
if($exit == true) {
include('validation.php');
} else {
header("Location: index.php");
}
}
 
if($action == "check_user") {
$uname = filter_input(INPUT_POST,'uname');
$password = filter_input(INPUT_POST,'password');
$success = isUserRegistered($uname,$password);
if($success == true) {
$result = displayItems($_COOKIE['userid']);
include('todo.php');
} else {
include('validation1.php');
}
}
 
 else if($action == 'test_user')
  {
	    $username = $_POST['reg_uname'];
	    $password = $_POST['reg_password'];
	    $suc = isUserValid($username,$password);
	    if($suc == true)
	    {
	  
	  
	  
	  $result = getTodoItems($_COOKIE['my_id']);
	  include('list.php');


	    }	   }
		  }else if ($action == 'add')
      
 if($action == "add") {
 if(isset($_POST['item'])) {
 addItem($_COOKIE['userid'], $_POST['name'], $_POST['date'], $_POST['time']);
 }
 $result = displayItems($_COOKIE['userid']);
 include('todo.php');
 }
 
?>
