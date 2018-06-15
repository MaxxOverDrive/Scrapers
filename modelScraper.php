<?php
  include('db_connModels.php');

  $modelNumVar = $GLOBALS['modelNumResult'];

  while($modelNumRow = mysqli_fetch_assoc($modelNumVar)) {
    //LOOP THROUGH COMPETITOR URLS BY MODEL NUMBER
    $url1 = "https://www.custommhs.com/index.php?route=product/search&keyword=.$modelNumRow[$m]";
    $url2 = "http://www.sodyinc.com/index.php?main_page=advanced_search_result&search_in_description=1&keyword=.$modelNumRow[$m]";
    $url3 = "https://store.interstateproducts.com/search.php?search_query=.$modelNumRow[$m].&section=product";
    $url4 = "http://www.wrhardware.com/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&q=.$modelNumRow[$m].&dispatch=products.search";
    $urlArray = array($url1, $url2, $url3, $url4);

    $ch = curl_init();

    for($u = 0; $u <= COUNT($urlArray); $u++) {
      curl_setopt($ch, CURLOPT_URL, $urlArray[$u]);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      $result = curl_exec($ch);

      preg_match('/(http|ftp|https):\/\/([\w_-]+(?:\.[\w_-]+))?/', $urlArray[$u], $fileName);

      file_put_contents($fileName[2].'Scrape.html', $result, FILE_APPEND | LOCK_EX);
    }
    curl_close($ch);
  }

    echo "There are " . COUNT($modelNum) . " Titties on the Farm!";

    mysqli_close($conn);
?>
