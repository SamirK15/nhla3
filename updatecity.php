<?php include 'connectdb.php';
if (isset($_POST['updateCity'])){
  $updated_city = $_POST['newCity'];
  $query = "UPDATE games SET host_city = .$updated_city. WHERE game_id ='" .$id."'";
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
