<div class="row">
  <div class="col-md-4 text-center">
    <h4>Choose Country</h4>
    <form action="index.php" method="POST">
      <select name="choose_country" class="form-control">
        <?php
          for($c_country = 0; $c_country < COUNT($country); $c_country++) { ?>
            <option value="<?php echo $c_country; ?>"><?php echo $country[$c_country]; ?></option>
    <?php } ?>
      </select>
      <button style="position: relative; top: 2vh;" type="submit" class="btn btn-outline-dark" name="submit_country">HUNT</button>
    </form>
  </div>
</div>

<?php
  if(isset($_POST['choose_country'])) {
    $selected_country = $_POST['choose_country']; ?>
    <div class="col-md-4 text-center">
      <h4>Choose State</h4>
      <form action="index.php" method="POST">
        <select name="choose_state" class="form-control"><?php

    for($c_state = 0; $c_state < COUNT($country); $c_state++) {
      ?><option value="<?php echo $state[$c_state]; ?>"><?php echo $state[$c_state]; ?></option><?php
    } ?>
    </select>
    <button style="position: relative; top: 2vh;" type="submit" class="btn btn-outline-dark" name="submit_state">Target1</button>
  </form>
</div><?php
  }

?>
