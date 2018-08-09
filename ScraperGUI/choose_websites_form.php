<<<<<<< HEAD
<div id="new_url_form" class="col-md-12 text-center">
  <form action="index.php" method="POST">
    <div class="form-group">
        <h4 for="newURL">Enter New Website</h4>
        <input class="form-control" type="text" name="newURL" id="newURL"><!-- FIGUR OUT NAME, VALUE & ID -->
    </div>
    <div style="margin-top: -3%;" class="form-group">
        <button class="btn btn-secondary" type="submit" name="submitNewURL">New URL</button>
    </div>
  </form>
</div>

=======

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
>>>>>>> 0fb77eb30d35f4bc211e001534b43b474fdbdb5c
    <?php
      if(isset($_POST['submitNewURL'])) {
        $newURL_temp = $_POST['newURL'];
        $newURL = $newURL_temp.PHP_EOL;
        file_put_contents('URLs/urls.html', $newURL, FILE_APPEND | LOCK_EX);
      }
       ?>
<<<<<<< HEAD

<div class="col-md-12">
=======
<div style="border: 1px solid black;" class="col-md-12 text-center">
>>>>>>> 0fb77eb30d35f4bc211e001534b43b474fdbdb5c
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
<<<<<<< HEAD

    ?><div style="border: 1px solid black;" ><?php
=======
>>>>>>> 0fb77eb30d35f4bc211e001534b43b474fdbdb5c
        for($u = 0; $u < COUNT($url_array); $u++) { ?>
            <div class="col-md-12"><!--CHECKBOX -->
                <input class="form-check-input" type="checkbox" name="url" value="<?php echo $url_array[$u]; ?>" id="<?php echo $url_array[$u]; ?>">
                <label class="form-check-label" for="<?php echo $url_array[$u]; ?>">
                  <?php
                    echo preg_replace('/(.*)www.|\/(.*)/', '', $url_array[$u]);
                  ?>
                </label>
            </div>
    <?php } ?>
<<<<<<< HEAD
      </div>


          <!--LIST OF THINGS TO MATCH -->
          <div style="margin-top: 5%;" class="form-group text-center">
              <h4 for="page_match">Match Contents</h4>
              <select class="form-control" name="page_match">
                <option>Select Match</option>
                <option name="tables">Tables</option>
                <option>Table_Rows</option>
                <option>Table_Data</option>
                <option name="divs">Dividers</option>
                <option name="images">Images</option>
                <option>Links</option>
                <option>List_Items_Match</option>
                <option>All</option>
              </select>
          </div>
          <div class="form-group text-center">
              <button class="btn btn-warning" type="submit" name="submit_page_match">Match</button>
          </div>


          <div class="form-group">
            <input class="form-control" type="text" name="user_search">
          </div>
          <div class="form-group text-center">
            <button class="btn btn-success" type="submit" name="submit_user_search">Search</button>
          </div>


=======
          <button class="btn btn-success" type="submit" name="submitURL">Search</button>
>>>>>>> 0fb77eb30d35f4bc211e001534b43b474fdbdb5c
  </form>
</div>
