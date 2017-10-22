<?php include('../database/msg_db.php');?>

<?php 

  $querysms = "SELECT * FROM `sms`";
  $resultsms = mysqli_query($connsms, $querysms) or die(mysqli_error($connsms));
  $countsms = mysqli_num_rows($resultsms);

?>