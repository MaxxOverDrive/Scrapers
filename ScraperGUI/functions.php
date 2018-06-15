<?php

include("simple_html_dom.php");
$html = new simple_html_dom();

$url1 = "https://www.custommhs.com/index.php?route=product/search&keyword=.$manufactName[$m]";
$url2 = "https://www.sodyinc.com/index.php?main_page=advanced_search_result&search_in_description=1&keyword=.$manufactName[$m]";
$urlArray = array($url1, $url2);

$ch = curl_init();

  function competitorScraper1() {
    $pageNum = $html->find('div.pagination ul.pagination');
    for($u = 0; $u <= COUNT($urlArray); $u++) {

      curl_setopt($ch, CURLOPT_URL, $urlArray[$u]);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      $result = curl_exec($ch);

      $headerReplace = preg_replace('/<meta[^>]*>|<link[^>]*>|<[^>]*script/', '', $result);

      file_put_contents(str_replace('%20', '', $manufactNameTemp.$m.'Scrape.html'), $headerReplace);//, FILE_APPEND | LOCK_EX
    }
  }

  /*function competitorScraper2() {

  }*/
?>
