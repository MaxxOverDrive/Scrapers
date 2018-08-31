<?php

while($rows = $resultSet->fetch_assoc()) {
  $school_id = $rows['id'];
  $current_school_code = $rows['school_code'];
  $current_school = $rows['school'];
  $current_phone = $rows['phone'];
  $current_county = $rows['county'];
  $current_mailing_address = $rows['mailing_address'];
  $current_physical_address = $rows['physical_address'];
  $current_approved_programs = $rows['approved_programs'];

  ?><tr class='tableRow'>
      <td><input type='checkbox' class='form-check-input' name='export_single_csv' value='"<?php echo $school_id[$n]; ?>"'></td>
      <td class='tableData'><?php echo $current_school; ?></td>
      <td class='tableData'><?php echo $current_phone; ?></td>
      <td class='tableData'><?php echo $current_county; ?></td>
      <td class='tableData'><?php echo $current_mailing_address; ?></td>
      <td class='tableData'><?php echo $current_physical_address; ?></td>
      <td class='tableData'><?php echo $current_approved_programs; ?></td>
    </tr><?php
}

?>
