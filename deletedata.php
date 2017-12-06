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
<form action="deletedata.php" method="POST">
  <select name="teamID" id="idList"> </select>
<input type="submit" value="Delete" name="delete">
</form>
<?php include 'selectdata.php';?>
</body>
</html>
