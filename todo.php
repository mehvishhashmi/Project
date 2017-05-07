<html>
  <head>
      <title>To-do List</title>

  </head>

<body>
   <div class="header">
   <?php echo '<h1>Welcome'.$_COOKIE['login'].'</h1>';?>
   <h2>My To Do List</h2>
   </div>
   <table id="todo">
   <tr>
   <th>Name</th>
   <th>Due Date</th>
   <th>Due Time</th>
   <th></th>
   <th></th>
   <th></th>
   </tr>
   <?php
   if($result ==NULL) {
   }
   else													  foreach($result as $res):
?>

<tr>
<td><?php echo $res['name']; ?></td>
<td><?php echo $res['date']; ?></td>
<td><?php echo date('h:i A',strtotime($res['time'])); ?></td>
<td>
<form action="edititem.php" method="post">
<input type="hidden" name="id" value="<?php echo $res['id']?>">
<input type="hidden" name="name" value="<?php echo $res['name'] ?>">
<input type="hidden" name="date" value="<?php echo $res['date'] ?>">
<input type="hidden" name="time" value="<?php echo $res['time'] ?>">
<input type="submit" value="Edit" class="todobutton btn">
</form>
</td>
<td>

<form action="index.php" method="post">
<input type="hidden" name="id" value="<?php echo $res['id'] ?>">
<input type="hidden" name="action" value="delete">
<input type="submit" value="Delete" class="todobutton btn">
</form>
</td>
<td>
</tr>
							
<?php										
endforeach;											
?>		
</table>
<form action="list.php" method="post">
<input type="submit" value="Add" class="todobutton btn">
</form>	
<form action="index.php" method="post">
<input type="hidden" name="action"value="showCompletedItems">					
<input type="submit" value="Completed Tasks" class="todobutton btn">
</form>
</body>
</html>
