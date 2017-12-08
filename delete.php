<?php include 'connectdb.php';

/*
This code runs when the user clicks the Delete submit button.
It makes a query to delete and then queries it.
 */

if (isset($_POST['delete'])){
  $delete_entry = $_POST['teamID'];
  $id = (string)$delete_entry;
  $sql = "DELETE FROM teams WHERE team_id ='" .$id."'";
  $result = pg_query($sql);
  if (!$result){
    $errormessage = pg_last_error();
    echo "Error with deletion: " . $errormessage;
    exit();
    }
}

pg_close($connection);
?>
