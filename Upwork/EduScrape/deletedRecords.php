<?php
$deleted_records_SQL = "SELECT * FROM BPPE1";
$deleted_records_Result = mysqli_query($conn, $deleted_records_SQL);

if(mysqli_num_rows($deleted_records_Result) > 0) {
  $GLOBALS['deleted_records_Result'] = $deleted_records_Result;
}

$deleted_records_Var = $GLOBALS['deleted_records_Result'];

while($deleted_records_Row = mysqli_fetch_assoc($deleted_records_Var)) {
  ini_set('memory_limit', '1024M');
  ini_set('max_execution_time', 300);
  $school_scrape_id[] = $deleted_records_Row['id'];
  $school_scrape[] = $deleted_records_Row['school'];
  $new_phone_scrape[] = $deleted_records_Row['phone'];
  $school_code_scrape[] = $deleted_records_Row['school_code'];
  $county_scrape[] = $deleted_records_Row['county'];
  $mailing_address_scrape[] = $deleted_records_Row['mailing_address'];
  $physical_address_scrape[] = $deleted_records_Row['physical_address'];
  $approved_programs_scrape[] = $deleted_records_Row['approved_programs'];
}
for($d = 0; $d < COUNT($school_scrape_id); $d++) {
  $deleted_row_check = mysqli_query($conn, "SELECT * FROM BPPE1_Scrape WHERE school_code='$school_code_scrape[$d]'");
  if(mysqli_num_rows($deleted_row_check) < 1) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id[$d]; ?>"></td>
      <td style="border: 1px solid black; background-color: #b2b2b2"><?php echo $school_scrape[$d]; ?></td>
      <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $new_phone_scrape[$d]; ?></td>
      <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $county_scrape[$d]; ?></td>
      <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $mailing_address_scrape[$d]; ?></td>
      <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $physical_address_scrape[$d]; ?></td>
      <td style="border: 1px solid black; background-color: #b2b2b2;"><?php echo $approved_programs_scrape[$d]; ?></td>
    </tr>
<?php
  }
}
?>
