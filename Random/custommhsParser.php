<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//"https://www.custommhs.com/index.php?route=product/search&keyword=PD-4048-6PH";
$ch = curl_init();

for($c = 1; $c <= 4; $c++) {
  curl_setopt($ch, CURLOPT_URL, "https://www.custommhs.com/index.php?route=product/search&keyword=Little%20Giant&page=$c");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  $result = curl_exec($ch);

    preg_match_all('/<div class="smallBoxBg.*?>([\s\S]*?)<\/div>/', $result, $custommhs_matches);

    foreach($custommhs_matches[1] as $custommhs_match) {
      if(preg_match_all('/<span.*?>([\s\S]*?)<\/span>/', $custommhs_match, $custommhs_items)) {
        foreach($custommhs_items[1] as $custommhs_item) {
          $custommhs_model[] = trim($custommhs_item);
        }
      }
    }
}
  curl_close($ch);


?>
