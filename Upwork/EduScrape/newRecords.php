<?php

$new_records_SQL = "SELECT * FROM BPPE1_Scrape";
$new_records_Result = mysqli_query($conn, $new_records_SQL);

if(mysqli_num_rows($new_records_Result) > 0) {
  $GLOBALS['new_records_Result'] = $new_records_Result;
}

$new_records_Var = $GLOBALS['new_records_Result'];

while($new_records_Row = mysqli_fetch_assoc($new_records_Var)) {
  ini_set('memory_limit', '1024M');
  ini_set('max_execution_time', 300);
  $school_scrape_id[] = $new_records_Row['id'];
  $school_scrape[] = $new_records_Row['school'];
  $new_phone_scrape[] = $new_records_Row['phone'];
  $school_code_scrape[] = $new_records_Row['school_code'];
  $county_scrape[] = $new_records_Row['county'];
  $mailing_address_scrape[] = $new_records_Row['mailing_address'];
  $physical_address_scrape[] = $new_records_Row['physical_address'];
  $approved_programs_scrape[] = $new_records_Row['approved_programs'];
}

  for($n = 0; $n < COUNT($school_scrape_id); $n++) {
    $new_row_check = mysqli_query($conn, "SELECT * FROM BPPE1 WHERE school_code='$school_code_scrape[$n]'");
    if(mysqli_num_rows($new_row_check) < 1) {
      ?>
      <tr class="tableRow">
        <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id[$n]; ?>"></td>
        <td style="border: 1px solid black; background-color: #b2b2b2"><?php echo $school_scrape[$n]; ?></td>
        <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $new_phone_scrape[$n]; ?></td>
        <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $county_scrape[$n]; ?></td>
        <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $mailing_address_scrape[$n]; ?></td>
        <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $physical_address_scrape[$n]; ?></td>
        <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $approved_programs_scrape[$n]; ?></td>
      </tr>
  <?php
    }
    if(isset($_POST['export_csv'])) {

      if(empty($_POST['export_single_csv'])) {
        echo "You did not choose any schools to export";
      }
      else {
        include('export_indi_csv.php');
      }
    }//END OF IF ISSET EXPORT CSV

    if(isset($_POST['export_all_csv'])) {
      include('export_all_csv.php');
    }
  }


?>
