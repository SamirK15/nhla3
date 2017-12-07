<?php include 'head.php'?>
  <?php include 'getdata.php';?>
  <form action="index.php" method="GET">
  <label>
    Team
    <input id="team" type="radio" name="order" value="team" <?php echo $team_button; ?>>
  </label>
  <label>
    City
    <input id="city" type="radio" name="order"  value="city" <?php echo $city_button; ?>>
  </label>
  <input type="submit" name="submit">
  </form>
</body>
