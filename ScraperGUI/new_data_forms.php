

  <div class="row">

    <div class="col text-center">
        <form action="index.php" method="POST">
              <h4 for="database_action_dropdown">Database Tables</h4>
              <select class="form-control" id="database_action_dropdown"><!-- FIGUR OUT NAME, VALUE & ID -->
                <?php
                  $db_table_Var = $GLOBALS['db_table_Result'];

                  while($db_table_Row = mysqli_fetch_array($db_table_Var)) { ?>
                    <option><?php echo $db_table_Row[0]; ?></option>
            <?php  }  ?>
              </select>
              <h4>Database Actions</h4>
              <!--DABATASE ACTIONS -->
              <label class="radio-inline"><input type="radio" name="db_action" value="send_data">Send</label>
              <label class="radio-inline"><input type="radio" name="db_action" value="get_data">Receive</label>
              <button class="btn btn-success" type="submit" name="submitCompete">Submit</button>
        </form>
      </div>


      <div class="col">
        <form action="index.php" method="POST">
          <!--LIST OF FILE TYPES TO SAVE AS -->

              <h4 for="file_type">Save Contents</h4>
              <select class="form-control" name="file_type">
                <option>Select File Type</option>
                <option>TEXT</option>
                <option>HTML</option>
                <option name="export_csv">CSV</option>
                <option>EXCEL</option>
                <option>DOXC</option>
              </select>
              <button class="btn btn-success" type="submit" name="submitFileType">Save</button>
        </form>
      </div>
    </div>

<?php

  if(isset($_POST['export_csv'])) {
    $scraped_table_SQL = "SELECT * FROM Scraper_GUI ORDER BY school";
    $scraped_table_Result = mysqli_query($conn2, $scraped_table_SQL);
    $GLOBALS['scraped_table_Result'] = $scraped_table_Result;
    $scraped_table_Var = $GLOBALS['scraped_table_Result'];

    while($scraped_table_Row = mysqli_fetch_assoc($scraped_table_Var)) {
      ini_set('memory_limit', '1024M');
      ini_set('max_execution_time', 300);
      //ENTER AS MANY ROWS AS YOU WANT IN ARRAY
      $csv_array = array($scraped_table_Row[''], $scraped_table_Row['']);
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=schoolData.csv');
      $output = fopen("php://output", "w");
      fputcsv($output, $csv_array);
    }
    fclose($output);
  }
?>
