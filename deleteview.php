<?php include 'head.php'?>
<h2>Delete Tasks</h2>
<?php include 'delete.php';?>
<form action="deletedata.php" method="POST">
  <select name="teamID" id="idList"> </select>
<input type="submit" value="Delete" name="delete">
</form>
<?php include 'selectdata.php';?>


</body>
</html>
