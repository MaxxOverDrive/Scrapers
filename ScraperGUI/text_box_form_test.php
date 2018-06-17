<?php

include('new_db_connect.php');

$new_db_var = $GLOBALS['new_db_result'];

while($new_db_row = mysqli_fetch_assoc($new_db_var)) {
  echo htmlspecialchars($new_db_row['modelNum']);
}

?>
<div class="row">
  <div class="form-group col-md-12">
    <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php  ?></textarea><!-- DISPLAY INFO RESULTS -->
  </div>
</div>
