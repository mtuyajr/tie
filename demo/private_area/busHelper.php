<?php include('../database/db.php');?>

<?php 
  $querybus = "SELECT * FROM `bus_info`";
  $resultbus = mysqli_query($conn, $querybus) or die(mysqli_error($conn));
  $countbus = mysqli_num_rows($resultbus);
  ?>