<div id="new_url_form" class="col-md-12">
  <form action="index.php" method="POST">

    <div class="form-group">
      <div class="col-md-12 text-center">
        <h4 for="newURL">Enter New Website</h4>
        <input type="text" name="newURL" id="newURL"><!-- FIGUR OUT NAME, VALUE & ID -->
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12 text-center">
        <button class="btn btn-success" type="submit" name="submitNewURL">Search</button>
      </div>
    </div>

  </form>
</div>


    <?php
      if(isset($_POST['newURL'])) {
        $newURL_temp = $_POST['newURL'];
        $newURL = $newURL_temp.PHP_EOL;
        file_put_contents('URLs/urls.txt', $newURL, FILE_APPEND | LOCK_EX);
      }
       ?>

<div style="border: 1px solid black;" class="col-md-12 text-center">
  <form action="index.php" method="POST">

<?php

  $urls = explode('\n', file_get_contents('URLs/urls.txt'));
  $url =  preg_replace('/^https:\/\/|(www\.)?|^http:\/\/|(www\.)?/', '', $urls);//PREG_REPLACE FUNTION ONLY WORKS WITH FIRST CHECKBOX

    for($u = 0; $u < COUNT($url); $u++) { ?>
        <div class="col-md-12"><!--CHECKBOX -->
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="url" value="<?php echo $url[$u]; ?>" id="<?php echo $url[$u]; ?>">
            <label class="form-check-label" for="<?php echo $url[$u]; ?>">
              <?php
                echo  $url[$u];
              ?>
            </label>
          </div>
        </div>
<?php  } ?>

  </form>
</div>
