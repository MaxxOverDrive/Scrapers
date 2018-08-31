<?php

$current_school_clear_SQL = mysqli_query($conn, "DELETE FROM `BPPE1` WHERE `BPPE1`.`id` = id");
$all_school_transfer_SQL = "SELECT * FROM BPPE1_Scrape";
$all_school_transfer_Result = mysqli_query($conn, $all_school_transfer_SQL);

if(mysqli_num_rows($all_school_transfer_Result) > 0) {
  $GLOBALS['all_school_transfer_Result'] = $all_school_transfer_Result;
}
$all_school_transfer_Var = $GLOBALS['all_school_transfer_Result'];

while($all_school_transfer_Row = mysqli_fetch_assoc($all_school_transfer_Var)) {
  ini_set('memory_limit', '1024M');
  ini_set('max_execution_time', 300);
  $school_scrape_id[] = $all_school_transfer_Row['id'];
  $school_scrape[] = $all_school_transfer_Row['school'];
  $new_phone[] = $all_school_transfer_Row['phone'];
  $school_code_scrape[] = $all_school_transfer_Row['school_code'];
  $county_scrape[] = $all_school_transfer_Row['county'];
  $mailing_address_scrape[] = $all_school_transfer_Row['mailing_address'];
  $physical_address_scrape[] = $all_school_transfer_Row['physical_address'];
  $approved_programs_scrape[] = $all_school_transfer_Row['approved_programs'];
}

echo COUNT($school_scrape_id);

for($t = 0; $t < COUNT($school_scrape_id); $t++) {
  $all_school_info_SQL = "INSERT INTO BPPE1 (school, phone, school_code, county, mailing_address, physical_address, approved_programs)
                          VALUES ('$school_scrape[$t]', '$new_phone[$t]', '$school_code_scrape[$t]', '$county_scrape[$t]', '$mailing_address_scrape[$t]', '$physical_address_scrape[$t]', '$approved_programs_scrape[$t]')";
  $all_school_info_Result = mysqli_query($conn, $all_school_info_SQL);

  if (!mysqli_query($conn, $all_school_info_SQL)) {
    echo("Error description: " . mysqli_error($conn))."<br>";
  }

}

/*
  $school_code_scrape_check_SQL = mysqli_query($conn, "SELECT * FROM BPPE1 WHERE school_code='$school_code_scrape'");

  if(mysqli_num_rows($school_code_scrape_check_SQL) > 0) {
    $GLOBALS['school_code_scrape_check_SQL'] = $school_code_scrape_check_SQL;
    include('compare.php');
  }
  else {


    //$scrape_db_wipe_SQL = mysqli_query($conn, "DELETE FROM `BPPE1_Scrape` WHERE `BPPE1_Scrape`.`id` = id");


 }
*/

if(mysqli_affected_rows($conn) > 0) {
  echo $t . " Rows Entered";
  include('objectTable.php');
}
else {
  echo "No Rows Entered";
}

?>
