<?php
/*
$db_host = "";
$db_username = "";
$db_pass = "";
$db_name = "";

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

*/
 ?>
 <div class="col-md-4">
   <h4>Connect New Database</h4>

   <form id="db_connect_form" class="form-horizontal" action="index.php" method="POST">

     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" id="db_host" placeholder="Enter database host">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" id="db_username" placeholder="Enter username">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12">
         <input type="password" class="form-control" id="db_pass" placeholder="Enter password">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" id="db_name" placeholder="Enter database name">
       </div>
     </div>

     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-info">Connect</button>
       </div>
     </div>
   </form>

 </div>
