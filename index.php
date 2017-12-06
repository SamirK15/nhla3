<!DOCTYPE HTML>
<html>
<head>
<title>  Welcome to MA APP  </title>

</head>
<body>

  <div>
    <a href="deletedata.php" > DELETE </a>
    <span>ADD TEAM</span>
  </div>
  <h1>
  Welcome boi this is a total trainwreck</h1>
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
</html>
8fsMbEpd7n
