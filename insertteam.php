<?php
include "connectdb.php";
/*
Get the information the user entered into the form
 */
if(isset($_POST['insert'])){
  $id = $_POST['newTeamId'];
  $name = $_POST['newTeamName'];
  $city = $_POST['newTeamCity'];
//if the user entered a number between 1-9
  if((int)$id < 10){
    $id = "0".$id;
  }

  $insert = "INSERT INTO teams VALUES ('$id','$name','$city');";
  if (!pg_query($insert)) {
     $failed = "INSERTION FAILED, Try an original Team ID...";
     echo"<script type='text/javascript'>alert('$failed.'); window.location.href = 'http://cs3319.gaul.csd.uwo.ca/skazi9/assignment3/teamview.php';</script>";
     die ("Database query failed!");
  }
  else {
    echo"<script type='text/javascript'>alert('INSERTION SUCCESSFUL'); window.location.href = 'http://cs3319.gaul.csd.uwo.ca/skazi9/assignment3/teamview.php';</script>";
  }
}
pg_close($connection);
?>
