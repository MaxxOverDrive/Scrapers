<?php

  function curl_page() {
    global $scrape_url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $scrape_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($ch);
    return $result;

    //CODE BELOW WORKS BUT CURRENTLY LOOKS FLASHIER DISPLAYING ENTIRE WEB PAGE
    /*
    if(preg_match_all('/<body.*>([\s\S]*)/', $result, $web_pages)) {
      foreach($web_pages[1] as $web_page) {
        return $web_page;
      }
    }
    */
    curl_close($ch);
  }

?>
