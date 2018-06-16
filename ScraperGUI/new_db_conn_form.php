
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

 <?php

 $db_host = $_GET['db_host'];
 $db_username = $_GET['db_username'];
 $db_pass = $_GET['db_pass'];
 $db_name = $_GET['db_name'];

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
