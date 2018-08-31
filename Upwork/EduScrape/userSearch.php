<?php

$user_search_SQL = "SELECT * FROM BPPE1 WHERE school LIKE '%$user_search%'
                    OR phone LIKE '%$user_search%'
                    OR county LIKE '%$user_search%'
                    OR approved_programs LIKE '%$user_search%'
                    OR mailing_address LIKE '%$user_search%'
                    OR physical_address LIKE '%$user_search%'";

$user_search_Result = mysqli_query($conn, $user_search_SQL);
if(mysqli_num_rows($user_search_Result) > 0) {
  $GLOBALS['user_search_Result'] = $user_search_Result;
}
else {
  echo "There are no matches for your search";
}
$user_search_Var = $GLOBALS['user_search_Result'];
while($user_search_Row = mysqli_fetch_assoc($user_search_Var)) {
  $id_search[] = $user_search_Row['id'];
  $school_search[] = $user_search_Row['school'];
  $phone_search[] = $user_search_Row['phone'];
  $county_search[] = $user_search_Row['county'];
  $mailing_address_search[] = $user_search_Row['mailing_address'];
  $physical_address_search[] = $user_search_Row['physical_address'];
  $approved_programs_search[] = $user_search_Row['approved_programs'];
}
for($s = 0; $s < COUNT($county_search); $s++) {
  if(strpos($school_search[$s], $user_search)) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $id_search[$s]; ?>"></td>
      <td style="border: 1px solid black;"><?php echo $school_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $phone_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $county_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $mailing_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $physical_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $approved_programs_search[$s]; ?></td>
    </tr>
<?php }
  elseif(strpos($phone_search[$s], $user_search)) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $id_search[$s]; ?>"></td>
      <td style="border: 1px solid black;"><?php echo $school_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $phone_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $county_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $mailing_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $physical_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $approved_programs_search[$s]; ?></td>
    </tr>
<?php
  }
  elseif(strpos($county_search[$s], $user_search)) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $id_search[$s]; ?>"></td>
      <td style="border: 1px solid black;"><?php echo $school_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $phone_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $county_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $mailing_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $physical_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $approved_programs_search[$s]; ?></td>
    </tr>
<?php
  }
  elseif(strpos($mailing_address_search[$s], $user_search)) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $id_search[$s]; ?>"></td>
      <td style="border: 1px solid black;"><?php echo $school_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $phone_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $county_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $mailing_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $physical_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $approved_programs_search[$s]; ?></td>
    </tr>
<?php
  }
  elseif(strpos($physical_address_search[$s], $user_search)) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $id_search[$s]; ?>"></td>
      <td style="border: 1px solid black;"><?php echo $school_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $phone_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $county_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $mailing_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $physical_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $approved_programs_search[$s]; ?></td>
    </tr>
<?php
  }
  elseif(strpos($approved_programs_search[$s], $user_search)) {
    ?>
    <tr class="tableRow">
      <td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $id_search[$s]; ?>"></td>
      <td style="border: 1px solid black;"><?php echo $school_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $phone_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $county_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $mailing_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $physical_address_search[$s]; ?></td>
      <td style="border: 1px solid black;"><?php echo $approved_programs_search[$s]; ?></td>
    </tr>
<?php
  }

}

?>
