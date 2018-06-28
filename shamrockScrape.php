<?php

$modelNum = "8041H";

$url = "https://www.shamrocksupply.com/searchPH.action?RFP=SP&keyWord=Lyon%20.$modelNum";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

preg_match_all('/<div[^>]*>(.*?)<\/div>/', $result, $matches);

//preg_replace(<[a|A][^>]*>|)", "");

/*$items = array_values(array_unique($matches[0]));

for($i = 0; $i < COUNT($items); $i++) {
  echo $items[$i];
}*/


//echo $result;

//echo $matches[1];

curl_close($ch);


?>
