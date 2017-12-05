<!DOCTYPE HTML>
<html>
<head>
<title>  Welcome to MA APP  </title>


</head>
<body>
  <div>
    <span>HOME</span>
    <span>ADD TEAM</span>
  </div>

<h2>Delete Tasks</h2>
<form action="index.php" method="POST">
  <select name="teamID" id="idList">
  </select>
<input type="submit" value="Delete">
<?php include 'delete.php';?>
</form>

</body>
</html>
