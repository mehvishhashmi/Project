<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<html>

<body>

<table border=1>
<tr>
<td>

<h2 align="center" padding-top: 50px;> EDIT YOUR TASK </h2>
</td>
</tr>
</table>
<br/>
<br/>
<table border=1>
<thead>
<th>Task</th>
<th>Date</th>
<th>Time</th>
<th>Edit</th>
</thead>

<td>
<form action="index.php" method="post">
  <input type="hidden" name="task_id" value="<?php echo $_POST['task_id']?>">
  <input type="text" name="new_todo_item" value="<?php echo $_POST['todo_item']?>">
 </td>
 <td>
 <input type="date" name="new_date" value="<?php echo $_POST['date']?>"></td>
 <td> <input type="time" name="new_time" value="<?php echo $_POST['time']?>">
 </td> <input type="hidden" name="action" value="edit_task">
  <td><input type="submit" value="Edit" class="button"> 
  <!-- </td://web.njit.edu/~mh449/Project/index.php>
-->
</form>
</body>
</html>
