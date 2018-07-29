<?php

$db_host = $_POST['db_host'];
$db_username = $_POST['db_username'];
$db_pass = $_POST['db_pass'];
$db_name = $_POST['db_name'];
$db_conn_array = array($db_host, $db_username, $db_pass, $db_name);

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

  if(!$conn) {
    die('error msg' . mysqli_connect_error());
  }
  else {
    /*include('/Databases/databases.php');
    //$db_array[] =
    file_put_contents('\/Databases\/databases.php', $db_conn_array);*/

    $new_db_SQL = "SELECT modelNum FROM Competitors";

    $new_db_result = mysqli_query($conn, $new_db_SQL);

    if(mysqli_num_rows($new_db_result) > 0) {
      $GLOBALS['new_db_result'] = $new_db_result;
      //$displayInfo[] = "<h1>Titties Mcfly!</h1>";
    }

    else {
      echo "<h1>No Results Found</h1>";
    }

  }


 ?>
