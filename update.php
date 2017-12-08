<?php include 'connectdb.php';
/*
this is for delete form
 */
if (isset($_POST['update'])){
  $update_entry = $_POST['gameID'];
  $updated_city = $_POST['newCity'];
  $id = (string)$update_entry;
  $query = "UPDATE games SET host_city ='".$updated_city."' WHERE game_id ='" .$id."'";
  $result = pg_query($query);
  if (!$result){
    $errormessage = pg_last_error();
    echo "Error with deletion: " . $errormessage;
    exit();
    }
}
?>

<script>
var c = <?php echo $updated_city; ?>;
alert(c);
</script>
