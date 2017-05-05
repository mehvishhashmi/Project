<?php
   function isUserValid($username,$password){
     global $db;
     $query = 'select * from users where username = :name and 
     passwordHash = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     $count = $statement->rowCount();
     if($count == 1){
       return true;
     }else{
       return false;
     }

   }

?>
