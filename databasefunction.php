<?php
function
registerUser($fname,$lname,$uname,$password,$email)
{
  global $db;
  $query = 'select * from user_info where uname =:uname';
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
$query = 'insert into user_info(fname,lname,uname,password,email) 
values(:fname,:lname,:uname,:password,:email)';
$statement = $db->prepare($query);
$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':uname',$uname);
$statement->bindValue(':password',$password);
$statement->bindValue(':email',$email);
$statement->execute();
$statement->closeCursor();
return false;
}
}

function isUserRegistered($uname,$password) {
  global $db;
  $query = 'select * from user_info where uname = :uname and password = :password';
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
  setcookie('userid',$result[0]['id'], time()+3600);
  $_COOKIE['userid']=$result[0]['id'];
  setcookie('islogged',true, time()+3600);
  $_COOKIE['islogged']=true;
  return true;
  } else {
  unset($_COOKIE['login']);
  setcookie('login',false);								      setcookie('userid',false);
  setcookie('islogged',false);
  return
  false;
  }
										    }
