<?php

$ch2 = curl_init();

for($si = 1; $si <= 51; $si++) {
  curl_setopt($ch2, CURLOPT_URL, "https://www.sodyinc.com/index.php?main_page=advanced_search_result&search_in_description=1&keyword=Little%20Giant&inc_subcat=0&sort=20a&page=.$si");
  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);

  $result2 = curl_exec($ch2);

    preg_match_all('/<div class="centerBoxWrapperContents[^>]*>([\s\S]*?)<div id="productsListingBottomNumber"[^>]*>/', $result2, $sodyinc_matches);

    foreach($sodyinc_matches[1] as $sodyinc_match) {
      if(preg_match_all('/(.*)<\/td>/', $sodyinc_match, $sodyinc_item_matches)) {
        foreach($sodyinc_item_matches[1] as $sodyinc_items) {
          if(preg_match('/<div class="listingDescription[^>]*>(.*)<form name="[^>]*>/', $sodyinc_items, $sodyinc_items2)) {
            echo preg_replace('/(.*?)Model:/', '', $sodyinc_items2[1]);
          }
        }
      }
    }

}
curl_close($ch2);

?>
