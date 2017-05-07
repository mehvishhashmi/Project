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
 
 if($action == "add_item") {
 if(isset($_POST['item_name'])) {
 addItem($_COOKIE['userid'], $_POST['name'], $_POST['date'], $_POST['time']);
 }
 $result = displayItems($_COOKIE['userid']);
 include('todo.php');
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


	    }
	    else{
	  //  echo "Invalid user name or password!";
	    
	     header("Location: badInfo.php");
	    }


	   }else if ($action == 'register')
	    {
	     // echo " we want to create a new account";
	     $name = filter_input(INPUT_POST, 'reg_uname');
		$fname = filter_input (INPUT_POST, 'fname');
		$lname = filter_input (INPUT_POST, 'lname');
		$email = filter_input (INPUT_POST, 'email');
		$phone = filter_input (INPUT_POST, 'phone');
		$birthday = filter_input (INPUT_POST, 'birthday');
		$gender = filter_input (INPUT_POST, 'gender');
		if(isset($name))
		{
		 $pass = filter_input(INPUT_POST, 'reg_password');
		 $exit = createUser($name,$pass);
		 if($exit == true)
		 {
		  include('user_exit.php');
		 }else {
		  header("Location: login.php");
		   }
		   }
		  }else if ($action == 'add')
      
 if($action == "add_item") {
 if(isset($_POST['item_name'])) {
 addItem($_COOKIE['userid'], $_POST['name'], $_POST['date'], $_POST['time']);
 }
 $result = displayItems($_COOKIE['userid']);
 include('todo.php');
 }
 
?>
