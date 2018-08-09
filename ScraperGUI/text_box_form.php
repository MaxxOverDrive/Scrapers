
  <div class="row">
    <div id="info_display_box" class="form-group col-md-12">
      <div name="displayInfo">
        <?php
          error_reporting(E_ALL);
          ini_set('display_errors', '1');

          if(isset($_POST["new_db_submit"])) {
            $db_host = $_POST['db_host'];
            $db_username = $_POST['db_username'];
            $db_pass = $_POST['db_pass'];
            $db_name = $_POST['db_name'];
            $connArray = array($db_host, $db_username, $db_pass, $db_name);
            if(!empty($connArray)) {
              $file = fopen("Databases/db_num1.csv","w");
              foreach ($connArray as $connData) {
                fputcsv($file,explode(',',$connData));
              }
              fclose($file);
              $final_result = "<h1 class='finalResults'>Your database information has been saved</h1>";
            }
            else {
            $final_result = "<h1 class='finalResults'>All Form Entries Must Be Filled.</h1>";
            }
          }//END OF ISSET POST NEW DB SUBMIT

          //$scrape_url_array = array();
          if(isset($_POST['submit_user_search'])) {
            //array_push($scrape_url_array, $_POST['url']);
            $scrape_url = $_POST['url'];
            $user_search = $_POST['user_search'];
            if(empty($scrape_url)) {
              $final_result = "<h1 class='finalResults'>You didn't select any URL's!</h1>";
            }
            else {

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $scrape_url.$user_search);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $result = curl_exec($ch);

                if(strpos($scrape_url, "custommhs")) {
                  preg_match_all('/<div class="smallBoxBg.*?>([\s\S]*?)<\/div>/', $result, $custommhs_matches);

                  foreach($custommhs_matches[1] as $custommhs_match) {
                    if(preg_match_all('/<span.*?>([\s\S]*?)<\/span>/', $custommhs_match, $custommhs_items)) {
                      foreach($custommhs_items[1] as $custommhs_item) {
                        echo trim($custommhs_item);
                      }
                    }
                  }
                }
                elseif(strpos($scrape_url, "sodyinc")) {
                  preg_match_all('/<div class="centerBoxWrapperContents[^>]*>([\s\S]*?)<div id="productsListingBottomNumber"[^>]*>/', $result, $sodyinc_matches);

                  foreach($sodyinc_matches[1] as $sodyinc_match) {
                    if(preg_match_all('/(.*)<\/td>/', $sodyinc_match, $sodyinc_item_matches)) {
                      foreach($sodyinc_item_matches[1] as $sodyinc_items) {
                        if(preg_match('/<div class="listingDescription[^>]*>(.*)<form name="[^>]*>/', $sodyinc_items, $sodyinc_items2)) {
                          $final_result = preg_replace('/(.*?)Model:/', '', $sodyinc_items2[1]);
                        }
                      }
                    }
                  }
                }
                elseif(strpos($scrape_url, "globalindustrial")) {
                  echo "SHOW ME YOUR TITTIES";
                }
                curl_close($ch);
            }//END OF ELSE URL IS NOT EMPTY
          }//END OF ISSET POST submitURL

          if(isset($_POST['submit_page_match'])) {  //MATCHES
            $page_match = $_POST['page_match'];
            if(empty($page_match)) {
              $final_result = "<h1 class='finalResults'>You didn't select a Match!</h1>";
            }
            else {
              include('matches.php');
            }//END OF ELSE IS NOT EMPTY
          }//END OF ISSET PAGE MATCHES

            if(isset($_POST['decode_text_submit']) && !empty($_POST['decode_text'])) {
              if($_POST['decode_type'] == "Binary") {
                //ONLY WORKS WITH 8 CHARACTERS OR LESS
                $bin_text = $_POST['decode_text'];
                $final_result = "<h1 class='finalResults'>" . pack('H*', base_convert($bin_text, 2, 16)) . "</h1>";
              }
              elseif($_POST['decode_type'] == "Hexidecimal") {
                $hex_text = $_POST['decode_text'];
                $final_result = "<h1 class='finalResults'>" . hex2bin($hex_text) . "</h1>";

              }
              else {
                echo "Please select a encode type";
              }
            }//END OF ISSET DECODE_TEXT SUBMIT

            if(isset($_POST['encode_text_submit']) && !empty($_POST['encode_text'])) {
              if($_POST['encode_type'] == "Binary") {
                //ONLY WORKS WITH 8 CHARACTERS OR LESS
                $bin_text = unpack('H*', $_POST['encode_text']);
                $final_result = "<h1 class='finalResults'>" . base_convert($bin_text[1], 16, 2) . "</h1>";
              }
              elseif($_POST['encode_type'] == "Hexidecimal") {
                $str = $_POST['encode_text'];
                $final_result = "<h1 class='finalResults'>" . bin2hex($str) . "</h1>";
              }
              else {
                $final_result = "<h1 class='finalResults'>Please select a encode type</h1>";
              }
            }//END OF ISSET ENCODE_TEXT SUBMIT

            if(isset($final_result)) {
              echo $final_result;
            }
          ?>

      </div><!-- DISPLAY INFO RESULTS -->
    </div>
  </div>
