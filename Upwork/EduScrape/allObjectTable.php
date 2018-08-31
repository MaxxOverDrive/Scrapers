<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$conn = NEW MySQLi("", "", "", "");

$resultSet = $conn->query("SELECT * FROM BPPE1");
$scrapedSet = $conn->query("SELECT * FROM BPPE1_Scrape");
$sameRow = 0;

while($rows = $resultSet->fetch_assoc()) {
  $school_id[] = $rows['id'];
  $currentSchoolCode = $rows['school_code'];
  $school_code[] = $currentSchoolCode;
  $school[] = $rows['school'];
  $phone[] = $rows['phone'];
  $county[] = $rows['county'];
  $mailing_address[] = $rows['mailing_address'];
  $physical_address[] = $rows['physical_address'];
  $approved_programs[] = $rows['approved_programs'];

  $deletedSet = $conn->query("SELECT * FROM BPPE1_Scrape WHERE school_code='$currentSchoolCode'");

  if(!mysqli_num_rows($deletedSet) > 0) {
    while($deletedRows = $deletedSet->fetch_assoc()) {
      $deleted_school_id[] = $deletedRows['id'];
      $deleted_school_code[] = $deletedRows['school_code'];
      $deleted_school[] = $deletedRows['school'];
      $deleted_phone[] = $deletedRows['phone'];
      $deleted_county[] = $deletedRows['county'];
      $deleted_mailing_address[] = $deletedRows['mailing_address'];
      $deleted_physical_address[] = $deletedRows['physical_address'];
      $deleted_approved_programs[] = $deletedRows['approved_programs'];
    }
  }
}//END MAIN WHILE LOOP

