<?php
require('database.php');
require('databasefunction.php');
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
  header("Location: badInfo.php");
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
if(isset($_POST['id'])) {
$selected = $_POST['id'];
deleteTask($_COOKIE['userid'],$selected);
}
$result = displayItems($_COOKIE['userid']);
include('list.php');
}



if($action == "edit") {
if(isset($_POST['nname'])) {
$id = $_POST['id'];
$nname = $_POST['nname'];
$ndate = $_POST['ndate'];
$ntime = $_POST['ntime'];
edit($id,$nname,$ndate,$ntime);
$result = displayItems($_COOKIE['userid']);
include('list.php');
}
}

if($action == "update") {
if(isset($_POST['id'])) {
$itemid = $_POST['id'];
update($_COOKIE['userid'],$itemid);
}
$result = displayItems($_COOKIE['userid']);
include('list.php');
}
if($action == "showCompletedItems") {
$result = showCompletedItems($_COOKIE['userid']);
include('updatedlist.php');
}
?>
