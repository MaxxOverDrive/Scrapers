<?php
  if(isset($_POST['url'])) {

      $url = $_POST['url'];

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      $result = curl_exec($ch);

      curl_close($ch);
  }

?>

<div id="match_list" class="col-md-12">
  <div class="row"><!--TABLE SEARCHES -->
    <div class="col-md-4 col-md-offset-2">
      <form action="index.php" method="POST">

        <!--LIST OF THINGS TO MATCH -->
        <div class="form-group">
          <div class="col-md-12 text-center">
            <h4 for="page_match">Match Contents</h4>
            <select class="form-control" name="page_match">
              <option>Select Match</option>
              <option>Tables</option>
              <option>Table_Rows</option>
              <option>Table_Data</option>
              <option>Images</option>
              <option>Links</option>
              <option>List_Items_match</option>
              <option>All</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12 text-center">
            <button class="btn btn-success" type="submit" name="submitMatch">Match</button>
          </div>
        </div>

      </form>
    </div>


    <div class="col-md-4">
      <form action="index.php" method="POST">
        <!--LIST OF FILE TYPES TO SAVE AS -->
        <div class="form-group">
          <div class="col-md-12 text-center">
            <h4 for="file_type">Save Contents</h4>
            <select class="form-control" name="file_type">
              <option>Select File Type</option>
              <option>TEXT</option>
              <option>HTML</option>
              <option>CSV</option>
              <option>EXCEL</option>
              <option>DOXC</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12 text-center">
            <button class="btn btn-success" type="submit" name="submitFileType">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php

  if(isset($_POST['page_match'])) {
    $page_match = $_POST['page_match'];

    switch($page_match) {

      case Tables:
        preg_match_all('/<table[^>]*>(?:.|\n)*<\/table>/', $result, $page_match);

      break;

      case Table_Rows:
        preg_match_all('/<tr[^>]*>(?:.|\n)*<\/tr>/', $result, $page_match);

      break;

      case Table_Data:
        preg_match_all('/<td[^>]*>(?:.|\n)*<\/td>/', $result, $page_match);

      break;

      case Images:
        preg_match_all('/<img[^>]*>/', $result, $page_match);

      break;

      case Links:
        preg_match_all('/<a[^>]*>(?:.|\n)*?<\/a>/', $result, $page_match);

      break;

      case List_Items_match:
        preg_match_all('/<li[^>]*>(.*?)<\/li>/', $result, $page_match);

      break;

      default:
          preg_match_all('/<body[^>]*>(.*?)<\/body>/', $result, $page_match);

    }
  }

  $num_matches = COUNT($page_match[0]);

  for($i = 0; $i < $num_matches; $i++) {
    $page_match[] = $num_matches[$i];
  }
  ?>

  <div class="row">
    <div class="form-group col-md-12">
      <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo $page_match; ?></textarea><!-- DISPLAY INFO RESULTS -->
    </div>
  </div>