while($newRows = $scrapedSet->fetch_assoc()) {
  $scraped_school_id = $newRows['id'];
  $scraped_school_code = $newRows['school_code'];
  $scraped_school = $newRows['school'];
  $scraped_phone = $newRows['phone'];
  $scraped_county = $newRows['county'];
  $scraped_mailing_address = $newRows['mailing_address'];
  $scraped_physical_address = $newRows['physical_address'];
  $scraped_approved_programs = $newRows['approved_programs'];

  $newSet = $conn->query("SELECT * FROM BPPE1 WHERE school='$scraped_school_code'");

  if(!mysqli_num_rows($newSet) > 0) {
    while($newRows = $newSet->fetch_assoc()) {
      $new_school_id[] = $newRows['id'];
      $new_school_code[] = $newRows['school_code'];
      $new_school[] = $newRows['school'];
      $new_phone[] = $newRows['phone'];
      $new_county[] = $newRows['county'];
      $new_mailing_address[] = $newRows['mailing_address'];
      $new_physical_address[] = $newRows['physical_address'];
      $new_approved_programs[] = $newRows['approved_programs'];
    }
  }
  else {
    include('compareObjectTable.php');
  }
}


  if(isset($_POST['search_submit']) && !empty($_POST['user_search'])) {
    $user_search = $_POST['user_search'];
    $searchSet = $conn->query("SELECT * FROM BPPE1 WHERE school LIKE '%$user_search%'
                        OR WHERE phone LIKE '%$user_search%'
                        OR WHERE county LIKE '%$user_search%'
                        OR WHERE approved_programs LIKE '%$user_search%'
                        OR WHERE mailing_address LIKE '%$user_search%'
                        OR WHERE physical_address LIKE '%$user_search%'");
    while($searchRow = $searchSet->fetch_assoc()) {
      $search_school_id = $searchRow['id'];
      $search_school_code = $searchRow['school_code'];
      $search_school = $searchRow['school'];
      $search_phone = $searchRow['phone'];
      $search_county = $searchRow['county'];
      $search_mailing_address = $searchRow['mailing_address'];
      $search_physical_address = $searchRow['physical_address'];
      $search_approved_programs = $searchRow['approved_programs'];
      ?><tr class='tableRow'>
          <td><input type='checkbox' class='form-check-input' name='export_single_csv' value='"<?php echo $search_school_id; ?>"'></td>
          <td class='tableData'><?php echo $search_school; ?></td>
          <td class='tableData'><?php echo $search_phone; ?></td>
          <td class='tableData'><?php echo $search_county; ?></td>
          <td class='tableData'><?php echo $search_mailing_address; ?></td>
          <td class='tableData'><?php echo $search_physical_address; ?></td>
          <td class='tableData'><?php echo $search_approved_programs; ?></td>
        </tr><?php
    }
  }
  elseif(isset($_POST['show_current_school'])) {
    for($i = 0; $i < COUNT($school_id); $i++) {
      ?><tr class='tableRow'>
          <td><input type='checkbox' class='form-check-input' name='export_single_csv' value='"<?php echo $school_id[$i]; ?>"'></td>
          <td class='tableData'><?php echo $school[$i]; ?></td>
          <td class='tableData'><?php echo $phone[$i]; ?></td>
          <td class='tableData'><?php echo $county[$i]; ?></td>
          <td class='tableData'><?php echo $mailing_address[$i]; ?></td>
          <td class='tableData'><?php echo $physical_address[$i]; ?></td>
          <td class='tableData'><?php echo $approved_programs[$i]; ?></td>
        </tr><?php
    }
  }
  elseif(isset($_POST['show_new_records'])) {
    for($i = 0; $i < COUNT($new_school_id); $i++) {
      ?><tr class='tableRow'>
          <td><input type='checkbox' class='form-check-input' name='export_single_csv' value='"<?php echo $new_school_id[$i]; ?>"'></td>
          <td class='tableData'><?php echo $new_school[$i]; ?></td>
          <td class='tableData'><?php echo $new_phone[$i]; ?></td>
          <td class='tableData'><?php echo $new_county[$i]; ?></td>
          <td class='tableData'><?php echo $new_mailing_address[$i]; ?></td>
          <td class='tableData'><?php echo $new_physical_address[$i]; ?></td>
          <td class='tableData'><?php echo $new_approved_programs[$i]; ?></td>
        </tr><?php
    }
  }
  elseif(isset($_POST['show_deleted_records'])) {
    for($i = 0; $i < COUNT($deleted_school_id); $i++) {
      ?><tr class='tableRow'>
          <td><input type='checkbox' class='form-check-input' name='export_single_csv' value='"<?php echo $deleted_school_id[$i]; ?>"'></td>
          <td class='tableData'><?php echo $deleted_school[$i]; ?></td>
          <td class='tableData'><?php echo $deleted_phone[$i]; ?></td>
          <td class='tableData'><?php echo $deleted_county[$i]; ?></td>
          <td class='tableData'><?php echo $deleted_mailing_address[$i]; ?></td>
          <td class='tableData'><?php echo $deleted_physical_address[$i]; ?></td>
          <td class='tableData'><?php echo $deleted_approved_programs[$i]; ?></td>
        </tr><?php
    }
  }
  elseif(isset($_POST['show_changed_records'])) {
    //ECHO CHANGED ROWS
  }
  else {//MAY PUT THIS BACK UP TOP FOR FASTER VIEW TIME
    for($i = 0; $i < COUNT($school_id); $i++) {
      ?><tr class='tableRow'>
          <td><input type='checkbox' class='form-check-input' name='export_single_csv' value='"<?php echo $school_id[$i]; ?>"'></td>
          <td class='tableData'><?php echo $school[$i]; ?></td>
          <td class='tableData'><?php echo $phone[$i]; ?></td>
          <td class='tableData'><?php echo $county[$i]; ?></td>
          <td class='tableData'><?php echo $mailing_address[$i]; ?></td>
          <td class='tableData'><?php echo $physical_address[$i]; ?></td>
          <td class='tableData'><?php echo $approved_programs[$i]; ?></td>
        </tr><?php
    }
  }

?>
