<?php

$db_host = "127.0.0.1";
$db_username = "root";
$db_pass = "mf!Developer1";
$db_name = "morse";

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

  if(!$conn) {
    die('error msg' . mysqli_connect_error());
  }
  else {
    $modelNumSQL = "SELECT modelNum FROM currentmorse";

    $modelNumResult = mysqli_query($conn, $modelNumSQL);

    if(mysqli_num_rows($modelNumResult) > 0) {
      $GLOBALS['modelNumResult'] = $modelNumResult;
    }
    else {
      echo "NO TIITIES ON THE BACON!"
    }

    
 ?>
