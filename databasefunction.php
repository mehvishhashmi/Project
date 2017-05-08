<?php
function registerUser($fname,$lname,$email, $uname,$password)
{
  global $db;
  $query = 'select * from users where uname =:uname';
  $statement = $db->prepare($query);
  $statement->bindValue(':uname',$uname);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  if($count == 0) {
  echo "Account already exists";
  }
  if($count > 0) {
return true;
}

else {
$query = 'insert into users(fname,lname,email,uname,password) 
values(:fname,:lname,:email,:uname,:password)';
$statement = $db->prepare($query);
$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':email',$email);
$statement->bindValue(':uname',$uname);
$statement->bindValue(':password',$password);
$statement->execute();
$statement->closeCursor();
return false;
}
}

function isUserRegistered($uname,$password) {
  global $db;
  $query = 'select * from users where uname = :uname and password = :password';
  $statement = $db->prepare($query);
  $statement->bindValue(':uname',$uname);
  $statement->bindValue(':password',$password);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  if($count == 1) {
  setcookie('login',$uname, time()+3600);
  $_COOKIE['login']=$uname;
  setcookie('user_id',$result[0]['id'], time()+3600);
  $_COOKIE['user_id']=$result[0]['id'];
  setcookie('islogged',true, time()+3600);
  $_COOKIE['islogged']=true;
  return true;
  } else {
  unset($_COOKIE['login']);
  setcookie('login',false);
  setcookie('userid',false);
  setcookie('islogged',false);
  return
  false;
  }
					    
 }

function add($user_id,$name,$date,$time) {
global $db;
$query = 'insert into todos(user_id,name,date,time,status) values(:user_id,:name,:date,:time,0)';
$statement = $db->prepare($query);
$statement->bindValue(':user_id',$user_id);
$statement->bindValue(':name',$name);
$statement->bindValue(':date',$date);
$statement->bindValue(':time',$time);
$statement->execute();
$statement->closeCursor();
}

function displayItems($user_id) {
global $db;
$query = 'select * from todos where user_id= :user_id and status=0';
$statement = $db->prepare($query);
$statement->bindValue(':user_id',$user_id);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
return $result;
}

function edit($id,$nname,$ndate,$ntime) {
  global $db;
  $query = 'update todos set name= :nname, date= :ndate, time=:ntime where id= :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':nname',$nname);
  $statement->bindValue(':ndate',$ndate);
  $statement->bindValue(':ntime',$ntime);
  $statement->bindValue(':userid',$id);
  $statement->execute();
  $statement->closeCursor();
}


function deleteTask($user_id,$id) {
  global $db;
  $query = 'delete from todos where id = :id and user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':id',$id);
  $statement->bindValue(':user_id',$user_id);
  $statement->execute();
 $statement->closeCursor();
  }

function update($user_id,$id) {
global $db;
$query = 'update todos set status=1 where id=:id and user_id=:user_id';
$statement = $db->prepare($query);
$statement->bindValue(':id',$id);
$statement->bindValue(':user_id',$user_id);
$statement->execute();
$statement->closeCursor();
}

function showCompletedItems($user_id) {
global $db;
$query = 'select * from todo where user_id=:userid and status=1';
$statement = $db->prepare($query);
$statement->bindValue(':userid',$user_id);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
return $result;
}
?>

