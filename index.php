<!DOCTYPE HTML>
<html>
<head>
<title>  Welcome to MA APP  </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include 'connectdb.php';?>
  <div>
    <span>HOME</span>
    <span>ADD TEAM</span>
  </div>
  <h1>
  Welcome boi this is a total trainwreck</h1>
  <form action="index.php" method="GET">
  <label>
    Team
    <input id="team" type="radio" name="order" value="team" checked>
  </label>
  <label>
    City
    <input id="city" type="radio" name="order"  value="city">
  </label>
  <input type="submit" name="submit">
  <?php include 'getdata.php';?>
  </form>
</body>
</html>
2KwX35vDqd
