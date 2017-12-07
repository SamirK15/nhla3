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

  <form action="updatedata.php" method="POST">
    <select name="gameID" id="gameIdList"> </select>
    <input type="text" placeholder="Enter new city" name="newCity">
    <input type="submit" value="Update" name="update">
  </form>
  <?php include 'update.php';?>
  <?php include 'selectgame.php';?>
</body>
</html>
8fsMbEpd7n
