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

</tr>  
<?php endforeach;?>
</table>

<form method = 'post' action='index.php'>
<strong>  &emsp;  ITEM: </strong>
<input type='text' name='todo_item'/>
&nbsp; &nbsp; <strong> DATE: &nbsp; </strong><input type='date' name='date'/>
&nbsp;&nbsp; <strong> TIME: &nbsp; &nbsp;</strong><input type='time' name='time'/><br>
<input type = 'hidden' name ='action' value='add'><br>
<input type="submit" value="Add" class="login-button"/>
</form>
</body>
</html>
