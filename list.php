<?php
echo "<h1> To do list system</h1><br/>";
echo "Welcome, ".$_COOKIE['login'].'<br/>';
echo "Below you may find your to-do items: ";
echo "<br> <br>";

?>
<html>
<body>
 
  <div class = "header">
  <h2>Add Item</h2>
  <form method = 'post' action='index.php'>
  <input type="text" name="name" placeholder="Description..." required>
  <input type="date" name="date" required>
  <input type="time" step=1 name="time" required>
  <input type = 'hidden' name = 'action' value='add'><br>
  <input type="submit" value="Add" class="todobutton btn2">
  </form>

 </body>
 </html>
