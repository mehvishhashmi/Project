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
}
else if($action == "register") {
echo "qwe";
$fname = filter_input(INPUT_POST,'fname');
$lname = filter_input(INPUT_POST,'lname');
$email = filter_input(INPUT_POST,'email');
$uname = filter_input(INPUT_POST,'uname');
$password = filter_input(INPUT_POST,'password');
$exit = registerUser($fname,$lname,$email,$uname,$password);
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
include('list.php');
} else {
include('validation1.php');
}
}
 
if($action == "add") {
 if(isset($_POST['name'])) {
 add($_COOKIE['userid'], $_POST['name'], $_POST['date'], $_POST['time']);
 }
 $result = displayItems($_COOKIE['userid']);
 include('list.php');
 }


if($action == "delete") {
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
