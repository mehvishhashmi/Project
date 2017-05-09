<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">

</head>
<body>
<div class="header">
<table border=1>
<tr>
<td>
<?php 

echo '<h1 style="text-align:center">TO DO LIST</h2>';
echo '<h1 style="text-align:center">Welcome:'  .$_COOKIE['login'].'<br/></h1>';
echo '<h2 style="text-align:center">Below you may find your to-do items<br/>
<br/> </h2>'; ?>
<td>
</tr>
</table>
</div>

<h2 align="center"> ADD A TASK </h2>
<table border=1>
<tr>
<form method = 'post' action='index.php'>
<td><strong> Task </strong> <input type='text' name='todo_item'/></td>
<td><strong> Date </strong><input type='date' name='date'/></td>
<td><strong> Time </strong><input type='time' name='time'/><br></td>
<input type = 'hidden' name = 'action' value='add'><br>
<td><input type="submit" value="Add" class="button"/></td>
</form>
</tr>
</table>

<h2 align="center"> YOUR TASK </h2>
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
<input type="submit" value="Delete" class="button">
</form>
</td>
<td>
<form method = 'post' action = 'edit.php'>
<input type = "hidden" name="task_id" value="<?php echo $res['id']?>">
<input type="hidden" name="todo_item" value="<?php echo $res['todo_item']?>">
<input type="hidden" name="date" value="<?php echo $res['date']?>">
<input type="hidden" name="time" value="<?php echo $res['time']?>">
<input type="submit" value="Edit" class="button">
</form>
</td>

<td>
<form action = "index.php" method = "post">
<input type = "hidden" name = "action" value = "complete"/>
<input type = "hidden" name = "task_id" value = " <?php echo $res['id'];?>"/>
<input type = "submit" value = "Complete" class="button"/>
</form>
</td>
</tr>

<?php endforeach;?>



<!--
<form method = 'post' action='index.php'>
<strong> Task: </strong> <input type='text' name='todo_item'/>
<strong> Date: </strong><input type='date' name='date'/>
<strong> Time: </strong><input type='time' name='time'/><br>
<input type = 'hidden' name = 'action' value='add'><br>
<input type="submit" value="Add" class="button"/>
</form>
-->
</table>

<!--<h1 align="center"> NEW ITEMS! </h1>
-->
<table border=1>
<br/>
<h2 align="center"> COMPLETED TASK </h2>
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
<input type = "submit" value = "Delete" class="button">
</form>
</td>
<td>
<form action = "edit.php" method = "post">
<input type= "hidden" name = "task_id" value = " <?php echo $res['id']?>">
<input type = "hidden" name = "todo_item" value=" <?php echo $res['todo_item']?>">
<input type = "hidden" name = "date" value = " <?php echo $res['date']?>">
<input type = "hidden" name = "time" value = " <?php echo $res['time']?>">
<input type = "submit" value="Edit" class="button" >
</form>
</td>
<td> Complete</td>
</tr>

<?php endforeach; ?>

</table>
</body>
</html>
