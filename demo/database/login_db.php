<?php
   //Databse Credidentials
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_database = "bus_users";
  $error = " ";

  //initializing connection to the database

  $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
  if (!$conn) {
    die("Connection Failed".mysqli_error($conn));
  }
?>
