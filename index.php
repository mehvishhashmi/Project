<?php
require('database.php');
require('dbfunction.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
 $action = "display_login_page";
}
 if($action == "display_login_page")
 {
  include('login.php');
 }

else if($action == 'test_user')
  {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $suc = isUserValid($username,$password);
  if($suc == true)
  {
  //echo 'Welcome';    
  $result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
  }else{
  //echo "Wrong User Name/Password!";
 include('validation1.php');
 // header("Location: badInfo.php");
}
}else if($action == 'register') {

$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$email = filter_input(INPUT_POST,'email');
$username = filter_input(INPUT_POST,'username');
$phone_number = filter_input(INPUT_POST, 'phone_number');
$birthday = filter_input(INPUT_POST, 'birthday');
$gender = filter_input(INPUT_POST, 'gender');
if(isset($username)) {
$password = filter_input(INPUT_POST,'password');
$exit = createUser($first_name,$last_name,$email,$username,$password,$phone_number,$birthday,$gender); 
if($exit == true) {
include('user_exit.php');
} else {
header("Location: index.php");
}
}
}

else if($action == 'add')
{
 addTodoItem($_COOKIE['my_id'],$_POST['todo_item'],$_POST['date'],$_POST['time']);	 
 $result = getTodoItems($_COOKIE['my_id']);
 include('list.php'); 
}


if($action == 'delete_task') {
$item = $_POST['task_id'];
deleteTodoItem($_COOKIE['my_id'],$item);
$result = getTodoItems($_COOKIE['my_id']);
include('list.php');
}



if($action == 'edit_task') {
$task_id = $_POST['task_id'];
$new_todo_item = $_POST['new_todo_item'];
$new_date = $_POST['new_date'];
$new_time = $_POST['new_time'];
editTodoItem($task_id,$new_todo_item,$new_date,$new_time);
$result = getTodoItems($_COOKIE['my_id']);
include('list.php');
}


?>
