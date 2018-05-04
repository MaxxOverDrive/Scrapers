<?php

include('db_conn_upc.php');

set_time_limit(240);

//Build an Array of UPC's to Loop Through
$upc = "884116165514";

include('~/simple_html_dom.php');

$html = new simple_html_dom();
$html->load_file('http://www.upcitemdb.com/upc/'.$upc);
$product_title = $html->find("div.upcdetail div.r div.cont ol.num li");
$title = $product_title[0]->plaintext;
$productInfo = $html->find("div#info dl.detail-list dd");


//Looping Through upcitemdb.com for Product Data
for($i = 0; $i <= count($productInfo); $i++) {

    //Separtating Each Piece of Data
    ini_set('max_execution_time', 300);
    $upcCheck = str_replace(' ', '', $productInfo[0]->plaintext);
    $eanCheck = str_replace(' ', '', $productInfo[1]->plaintext);
    $asinCheck = $productInfo[2]->plaintext;
    $brandCheck = $productInfo[4]->plaintext;
    $modelNumberCheck = $productInfo[5]->plaintext;
  }

    //Inserting All Data Collected Into Database
    $sqlUPCItemDB = "INSERT INTO Master (productName, upc, ean, asins, brand, modelNum)
                     VALUES('$title', '$upcCheck', '$eanCheck', '$asinCheck', '$brandCheck', '$modelNumberCheck')";

    //Connecting To Each Table Column
    $resultUPCItemDB = mysqli_query($conn, $sqlUPCItemDB);

  //Checking To See If Shit Has Been Entered In The Database. She Says No But She Really Means Yes!
  if(mysqli_affected_rows($resultUPCItemDB) > 0) {
      echo "Shit's Entered Captain!!!";
  }
  else {
      echo "No Titties For You Captain!";
  }

mysqli_close($conn);
?>
