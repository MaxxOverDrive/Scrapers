
<div class="col-md-3">
   <div class="col-md-12 text-center">
     <!--LIST OF DATABASES-->
     <h4>Connect to Database</h4>
   </div>
   <form action="index.php" method="POST">
     <div class="col-md-12">
        <ul>
         <?php
         $fi = new FilesystemIterator(__DIR__."/Databases", FilesystemIterator::SKIP_DOTS);

          for($db = 1; $db <= iterator_count($fi); $db++) {
            $db_handle = fopen('Databases/db_num'.$db.'.csv', 'r');
            if($db_handle) {
              while(($list = fgets($db_handle)) !== false) {
                $db_list[] = $list;
              }
              fclose($db_handle);
              $dbName = preg_replace('/(.*)_/', '', $db_list[3]);
              ?><li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num<?php echo $db; ?>"><?php echo $dbName; ?></label></li><?php
            }
            else {
              echo "There are currently No Databases";
            }
          }
        ?>
        </ul>
     </div>
     <div style="margin: -5% 0 3% 0;" class="col-md-12 text-center">
         <button type="submit" class="btn btn-info" name="db_conn_submit">Connect</button>
     </div>
 </form>

 <div class="col text-center">
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
 </div><!--col-12 FORM WRAPPER-->
 <?php
  if(isset($_POST["new_db_submit"])) {
    $dbi = (iterator_count($fi) + 1);
    $db_host = $_POST['db_host'];
    $db_username = $_POST['db_username'];
    $db_pass = $_POST['db_pass'];
    $db_name = $_POST['db_name'];
    $connArray = array($db_host, $db_username, $db_pass, $db_name);
    if(!empty($connArray)) {
      $file = fopen("Databases/db_num$dbi.csv","w");
      fputcsv($file,explode(',',$connArray));
      fclose($file);
      header('location: index.php');
    }
    else {
      echo "All Form Entries Must Be Filled.";
    }
  }
?>
</div><!--col-3 wrapper-->
