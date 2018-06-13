<?php

  include("simple_html_dom.php");
  $html = new simple_html_dom();

  //LOOP THROUGH LIST OF MANUFACTURE NAME VARIABLES
  $manufactNameTemp1 = "Little Giant";
  $manufactName1 = str_replace(' ', '%20', $manufactNameTemp1);
  $manufactNameTemp2 = "Valley Craft";
  $manufactName2 = str_replace(' ', '%20', $manufactNameTemp2);
  $manufactArray = array($manufactName1, $manufactName2);
  $t = 0;

  for($m = 1; $m <= COUNT($manufactArray); $m++) {
    //LOOPING THE NUMBER OF PAGES THE COMPETITOR HAS OF THAT MANUFATCURER
    //WORK ON FUNCTION TO FIND NUMBER OF PAGES ON COMPETITOR SITE
    for($p = 1;$p < 5; $p++) {
      //LOOP THROUGH COMPETITOR URLS BY MANUFACTURER
      $url1 = "https://www.custommhs.com/index.php?route=product/search&keyword=.$manufactName[$m].=.$p";
      $url2 = "https://www.sodyinc.com/index.php?main_page=advanced_search_result&search_in_description=1&keyword=.$manufactName[$m].&page=.$p";
      $urlArray = array($url1, $url2);

      $ch = curl_init();

      for($u = 0; $u <= COUNT($urlArray); $u++) {
        curl_setopt($ch, CURLOPT_URL, $urlArray[$u]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($ch);

        $metaReplace = preg_replace('/<meta[^*]>/', '', $result);
        $linkReplace = preg_replace('/<link[^*]>/', '', $metaReplace);

        file_put_contents(str_replace('%20', '', $manufactName.$m.'CompetitorScrape.html'), $linkReplace, FILE_APPEND | LOCK_EX);
      }

    }//PAGE LOOP
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
