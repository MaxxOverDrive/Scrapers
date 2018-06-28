

<div class="col-md-12 text-center">
  <!--LIST OF DATABASES-->
  <h4>Connect to Database</h4>
</div>
<div class="radio">
  <ul>
    <li class="infoList"><label><input type="radio" name="database_list" value="db_num1">MattysBins</label></li>
    <li class="infoList"><label><input type="radio" name="database_list" value="db_num2">CMS</label></li>
    <li class="infoList"><label><input type="radio" name="database_list" value="db_num3">Spider</label></li>
  </ul>
</div>

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
         <button type="submit" class="btn btn-info" name="new_db_submit">Connect</button>
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
    file_put_contents();
  }
?>
