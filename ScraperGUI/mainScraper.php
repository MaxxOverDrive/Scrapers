<?php

  //LOOP THROUGH LIST OF MANUFACTURE NAME VARIABLES
  $manufactNameTemp1 = "Little Giant";
  $manufactName1 = str_replace(' ', '%20', $manufactNameTemp1);
  $manufactNameTemp2 = "Valley Craft";
  $manufactName2 = str_replace(' ', '%20', $manufactNameTemp2);
  $manufactArray = array($manufactName1, $manufactName2);
  $t = 0;

  for($m = 1; $m <= COUNT($manufactArray); $m++) {
      //LOOP THROUGH COMPETITOR URLS BY MANUFACTURER
      include('functions.php');

    $t++;
  }//MANUFACTUR LOOP

    curl_close($ch);
    echo "There are " . $t . " Titties on the Farm!";

    /*for($s = 0; $s <= COUNT($modelNumber); $s++) {
      ini_set('max_execution_time', 300);

      $html->load_file($manufactName.$a.'CompetitorScrape.html');
      $modelSearch = $html->find("div.catlogWrap div div.smallBoxBg span");
      //$model = $modelSearch[0]->plaintext;
      /*$partPrice = $html->find("");
      $price = $partPrice[0]->plaintext;
      foreach($modelSearch as $model) {
        echo $model[$s]->plaintext;
      }
    }



  //Search for Model Number and Prices
  $bmhEquipmentModel = $html->find("div.main ul li a.cbp-vm-title h3.cbp-vm-title");
  $bmhEquipmentPrice = $html->find("div.main ul li a.cbp-vm-title h3.cbp-vm-price");

  $custommhsModel = $html->find("img");//NEEDS WORK
  $businesssupplysource = $html->find("table.product_list_row tbody tr.google_impression_object td span");

  $globalIndustrialNumResults = $html->find("div#search_body div#leftnav div#searchnav span");
  $globalIndustrialModel = $html->find("div.grid ul.prod li div.info p.title a");
  $globalIndustrialPrice = $html->find("div.grid ul.prod li div.pricing div.prices p.price");

  $northernToolModel = $html->find("div#result-set div.prod-listing img");
*/
?>
