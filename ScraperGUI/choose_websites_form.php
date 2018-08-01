
<div id="new_url_form" class="col-md-12">
  <form action="index.php" method="POST">
      <div class="col-md-12 text-center">
        <h4 for="newURL">Enter New Website</h4>
        <input type="text" name="newURL" id="newURL"><!-- FIGUR OUT NAME, VALUE & ID -->
      </div>
      <div class="col-md-12 text-center">
        <button class="btn btn-success" type="submit" name="submitNewURL">New URL</button>
      </div>
  </form>
</div>
    <?php
      if(isset($_POST['submitNewURL'])) {
        $newURL_temp = $_POST['newURL'];
        $newURL = $newURL_temp.PHP_EOL;
        file_put_contents('URLs/urls.html', $newURL, FILE_APPEND | LOCK_EX);
      }
       ?>
<div style="border: 1px solid black;" class="col-md-12 text-center">
  <form action="index.php" method="POST">
    <?php
      $url_info = fopen("URLs/urls.html", "r");
        if ($url_info) {
            while (($line = fgets($url_info)) !== false) {
                $url_array[] = trim($line);
            }
            fclose($url_info);
        }
        else {
            echo "Something Happened!";
        }
        for($u = 0; $u < COUNT($url_array); $u++) { ?>
            <div class="col-md-12"><!--CHECKBOX -->
                <input class="form-check-input" type="checkbox" name="url" value="<?php echo $url_array[$u]; ?>" id="<?php echo $url_array[$u]; ?>">
                <label class="form-check-label" for="<?php echo $url_array[$u]; ?>">
                  <?php
                    echo $url_array[$u];
                  ?>
                </label>
            </div>
    <?php } ?>
          <button class="btn btn-success" type="submit" name="submitURL">Search</button>
  </form>
</div>
