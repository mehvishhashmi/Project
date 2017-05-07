<html>
  <head>
  <title>Edit Item</title>
  </head>
  <body>
  <div class="header">
  <h2>Edit Item</h2>
  <form action="index.php" method="post">
  <input type="hidden" name="nid" required value="<?php echo $_POST['id'];?>">
  <input type="text" name="nname" required value="<?php echo $_POST['name'];?>">
  <input type="date" name="ndate" required value="<?php echo $_POST['date'];?>">
  <input type="time" step=1 name="ntime" required value="<?php echo $_POST['time'];?>">
  <input type="hidden" name="action" value="edit">
  <input type="submit" value="Update" class="todobutton btn2">
  </form>
  </div>
</body>
</html>
