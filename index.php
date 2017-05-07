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
  include('login.php');
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
 
if($action == "add") {
 if(isset($_POST['item'])) {
 addItem($_COOKIE['userid'], $_POST['name'], $_POST['date'], $_POST['time']);
 }
 $result = displayItems($_COOKIE['userid']);
 include('todo.php');
 }


if($action == "deleteitem") {
if(isset($_POST['id'])) {
$selected = $_POST['id'];
deleteItem($_COOKIE['userid'],$selected);
}
$result = displayItems($_COOKIE['userid']);
include('todo.php');
}



if($action == "edit") {
if(isset($_POST['nname'])) {
$id = $_POST['id'];
$nname = $_POST['nname'];
$ndate = $_POST['ndate'];
$ntime = $_POST['ntime'];
edit($id,$nname,$ndate,$ntime);
$result = displayItems($_COOKIE['userid']);
include('todo.php');
}
}

if($action == "update") {
if(isset($_POST['id'])) {
$itemid = $_POST['id'];
updateStatus($_COOKIE['userid'],$itemid);
}
$result = displayItems($_COOKIE['userid']);
include('todo.php');
}
if($action == "showCompletedItems") {
$result = showCompletedItems($_COOKIE['userid']);
include('updatedlist.php');
}
?>
