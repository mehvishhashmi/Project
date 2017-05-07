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
