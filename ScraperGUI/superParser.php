<?php
  $url = "https://www.custommhs.com/index.php?route=product/search&keyword=Little%20Giant";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $result = curl_exec($ch);

  if(preg_match_all('/<div class="smallBoxBg.*?>([\s\S]*?)<div class="clr">/', $result, $web_pages)) {
    foreach($web_pages[1] as $web_page) {
      if(preg_match('/<span[^>]*>([\s\S]*?)<\/span>/', $web_page, $matches)) {
        echo $matches[1] . "<br>";
      }
      //echo $web_page;
    }
  }
/*
  if(preg_match_all('/<div class="smallBoxBg[^>]*>([\s\S]*?)<div class="smallBoxBottom*>/', $result, $web_pages)) {
    foreach($web_pages[1] as $web_page) {
      echo $web_page;
    }
  }
*/
  curl_close($ch);


?>
