<?php


  $school_code_scrape_check_Var = $GLOBALS['school_code_scrape_check_SQL'];


  while($school_code_scrape_check_Row = mysqli_fetch_assoc($school_code_scrape_check_Var)) {
    ini_set('memory_limit', '1024M');
    ini_set('max_execution_time', 300);
    $school_id = $school_code_scrape_check_Row['id'];
    $current_school_code = $school_code_scrape_check_Row['school_code'];
    $current_school = $school_code_scrape_check_Row['school'];
    $current_phone = $school_code_scrape_check_Row['phone'];
    $current_county = $school_code_scrape_check_Row['county'];
    $current_mailing_address = $school_code_scrape_check_Row['mailing_address'];
    $current_physical_address = $school_code_scrape_check_Row['physical_address'];
    $current_approved_programs_temp = explode(',', $school_code_scrape_check_Row['approved_programs']);
    $current_approved_programs = sort($current_approved_programs_temp);

    if(($current_school === $school_scrape) && ($current_phone === $new_phone) && ($current_county === $county_scrape) && ($current_mailing_address === $mailing_address_scrape) && ($current_physical_address === $physical_address_scrape) && ($current_approved_programs === $approved_programs_scrape)) {
      $sameRow++;
      break;
    }
    else {//ALL IS NOT EQUIAL
      if($current_school !== $school_scrape) {
        if($school_scrape != NULL) {
          $school_info_SQL = "UPDATE `BPPE1` SET `school` = '$school_scrape' WHERE `BPPE1`.`id` = '$school_id'";
          $school_info_Result = mysqli_query($conn, $school_info_SQL);
          if (!mysqli_query($conn, $school_info_SQL)) {
            echo("Error description: " . mysqli_error($conn))."<br>";
          }
        }
      }

      if($current_phone !== $new_phone) {
          $phone_info_SQL = "UPDATE `BPPE1` SET `phone` = '$new_phone' WHERE `BPPE1`.`id` = '$school_id'";
          $phone_info_Result = mysqli_query($conn, $phone_info_SQL);
          if (!mysqli_query($conn, $phone_info_SQL)) {
            echo("Error description: " . mysqli_error($conn))."<br>";
          }
      }

      if($current_county !== $county_scrape) {
          $county_info_SQL = "UPDATE `BPPE1` SET `county` = '$county_scrape' WHERE `BPPE1`.`id` = '$school_id'";
          $county_info_Result = mysqli_query($conn, $county_info_SQL);
          if (!mysqli_query($conn, $county_info_SQL)) {
            echo("Error description: " . mysqli_error($conn))."<br>";
          }
      }

      if($current_mailing_address !== $mailing_address_scrape) {
        if($mailing_address_scrape != NULL) {
          $mailing_address_info_SQL = "UPDATE `BPPE1` SET `mailing_address` = '$mailing_address_scrape' WHERE `BPPE1`.`id` = '$school_id'";
          $mailing_address_info_Result = mysqli_query($conn, $mailing_address_info_SQL);
          if (!mysqli_query($conn, $mailing_address_info_SQL)) {
            echo("Error description: " . mysqli_error($conn))."<br>";
          }
        }
      }

      if($current_physical_address !== $physical_address_scrape) {
        if($physical_address_scrape != NULL) {
          $physical_address_info_SQL = "UPDATE `BPPE1` SET `physical_address` = '$physical_address_scrape' WHERE `BPPE1`.`id` = '$school_id'";
          $physical_address_info_Result = mysqli_query($conn, $physical_address_info_SQL);
          if (!mysqli_query($conn, $physical_address_info_SQL)) {
            echo("Error description: " . mysqli_error($conn))."<br>";
          }
        }
      }

      if($current_approved_programs !== $approved_programs_scrape) {
        if($approved_programs_scrape != NULL) {
          $approved_program_info_SQL = "UPDATE `BPPE1` SET `approved_programs` = '$approved_programs_scrape' WHERE `BPPE1`.`id` = '$school_id'";
          $approved_program_info_Result = mysqli_query($conn, $approved_program_info_SQL);
          if (!mysqli_query($conn, $approved_program_info_SQL)) {
            echo("Error description: " . mysqli_error($conn))."<br>";
          }
        }
      }

    }//END OF ELSE ALL IS NOT EQUAL

  }//END WHILE LOOP

?>
