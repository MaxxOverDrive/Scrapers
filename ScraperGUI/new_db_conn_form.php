

<div class="col-md-12 text-center">
  <!--LIST OF DATABASES-->
  <h4>Connect to Database</h4>
</div>
<form action="index.php" method="POST">
  <div class="form-group">
    <div class="col-sm-12">
      <ul>
        <li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num1">ScraperGUI</label></li>
        <li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num2">MattysBins</label></li>
        <li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num3">CMS</label></li>
      </ul>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-primary" name="db_conn_submit">Connect</button>
    </div>
  </div>
</form>
<?php
  if(isset($_POST['db_conn_submit'])) {
    $db_info = fopen("Databases/db_num1.csv", "r");
      if ($db_info) {
          while (($line = fgets($db_info)) !== false) {
              $db_conn[] = trim($line);
          }
          fclose($db_info);
      }
      else {
          echo "Something Happened!";
      }

    $conn = mysqli_connect("$db_conn[0]", "$db_conn[1]", "$db_conn[2]", "$db_conn[3]");

      if(!$conn) {
        die('error msg' . mysqli_connect_error());
      }
      else {
        $db_table_SQL = "SHOW TABLES FROM ".$db_conn[3]." ";
        $db_table_Result = mysqli_query($conn, $db_table_SQL);

        if(mysqli_num_rows($db_table_Result) > 0) {
          $final_result = "<h1 class='finalResults'>You are connected</h1>";
          $GLOBALS['db_table_Result'] = $db_table_Result;
        }
        else {
          echo "There are no tables in the database!";
        }
      }
      mysqli_close($conn);
  }
?>

 <div class="col-md-12">
   <h4>Connect New Database</h4>

   <form id="db_connect_form" class="form-horizontal" action="index.php" method="POST">

     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" name="db_host" placeholder="Enter database host">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" name="db_username" placeholder="Enter username">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12">
         <input type="password" class="form-control" name="db_pass" placeholder="Enter password">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" name="db_name" placeholder="Enter database name">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12 text-center">
         <button type="submit" class="btn btn-primary" name="new_db_submit">Connect</button>
       </div>
     </div>
   </form>


 </div>
 <?php

  if(isset($_POST["new_db_submit"])) {
    $db_host = $_POST['db_host'];
    $db_username = $_POST['db_username'];
    $db_pass = $_POST['db_pass'];
    $db_name = $_POST['db_name'];
    $connArray = array($db_host, $db_username, $db_pass, $db_name);
    if(!empty($connArray)) {
      $file = fopen("Databases/db_num1.csv","w");

      foreach ($connArray as $connData)
        {
        fputcsv($file,explode(',',$connData));
        }

      fclose($file);
    }
    else {
      echo "All Form Entries Must Be Filled.";
    }

  }
?>
