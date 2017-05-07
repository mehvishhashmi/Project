<?php
     function addTodoItem($user_id,$todo_text){
     global $db;
     $query = 'insert into todos(user_id,todo_item) values (:userid,:todo_text)';
     $statement = $db->prepare($query);
     $statement->bindValue(':userid',$user_id);
     $statement->bindValue(':todo_text',$todo_text);
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
	function createUser($username, $password, $fname, $lname, $email, $birthday, $gender, $phone){
	global $db;
	$query = 'select * from users where username = :name ';
	$statement = $db->prepare($query);
i	$statement->bindValue(':name',$username);
	$statement->execute();
	$result= $statement->fetchAll();
	$statement->closeCursor();
	$count = $statement->rowCount();
	if($count > 0)
	{
	return true;
	}else{
	$query = 'insert into users (fname,lname, email, birthday, gender,phone, username,passwordHash)       values
	(:name, :pass)';
	$statement = $db->prepare($query);
	$statement->bindValue(':name',$username);
	$statement->bindValue(':pass',$password);
	$statement->bindValue(':fname',$lname);
	$statement->bindValue(':lname',$fname);
	$statement->bindValue(':email',$email);
	$statement->bindValue(':birthday',$birthday);
	$statement->bindValue(':gender',$gender);
	$statement->bindValue(':phone',$phone);
	$statement->execute();
	$statement->closeCursor();
	return false;
	}
	}
   
   
     function isUserValid($username,$password){
     global $db;
     $query = 'select * from users where username = :name and 
     passwordHash = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->bindValue(':fname',$lname);
     $statement->bindValue(':lname',$fname);
     $statement->bindValue(':email',$email);
     $statement->bindValue(':birthday',$birthday);
     $statement->bindValue(':gender',$gender);
     $statement->bindValue(':phone',$phone);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     $count = $statement->rowCount();
     if($count == 1){
     
     setcookie('login',$username);
     setcookie('my_id',$result[0]['id']);
     setcookie('islogged',true);
     
     
     return true;
     }else{
    
    unset($_COOKIE['login']);
    setcookie('login',false);
    setcookie('islogged',false);
    setcookie('id',false);
    
     
     return false;
     }

   }

?>
