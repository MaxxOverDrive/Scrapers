<?php

$db_host = $_POST['db_host'];
$db_username = $_POST['db_username'];
$db_pass = $_POST['db_pass'];
$db_name = $_POST['db_name'];

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

  if(!$conn) {
    die('error msg' . mysqli_connect_error());
  }
  else {

    $insertSQL = "INSERT INTO ";
    $insertResult = mysqli_query($conn, $insertSQL);

    $selectSQL = "INSERT INTO ";
    $selectResult = mysqli_query($conn, $selectSQL);

    if(mysqli_affected_rows($insertResult) > 0) {
      echo "There were items inserted into the database";
    }
    else {
      echo "No information was inserted, please try again!";
    }

    if(mysqli_num_rows($selectResult) > 0) {
      $GLOBALS['selectResult'] = $selectResult;
    }
    else {
      echo 'No information was found, please ensure database information is correct';
    }

  }
  mysqli_close($conn);

 ?>
