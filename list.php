<html>
<head>
</head>
<body>
<div class="header">
<?php 

echo '<h1 style="text-align:center">TO DO LIST</h2>';
echo '<h1 style="text-align:center">Welcome :'  .$_COOKIE['login'].'<br/></h1>';
echo '<h2 style="text-align:center">Below you may find your to-do items</h2>';
     
     ?>
</div>

<table border=1>
<thead>
<th>Task</th>
<th>Date</th>
<th>Time</th>
<th>Delete</th>
<th>Edit</th>
<th>Status</th>
</thead>


<?php foreach($result as $res):?>
<tr>
<td> <?php echo $res['todo_item']; ?>  </td>
<td> <?php echo $res['date']; ?> </td>
<td> <?php echo $res['time']; ?> </td>
<td>
<form method = 'post' action = 'index.php'>
<input type="hidden" name="task_id" value="<?php echo $res['id']?>">
<input type="hidden" name="action" value="delete_task">
<input type="submit" value="Delete" class="login-button">
</form>
</td>
<td>
<form method = 'post' action = 'edit.php'>
<input type = "hidden" name="task_id" value="<?php echo $res['id']?>">
<input type="hidden" name="todo_item" value="<?php echo $res['todo_item']?>">
<input type="hidden" name="date" value="<?php echo $res['date']?>">
<input type="hidden" name="time" value="<?php echo $res['time']?>">
<input type="submit" value="Edit" class="login-button">
</form>
</td>

<td>
<form action = "index.php" method = "post">
<input type = "hidden" name = "action" value = "complete"/>
<input type = "hidden" name = "task_id" value = " <?php echo $res['id'];?>"/>
<input type = "submit" value = "Complete"/>
</form>
</td>
</tr>

<?php endforeach;?>

<form method = 'post' action='index.php'>
<strong> Description: </strong> <input type='text' name='todo_item'/>
<strong> Date: </strong><input type='date' name='date'/>
<strong> Time: </strong><input type='time' name='time'/><br>
<input type = 'hidden' name = 'action' value='add'><br>
<input type="submit" value="Add"/>
</form>
</table>
<table border=1>
<h2> Completed Tasks </h2>
<thead>
<th>Tasks</th>
<th>Date</th>
<th>Time</th>
<th>Delete</th>
<th>Edit</th>
<th>Status</th>
</thead>
<?php foreach($r1 as $res):?>
<tr>
<td> <?php echo $res['todo_item'] ?> </td>
<td> <?php echo $res['date']?> </td>
<td> <?php echo $res['time'] ?> </td>
<td>
			    
<form action = "index.php" method = "post">
<input type = "hidden" name = "task_id" value = "<?php echo $res['id']?>">
<input type = "hidden" name = "action" value = "delete_task">
<input type = "submit" value = "Delete">
</form>
</td>
<td>
<form action = "edit.php" method = "post">
<input type= "hidden" name = "task_id" value = " <?php echo $res['id']?>">
<input type = "hidden" name = "todo_item" value=" <?php echo $res['todo_item']?>">
<input type = "hidden" name = "date" value = " <?php echo $res['date']?>">
<input type = "hidden" name = "time" value = " <?php echo $res['time']?>">
<input type = "submit" value="Edit">
</form>
</td>
<td> Complete</td>
</tr>

<?php endforeach; ?>

</table>
</body>
</html>
