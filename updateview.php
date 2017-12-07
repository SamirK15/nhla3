<?php include 'head.php'?>

  <form action="updatedata.php" method="POST">
    <select name="gameID" id="gameIdList"> </select>
    <input type="text" placeholder="Enter new city" name="newCity">
    <input type="submit" value="Update" name="update">
  </form>
  <?php include 'update.php';?>
  <?php include 'selectgame.php';?>
</body>
</html>
