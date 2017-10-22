<?php
   //Databse Credidentials
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_database = "messages";

  //initializing connection to the database

  $connsms = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
  if (!$connsms) {
    die("Connection Failed".mysqli_error($connsms));
  }
?>