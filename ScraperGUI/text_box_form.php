
<div id="match_list" class="col-md-12"><!--TABLE SEARCHES -->

    <div class="col-md-3 col-md-offset-3">
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
              <option>List_Items_Match</option>
              <option>All</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12 text-center">
            <button class="btn btn-success" type="submit" name="submit_page_match">Match</button>
          </div>
        </div>

      </form>
    </div>


    <div class="col-md-6">
      <div class="col-md-6">
        <form action="index.php" method="POST">
          <!--CHANGE INPUT TO BINARY OR HEXDECIMAL -->
          <div class="form-group">
            <div class="col-md-12 text-center">
              <h4 for="decode_type">Decode Type</h4>
              <select class="form-control" name="decode_type">
                <option>Decode Type</option>
                <option>Binary</option>
                <option>Hexidecimal</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-center">
              <h4 for="decode_text">Decode String</h4>
              <input class="form-control" type="text" name="decode_text">;
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-center">
              <button class="btn btn-success" type="submit" name="decode_text_submit">Decode</button>
            </div>
          </div>

        </form>
      </div>

      <div class="col-md-6">
        <form action="index.php" method="POST">
          <!--CHANGE INPUT TO BINARY OR HEXDECIMAL -->
          <div class="form-group">
            <div class="col-md-12 text-center">
              <h4 for="encode_type">Encode Type</h4>
              <select class="form-control" name="encode_type">
                <option>Encode Type</option>
                <option>Binary</option>
                <option>Hexidecimal</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-center">
              <h4 for="bin_text">Encode String</h4>
              <input class="form-control" type="text" name="encode_text">;
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-center">
              <button class="btn btn-success" type="submit" name="encode_text_submit">Encode</button>
            </div>
          </div>

        </form>
      </div>

    </div>

</div>

  <div class="row">
    <div class="form-group col-md-12">
      <textarea id="info_display_box" class="form-control" type="textarea" name="displayInfo">
        <?php

          if(isset($_POST['submitURL'])) {
            $scrape_url = $_POST['url'];
            if(empty($scrape_url)) {
              echo "You didn't select any URLs!";
            }
            else {

              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $scrape_url);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

              $web_page = curl_exec($ch);

                if($scrape_url === "https://www.custommhs.com/") {
                  include('custommhsParser.php');
                }

                curl_close($ch);

            }

          }

        ?>

        <?php

              if(isset($_POST['submit_page_match'])) {  //MATCHES
                $page_match = $_POST['page_match'];
                if(empty($page_match)) {
                  echo "You didn't select a Match!";
                }
                else {

                  $page = file_get_contents('WebPages/page1.html');

                }

                switch($page_match) {

                  case Tables:
                    preg_match_all('/<table[^>]*>(?:.|\n)*<\/table>/', $page, $matches);

                  break;

                  case Table_Rows:
                    preg_match_all('/<tr[^>]*>(?:.|\n)*<\/tr>/', $page, $matches);

                  break;

                  case Table_Data:
                    preg_match_all('/<td[^>]*>(?:.|\n)*<\/td>/', $page, $matches);

                  break;

                  case Images:
                    preg_match_all('/<img[^>]*>/', $page, $matches);

                  break;

                  case Links:
                    preg_match_all('/<a[^>]*>(?:.|\n)*?<\/a>/', $page, $matches);

                  break;

                  case List_Items_Match:
                    preg_match_all('/<li[^>]*>(.*?)<\/li>/', $page, $matches);

                  break;

                  default:
                      echo "Please Choose a match!";

                }
                //echo($matches[0][0]." <br> ".$matches[0][1])."\n";


              } //MATCHES

          ?>

          <?php
          /*
            if(isset($_POST['decode_text_submit']) && !empty($_POST['decode_text'])) {

              if($_POST['decode_type'] == "Binary") {
                //ONLY WORKS WITH 8 CHARACTERS OR LESS
                $bin_text = unpack('H*', $_POST['decode_text']);
                $result = base_convert($bin_text[1], 16, 2);
                $bin_decode_string = pack('H*', base_convert(base_convert($bin_text[1], 16, 2), 2, 16));
                echo $result;
              }
              elseif($_POST['decode_type'] == "Hexidecimal") {
                $hex_text = $_POST['decode_text'];
                $result = bin2hex($hex_text);
                $hex_decode_string = pack("H*",bin2hex($hex_text));
                echo $result;
              }
              else {
                echo "Please select a encode type";
              }

            }
            */
          ?>

          <?php
            if(isset($_POST['encode_text_submit']) && !empty($_POST['encode_text'])) {

              if($_POST['encode_type'] == "Binary") {
                //ONLY WORKS WITH 8 CHARACTERS OR LESS
                $bin_text = unpack('H*', $_POST['encode_text']);
                $result = base_convert($bin_text[1], 16, 2);
                $bin_encode_string = pack('H*', base_convert(base_convert($bin_text[1], 16, 2), 2, 16));
                echo $result;
              }
              elseif($_POST['encode_type'] == "Hexidecimal") {
                $hex_text = $_POST['encoder_text'];
                $result = bin2hex($hex_text);
                $hex_encode_string = pack("H*",bin2hex($hex_text));
                echo $result;
              }
              else {
                echo "Please select a encode type";
              }

            }

          ?>

      </textarea><!-- DISPLAY INFO RESULTS -->
    </div>
  </div>
