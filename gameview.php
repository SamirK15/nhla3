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

  <form action="gameview.php" method="GET">
    <select name="gameID" id="gameIdList"> </select>
    <input type="submit" value="Find" name="getGame">
  </form>
  <?php include 'getgame.php'; ?>
  <?php include 'selectgame.php';?>
</body>
</html>
8fsMbEpd7n
