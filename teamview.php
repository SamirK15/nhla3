<?php include 'head.php'?>
<h2>Insert New Team</h2>

<form action="insertteam.php" method="POST">
  <div>
    <label> ID
      <input type="number" name="newTeamId" min="1" max="99" required/>
    </label>
  </div>
  <div>
    <labeL> Name
      <input type="text" name="newTeamName" required/>
    </labeL>
  </div>
  <div>
    <label> City
      <input type="text" name="newTeamCity" required/>
    </label>
  </div>
    <input type="submit" value="Insert" name="insert" />
</form>


<h2>Delete Team</h2>
<?php include 'delete.php';?>
<form action="teamview.php" method="POST">
  <select name="teamID" id="idList"> </select>
<input type="submit" value="Delete" name="delete">
</form>
<?php include 'selectdata.php';?>

</body>
</html>
