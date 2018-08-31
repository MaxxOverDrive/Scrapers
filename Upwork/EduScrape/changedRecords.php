<?php

$changed_records = $conn->query("SELECT * FROM BPPE1_Scrape");

$sameRow = 0;
while($changed_records_Row = $changed_records->fetch_assoc()) {
  ini_set('memory_limit', '1024M');
  ini_set('max_execution_time', 300);
  $school_scrape_id = $changed_records_Row['id'];
  $school_scrape = $changed_records_Row['school'];
  $new_phone_scrape = $changed_records_Row['phone'];
  $school_code_scrape = $changed_records_Row['school_code'];
  $county_scrape = $changed_records_Row['county'];
  $mailing_address_scrape = $changed_records_Row['mailing_address'];
  $physical_address_scrape = $changed_records_Row['physical_address'];
  $approved_programs_scrape_temp = explode(',', $changed_records_Row['approved_programs']);
  $approved_programs_scrape = sort($approved_programs_scrape_temp);

  $changed_row_check = $conn->query("SELECT * FROM BPPE1 WHERE school_code='$school_code_scrape'");

  if(mysqli_num_rows($changed_row_check) > 0) {
    $GLOBALS['changed_row_check'] = $changed_row_check;
  }
  else {
    ?><tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
      ?><td scope="col" style="border: 1px solid black; font-size: 100%; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
  }
  $changed_row_Var = $GLOBALS['changed_row_check'];
  while($changed_row_Row = mysqli_fetch_assoc($changed_row_Var)) {
    ini_set('memory_limit', '1024M');
    ini_set('max_execution_time', 300);
    $current_school_id = $changed_row_Row['id'];
    $current_school_code = $changed_row_Row['school_code'];
    $current_school = $changed_row_Row['school'];
    $current_phone = $changed_row_Row['phone'];
    $current_county = $changed_row_Row['county'];
    $current_mailing_address = $changed_row_Row['mailing_address'];
    $current_physical_address = $changed_row_Row['physical_address'];
    $current_approved_programs_temp = explode(',', $changed_row_Row['approved_programs']);
    $current_approved_programs = sort($current_approved_programs_temp);

    if(($current_school === $school_scrape) && ($current_phone === $new_phone_scrape) && ($current_county === $county_scrape) && ($current_mailing_address === $mailing_address_scrape) && ($current_physical_address === $physical_address_scrape) && ($current_approved_programs === $approved_programs_scrape) ) {
      $sameRow++;
      break;
    }
    else {//ALL IS NOT EQUIAL

      if($current_school !== $school_scrape) {
          ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
          ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
          ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
          ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
          ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
          ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
          ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
      }

      if($current_phone !== $new_phone_scrape) {
        ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
      }

      if($current_county !== $county_scrape) {
        ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
      }

      if($current_mailing_address !== $mailing_address_scrape) {
        ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
      }

      if($current_physical_address !== $physical_address_scrape) {
        ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
      }

      if($current_approved_programs !== $approved_programs_scrape) {
        ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $school_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $new_phone_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $county_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $mailing_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $physical_address_scrape; ?></td><?php
        ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $approved_programs_scrape; ?></td></tr><?php
      }

    }//END OF ELSE ALL IS NOT EQUAL
  }

}

?>
