<?php
echo "<h1> To do list system</h1><br/>";
echo "Welcome, ".$_COOKIE['login'].'<br/>';
echo "Below you may find your to-do items: ";
echo "<br> <br>";
?>
<html>
<body>
 
<?php foreach($result as $res):?>
<tr>
<td> <?php echo $res['todo_item']; ?>  </td>
<td> <?php echo $res['date']; ?> </td>
<td> <?php echo $res['time']; ?> </td>
<td>
<form method = 'post' action = 'index.php'>
<input type="hidden" name="task_id" value="<?php echo $res['id']?>">
<input type="hidden" name="action" value="delete_task">
<input type="submit" value="Delete">
</form>
</td>
<td>
<form method = 'post' action = 'edit.php'>
<input type = "hidden" name="task_id" value="<?php echo $res['id']?>">
<input type="hidden" name="todo_item" value="<?php echo $res['todo_item']?>">
<input type="hidden" name="date" value="<?php echo $res['date']?>">
<input type="hidden" name="time" value="<?php echo $res['time']?>">
<input type="submit" value="Edit">
</form>
</td>
</tr>  
<?php endforeach;?>
</table>
<form method = 'post' action='index.php'>
<strong> Description: </strong> <input type='text' name='todo_item'/>
<strong> Date: </strong><input type='date' name='date'/>
<strong> Time: </strong><input type='time' name='time'/><br>
<input type = 'hidden' name ='action' value='add'><br>
<input type="submit" value="Add"/>
</form>
</body>
</html>
