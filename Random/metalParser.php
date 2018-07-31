<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$metalCabinetSource = file_get_contents('metalSource.txt');
if(preg_match_all('/<div class="nailthumb">([\s\S]*?)<img/', $metalCabinetSource, $metal_cabinet_hrefs)) {
  foreach($metal_cabinet_hrefs[1] as $metal_cabinet_href) {
    if(preg_match('/<a href="([\s\S]*?)">/', $metal_cabinet_href, $metal_hrefs)) {
      $href[] = $metal_hrefs[1];
    }
  }
}

$ch3 = curl_init();
for ($m = 0; $m < COUNT($href); $m++) {
  ini_set('memory_limit', '1024M');
  ini_set("max_execution_time", 300);
  curl_setopt($ch3, CURLOPT_URL, "https://www.metalcabinetstore.com/shopping/$href[$m]");
  curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, 0);
  $result3 = curl_exec($ch3);

  if(preg_match('/<div id="productexdright">([\s\S]*?)<\/div><a class="left.*>/', $result3, $metal_cabinet_item_boxs)) {
    if(preg_match_all('/<td[^>]*>([\s\S]*?)<\/td>/', $metal_cabinet_item_boxs[1], $metal_cabinet_items)) {
      foreach($metal_cabinet_items[1] as $metal_cabinet_item) {
        if(preg_match('/<span class="productdesc">([\s\S]*?)<\/br>/', $metal_cabinet_item, $metal_cabi_models)) {
          $metal_models[] = trim(preg_replace('/<\/br>(.*)|Model/', '', $metal_cabi_models[1]));
        }
        if(preg_match("/<span class='price'.*>([\s\S]*?)<\/span>/", $metal_cabinet_item, $metal_cabi_prices)) {
          $metal_prices[] = $metal_cabi_prices[1];
        }
        //echo $metal_cabinet_item;
      }
    }
  }
}
curl_close($ch3);


?>
