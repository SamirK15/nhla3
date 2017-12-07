<!DOCTYPE HTML>
<html>
<head>
<title>  Welcome to MA APP  </title>


</head>
<body>
  <div>
    <a href="index.php" > HOME </a>
    <a href="deletedata.php" > DELETE </a>
    <a href="updatedata.php" > UPDATE </a>
    <a href="ofdata.php"> OFFICIALS</a>
    <a href="gameview.php"> GAME </a>
    <span>ADD TEAM</span>
  </div>

<h2>Delete Tasks</h2>
<?php include 'delete.php';?>
<form action="deletedata.php" method="POST">
  <select name="teamID" id="idList"> </select>
<input type="submit" value="Delete" name="delete">
</form>
<?php include 'selectdata.php';?>


</body>
</html>
