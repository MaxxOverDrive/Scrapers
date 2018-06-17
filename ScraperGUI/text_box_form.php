<?php

$matches = $_POST['matches'];

  $url = "https://www.custommhs.com/";

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  $result = curl_exec($ch);



  curl_close($ch);

?>

<div id="match_list" class="col-md-12">
  <div class="row"><!--TABLE SEARCHES -->
    <div class="col-md-4 col-md-offset-4">

      <form action="index.php" method="POST">

        <!--LIST OF THINGS TO MATCH -->
        <div class="form-group">
          <div class="col-md-12 text-center">
            <h4 for="matches">Match</h4>
            <select class="form-control" name="matches">
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
  </div>
</div>
<?php

  if(isset($_POST['matches'])) {
    switch('matches') {
      case Tables:
        preg_match_all('/<table[^>]*>(?:.|\n)*<\/table>/', $result, $page_matches); ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo htmlspecialchars($page_matches); ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      case Table_Rows:
        preg_match_all('/<tr[^>]*>(?:.|\n)*<\/tr>/', $result, $page_matches); ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo htmlspecialchars($page_matches); ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      case Table_Data:
        preg_match_all('/<td[^>]*>(?:.|\n)*<\/td>/', $result, $page_matches); ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo htmlspecialchars($page_matches); ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      case Images:
        preg_match_all('/<img[^>]*>/', $result, $page_matches);

        foreach($page_matches as $page_match) {
          $img_match[] = $page_match;
        } ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo $img_match; ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      case Links:
        preg_match_all('/<a[^>]*>(?:.|\n)*?<\/a>/', $result, $page_matches); ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo htmlspecialchars($page_matches); ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      case List_Items_match:
        preg_match_all('/<li[^>]*>(.*?)<\/li>/', $result, $page_matches); ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo htmlspecialchars($page_matches); ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      case All:
        preg_match_all('/<body[^>]*>(.*?)<\/body>/', $result, $page_matches); ?>

        <div class="row">
          <div class="form-group col-md-12">
            <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo htmlspecialchars($page_matches); ?></textarea><!-- DISPLAY INFO RESULTS -->
          </div>
        </div>

    <?php  break;

      default:
        $page_matches = $result; ?>

  <?php }
  } ?>

  <div class="row">
    <div class="form-group col-md-12">
      <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php echo $result; ?></textarea><!-- DISPLAY INFO RESULTS -->
    </div>
  </div>
