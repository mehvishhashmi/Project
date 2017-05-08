<?php
function addTodoItem($user_id,$todo_item,$date,$time){
global $db;
$query = 'insert into todos(user_id,todo_item,date,time) values (:userid,:todo_item, :date,:time)';
$statement = $db->prepare($query);
$statement->bindValue(':userid',$user_id);
$statement->bindValue(':todo_item',$todo_item);
$statement->bindValue(':date',$date);
$statement->bindValue(':time',$time);
$statement->execute();
$statement->closeCursor();
}

function getTodoItems($user_id){
global $db;
$query = 'select * from todos where user_id= :userid';
$statement = $db->prepare($query);
$statement->bindValue(':userid',$user_id);
$statement->execute();
$result= $statement->fetchAll();
$statement->closeCursor();
return $result;
}

function createUser($first_name,$last_name,$email,$username,$password,$phone_number,$birthday,$gender)
{
global $db;
$query = 'select * from users where username = :username';
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);
$statement->execute();
$result= $statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
if($count == 0)
{
echo "account already exists";
}
if($count > 0) {
echo "account already exists";
return true;
}
else{
$query = 'insert into users (first_name,last_name,email,username,passwordHash,phone_number,birthday,gender) values  (:first_name, :last_name, :email,:username, :password, :phone_number, :birthday, :gender)';
$statement = $db->prepare($query);
$statement->bindValue(':first_name',$first_name);
$statement->bindValue(':last_name',$last_name);
$statement->bindValue(':email',$email);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->bindValue(':phone_number',$phone_number);
$statement->bindValue(':birthday',$birthday);
$statement->bindValue(':gender',$gender);
$statement->execute();
$statement->closeCursor();
return false;
}
}
												   
function isUserValid($username,$password){
global $db;
$query = 'select * from users where username = :username and passwordHash = :password';
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->execute();
$result= $statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
if($count == 1)
{
setcookie('login',$username);
setcookie('my_id',$result[0]['id']);
setcookie('islogged',true);
return true;
}
else{
unset($_COOKIE['login']);
setcookie('login',false);
setcookie('islogged',false);
setcookie('my_id',false);
return false;
}
}

function deleteTodoItem($user_id,$task_id) {
global $db;
$query = 'delete from todos where id=:task_id and user_id = :userid';
$statement = $db->prepare($query);
$statement->bindValue(':userid',$user_id);
$statement->bindValue(':task_id',$task_id);
$statement->execute();
$statement->closeCursor();
}

function
editTodoItem($task_id,$new_todo_item,$new_date,$new_time) {
global $db;
$query = 'update todos set todo_item=:new_todo_item, date=:new_date, time=:new_time where id=:task_id';
$statement = $db->prepare($query);
$statement->bindValue(':task_id',$task_id);
$statement->bindValue(':new_todo_item',$new_todo_item);
$statement->bindValue(':new_date',$new_date);
$statement->bindValue(':new_time',$new_time);
$statement->execute();
$statement->closeCursor();
}
?>
