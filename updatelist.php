<html>
  <head>
     <title>Completed Task</title>
  </head>
     <body>
     <div class="header">
     <h2>Completed Task</h2>
     </div>
     <table id="todo">
     <tr>
     <th>Name</th>
     <th>Due Date</th>
     <th>Due Time</th>
  </tr>
<?php 
  if($result == NULL)
  echo"error";
  else foreach($result as $res):?>
  <tr>
<td><?php echo $res['name'];?></td>

<td><?php echo $res['date'];?></td>								
<td><?php echo date('h:iA',strtotime($res['time']));?></td>
</tr>
<?php
endforeach;
?>
																		    </table>
																		      </body>
																		      </html>
