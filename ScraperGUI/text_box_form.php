<?php
  /*if(isset($_POST['url'])) {


  }*/
  /*$url = $_POST['url'];

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'http://www.espn.com/');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  $result = curl_exec($ch);

    preg_match_all('/<img[^>]*>/', $result, $page_match);

  curl_close($ch);*/
?>

<div id="match_list" class="col-md-12">
  <div class="row"><!--TABLE SEARCHES -->
    <div class="col-md-4">
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
        <!--CHANGE INPUT TO BINARY OR HEXDECIMAL -->
        <div class="form-group">
          <div class="col-md-5 text-center">
            <h4 for="bin_text">Decode Type</h4>
            <select class="form-control" name="decode_type">
              <option>Decode Type</option>
              <option>Binary</option>
              <option>Hexidecimal</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-7 text-center">
            <h4 for="bin_text">Decode String</h4>
            <input class="form-control" type="text" name="user_text">;
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12 text-center">
            <button class="btn btn-success" type="submit" name="user_text_submit">Decode</button>
          </div>
        </div>

      </form>
    </div>
    <?php
      if(isset($_POST['user_text_submit']) && !empty($_POST['user_text'])) {

        if($_POST['decode_type'] == "Binary") {
          //ONLY WORKS WITH 8 CHARACTERS OR LESS
          $bin_text = unpack('H*', $_POST['user_text']);
          $result = base_convert($bin_text[1], 16, 2);
          $bin_decode_string = pack('H*', base_convert(base_convert($bin_text[1], 16, 2), 2, 16));
        }
        elseif($_POST['decode_type'] == "Hexidecimal") {
          $hex_text = $_POST['user_text'];
          $result = bin2hex($hex_text);
          $hex_decode_string = pack("H*",bin2hex($hex_text));
        }
        else {
          echo "Please select a decode type";
        }

      }

    ?>




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

  /*if(isset($_POST['page_match'])) {
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
  }*/
  ?>

  <div class="row">
    <div class="form-group col-md-12">
      <textarea id="info_display_box" class="form-control" rows="5" type="textarea" name="displayInfo"><?php print_r($result); ?></textarea><!-- DISPLAY INFO RESULTS -->
    </div>
  </div>
